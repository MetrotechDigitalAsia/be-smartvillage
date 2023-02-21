<?php

namespace App\Http\Controllers;

use App\Models\ComplaintCategory;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class ComplaintCategoryController extends Controller
{
    
    private $folderName;

    public function __construct(){
        $this->folderName = 'complaintCategory';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = ComplaintCategory::where('complaint_category', 'like', '%'.$param.'%')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName. '.form');
    }
    
    public function show(ComplaintCategory $complaintCategory){
        return view('admin.'.$this->folderName. '.form', compact('complaintCategory'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'complaint_category' => 'required|unique:complaint_categories',
        ]);

        try {
            ComplaintCategory::create($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-pengaduan/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-pengaduan')->with('success', 'create complaint category successfully');

    }

    public function update(Request $request, ComplaintCategory $complaintCategory){
        
        $validated = $request->validate([
            'complaint_category' => 'required|unique:complaint_categories',
        ]);

        try {
            ComplaintCategory::find($complaintCategory->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-pengaduan/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-pengaduan')->with('success', 'update complaint category successfully');

    }

    function destroy(ComplaintCategory $complaintCategory){

        $data = ComplaintCategory::find($complaintCategory->id);

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
