<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComplaintController extends Controller
{
    public function store(Request $request){

        $data['uuid'] = Str::uuid()->toString();
        $data['name'] = $request['name'];
        $data['phone'] = $request['phone'];
        $data['email'] = $request['email'];
        $data['description'] = $request['description'];
        $data['complaint_category_id'] = $request['complaint_category_id'];
        
        try {
            Complaint::create($data);
            return ResponseController::create($data, 'success', 'create data successfully', 200);
        } catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseController::create(null,'error', $message, 400);
        }

    }

    
}
