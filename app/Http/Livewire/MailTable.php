<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailTable extends Component
{

    public $data;
    protected $userDb;

    public function mount(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
    }

    public function render()
    {
        $this->data = $this->getData();
        return view('livewire.mail-table');
    }

    public function getData(){

        return DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join('user_logins as user', function($join){
            $join->join($this->userDb, 'userDB.NIK', '=', 'user.no_nik')
            ->on('user.id', '=', 'userMail.user_id');
        })
        ->where('userMail.status', 'Pending')
        ->orderBy('userMail.created_at', 'ASC')
        ->get([
            DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.id) as row_index'),
            'userMail.id as id',
            'userMail.mail_number',
            'user.id as user_id',
            'mails.id as mail_id',
            'mails.title as mail_type',
            'userDB.NAMA as name',
            'userDB.NIK as nik',
            'userMail.status as status',
            'userMail.created_at'
        ]);
    }

    public function changeStatus($id, $status){

        DB::table('user_mail as userMail')
            ->where('id', $id)
            ->first()
            ->update(['status' => $status]);

        $this->emitSelf('$refresh');

    }

}
