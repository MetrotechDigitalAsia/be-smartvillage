<?php

namespace App\Http\Controllers\API\Sisfo;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\UserBusinessItem;

class UserBusinessItemController extends Controller
{
    public function index(){
        $data = UserBusinessItem::where('status', 'approve')->paginate(6);
        return ResponseController::create($data, 'success', 'get all umkm successfully', 200);
    }

    public function search($param){

        $data = UserBusinessItem::where('status', 'approve')
                ->where('item_name', 'LIKE', '%'.$param.'%')
                ->paginate(6);
                
        return ResponseController::create($data, 'success', 'get all umkm successfully', 200);
    }

    public function getByCategory($param){

        $data = UserBusinessItem::where('status', 'approve')
                ->where('item_category_id', $param)
                ->paginate(6);

        return ResponseController::create($data, 'success', 'get all umkm successfully', 200);
    }
}
