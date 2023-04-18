<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailDetail extends Component
{

    public $mailId;
    public $userDb;

    protected $listeners = [
        'refreshMailDetail' => '$refresh'
    ];

    public function mount(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
    }

    public function render()
    {
        return view('livewire.mail-detail', [
            'data' => DB::table('users_mail as userMail')
                    ->join('mails', 'mails.id', '=', 'userMail.mail_id')
                    ->join('user_logins as user', function($join){
                        $join->join($this->userDb, 'userDB.NIK', '=', 'user.no_nik')
                        ->on('user.id', '=', 'userMail.user_id');
                    })
                    ->where('userMail.id', $this->mailId)
                    ->join('signatures', 'signatures.user_login_id', '=', 'user.id')
                    ->first([
                        'userMail.id',
                        'userMail.mail_number',
                        'userMail.status',
                        'signatures.image'
                    ])
        ]);
    }
}
