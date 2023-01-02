<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function __construct($data = [], $status, $message, $code){

        $data = [
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];

        return response()->json($data, $code);
    }

    static function create($data = [], $status, $message, $code){
        $data = [
            'code' => $code,
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
        return response()->json($data, $code);   
    }
}
