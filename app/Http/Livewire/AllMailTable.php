<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllMailTable extends Component
{
    public $mails;
    protected $userDb;

    public function mount(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
    }

    public function render()
    {
        $this->mails = $this->getData();
        return view('livewire.all-mail-table');
    }

    public function getData(){
        return DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'userDB.id', '=', 'userMail.resident_id')
        ->latest('userMail.created_at')
        ->get([
            // DB::raw('ROW_NUMBER() OVER(ORDER BY userMail.id) as row_index'),
            'userMail.id as id',
            'userMail.mail_number',
            'mails.id as mail_id',
            'mails.title as mail_type',
            'userDB.nama as name',
            'userDB.no_nik as nik',
            'userMail.status as status',
            'userMail.created_at'
        ]);
    }
}
