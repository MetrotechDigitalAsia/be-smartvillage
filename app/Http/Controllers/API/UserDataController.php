<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;

class UserDataController extends Controller
{
    
    public function getByAge(){

        $toddler = UserData::where('UMUR', '<=', 5)->count();
        $kids = UserData::where('UMUR', '>', 5)
                ->where('UMUR', '<=', 11)
                ->count();
        $teenager = UserData::where('UMUR', '>=', 12)
                ->where('UMUR', '<=', 25)
                ->count();
        $adult = UserData::where('UMUR', '>=', 26)
                ->where('UMUR', '<=', 45)
                ->count();
        
        $elderly = UserData::where('UMUR', '>', 45)->count();

        $data = [
            'balita' => $toddler,
            'anak_anak' => $kids,
            'remaja' => $teenager,
            'dewasa' => $adult,
            'lansia' => $elderly
        ];

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getByEducation(){

        $data = UserData::select('PENDIDIKAN',DB::raw('COUNT(*) as total'))
                        ->groupBy('PENDIDIKAN')
                        ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getByGender(){

        $data = UserData::select('JENIS_KELAMIN',DB::raw('COUNT(*) as total'))
                        ->groupBy('PENDIJENIS_KELAMINDIKAN')
                        ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getAndGroupBy($type){

        switch($type) {
            case 'gender':
                $type = 'JENIS_KELAMIN';
                break;
            case 'education':
                $type = 'PENDIDIKAN';
                break;
            case 'age':
                $type = 'UMUR';
                break;
            case 'banjar':
                $type = 'BANJAR';
                break;
        }

        $data = UserData::select($type,DB::raw('COUNT(*) as total'))
                ->groupBy($type)
                ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);
    }

    public function getFamily($noKK){
        $data = UserData::where('NO_KK', $noKK)->get([
            'id as resident_id', 
            'NIK as nik', 
            'NAMA as name',
            'ALAMAT as address',
            'SHDK as status'
        ]);
        return ResponseController::create($data, 'success', 'get family data', 200);
    }

}
