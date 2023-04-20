<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\UserData;
use App\Models\UserLogin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserMailController extends Controller
{

    private $userDb;

    public function __construct(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
    }

    public function getMailByUser($userId){

        $data = DB::table('users_mail as mail')
                    ->where('user_id', $userId)
                    ->get();

        foreach($data as $item){
            $item->field = json_decode($item->json_decode);
        }

        return ResponseController::create($data, 'success', 'Daftar surat', 404);

    }
    
    public function store(Request $request){

        
        $user = UserLogin::find($request->user_id);
        $mail = Mail::find($request->mail_id);

        if(empty($user) || empty($mail)){
            return ResponseController::create(null, 'error', (empty($user) ? 'user tidak ditemukan' : 'jenis surat tidak tersedia'), 404);
        }

        $field = json_decode($request->field, true);

        switch ($mail->title) {
            case 'Surat Keterangan Kelahiran':

                $sender = UserData::where('NIK', $user->no_nik)->first();

                $husband = UserData::where('SHDK', 'Kepala Keluarga')
                        ->where('NO_KK', $sender->NO_KK)
                        ->first(['NAMA as name', 'PEKERJAAN as job', 'UMUR as age']);

                $wife = UserData::where('SHDK', 'ISTRI')
                        ->where('NO_KK', $sender->NO_KK)
                        ->first(['NAMA as name', 'PEKERJAAN as job', 'UMUR as age']);

                $field = [
                    ...$field,
                    'NO_KK' => $sender->NO_KK,
                    'address' => $sender->ALAMAT,
                    'husband' => $husband,
                    'wife' => $wife 
                ];
                break;
            
            case 'Surat Keterangan Tempat Usaha':

                $sender = UserData::where('NIK', $user->no_nik)->first([
                    'NAMA as name',
                    'JENIS_KELAMIN as sex',
                    'TEMPAT_LAHIR as birth_place',
                    'TANGGAL_LAHIR as birth_date',
                    'KEWARGANEGARAAN as citizenship',
                    'NIK as nik',
                    'PEKERJAAN as job',
                    'ALAMAT as address',
                    'AGAMA as religion'
                ]);

                $field = [
                    ...$field,
                    'applicant' => $sender
                ];

            default:
            # code...
            break;
        }

        try {

            $user->mail()->attach($mail,[
                'mail_number' => 'SRT/'. rand(1,10). '/' . Carbon::now()->format('Y'), 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => 'Pending',
                'field' => json_encode($field),
            ]);

        } catch (\Exception $e){
            return ResponseController::create(null, 'error', $e->getMessage(), 500);
        }

        return ResponseController::success('success', 'Surat Berhasil Dikirim', 200);


    }

}
