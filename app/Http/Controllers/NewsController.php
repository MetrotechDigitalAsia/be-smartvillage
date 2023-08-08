<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'news';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $data = News::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }
}
