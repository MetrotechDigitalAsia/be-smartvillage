<?php

namespace App\Http\Controllers\API\Mobile;

use App\Events\NotificationEvent;
use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Mail;
use App\Models\MailFile;
use App\Models\Outsider;
use App\Models\UserData;
use App\Models\UserLogin;
use App\Notifications\MailNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class UserMailController extends Controller
{
    private $userDb;

    public function __construct(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.residents_data as userDB';
    }

    public function getMailByUser($userId){

        $data = DB::table('users_mail as mail')
                    ->join('mails', 'mails.id', '=', 'mail.mail_id')
                    ->join($this->userDb, 'userDB.id', '=', 'mail.resident_id')
                    ->where('user_id', $userId)
                    ->get([
                        'mails.title as title',
                        'mail.status as status',
                        'mail.created_at as send_time',
                        'userDB.nama as applicant_name'
                    ]);

        return ResponseController::create($data, 'success', 'Daftar surat', 200);

    }
    
    public function store(Request $request){

        $user = UserLogin::find($request->user_id);
        $mail = Mail::find($request->mail_id);

        $exist = DB::table('users_mail')
                ->where('user_id', $user->id)
                ->where('mail_id', $mail->id)
                ->whereDate('created_at', Carbon::now())
                ->exists();

        if($exist){
            return ResponseController::create(null, 'error', 'Pengajuan Surat Melebihi Batas', 200);
        }
        

        if(empty($user) || empty($mail)){
            return ResponseController::create(null, 'error', (empty($user) ? 'user tidak ditemukan' : 'jenis surat tidak tersedia'), 200);
        }

        $applicant = UserData::where('id',$request->resident_id)->first(['id','nama','no_kk']);

        $field = json_decode($request->field, true);

        switch ($mail->title) {
            case 'Surat Keterangan Kelahiran':
                $additionalField = $this->createSuratKelahiran($applicant->id);
                $field = [ ...$field, ...$additionalField ];
                break;
            case 'Surat Keterangan Perkawinan':
                $additionalField = $this->createSuratPerkawinan($field['subject_1_id'], $field['subject_2_id']);
                $field = [ ...$field, ...$additionalField ];
                break;
            default:
            break;
        }

        try {

            if($request->signature){
                $signature = $request->file('signature')->store('mailSignature');
            }

            DB::table('users_mail')->insert([
                'user_id' => $user->id,
                'mail_id' => $mail->id,
                'resident_id' => $request->resident_id ?? UserData::where('no_nik', $user->no_nik)->first(['id'])->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'signature' => $signature ?? null,
                'field' => json_encode($field),
            ]);

            if($mail->title == 'Surat Keterangan Kelahiran'){
                if($request->file){
                    $file = $request->file('file')->store('mail-files');
                    $latestMail =DB::table('users_mail')->where('user_id', $user->id)->latest()->first(['id']);
                    MailFile::create([
                        'users_mail_id' => $latestMail->id,
                        'name' => $file
                    ]);
                }
            }

            $notif = [
                'title' => $mail->title,
                'sender' => $applicant->nama ?? UserData::where('no_nik', $user->no_nik)->first(['nama'])->nama
            ];

            Notification::send(Admin::first(), new MailNotification($notif));
            event(new NotificationEvent('mail'));

        } catch (\Exception $e){
            return ResponseController::create(null, 'error', $e->getMessage(), 200);
        }

        return ResponseController::success('success', 'Surat Berhasil Dikirim', 200);

    }

    public function createSuratKelahiran($id){

        $applicant = UserData::find($id);

        $father = UserData::where('shdk', 'KEPALA KELUARGA')
                ->where('no_kk', $applicant->no_kk)
                ->first([
                    'nama as name', 
                    'pekerjaan as job', 
                    'kewarganegaraan as citizenship',
                    'tempat_lahir as birthplace',
                    'tanggal_lahir as birthdate',
                    'no_nik as nik',
                    'alamat as address',
                    DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age')
                ]);

        $mother = UserData::where('SHDK', 'ISTRI')
                ->where('no_kk', $applicant->no_kk)
                ->first([
                    'nama as name', 
                    'pekerjaan as job', 
                    'kewarganegaraan as citizenship',
                    'tempat_lahir as birthplace',
                    'tanggal_lahir as birthdate',
                    'no_nik as nik',
                    'alamat as address',
                    DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age')
                ]);

        $field = [
            'NO_KK' => $applicant->no_kk,
            'address' => $applicant->alamat,
            'subject_father_name' => $father->name,
            'subject_father_nik' => $father->nik,
            'subject_father_citizenship' => $father->citizenship,
            'subject_father_birthplace' => $father->birthplace,
            'subject_father_birthdate' => $father->birthdate,
            'subject_father_job' => $father->job,
            'subject_father_address' => $father->address,
            'subject_father_age' => $father->age,
            'subject_mother_name' => $mother->name,
            'subject_mother_nik' => $mother->nik,
            'subject_mother_citizenship' => $mother->citizenship,
            'subject_mother_birthplace' => $mother->birthplace,
            'subject_mother_birthdate' => $mother->birthdate,
            'subject_mother_age' => $mother->age,
            'subject_mother_job' => $mother->job,
            'subject_mother_address' => $mother->address,
        ];

        return $field;

    }

    public function createSuratPerkawinan($subject1, $subject2){

        $subject_1 = UserData::where('no_nik',$subject1)->first([
            'id',
            'nama as name',
            'alamat as address',
            'pekerjaan as job',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'agama as religion',
            'no_nik as nik',
            'no_kk as kk',
            'kewarganegaraan as citizenship',
            'jenis_kelamin as gender',
            'banjar',
            DB::raw("CASE WHEN status_akta_kelahiran = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as birth_certificate"),
            DB::raw("CASE WHEN status_akta_perkawinan = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as marriage_certificate"),
            'no_akta_kelahiran as birth_certificate_number',
            'golongan_darah as blood_type',
            'pendidikan as education',
            'status_perkawinan as marriage_status'
        ]);

        $subject_2 = UserData::where('no_nik',$subject2)->first([
            'id',
            'nama as name',
            'alamat as address',
            'pekerjaan as job',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'agama as religion',
            'no_nik as nik',
            'no_kk as kk',
            'kewarganegaraan as citizenship',
            'jenis_kelamin as gender',
            'banjar',
            DB::raw("CASE WHEN status_akta_kelahiran = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as birth_certificate"),
            DB::raw("CASE WHEN status_akta_perkawinan = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as marriage_certificate"),
            'no_akta_kelahiran as birth_certificate_number',
            'golongan_darah as blood_type',
            'pendidikan as education',
            'status_perkawinan as marriage_status'
        ]);

        return [ 'subject_1' => $subject_1, 'subject_2' => $subject_2 ];

    }


    public function getMailNotification(UserLogin $userLogin)
    {
        $notifications = DatabaseNotification::where('notifiable_id', $userLogin->id)
                        ->whereNull('read_at')
                        ->latest()
                        ->get([
                            'id',
                            'data',
                            'read_at',
                            'created_at'
                        ]);

        foreach($notifications as $notif){
            $notif->created_at = Carbon::parse($notif->created_at)->setTimezone('Asia/Makassar')->translatedFormat('Y-m-d H:i:s');
            $notif->created_at ='sdff';
        }

        return ResponseController::create($notifications,'success', 'get all notification', 200);
    }


    public function readMailNotification(DatabaseNotification $databaseNotification){

        try {
            $databaseNotification->update(['read_at' => Carbon::now()]);
        } catch (\Exception $e){
            return ResponseController::create($e->getMessage(),'error', 'read notification failed', 200);
        }
        return ResponseController::create(null,'success', 'read notification success', 200);

    }

    public function getAllMail(){

        $data = Mail::whereActive(true)->get();

        foreach ($data as $item) {
            $item->image = 'storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'Daftar surat', 200);
    }
}
