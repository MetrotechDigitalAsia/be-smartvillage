<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;                                                                                                    


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
            $join->join($this->userDb, 'userDB.NIK', '=', 'user.no_nik')
            ->on('user.id', '=', 'userMail.user_id');
        });
    }

    public function index(){
        return view('admin.'.$this->folderName.'.index');
    }

    public function show($id){
        $data = DB::table('users_mail')->where('id', $id)->first(['id', 'mail_number']);
        // dd($data);
        return view('admin.'.$this->folderName.'.detail', compact('data'));
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
                'userDB.NAMA as name',
                'userDB.NIK as nik',
                'userMail.status as status',
                'userMail.created_at'
            ]);

            return DataTables::of($data)->addIndexColumn()->make(true);

        }

        return view('admin.'.$this->folderName.'.mail', compact('status'));

    }


    public function destroy($id){

        try {
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
        } catch (\Exception $e) {
            return redirect('/persuratan/surat')->with('error', $e->getMessage());
        }

        switch ($status) {
            case 'Done':
                $msg = 'Surat disetujui';
                break;
            case 'Process':
                $msg = 'Surat diprosess';
                break;
            case 'Rejected':
                $msg = 'Surat ditolak';
                break;
        }
        
        return redirect()->back()->with('success', $msg);

    }

    public function changeStatusFromDetail($id, $status){

        try {
            DB::table('users_mail as userMail')->where('id',$id)->update(['status' => $status]);

            switch ($status) {
                case 'Done':
                    $msg = 'Surat disetujui';
                    break;
                case 'Process':
                    $msg = 'Surat diprosess';
                    break;
                case 'Rejected':
                    $msg = 'Surat ditolak';
                    break;
            }

            $status = true;

        } catch (\Exception $e) {
            $status = false;
            $msg = $e->getMessage();
        }

        return response()->json([
            'success' => $status,
            'message' => $msg
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
            'message' => $msg
        ]);

    }

    public function printMail($id){

        $data = DB::table('users_mail as userMail')
            ->join('mails', 'mails.id', '=', 'userMail.mail_id')
            ->join('user_logins as user', function($join){
                $join->join($this->userDb, 'userDB.NIK', '=', 'user.no_nik');
            })
            ->join('signatures', 'signatures.user_login_id', '=', 'user.id')
            ->where('userMail.id', '=', $id)
            ->first([
                'userMail.id',
                'mails.title',
                'mails.slug',
                'userMail.mail_number',
                'userMail.status',
                'userMail.field',
                'signatures.image'
            ]);

        $pdf = Pdf::loadView('mailTemplate.'.$data->slug, compact('data'));
        return $pdf->stream('invoice.pdf');

    }

}
