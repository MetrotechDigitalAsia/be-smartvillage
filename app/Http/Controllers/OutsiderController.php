<?php

namespace App\Http\Controllers;

use App\Models\Outsider;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OutsiderController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'penduduk.outsider';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;

            $data = Outsider::latest()
                    ->when(!is_null($param) && !preg_match('/[0-9]/', $param), function($query) use ($param){
                        $query->where('nama', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($param) && !preg_match('/[a-zA-Z]/', $param), function($query) use ($param){
                        $query->where('no_nik', 'like', '%'.$param.'%');
                    })
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');

    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(Outsider $outsider){
        return view('admin.'.$this->folderName.'.form', compact('outsider'));
    }
}
