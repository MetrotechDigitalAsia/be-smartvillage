<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Livewire\Component;

class ApplicantForm extends Component
{


    protected $listeners = [
        'selectResident' => 'selectResident'
    ];

    public $applicantData;
    public $mail;

    public function mount(){
        $mailType = request()->query('type');
        $this->mail = Mail::where('slug', $mailType)->first();
    }

    public function render()
    {
        return view('livewire.create-mail.applicant-form');
    }

    public function selectResident($id){
        $user = UserData::find($id);
        $this->applicantData = $user;
    }


}
