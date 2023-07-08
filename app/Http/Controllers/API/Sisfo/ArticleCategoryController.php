<?php

namespace App\Http\Controllers\API\Sisfo;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index(){
        $data = ArticleCategory::all();
        return ResponseController::create($data, 'success', 'get search blog successfully', 200);
    }
}
