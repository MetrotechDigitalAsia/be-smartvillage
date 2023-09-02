<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){

        $data = Article::join('admin', 'admin.id', '=', 'articles.admin_id')->latest('articles.created_at')->get([
            'articles.id',
            'title',
            'slug',
            'description',
            'admin.fullname as author',
            'date',
            'image'
        ]);
        
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'get all blog successfully', 200);

    }

    public function latest(){

        $data = Article::join('admin', 'admin.id', '=', 'articles.admin_id')->latest()->limit(3)->get([
            'articles.id',
            'title',
            'slug',
            'description',
            'admin.fullname as author',
            'date',
            'image'
        ]);
        
        foreach ($data as $item) {
            $item->image = env('APP_URL').'/storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'get latest blog successfully', 200);

    }
}
