<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\OutsiderApiValidationRequest;
use App\Models\Outsider;

class OutsiderController extends Controller
{
    
    public function store(OutsiderApiValidationRequest $outsiderApiValidationRequest){
        
        try {
            $data = Outsider::create($outsiderApiValidationRequest->all());
            return ResponseController::create($data, 'success', 'create data successfully', 200);
        } catch (\Exception $exception){
            $message = $exception->getMessage();
            return ResponseController::create(null,'error', $message, 200);
        }

    }

}
