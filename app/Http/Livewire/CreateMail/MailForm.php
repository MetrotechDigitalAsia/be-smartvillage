<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Livewire\Component;

class MailForm extends Component
{

    public $mail;

    public $applicant_data;

    protected $listeners = [
        'selectResident' => 'selectResident',
        'submitCreateMailForm' => 'handleSubmit'
    ];

    public function mount(){
        $mailType = request()->query('type');
        $this->mail = Mail::where('slug', $mailType)->first();
    }

    public function render()
    {
        return view('livewire.create-mail.mail-form');
    }

    public function handleSubmit(){

        if(empty($this->applicant_data) || is_null($this->applicant_data)){
            $this->emit('applicantNotFound');
            return;
        }

        switch ($this->mail->title) {
            case 'Surat Keterangan Tempat Usaha':
                $this->emitTo('create-mail.surat-keterangan-usaha-form', 'submitMail', $this->applicant_data->id, $this->mail->id);
                break;
            case 'Surat Keterangan Kelahiran':
                $this->emitTo('create-mail.surat-keterangan-kelahiran-form', 'submitMail', $this->applicant_data->id, $this->mail->id);
                break;
            case 'Surat Keterangan Meninggal':
                $this->emitTo('create-mail.surat-akta-kematian-form', 'submitMail', $this->applicant_data->id, $this->mail->id);
                break;
            default:
                # code...
                break;
        }

    }

    public function selectResident($id){
        $user = UserData::find($id);
        $this->applicant_data = $user ;
    }
}
