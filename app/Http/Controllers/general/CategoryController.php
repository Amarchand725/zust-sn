<?php
namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use DB;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('category-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Category::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("name", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('general.categories._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'category')->first()->label;
        $models = Category::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Category::onlyTrashed()->get();
        return view('general.categories.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('category-create');
        $page_title = Menu::where('menu', 'category')->first()->label;
        return view('general.categories.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Category::getValidationRules());
        $input = $request->all();
        DB::beginTransaction();

        try{

	        Category::create($input);

            DB::commit();
            return redirect()->route('category.index')->with('message', 'Category Added Successfully !');
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
        $page_title = Menu::where('menu', 'category')->first()->label;
        $model = Category::findOrFail($id);
      	return view('general.categories.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('category-edit');
        $page_title = Menu::where('menu', 'category')->first()->label;
        $model = Category::findOrFail($id);
        return view('general.categories.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Category::findOrFail($id);

        $validation = Category::getValidationRules();

	    $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/categories'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
	        $model->fill($input)->save();
            return redirect()->route('category.index')->with('message', 'Category update Successfully !');
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
        $this->authorize('category-delete');
        $model = Category::findOrFail($id)->delete();
        $onlySoftDeleted = Category::onlyTrashed()->count();
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
            $query = Category::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("name", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('general.categories.trash-search', compact('models'));
        }
        $models = Category::onlyTrashed()->paginate($per_page_records);
        return view('general.categories.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Category::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
