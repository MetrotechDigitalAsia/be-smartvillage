<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\ItemBusinessCategory;
use Illuminate\Http\Request;

class ItemBusinessCategoryController extends Controller
{
    public function index(){
        $data = ItemBusinessCategory::latest()->get();
        return ResponseController::create($data, 'success', 'get number success', 200);
    }
}
