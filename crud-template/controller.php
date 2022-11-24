namespace App\Http\Controllers\{menuof};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\{modelName};
use DB;
use Str;

class {ControllerName} extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('{menu_authorize}-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = {modelName}::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                {searchColumns}
            }
            $models = $query->paginate($per_page_records);
            return (string) view('{viewFolderName}._search', compact('models'));
        }

        $page_title = Menu::where('menu', '{menuName}')->first()->label;
        $models = {modelName}::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = {modelName}::onlyTrashed()->get();
        return view('{viewFolderName}.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('{menu_authorize}-create');
        $page_title = Menu::where('menu', '{menuName}')->first()->label;
        return view('{viewFolderName}.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, {modelName}::getValidationRules());
        $input = $request->all();
        DB::beginTransaction();

        try{
            {upload}
	        {modelName}::create($input);

            DB::commit();
            return redirect()->route('{menuName}.index')->with('message', '{modelName} Added Successfully !');
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
        $page_title = Menu::where('menu', '{menuName}')->first()->label;
        $model = {modelName}::findOrFail($id);
      	return view('{viewFolderName}.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('{menu_authorize}-edit');
        $page_title = Menu::where('menu', '{menuName}')->first()->label;
        $model = {modelName}::findOrFail($id);
        return view('{viewFolderName}.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = {modelName}::findOrFail($id);

        $validation = {modelName}::getValidationRules();
        {update_validation}
	    $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/{table_name}'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
	        $model->fill($input)->save();
            return redirect()->route('{menuName}.index')->with('message', '{modelName} update Successfully !');
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
        $this->authorize('{menu_authorize}-delete');
        $model = {modelName}::findOrFail($id)->delete();
        $onlySoftDeleted = {modelName}::onlyTrashed()->count();
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
            $query = {modelName}::where('id', '>', 0);
            if($request['search'] != ""){
                {searchColumns}
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('{viewFolderName}.trash-search', compact('models'));
        }
        $models = {modelName}::onlyTrashed()->paginate($per_page_records);
        return view('{viewFolderName}.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        {modelName}::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
