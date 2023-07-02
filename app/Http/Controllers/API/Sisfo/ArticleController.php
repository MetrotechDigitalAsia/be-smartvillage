<?php

namespace App\Http\Controllers\API\Sisfo;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $param = request()->query('search');

        $data = Article::when(!empty($param), function($q) use ($param){
                   $q->where('slug', 'LIKE', '%'.$param.'%')->orWhere('title', 'LIKE', '%'.$param.'%'); 
                })
                ->paginate(6);

        $data = Article::paginate(6);
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get all blog successfully', 200);
    }

    public function latest(){
        $data = Article::latest()->limit(3)->get();
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get all blog successfully', 200);
    }

}  
