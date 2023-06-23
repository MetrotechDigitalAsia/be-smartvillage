<?php

namespace App\Http\Controllers;

use App\Models\Saksi;
use App\Models\Signature;
use App\Models\UserLogin;
use App\Notifications\SendPushNotification;
use App\Notifications\UserMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UsersMailController extends Controller
{
    
    protected $folderName;
    protected $userDb;
    protected $DBQuery;

    public function __construct(){
        $this->folderName = 'persuratan.surat';
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
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
        $data = DB::table('users_mail')->where('id', $id)->first(['id', 'mail_number', 'status']);
        $perbekel = Signature::where('position', 'Perbekel')->first();
        return view('admin.'.$this->folderName.'.detail', compact('data', 'perbekel'));
    }

    public function getAllMail(){
        return view('admin.'.$this->folderName.'.all');
    }


    public function getMailByStatus($status){

        if($status == 'finish') $status = 'done';

        if(request()->ajax()){

            $mailStatus = request()->get('status');

            $data = $this->DBQuery
            ->where('userMail.status', $mailStatus)
            ->orderBy('userMail.created_at', 'ASC')
            ->get([
                DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.id) as row_index'),
                'userMail.id as id',
                'mails.id as mail_id',
                'userMail.mail_number',
                'mails.title as mail_type',
                'userDB.nama as name',
                'userDB.no_nik as nik',
                'userMail.status as status',
                'userMail.created_at'
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

            DB::table('users_mail as userMail')->where('id',$id)->update(['status' => $status]);

            // $mailId = DB::table('users_mail')->where('id',$id)->first('mail_id');

            $mail = DB::table('users_mail as userMail')
                    ->join('mails', 'mails.id', '=', 'userMail.mail_id')
                    ->where('userMail.id',$id)
                    ->first(['userMail.user_id', 'mails.title']);

            switch ($status) {
                case 'Done':
                    $msg = 'Surat disetujui';
                    $notifMsg = 'Surat telah disetujui oleh pemerintah desa';
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
            
            DB::table('users_mail as userMail')->where('id',$id)->update(['status' => $status]);

            $mail = DB::table('users_mail as userMail')
                    ->join('mails', 'mails.id', '=', 'userMail.mail_id')
                    ->where('userMail.id',$id)
                    ->first(['userMail.user_id', 'mails.title']);

            switch ($status) {
                case 'Done':
                    $msg = 'Surat disetujui';
                    $notifMsg = 'Surat telah selesai disetujui oleh pemerintah desa';
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

            $status = true;

        } catch (\Exception $e) {
            $status = false;
            $msg = $e->getMessage();
        }

        return response()->json([
            'success' => $status,
            'message' => $msg,
            'user' => $token ?? null,
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
                'userMail.created_at'
            ]);

        $perbekel = Signature::where('position', 'Perbekel')->first();
        $saksi_1 = Saksi::where('position', '!=', 'Kelian Banjar Dinas '. $data->banjar)->first();
        $saksi_2 = Saksi::where('position', '!=', 'Kelian Banjar Dinas '. $data->banjar)
                        ->where('position', '!=', $saksi_1->position)
                        ->first();
        
        $saksi = compact('saksi_1', 'saksi_2');

        $kelian = Signature::where('position', '=','Kelian Banjar')
                    ->where('banjar', $data->banjar)
                    ->first();
        
        $field = json_decode($data->field);

        // $pdf = Pdf::loadView('mailTemplate.f2-01', compact('data', 'perbekel', 'saksi', 'kelian', 'field'));
        // $fileName = Carbon::now()->format('d_m_Y').'_'.str_replace(' ', '_',strtolower($data->name)).'_'.str_replace('-','_',$data->slug).'_mail.pdf';
        // return $pdf->stream($fileName);

        if($data->title != 'Surat Keterangan Kelahiran'){
            $pdf = Pdf::loadView('mailTemplate.'.$data->slug, compact('data', 'perbekel', 'saksi', 'kelian', 'field'));
            $fileName = Carbon::now()->format('d_m_Y').'_'.str_replace(' ', '_',strtolower($data->name)).'_'.str_replace('-','_',$data->slug).'_mail.pdf';
            return $pdf->download($fileName);
        }

        $queryParams = $request->query();
        $queryParams = array_keys($queryParams);

        if(count($queryParams) == 1 && $data->title == 'Surat Keterangan Kelahiran'){
            $pdf = Pdf::loadView('mailTemplate.'.$queryParams[0], compact('data', 'perbekel', 'saksi', 'kelian', 'field'));
            $fileName = Carbon::now()->format('d_m_Y').'_'.str_replace(' ', '_',strtolower($data->name)).'_'.str_replace('-','_',$queryParams[0]).'_mail.pdf';
            return $pdf->download($fileName);
        }

        $mails = [];

        foreach($queryParams as $mail){
            $filename = $mail.'-'.$data->id.'-'.$data->name.'.pdf';
            $mails[] = $filename;
            $pdf = Pdf::loadView('mailTemplate.'.$mail, compact('data', 'perbekel', 'saksi', 'kelian', 'field'))->save($filename, 'public');
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
