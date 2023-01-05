<?php

namespace App\Http\Controllers;

use App\Models\UserBusinessItem;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserBusinessItemController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'umkm';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $data = UserBusinessItem::all();
            return DataTables::of($data)->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(UserBusinessItem $userBusinessItem){
        return view('admin.'.$this->folderName.'.form', compact('userBusinessItem'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }
}
