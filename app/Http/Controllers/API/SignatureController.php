<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SignatureController extends Controller
{
    public function store(Request $request){
        
        $data = [
            'image' => $request->image,
            'user_login_id' => $request->user_id,
            'uuid' => Str::uuid()->toString()
        ];

        $data['image'] = $request->file('image')->store('signature');

        try {
            Signature::create($data);
        } catch (\Exception $e){
            return ResponseController::create($e->getMessage(), 'error', 'create sign error', 500);
            die;
        }

        return ResponseController::create($data, 'success', 'create sign success', 200);
    }
}
