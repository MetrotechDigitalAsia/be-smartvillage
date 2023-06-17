<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use App\Models\UserLogin;
use App\Notifications\SendPushNotification;
use App\Notifications\UserMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

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
        ->join('user_logins as user', function($join){
            $join->join($this->userDb, 'userDB.no_nik', '=', 'user.no_nik')
            ->on('user.id', '=', 'userMail.user_id');
        });
    }

    public function index(){
        return view('admin.'.$this->folderName.'.index');
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
                'user.id as user_id',
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
            $mail = DB::table('users_mail as userMail')
                    ->join('mails', 'mails.id', '=', 'userMail.mail_id')
                    ->where('userMail.id',$id)
                    ->first(['userMail.user_id', 'mails.title']);
            $token = UserLogin::where('id',$mail->user_id)->first('fcm');

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

            Notification::send(UserLogin::find($mail->user_id), new UserMailNotification([
                'title' => $mail->title,
                'description' => $notifMsg
            ]));
            $this->sendMailPushNotification('Notifikasi: Perubahan Status Surat', 'Status surat berubah menjadi '. $msg, $token->fcm);
            
            return redirect()->back()->with('success', $token->fcm);

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
            $token = UserLogin::where('id',$mail->user_id)->first('fcm');

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

            Notification::send(UserLogin::find($mail->user_id), new UserMailNotification([
                'title' => $mail->title,
                'description' => $notifMsg
            ]));
            $this->sendMailPushNotification('Notifikasi: Perubahan Status Surat', 'Status surat berubah menjadi '. $msg, $token->fcm);

            $status = true;

        } catch (\Exception $e) {
            $status = false;
            $msg = $e->getMessage();
        }

        return response()->json([
            'success' => $status,
            'message' => $msg,
            'user' => $token,
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

    public function printMail($id){

        $data = DB::table('users_mail as userMail')
            ->join('mails', 'mails.id', '=', 'userMail.mail_id')
            ->join('user_logins as user', function($join){
                $join->join($this->userDb, 'userDB.NIK', '=', 'user.no_nik');
            })
            ->where('userMail.id', '=', $id)
            ->first([
                'userMail.id',
                'mails.title',
                'mails.slug',
                'userMail.mail_number',
                'userMail.status',
                'userMail.signature as image',
                'userMail.field',
            ]);

        $pdf = Pdf::loadView('mailTemplate.'.$data->slug, compact('data'));
        return $pdf->stream('invoice.pdf');

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
