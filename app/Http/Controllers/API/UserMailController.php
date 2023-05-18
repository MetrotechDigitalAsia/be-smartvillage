<?php

namespace App\Http\Controllers\API;

use App\Events\NotificationEvent;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Mail;
use App\Models\UserData;
use App\Models\UserLogin;
use App\Notifications\MailNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

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
            $item->field = json_decode($item->field);
        }

        return ResponseController::create($data, 'success', 'Daftar surat', 200);

    }
    
    public function store(Request $request){

        
        $user = UserLogin::find($request->user_id);
        $mail = Mail::find($request->mail_id);

        if(empty($user) || empty($mail)){
            return ResponseController::create(null, 'error', (empty($user) ? 'user tidak ditemukan' : 'jenis surat tidak tersedia'), 200);
        }

        $sender = UserData::where('NIK',$user->no_nik)->first();
        // $applicant = UserData::find($request->resident_id);

        $field = json_decode($request->field, true);

        switch ($mail->title) {
            case 'Surat Keterangan Kelahiran':

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

                $sender = UserData::where('id',$request->resident_id)->first([
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

            $signature = $request->file('signature')->store('mail-signatures');

            $user->mail()->attach($mail,[
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => 'Pending',
                'signature' => $signature,
                'resident_id' => $request->resident_id,
                'field' => json_encode($field),
            ]);

            $notif = [
                'title' => $mail->title,
                'sender' => $sender->NAMA ?? $sender->name
            ];

            Notification::send(Admin::first(), new MailNotification($notif));
            event(new NotificationEvent('mail'));

        } catch (\Exception $e){
            return ResponseController::create(null, 'error', $e->getMessage(), 200);
        }

        return ResponseController::success('success', 'Surat Berhasil Dikirim', 200);


    }

}
