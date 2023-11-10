<?php

namespace App\Http\Controllers;

use App\Events\MailFinishEvent;
use App\Events\MailProcessEvent;
use App\Models\Admin;
use App\Models\Signature;
use App\Models\UserData;
use App\Models\UserLogin;
use App\Notifications\MailFinishNotification;
use App\Notifications\MailProcessNotification;
use App\Notifications\UserMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UsersMailController extends Controller
{
    
    protected $folderName;
    protected $userDb;
    protected $DBQuery;

    public function __construct(){
        $this->folderName = 'persuratan.surat';
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.residents_data as userDB';
        $this->DBQuery = DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'userDB.id', '=', 'userMail.resident_id');
    }

    public function index(){
        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        
        return view('admin.'.$this->folderName.'.form');
    }

    public function show($id){
        $data = DB::table('users_mail')->where('id', $id)->latest()->first(['id', 'mail_number', 'status']);
        $perbekel = Signature::where('position', 'Perbekel')->first();
        return view('admin.'.$this->folderName.'.detail', compact('data', 'perbekel'));
    }

    public function getAllMail(){
        return view('admin.'.$this->folderName.'.all');
    }


    public function getMailByStatus($status){

        if($status == 'finish') $status = 'done';

        if($status == 'process'){
            $mails = DatabaseNotification::whereNull('read_at')->whereType(MailProcessNotification::class)->get();
            foreach ($mails as $mail) {
                $mail->update(['read_at' => Carbon::now()]);
            }
        }

        if($status == 'done'){
            $mails = DatabaseNotification::whereNull('read_at')->whereType(MailFinishNotification::class)->get();
            foreach ($mails as $mail) {
                $mail->update(['read_at' => Carbon::now()]);
            }
        }

        if(request()->ajax()){

            $mailStatus = request()->get('status');

            $data = $this->DBQuery
            ->where('userMail.status', $status)
            ->orderBy('userMail.updated_at', 'DESC')
            ->get([
                DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.id) as row_index'),
                'userMail.id as id',
                'mails.id as mail_id',
                'userMail.mail_number',
                'mails.title as mail_type',
                'mails.slug as mail_slug',
                'userDB.nama as name',
                'userDB.no_nik as nik',
                'userMail.status as status',
                'userMail.created_at',
                'userMail.updated_at',
                'userDB.alamat as address'
            ]);

            return DataTables::of($data)->addIndexColumn()->make(true);

        }

        return view('admin.'.$this->folderName.'.mail', compact('status'));

    }


    public function destroy($id){

        try {
            $mail =  DB::table('users_mail')->where('id',$id)->first();
            if($mail->signature){
                Storage::delete($mail->signature);
            }
            DB::table('users_mail')->where('id',$id)->delete();
            $message = 'successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return response()->json([
            'message' => $message,
            'route' => "admin"
        ]);

    }
    

    public function changeStatus($id, $status){

        try {

            DB::table('users_mail as userMail')->where('id',$id)->update(['status' => $status, 'updated_at' => Carbon::now()]);

            $mail = DB::table('users_mail as userMail')
                    ->join('mails', 'mails.id', '=', 'userMail.mail_id')
                    ->where('userMail.id',$id)
                    ->first(['userMail.user_id', 'mails.title']);

            switch ($status) {
                case 'Done':
                    $msg = 'Surat disetujui';
                    $notifMsg = 'Silahkan melakukan pengambilan berkas ke kantor desa dengan membawa persyaratan yang diperlukan!';
                    break;
                case 'Process':
                    $msg = 'Surat diproses';
                    $notifMsg = 'Surat sedang diproses oleh pemerintah desa';
                    break;
                case 'Rejected':
                    $msg = 'Surat ditolak';
                    $notifMsg = 'Surat ditolak oleh pemerintah desa';
                    break;
            }

            
            if(!is_null($mail->user_id)){
                $token = UserLogin::where('id',$mail->user_id)->first('fcm');
                Notification::send(UserLogin::find($mail->user_id), new UserMailNotification([
                    'title' => $mail->title,
                    'description' => $notifMsg
                ]));
                $this->sendMailPushNotification('Notifikasi: Perubahan Status Surat', 'Status surat berubah menjadi '. $msg, $token->fcm);
            }
            
            return redirect()->back()->with('success');

        } catch (\Exception $e) {
            return redirect('/persuratan/surat')->with('error', $e->getMessage());
        }


    }

    public function changeStatusFromDetail($id, $status){
        
        
        try {
            
            DB::table('users_mail as userMail')->where('id',$id)->update(['status' => $status, 'updated_at' => Carbon::now()]);

            $admin = Admin::first();
            $mail = DB::table('users_mail as userMail')
            ->join('mails', 'mails.id', '=', 'userMail.mail_id')
            ->where('userMail.id',$id)
            ->first(['userMail.user_id', 'mails.title']);
            
            switch ($status) {
                case 'Done':
                    $msg = 'Surat disetujui';
                    $notifMsg = 'Silahkan melakukan pengambilan berkas ke kantor desa dengan membawa persyaratan yang diperlukan!';
                    Notification::send($admin, new MailFinishNotification($id));
                    event(new MailFinishEvent());
                    break;
                case 'Process':
                    $msg = 'Surat diproses';
                    $notifMsg = 'Silahkan melakukan pengambilan berkas ke kantor desa dengan membawa persyaratan yang diperlukan!';
                    Notification::send($admin, new MailProcessNotification($id));
                    event(new MailProcessEvent());
                    break;
                case 'Rejected':
                    $msg = 'Surat ditolak';
                    $notifMsg = 'Surat ditolak oleh pemerintah desa';
                    break;
            }

            if(!is_null($mail->user_id)){
                $token = UserLogin::where('id',$mail->user_id)->first('fcm');
                Notification::send(UserLogin::find($mail->user_id), new UserMailNotification([
                    'title' => $mail->title,
                    'description' => $notifMsg
                ]));
                $this->sendMailPushNotification('Notifikasi: Perubahan Status Surat', 'Status surat berubah menjadi '. $msg, $token->fcm);
            }

            $status = true;

            
            
        } catch (\Exception $e) {
            $status = false;
            $msg = $e->getMessage();
        }

        return response()->json([
            'success' => $status,
            'message' => $msg,
            'mail' => $mail
        ]);
        
    }

    public function setMailNumber(Request $request,$id){

        try {
            DB::table('users_mail as userMail')->where('id',$id)->update(['mail_number' => $request->mailNumber]);
            $status = true;
            $msg = 'Penomoran Surat Berhasil';
        } catch (\Exception $e) {
            $status = false;
            $msg = $e->getMessage();
        }

        return response()->json([
            'success' => $status,
            'message' => $msg,
        ]);

    }

    public function printMail($id, Request $request){

        switch ($request->type) {
            case 'surat-keterangan-tempat-usaha':
                $data = $this->getSKTU($id);
                break;
            case 'surat-keterangan-kelahiran':
                $data = $this->getSuratKelahiran($id);
                break;
            case 'surat-keterangan-meninggal':
                $data = $this->getSuratKematian($id);
                break;
            case 'surat-keterangan-perkawinan':
                $data = $this->getSuratPerkawinan($id);
                break;
        }

        // dd($data);

        $perbekel = Signature::where('position', 'Perbekel')->first();
        $kelian = Signature::where('position', '=','Kelian Banjar')
                    ->where('banjar', $data->banjar)
                    ->first();

        $data->saksi_1 = Signature::find($data->saksi_1);
        $data->saksi_2 = Signature::find($data->saksi_2);

        $field = json_decode($data->field);

        if($data->title == 'Surat Keterangan Tempat Usaha'){
            $pdf = Pdf::loadView('mailTemplate.'.$data->slug, compact('data', 'perbekel', 'kelian', 'field'));
            $fileName = Carbon::now()->format('d_m_Y').'_'.str_replace(' ', '_',strtolower($data->name)).'_'.str_replace('-','_',$data->slug).'_mail.pdf';
            return $pdf->download($fileName);
        }

        $queryParams = $request->query();
        $queryParams = array_slice(array_keys($queryParams), 1);

        if(count($queryParams) == 1){

            if(str_contains($queryParams[0], 'surat-pernyataan-belum-pernah-kawin')){
                $result = explode('_', $queryParams[0]);
                $status = $result[1];
                $subject = $status == 'suami' ? $field->subject_1 : $field->subject_2;
                $pdf = Pdf::loadView('mailTemplate.'.$result[0], compact('data', 'perbekel', 'kelian', 'field', 'status', 'subject'));
            } else {
                if($queryParams[0] == 'f1-01'){
                    $pdf = Pdf::setPaper('legal', 'landscape')->loadView('mailTemplate.'.$queryParams[0], compact('data', 'perbekel', 'kelian', 'field'));
                } else {
                    $pdf = Pdf::loadView('mailTemplate.'.$queryParams[0], compact('data', 'perbekel', 'kelian', 'field'));
                }
            }

            $fileName = Carbon::now()->format('d_m_Y').'_'.str_replace(' ', '_',strtolower($data->name)).'_'.str_replace('-','_',$queryParams[0]).'_mail.pdf';
            Log::debug($fileName);
            return $pdf->download($fileName);
        }

        $mails = [];

        foreach($queryParams as $mail){
            if($mail == 'type') continue;
            if(str_contains($mail, 'surat-pernyataan-belum-pernah-kawin')){
                $result = explode('_', $mail);
                $status = $result[1];
                $subject = $status == 'suami' ? $field->subject_1 : $field->subject_2;
                $pdf = Pdf::loadView('mailTemplate.'.$result[0], compact('data', 'perbekel', 'kelian', 'field', 'status', 'subject'));
            } else {
                if($mail == 'f1-01'){
                    $pdf = Pdf::setPaper('legal', 'landscape')->loadView('mailTemplate.'.$mail, compact('data', 'perbekel', 'kelian', 'field'));
                } else {
                    $pdf = Pdf::loadView('mailTemplate.'.$mail, compact('data', 'perbekel', 'kelian', 'field'));
                }
            }

            $filename = $mail.'-'.$data->id.'-'.str_replace(' ', '_',strtolower($data->name)).'.pdf';
            Log::debug($filename);
            $mails[] = $filename;
            $pdf->save($filename, 'public');
        }

        $zipFileName = Carbon::now()->format('d_m_Y').'_'.str_replace(' ', '_',strtolower($data->name)).'_'.$data->id.'-mails.zip';
        $zipFilePath = public_path('/storage/'.$zipFileName);
    
        $zip = new ZipArchive();
            if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            foreach ($mails as $pdfFile) {
                $pdfFilePath = public_path('/storage/'.$pdfFile);
                $zip->addFile($pdfFilePath, $pdfFile);
            }
    
            $zip->close();
        }

        return response()->download($zipFilePath)->deleteFileAfterSend(true);

    }

    public function getSKTU($id){
        $data = DB::table('users_mail as userMail')
            ->join('mails', 'mails.id', '=', 'userMail.mail_id')
            ->join($this->userDb, 'userDB.id', '=', 'userMail.resident_id')
            ->where('userMail.id', '=', $id)
            ->first([
                'userMail.id',
                'mails.title',
                'mails.slug',
                'userMail.mail_number',
                'userMail.user_id',
                'userMail.status',
                'userMail.signature as image',
                'userMail.field',
                'userMail.registration_date',
                'userMail.registration_number',
                'userDB.banjar as banjar',
                'userDB.nama as name',
                'userDB.nama as applicant_name',
                'userDB.no_nik as applicant_nik',
                'userDB.no_kk as applicant_no_kk',
                'userDB.kewarganegaraan as applicant_citizenship',
                'userDB.jenis_kelamin as applicant_sex',
                'userDB.tempat_lahir as applicant_birthplace',
                'userDB.tanggal_lahir as applicant_birthdate',
                'userDB.agama as applicant_religion',
                'userDB.pekerjaan as applicant_job',
                'userDB.alamat as applicant_address',
                'userDB.banjar as applicant_banjar',
                'userDB.shdk as applicant_family_status',
                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
                'userMail.created_at',
                'userMail.saksi_1',
                'userMail.saksi_2'
            ]);
        
        return $data;
    }

    public function getSuratKelahiran($id){
        $data = DB::table('users_mail as userMail')
            ->join('mails', 'mails.id', '=', 'userMail.mail_id')
            ->join($this->userDb, 'userDB.id', '=', 'userMail.resident_id')
            ->where('userMail.id', '=', $id)
            ->first([
                'userMail.id',
                'mails.title',
                'mails.slug',
                'userMail.mail_number',
                'userMail.user_id',
                'userMail.status',
                'userMail.signature as image',
                'userMail.field',
                'userMail.registration_date',
                'userMail.registration_number',
                'userDB.banjar as banjar',
                'userDB.nama as name',
                'userDB.nama as applicant_name',
                'userDB.no_nik as applicant_nik',
                'userDB.no_kk as applicant_no_kk',
                'userDB.kewarganegaraan as applicant_citizenship',
                'userDB.jenis_kelamin as applicant_sex',
                'userDB.tempat_lahir as applicant_birthplace',
                'userDB.tanggal_lahir as applicant_birthdate',
                'userDB.agama as applicant_religion',
                'userDB.pekerjaan as applicant_job',
                'userDB.alamat as applicant_address',
                'userDB.banjar as applicant_banjar',
                'userDB.shdk as applicant_family_status',
                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
                'userMail.created_at',
                'userMail.saksi_1',
                'userMail.saksi_2'
            ]);
        
        return $data;
    }

    public function getSuratKematian($id){

        $data = DB::table('users_mail as userMail')
            ->join('mails', 'mails.id', '=', 'userMail.mail_id')
            ->join($this->userDb, 'userDB.id', '=', 'userMail.resident_id')
            ->where('userMail.id', '=', $id)
            ->first([
                'userMail.id',
                'mails.title',
                'mails.slug',
                'userMail.mail_number',
                'userMail.status',
                'userMail.field',
                'userMail.signature',
                'userMail.user_id',
                'userMail.saksi_1',
                'userMail.saksi_2',
                'userMail.registration_date',
                'userMail.registration_number',
                'userDB.banjar as banjar',
                'userDB.nama as name',
                'userDB.nama as applicant_name',
                'userDB.no_nik as applicant_nik',
                'userDB.no_kk as applicant_no_kk',
                'userDB.kewarganegaraan as applicant_citizenship',
                'userDB.alamat as applicant_address',
                'userDB.pekerjaan as applicant_job',
                'userDB.banjar as applicant_banjar',
                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
                'userMail.created_at',
                'userMail.petugas',
            ]);
            
        $json = json_decode($data->field);

        $data->petugas = Signature::find($data->petugas);

        $data->subject = UserData::whereId($json->subject)->first([
            'nama as name',
            'jenis_kelamin as gender',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'kewarganegaraan as citizenship',
            'agama as religion',
            'no_nik as nik',
            'pekerjaan as job',
            'alamat as address'
        ]);
        
        return $data;

    }

    public function getSuratPerkawinan($id){

        $data = DB::table('users_mail as userMail')
            ->join('mails', 'mails.id', '=', 'userMail.mail_id')
            ->join($this->userDb, 'userDB.id', '=', 'userMail.resident_id')
            ->where('userMail.id', '=', $id)
            ->first([
                'userMail.id',
                'mails.title',
                'mails.slug',
                'userMail.mail_number',
                'userMail.status',
                'userMail.field',
                'userMail.signature',
                'userMail.user_id',
                'userMail.saksi_1',
                'userMail.saksi_2',
                'userMail.registration_date',
                'userMail.registration_number',
                'userDB.banjar as banjar',
                'userDB.nama as name',
                'userDB.nama as applicant_name',
                'userDB.no_nik as applicant_nik',
                'userDB.no_kk as applicant_no_kk',
                'userDB.kewarganegaraan as applicant_citizenship',
                'userDB.alamat as applicant_address',
                'userDB.pekerjaan as applicant_job',
                'userDB.banjar as applicant_banjar',
                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
                'userMail.created_at',
                'userMail.petugas',
            ]);

        return $data;

    }

    public function sendMailPushNotification($title, $body, $fcm){

        $url = 'https://fcm.googleapis.com/fcm/send';

        $data = [
            "to" => $fcm,
            "notification" => [
                "title" => $title,
                "body" => $body,  
            ],
        ];

        $data = json_encode($data);

        $headers = [
            'Authorization' => 'key=' . env('FIREBASE_SERVER_KEY'),
            'Content-Type'  => 'application/json',
        ];

        $client = new Client();

        $res = $client->post($url, [
            'headers' => $headers,
            'body' => $data
        ]);

        $statusCode = $res->getStatusCode();
        $responseData = $res->getBody()->getContents();
    
        return $responseData;

    }

}
