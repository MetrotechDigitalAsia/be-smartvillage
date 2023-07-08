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

        $data = Article::with('articleCategory')->when(!empty($param), function($q) use ($param){
                   $q->where('slug', 'LIKE', '%'.$param.'%')->orWhere('title', 'LIKE', '%'.$param.'%'); 
                })
                ->select(['id', 'title', 'slug', 'article_category', 'image', 'time', 'date', 'updated_by', 'created_at', 'updated_at'])
                ->paginate(6);

        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get all blog successfully', 200);
    }

    public function search($param){

        $data = Article::where('slug', 'LIKE', "%$param%")
                        ->orWhere('title', 'LIKE', "%$param%")
                        ->select(['id', 'title', 'slug', 'article_category', 'image', 'time', 'date', 'updated_by', 'created_at', 'updated_at'])
                        ->paginate(6);

        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get search blog successfully', 200);
    }

    public function getDetail(Article $article){
        $article->image = env('APP_URL').'/storage/'. $article->image;
        return ResponseController::create($article, 'success', 'get blog detail successfully', 200);
    }

    public function latest(){
        $data = Article::latest()->limit(3)->get();
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get all blog successfully', 200);
    }

}  
