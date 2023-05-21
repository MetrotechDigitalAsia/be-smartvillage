<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FamilyController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'penduduk.family';
    }
    
    public function index(Request $request){

        // dd(($request->all()));

        if($request->ajax()){

            $data = Family::all();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');

    }
}
