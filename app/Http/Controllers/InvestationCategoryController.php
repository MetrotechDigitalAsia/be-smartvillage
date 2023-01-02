<?php

namespace App\Http\Controllers;

use App\Models\InvestationCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class InvestationCategoryController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'investationCategory';
    }

    public function index(Request $request){

        if($request->ajax()){

            $data = InvestationCategory::all();
            return DataTables::of($data)->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName. '.form');
    }
    
    public function show(InvestationCategory $investationCategory){
        return view('admin.'.$this->folderName. '.form', compact('investationCategory'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'investation_category' => 'required',
        ]);

        try {
            InvestationCategory::create($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-investasi/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-investasi')->with('success', 'create articel category successfully');

    }

    public function update(Request $request, InvestationCategory $investationCategory){
        
        $validated = $request->validate([
            'investation_category' => 'required'
        ]);

        try {
            InvestationCategory::find($investationCategory->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-investasi/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-investasi')->with('success', 'update articel category successfully');

    }

    function destroy(InvestationCategory $investationCategory){

        $data = InvestationCategory::find($investationCategory->id);

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
