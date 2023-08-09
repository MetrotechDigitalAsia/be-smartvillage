<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\Outsider;
use Illuminate\Http\Request;

class OutsiderController extends Controller
{
    
    public function store(Request $request){

        $field = json_decode($request->field, true);
        
        try {
            $data = Outsider::create($field);
            return ResponseController::create($data, 'success', 'create data successfully', 200);
        } catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseController::create(null,'error', $message, 200);
        }

    }

}
