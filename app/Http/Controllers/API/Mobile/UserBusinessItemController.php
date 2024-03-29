<?php

namespace App\Http\Controllers\API\Mobile;

use App\Events\NotificationEvent;
use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApiValidationRequest;
use App\Models\Admin;
use App\Models\UserBusinessItem;
use App\Notifications\UmkmNotification;
use Illuminate\Support\Facades\Notification;

class UserBusinessItemController extends Controller
{
    public function index(){

        $param = request()->query('category_id');

        $data = UserBusinessItem::where('status', 'approve')
                ->when(!empty($param), function($q) use ($param) {
                    $q->where('item_category_id', $param);
                })->paginate(6);

        foreach ($data as $item) {
            $item->item_price = number_format($item->item_price);
            $item->item_image = env('APP_URL').'/storage/' . $item->item_image;
        }

        $response = [
            'page' => $data->currentPage(),
            'result' => $data->items(),
            'total_pages' => ceil($data->total() / $data->perPage()),
            'total_result' => $data->total(),
        ];

        return ResponseController::create($response, 'success', 'get umkm success', 200);

    }

    public function store(StoreApiValidationRequest $request, $userId){

        $data = request()->all();
        $data['item_image'] = request()->file('item_image')->store('userBusinessItem');
        $data['status'] = 'pending';
        $data['user_id'] = $userId;

        $admin = Admin::where('type', '=', 'Umum')->first();


        try {
            UserBusinessItem::create($data);
            event(new NotificationEvent('umkm'));
            $data = UserBusinessItem::latest()->first();
            Notification::send($admin, new UmkmNotification($data));
            return ResponseController::create(request()->get('item_name'), 'success', 'create data successfully', 200);
        } catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseController::create(null,'error', $message, 200);
        }

    }

    public function getByUser($userId){
        $umkm = UserBusinessItem::where('user_id', $userId)->get();
        foreach ($umkm as $item) {
            $item->item_price = number_format($item->item_price);
            $item->item_image = env('APP_URL').'/storage/' . $item->item_image;
        }
        return ResponseController::create($umkm, 'success', 'get umkm success', 200);        
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
