<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailTable extends Component
{

    public $data;
    protected $userDb;
    // protected $listeners = ['refreshMailTable' => 'render'];

    public function mount(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
        $this->data = DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'userDB.id', '=', 'userMail.resident_id')
        ->where('userMail.status', 'Pending')
        ->orderBy('userMail.created_at', 'DESC')
        ->get([
            DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.created_at DESC) as row_index'),
            'userMail.id as id',
            'userMail.mail_number',
            'mails.id as mail_id',
            'mails.title as mail_type',
            'mails.slug as mail_slug',
            'userDB.nama as name',
            'userDB.no_nik as nik',
            'userMail.status as status',
            'userMail.created_at',
        ]);
    }

    public function render()
    {
        return view('livewire.mail-table');
    }

    public function changeStatus($id, $status){

        DB::table('users_mail as userMail')
            ->where('id', $id)
            ->first()
            ->update(['status' => $status]);

        $this->emitSelf('$refresh');

    }

}
