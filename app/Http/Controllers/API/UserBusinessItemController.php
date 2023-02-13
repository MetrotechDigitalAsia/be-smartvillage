<?php

namespace App\Http\Controllers\API;

use App\Events\NotificationEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApiValidationRequest;
use App\Models\Admin;
use App\Models\UserBusinessItem;
use App\Notifications\UmkmNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class UserBusinessItemController extends Controller
{

    public function index(Request $request){

        $param = request()->query('category_id');

        if(empty($param)){
            $data = UserBusinessItem::where('status', 'approve')->paginate(10);
        } else {
            $data = UserBusinessItem::where('status', 'approve')->where('item_category_id', $param)->paginate(10);
        }


        foreach ($data as $item) {
            $item->item_image = 'storage/' . $item->item_image;
        }

        $response = [
            'page' => $data->currentPage(),
            'result' => $data->items(),
            'total_pages' => ceil($data->total() / $data->perPage()),
            'total_result' => $data->total(),
        ];

        return ResponseController::create($response, 'success', 'get umkm success', 200);

    }
    
    public function getLatest(){

        $data = UserBusinessItem::where('status', 'approve')->latest()->limit(4)->get();

        foreach ($data as $item) {
            $item->item_image = 'storage/' . $item->item_image;
        }

        return ResponseController::create($data, 'success', 'get umkm success', 200);

    }

    public function filterByCategory(Request $request){

        $data = UserBusinessItem::where('status', 'approve')->where('item_category_id', $request->category_id)->paginate(10);

        foreach ($data as $item) {
            $item->item_image = 'storage/' . $item->item_image;
        }

        $response = [
            'page' => $data->currentPage(),
            'result' => $data->items(),
            'total_pages' => ceil($data->total() / $data->perPage()),
            'total_result' => $data->total(),
        ];

        return ResponseController::create($response, 'success', 'get umkm success', 200);

    }

    public function store(StoreApiValidationRequest $request){

        $data = request()->all();

        $data['uuid'] = Str::uuid()->toString();
        $data['item_image'] = request()->file('item_image')->store('userBusinessItem');
        $data['status'] = 'pending';

        $admin = Admin::all();


        try {
            UserBusinessItem::create($data);
            event(new NotificationEvent($data));
            Notification::send($admin, new UmkmNotification($data));
            return ResponseController::create(request()->all(), 'success', 'create data successfully', 200);
        } catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseController::create(null,'error', $message, 400);
        }

    }

}
