<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\UserData;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function getData($no_kk){

        $familyData = Family::where('no_kk', '=', $no_kk)->first();
        $residentFamily = UserData::where('NO_KK', '=', $no_kk)->get([
            'id as resident_id',
            'NAMA as name',
            'NIK as nik',
            'SHDK as status',
            'UMUR as age'
        ]);

        $familyData->family = $residentFamily;

        return ResponseController::create($familyData, 'success', 'get family data success', 200);

    }
}
