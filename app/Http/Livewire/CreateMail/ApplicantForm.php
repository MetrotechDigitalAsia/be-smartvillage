<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\UserData;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ApplicantForm extends Component
{


    protected $listeners = [
        'selectResident' => 'selectResident'
    ];

    public $applicantData;

    public function render()
    {
        return view('livewire.create-mail.applicant-form');
    }

    public function selectResident($id){
        Log::alert($id);
        $user = UserData::find($id);
        $this->applicantData = $user;
    }


}
