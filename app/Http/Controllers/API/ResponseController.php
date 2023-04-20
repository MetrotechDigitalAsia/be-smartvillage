<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    
    static function create($data = [], $status, $message, $code){
        $data = [
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
        return response()->json($data, $code);   
    }

    static function success($status, $message, $code){
        $data = [
            'code' => $code,
            'status' => $status,
            'message' => $message,
        ];
        return response()->json($data, $code);   
    }

}
