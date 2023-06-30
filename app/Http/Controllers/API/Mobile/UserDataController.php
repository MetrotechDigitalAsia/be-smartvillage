<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function getFamily($noKK){
        $data = UserData::where('no_kk', $noKK)->get([
            'id as resident_id', 
            'no_nik as nik', 
            'nama as name',
            'alamat as address',
            'shdk as status'
        ]);
        return ResponseController::create($data, 'success', 'get family data', 200);
    }
}
