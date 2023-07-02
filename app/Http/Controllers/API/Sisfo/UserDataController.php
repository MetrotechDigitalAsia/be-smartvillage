<?php

namespace App\Http\Controllers\API\Sisfo;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDataController extends Controller
{
    public function getByAge(){

        $toddler = UserData::where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '<=', 5)->count();
        $kids = UserData::where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '>', 5)
                ->where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '<=', 11)
                ->count();
        $teenager = UserData::where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '>=', 12)
                ->where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '<=', 25)
                ->count();
        $adult = UserData::where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '>=', 26)
                ->where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '<=', 45)
                ->count();
        
        $elderly = UserData::where(DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir)'), '>', 45)->count();

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

        $data = UserData::select('pendidikan',DB::raw('COUNT(*) as total'))
                        ->groupBy('pendidikan')
                        ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getByGender(){

        $data = UserData::select('jenis_kelamin',DB::raw('COUNT(*) as total'))
                        ->groupBy('jenis_kelamin')
                        ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getAndGroupBy($type){

        switch($type) {
            case 'gender':
                $type = 'jenis_kelamin';
                break;
            case 'education':
                $type = 'pendidikan';
                break;
            case 'banjar':
                $type = 'banjar';
                break;
        }

        $data = UserData::select($type,DB::raw('COUNT(*) as total'))
                ->groupBy($type)
                ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);
    }

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

    public function groupByBanjar(){

        $kauh = UserData::where('banjar', 'kauh')->count();
        $ubud = UserData::where('banjar', 'ubud')->count();
        $tengah = UserData::where('banjar', 'tengah')->count();
        $buangga = UserData::where('banjar', 'buangga')->count();
        
        $resident = compact('kauh', 'ubud', 'tengah', 'buangga');

        return ResponseController::create($resident, 'success', 'get resident by banjar', 200);

    }
}
