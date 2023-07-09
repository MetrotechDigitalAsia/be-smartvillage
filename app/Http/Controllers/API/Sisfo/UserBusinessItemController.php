<?php

namespace App\Http\Controllers\API\Sisfo;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\ItemBusinessCategory;
use App\Models\UserBusinessItem;
use Illuminate\Support\Facades\Request;

class UserBusinessItemController extends Controller
{
    public function index(){

        $category_id = request()->query('category');

        $category = ItemBusinessCategory::whereSlug($category_id)->first();

        $data = UserBusinessItem::where('status', 'approve')
                ->when(!empty($category_id), function($q) use ($category) {
                    $q->where('item_category_id', $category->id);
                })->paginate(6);

        foreach ($data as $item) {
            $item->item_price = number_format($item->item_price);
            $item->item_image = env('APP_URL').'/storage/' . $item->item_image;
        }

        return ResponseController::create($data, 'success', 'get all umkm successfully', 200);
    }

    public function search($param){

        $data = UserBusinessItem::where('item_name', 'LIKE', "%$param%")->paginate(6);

        foreach ($data as $item) {
            $item->item_price = number_format($item->item_price);
            $item->item_image = env('APP_URL').'/storage/' . $item->item_image;
        }

        return ResponseController::create($data, 'success', 'get all umkm successfully', 200);
    }

    public function getDetail(UserBusinessItem $userBusinessItem){
        return ResponseController::create($userBusinessItem, 'success', 'get detail umkm successfully', 200);
    }

    public function getLatest(){

        $data = UserBusinessItem::where('status', 'approve')->latest()->limit(4)->get([
            'id',
            'item_category_id',
            'user_id',
            'user_phone_number',
            'item_name',
            'item_image',
            'item_price',
            'item_description',
            'item_marketplace_link',
            'created_at',
        ]);

        foreach ($data as $item) {
            $item->item_price = number_format($item->item_price);
            $item->item_image = env('APP_URL').'/storage/' . $item->item_image;
        }

        return ResponseController::create($data, 'success', 'get latest umkm success', 200);

    }

}
