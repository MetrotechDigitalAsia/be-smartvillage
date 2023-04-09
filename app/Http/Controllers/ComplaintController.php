<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ComplaintController extends Controller{

    private $folderName;

    public function __construct(){
        $this->folderName = 'informasiDesa.complaint';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $data = Complaint::all();

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', fn ($row) => '<a href="'.url('/admin/complaint/show/'.$row->uuid).'" class="btn btn-icon btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>')
            ->addColumn('delete', fn ($row) => '<a href="javascript:void(0)" data-href="'.url('/admin/complaint/delete/'.$row->uuid).'" onclick="deleteData(this)" class="btn btn-icon btn-danger ">
                                                    <i class="fas fa-trash"></i> 
                                                </a>')
            ->rawColumns(['action', 'delete'])
            ->make(true);

        }

        return view('admin.'.$this->folderName.'.index');
        
    }

    public function show(Complaint $complaint){
        $readonly = true;
        $categories = ComplaintCategory::all();
        return view('admin.'.$this->folderName.'.form', compact('complaint', 'readonly', 'categories'));
    }

    public function destroy(Complaint $complaint){

        $data = Complaint::where('uuid', $complaint->uuid)->first();

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
