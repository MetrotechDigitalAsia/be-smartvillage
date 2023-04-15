<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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

    public function getAllMail(){
        return view('admin.'.$this->folderName.'.all');
    }

    public function getAllMailFinish(Request $request){

        if($request->ajax()){

            $data = $this->DBQuery
            ->where('userMail.status', 'Done')
            ->orderBy('userMail.created_at', 'ASC')
            ->get([
                DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.id) as row_index'),
                'userMail.id as id',
                'user.id as user_id',
                'mails.id as mail_id',
                'mails.title as mail_type',
                'userDB.NAMA as name',
                'userDB.NIK as nik',
                'userMail.status as status',
                'userMail.created_at'
            ]);

            return DataTables::of($data)->addIndexColumn()->make(true);

        }

        return view('admin.'.$this->folderName.'.finish');
    }

    public function getAllMailProcess(Request $request){

        if($request->ajax()){

            $data = $this->DBQuery
            ->where('userMail.status', 'Process')
            ->orderBy('userMail.created_at', 'ASC')
            ->get([
                DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.id) as row_index'),
                'userMail.id as id',
                'user.id as user_id',
                'mails.id as mail_id',
                'mails.title as mail_type',
                'userDB.NAMA as name',
                'userDB.NIK as nik',
                'userMail.status as status',
                'userMail.created_at'
            ]);

            return DataTables::of($data)->addIndexColumn()->make(true);

        }

        return view('admin.'.$this->folderName.'.process');

    }

    public function getAllMailRejected(Request $request){

        if($request->ajax()){

            $data = $this->DBQuery
            ->where('userMail.status', 'Rejected')
            ->orderBy('userMail.created_at', 'ASC')
            ->get([
                DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.id) as row_index'),
                'userMail.id as id',
                'user.id as user_id',
                'mails.id as mail_id',
                'mails.title as mail_type',
                'userDB.NAMA as name',
                'userDB.NIK as nik',
                'userMail.status as status',
                'userMail.created_at'
            ]);

            return DataTables::of($data)->addIndexColumn()->make(true);

        }

        return view('admin.'.$this->folderName.'.rejected');

    }

    public function changeStatus($id, $status){

        try {
            DB::table('users_mail as userMail')->where('id',$id)->update(['status' => $status]);
        } catch (\Exception $e) {
            return redirect('/persuratan/surat')->with('error', $e->getMessage());
        }
        
        return redirect('/persuratan/surat')->with('success', 'status surat diubah menjadi '. $status);

    }

}
