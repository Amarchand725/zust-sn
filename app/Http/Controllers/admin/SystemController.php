<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemSetting;
use DB;
use Auth;

class SystemController extends Controller
{
    public function setting()
    {
        $page_title = 'System Settings';
        return view('admin.system.setting', compact('page_title'));
    }

    public function storeSetting(Request $request)
    {
        DB::beginTransaction();

        try{
            $model = new SystemSetting();

            if($request->logo) {
                $logo = time().'.'.$request->logo->extension();
                $request->logo->move(public_path('company/logos'), $logo);

                $model->logo = $logo;
            }
            if($request->favicon) {
                $favicon = time().'.'.$request->favicon->extension();
                $request->favicon->move(public_path('company/favicons'), $favicon);

                $model->favicon = $favicon;
            }

            $model->company = $request->company;
            $model->email = $request->email;
            $model->phone = $request->phone;
            $model->website = $request->website;
            $model->country = $request->country;
            $model->language = $request->language;
            $model->timezone = $request->timezone;
            $model->currency = $request->currency;
            $model->currency = $request->currency;
            $model->save();

            DB::commit();
            return redirect()->back()->with('message', 'You have saved changes successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error. '.$e->getMessage());
        }
    }
    public function updateSetting(Request $request, $id)
    {
        return $request;
        DB::beginTransaction();

        try{
            $model = SystemSetting::where('id', $id)->first();

            if($request->logo) {
                $logo = time().'.'.$request->logo->extension();
                $request->logo->move(public_path('company/logos'), $logo);

                $model->logo = $logo;
            }
            if($request->favicon) {
                $favicon = time().'.'.$request->favicon->extension();
                $request->favicon->move(public_path('company/favicons'), $favicon);

                $model->favicon = $favicon;
            }

            $model->company = $request->company;
            $model->email = $request->email;
            $model->phone = $request->phone;
            $model->website = $request->website;
            $model->country = $request->country;
            $model->language = $request->language;
            $model->timezone = $request->timezone;
            $model->currency = $request->currency;
            $model->currency = $request->currency;
            $model->save();

            DB::commit();
            return redirect()->back()->with('message', 'You have saved changes successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error. '.$e->getMessage());
        }

    }
}
