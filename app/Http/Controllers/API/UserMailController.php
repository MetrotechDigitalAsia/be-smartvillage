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
                    ->join('mails', 'mails.id', '=', 'mail.mail_id')
                    ->join($this->userDb, 'userDB.id', '=', 'mail.resident_id')
                    ->where('user_id', $userId)
                    // ->get();
                    ->get([
                        'mails.title as title',
                        'mail.status as status',
                        'mail.created_at as send_time',
                        'userDB.NAMA as applicant_name'
                    ]);

        return ResponseController::create($data, 'success', 'Daftar surat', 200);

    }
    
    public function store(Request $request){

        $user = UserLogin::find($request->user_id);
        $mail = Mail::find($request->mail_id);

        if(empty($user) || empty($mail)){
            return ResponseController::create(null, 'error', (empty($user) ? 'user tidak ditemukan' : 'jenis surat tidak tersedia'), 200);
        }

        $applicant = UserData::where('id',$request->resident_id)->first(['NO_KK']);

        $field = json_decode($request->field, true);

        switch ($mail->title) {
            case 'Surat Keterangan Kelahiran':

                $husband = UserData::where('SHDK', 'Kepala Keluarga')
                        ->where('NO_KK', $applicant->NO_KK)
                        ->first([
                            'NAMA as name', 
                            'PEKERJAAN as job', 
                            'UMUR as age', 
                            'KEWARGANEGARAAN as citizenship',
                            'TEMPAT_LAHIR as birthplace',
                            'TANGGAL_LAHIR as birthdate',
                            'NIK as nik'
                        ]);

                $wife = UserData::where('SHDK', 'ISTRI')
                        ->where('NO_KK', $applicant->NO_KK)
                        ->first([
                            'NAMA as name', 
                            'PEKERJAAN as job', 
                            'UMUR as age', 
                            'KEWARGANEGARAAN as citizenship',
                            'TEMPAT_LAHIR as birthplace',
                            'TANGGAL_LAHIR as birthdate',
                            'NIK as nik'
                        ]);

                $field = [
                    ...$field,
                    'NO_KK' => $applicant->NO_KK,
                    'address' => $applicant->ALAMAT,
                    'husband' => $husband,
                    'wife' => $wife 
                ];

                break;

            default:
            break;
        }

        try {

            $user->mail()->attach($mail,[
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'status' => 'Pending',
                'signature' => '-',
                'resident_id' => $request->resident_id,
                'field' => json_encode($field),
            ]);

            $notif = [
                'title' => $mail->title,
                'sender' => $applicant->NAMA ?? $applicant->name
            ];

            Notification::send(Admin::first(), new MailNotification($notif));
            event(new NotificationEvent('mail'));

        } catch (\Exception $e){
            return ResponseController::create(null, 'error', $e->getMessage(), 200);
        }

        return ResponseController::success('success', 'Surat Berhasil Dikirim', 200);


    }

}
