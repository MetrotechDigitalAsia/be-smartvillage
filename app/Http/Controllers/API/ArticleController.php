<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $data = Article::all();
        
        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image) ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get all blog successfully', 200);

    }


    public function latest(){

        $data = Article::latest(3)->get();
        
        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image) ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get all blog successfully', 200);

    }
}
