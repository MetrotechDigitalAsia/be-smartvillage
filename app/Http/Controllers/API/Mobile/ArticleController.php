<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){

        $data = Article::latest()->get();
        
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'get all blog successfully', 200);

    }

    public function latest(){

        $data = Article::latest()->limit(3)->get();
        
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'get latest blog successfully', 200);

    }
}
