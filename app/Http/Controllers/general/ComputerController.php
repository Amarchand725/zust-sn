<?php 
namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Computer;
use DB;
use Str;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('computer-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Computer::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("name", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('general.computers._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'computer')->first()->label;
        $models = Computer::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Computer::onlyTrashed()->get();
        return view('general.computers.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('computer-create');
        $page_title = Menu::where('menu', 'computer')->first()->label;
        return view('general.computers.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Computer::getValidationRules());
        $input = $request->all();
        DB::beginTransaction();

        try{
            
	        Computer::create($input);

            DB::commit();
            return redirect()->route('computer.index')->with('message', 'Computer Added Successfully !');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error. '.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $page_title = Menu::where('menu', 'computer')->first()->label;
        $model = Computer::findOrFail($id);
      	return view('general.computers.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('computer-edit');
        $page_title = Menu::where('menu', 'computer')->first()->label;
        $model = Computer::findOrFail($id);
        return view('general.computers.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Computer::findOrFail($id);

	    $this->validate($request, Computer::getValidationRules());

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $folder_name = Str::plural(str_replace(' ', '_', strtolower(Computer)));
                        $image = date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/assets/'.$folder_name), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
	        $model->fill($input)->save();
            return redirect()->route('computer.index')->with('message', 'Computer update Successfully !');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error. '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->authorize('computer-delete');
        $model = Computer::findOrFail($id)->delete();
        $onlySoftDeleted = Computer::onlyTrashed()->count();
        if($model){
            return response()->json([
                'status' => true,
                'trash_records' => $onlySoftDeleted
            ]);
        }
    }

    public function trashRecords(Request $request)
    {
        $page_title = 'All Trashed Records';
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Computer::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("name", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('general.computers.trash-search', compact('models'));
        }
        $models = Computer::onlyTrashed()->paginate($per_page_records);
        return view('general.computers.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Computer::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
