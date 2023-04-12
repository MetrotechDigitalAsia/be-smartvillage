<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UsersMailController extends Controller
{
    
    protected $folderName;

    public function __construct(){
        $this->folderName = 'persuratan.surat';
    }

    public function index(Request $request){

        $data = Mail::with('userLogins')->get();

        dd($data[0]->userLogins[0]->pivot->status);

        if($request->ajax()){

            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 
        }

        return view('admin.'.$this->folderName.'.index');

    }

}
