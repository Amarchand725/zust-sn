<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use DB;
use App\Models\UserVerify;
use App\Notifications\RegisterUserNotification;
use Illuminate\Support\Str;
use Mail;

class RegisteredUserController extends Controller
{

    public function index(Request $request)
    {
        $this->authorize('user-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = User::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('name', 'like', '%'. $request['search'] .'%');
                $query->orWhere('email', 'like', '%'. $request['search'] .'%');
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->paginate($per_page_records);
            return (string) view('admin.user.search', compact('models'));
        }
        $page_title = 'All users';
        $onlySoftDeleted = User::onlyTrashed()->get();
        $models = User::orderby('id','DESC')->paginate($per_page_records);
        return view('admin.user.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->hasRole('Admin')){
            $this->authorize('user-create');
            $page_title = 'Add New User';
            $roles = Role::orderby('id', 'desc')->where('name', '!=', 'Admin')->where('status', 1)->get();
            return view('admin.user.create', compact('roles', 'page_title'));
        }else{
            return view('auth.register');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            "roles"    => "required|array|min:1",
            "roles.*"  => "required|string|distinct|min:1",
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        DB::beginTransaction();

        $name = $request->first_name.' '.$request->last_name;
        try{
            $user = User::create([
                'name' => $name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole($request->input('roles'));

            if($user){
                $model = new UserProfile();

                if ($request->avatar) {
                    $avatar = time().'.'.$request->avatar->extension();
                    $request->avatar->move(public_path('avatar'), $avatar);

                    $model->avatar = $avatar;
                }

                $model->user_id = $user->id;
                $model->first_name = $request->first_name;
                $model->last_name = $request->first_name;
                $model->phone = $request->phone;
                $model->address = $request->address;
                $model->save();
            }

            event(new Registered($user));


            \LogActivity::addToLog('New User Registered');

            if(Auth::check() && Auth::user()->roles[0]->name=="Admin"){
                DB::commit();
                return redirect()->route('user.index')->with('message', 'You have registered user successfully!');
            }else{
                $admin = User::role('Admin')->first();
                $admin->notify(new RegisterUserNotification($user));

                $token = Str::random(64);

                UserVerify::create([
                    'user_id' => $user->id,
                    'token' => $token
                    ]);

                Mail::send('emails.emailVerificationEmail', ['token' => $token], function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Email Verification Mail');
                });

                DB::commit();
                return redirect()->back()->with('message', 'We have sent you email.');

                /* Auth::login($user);
                return redirect(RouteServiceProvider::HOME); */
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error. '.$e->getMessage());
        }
    }
    public function edit($id)
    {
        $this->authorize('user-edit');
        $page_title = 'Edit User';
        $user = User::find($id);
        $roles = Role::orderby('id', 'desc')->where('name', '!=', 'Admin')->where('status', 1)->get();
        return view('admin.user.edit',compact('roles', 'user', 'page_title'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            "roles"    => "required|array|min:1",
            "roles.*"  => "required|string|distinct|min:1",
            'first_name' => ['required', 'string', 'max:255'],
            'email' => 'unique:users,email,'.$user->id,
        ]);

        if(!empty($request->password)){
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        }
        $name = $request->first_name.' '.$request->last_name;
        $user->name = $name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $user->assignRole($request->input('roles'));

        if($user){
            $model = UserProfile::where('user_id', $user->id)->first();

            if ($request->avatar) {
                $avatar = time().'.'.$request->avatar->extension();
                $request->avatar->move(public_path('avatar'), $avatar);

                $model->avatar = $avatar;
            }

            $model->first_name = $request->first_name;
            $model->last_name = $request->first_name;
            $model->phone = $request->phone;
            $model->address = $request->address;
            $model->save();
        }

        \LogActivity::addToLog('User Updated');

        return redirect()->route('user.index')
                        ->with('message','User updated successfully');
    }
    public function show($id)
    {
        $page_title = 'User Details';
        $model = User::findOrFail($id);
        return view('admin.user.show', compact('page_title','model'));
    }
    public function destroy($id)
    {
        $this->authorize('user-delete');
        $ifdeleted = User::findOrFail($id)->delete();
        $onlySoftDeleted = User::onlyTrashed()->count();
        if($ifdeleted){
            return response()->json([
                'status' => true,
                'trash_records' => $onlySoftDeleted
            ]);
        }
    }

    public function trashAllUser(Request $request)
    {
        $page_title = 'All Trashed Records';
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = User::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where('name', 'like', '%'. $request['search'] .'%');
                $query->orWhere('email', 'like', '%'. $request['search'] .'%');
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('admin.user.trash-search', compact('models'));
        }
        $models = User::onlyTrashed()->paginate($per_page_records);
        return view('admin.user.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        User::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
