<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Signature;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function store(Request $request){
        
        $data = [
            ...$request->all(),
            'id' => 2
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
