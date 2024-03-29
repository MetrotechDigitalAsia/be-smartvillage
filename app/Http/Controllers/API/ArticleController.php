<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){

        $data = Article::paginate(6);
        
        foreach ($data as $item) {
            $item->image = 'storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'get all blog successfully', 200);

    }


    public function latest(){

        $data = Article::latest()->limit(3)->get();
        
        foreach ($data as $item) {
            $item->image = 'storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'get all blog successfully', 200);

    }

    public function getDataByParam($param){

        $data = Article::where('slug', 'LIKE', '%'.$param.'%')->orWhere('title', 'LIKE', '%'.$param.'%')->paginate(6);

        foreach ($data as $item) {
            $item->image = 'storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'get blog successfully', 200);
    }

}
