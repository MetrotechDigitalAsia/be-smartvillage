<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\ItemBusinessCategory;
use App\Http\Controllers\Controller;

class ItemBusinessCategoryController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'masterData.itemBusinessCategory';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = ItemBusinessCategory::where('item_category', 'like', '%'. $param .'%')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName. '.form');
    }
    
    public function show(ItemBusinessCategory $itemBusinessCategory){
        return view('admin.'.$this->folderName. '.form', compact('itemBusinessCategory'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'item_category' => 'required|unique:item_business_categories',
        ]);

        try {
            ItemBusinessCategory::create($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-umkm/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-umkm')->with('success', 'create Umkm category successfully');

    }

    public function update(Request $request, ItemBusinessCategory $itemBusinessCategory){
        
        $validated = $request->validate([
            'item_category' => 'required|unique:item_business_categories',
        ]);

        try {
            ItemBusinessCategory::find($itemBusinessCategory->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-umkm/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-umkm')->with('success', 'update Umkm category successfully');

    }

    function destroy(ItemBusinessCategory $itemBusinessCategory){

        $data = ItemBusinessCategory::find($itemBusinessCategory->id);

        try {
            $data->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
            'route' => "admin"
        ]);
    }
}
