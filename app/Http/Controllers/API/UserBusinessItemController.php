<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApiValidationRequest;
use App\Models\UserBusinessItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserBusinessItemController extends Controller
{

    public function index(){

        $data = UserBusinessItem::where('status', 'approve')->paginate(10);

        foreach ($data as $item) {
            $item->item_image = 'storage/' . $item->item_image;
        }

        return ResponseController::create($data, 'success', 'get umkm success', 200);

    }
    
    public function getLatest(){

        $data = UserBusinessItem::where('status', 'approve')->latest()->limit(4)->get();

        return ResponseController::create($data, 'success', 'get umkm success', 200);

    }

    public function filterByCategory(Request $request){

        $data = UserBusinessItem::where('status', 'approve')->where('item_category_id', $request->category_id)->paginate(10);

        foreach ($data as $item) {
            $item->item_image = 'storage/' . $item->item_image;
        }

        return ResponseController::create($data, 'success', 'get umkm success', 200);

    }

    public function store(StoreApiValidationRequest $request){

        

        $data = request();

        $data['uuid'] = Str::uuid()->toString();
        $data['item_image'] = request()->file('item_image')->store('userBusinessItem');
        $data['status'] = 'pending';

        try {
            UserBusinessItem::create(request()->all());
            return ResponseController::create(request()->all(), 'success', 'create data successfully', 200);
        } catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseController::create(null,'error', $message, 400);
        }

    }

}
