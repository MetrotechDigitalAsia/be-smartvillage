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

        $data = Article::with('articleCategory')
                ->join('admin', 'admin.id', '=', 'articles.admin_id')
                ->when(!empty($param), function($q) use ($param){
                   $q->where('slug', 'LIKE', '%'.$param.'%')->orWhere('title', 'LIKE', '%'.$param.'%'); 
                })
                ->select(['articles.id', 'title', 'slug', 'article_category', 'image', 'time', 'date', 'articles.created_at', 'articles.updated_at', 'admin.fullname as updated_by'])
                ->paginate(6);

        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get all blog successfully', 200);
    }

    public function search($param){

        $data = Article::join('admin', 'admin.id', '=', 'articles.admin_id')
                        ->where('slug', 'LIKE', "%$param%")
                        ->orWhere('title', 'LIKE', "%$param%")
                        ->select(['articles.id', 'title', 'slug', 'article_category', 'image', 'time', 'date', 'articles.created_at', 'articles.updated_at', 'admin.fullname as updated_by'])
                        ->paginate(6);

        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get search blog successfully', 200);
    }

    public function getDetail(Article $article){
        $article->author = $article->author;
        $article->image = env('APP_URL').'/storage/'. $article->image;
        return ResponseController::create($article, 'success', 'get blog detail successfully', 200);
    }

    public function latest(){
        $data = Article::join('admin', 'admin.id', '=', 'articles.admin_id')->latest()->limit(3)->get(['articles.id', 'title', 'slug', 'article_category', 'image', 'time', 'date', 'articles.created_at', 'articles.updated_at', 'admin.fullname as updated_by']);
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/'. $item->image;
        }
        return ResponseController::create($data, 'success', 'get all blog successfully', 200);
    }

}  
