<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailDetail extends Component
{

    public $userDb;
    public $mailId;

    protected $listeners = [
        'refreshMailDetail' => '$refresh'
    ];

    public function mount($mailId){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
        $this->mailId = $mailId;
    }

    public function render()
    {
        return view('livewire.mail-detail', [
            'data' => DB::table('users_mail as userMail')
                ->join('mails', 'mails.id', '=', 'userMail.mail_id')
                ->join('user_logins as user', function($join){
                    $join->join($this->userDb, 'userDB.NIK', '=', 'user.no_nik');
                })
                ->where('userMail.id', '=', $this->mailId)
                ->first([
                    'userMail.id',
                    'mails.title',
                    'mails.slug',
                    'userMail.mail_number',
                    'userMail.status',
                    'userMail.field',
                    'userMail.signature'
                ])
        ]);
    }
}
