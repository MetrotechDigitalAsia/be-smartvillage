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
            [ 'value' => 'Balita', 'total' => $toddler],
            [ 'value' => 'Anak Anak', 'total' => $kids],
            [ 'value' => 'Remaja', 'total' => $teenager],
            [ 'value' => 'Dewasa', 'total' => $adult],
            [ 'value' => 'Lansia', 'total' => $elderly],
        ];

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getByEducation(){

        $data = UserData::select('pendidikan as value',DB::raw('COUNT(*) as total'))
                        ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                        ->groupBy('pendidikan')
                        ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getByGender(){

        $data = UserData::select('jenis_kelamin as value',DB::raw('COUNT(*) as total'))
                        ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                        ->groupBy('jenis_kelamin')
                        ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getByJob(){

        $data = UserData::select('pekerjaan as value',DB::raw('COUNT(*) as total'))
                        ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                        ->groupBy('pekerjaan')
                        ->get();

        return ResponseController::create($data, 'success', 'get resident data', 200);

    }

    public function getByBanjar(){

        $data = UserData::select('banjar as value',DB::raw('COUNT(*) as total'))
                        ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                        ->groupBy('banjar')
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

        $data = UserData::select("$type as value",DB::raw('COUNT(*) as total'))
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
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

        $kauh = UserData::where('BANJAR', 'kauh')
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                ->count();
        $ubud = UserData::where('BANJAR', 'ubud')
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                ->count();
        $tengah = UserData::where('BANJAR', 'tengah')
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                ->count();
        $buangga = UserData::where('BANJAR', 'buangga')
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                ->count();
        
        $resident = compact('kauh', 'ubud', 'tengah', 'buangga');

        return ResponseController::create($resident, 'success', 'get resident by banjar', 200);

    }

    public function getBanjarInfo($banjar){

        $kk_count = UserData::select(DB::raw('COUNT(DISTINCT(no_kk)) as count'))
                ->where('banjar', $banjar)
                ->get();

        $resident_count = UserData::where('Banjar', $banjar)
                    ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                    ->count();

        $gender = UserData::select('jenis_kelamin as value', DB::raw('COUNT(jenis_kelamin) as total'))
                ->where('banjar', $banjar)
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                ->groupBy('jenis_kelamin')
                ->get();

        $education = UserData::select('pendidikan as value', DB::raw('COUNT(pendidikan) as total'))
                ->where('banjar', $banjar)
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                ->groupBy('pendidikan')
                ->get();

        $work = UserData::select('pekerjaan as value', DB::raw('COUNT(pekerjaan) as total'))
                ->where('banjar', $banjar)
                ->whereNotIn('status_mutasi', ['Meninggal', 'Pindah Keluar'])
                ->groupBy('pekerjaan')
                ->get();

        return ResponseController::create([
            'kk_count' => $kk_count[0]->count,
            'resident_count' => $resident_count,
            'gender_count' => $gender,
            'education' => $education,
            'work' => $work
        ], 'success', 'get resident by banjar', 200);

    }

}
