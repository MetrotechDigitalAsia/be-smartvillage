<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SuratAktaKematianForm extends Component
{

    public $date_of_death;
    public $cause_of_death;
    public $annotator;
    public $subject;
    public $child_to;

    protected $listeners = [
        'selectDeathSubject' => 'selectSubject',
        'submitMail' => 'create'
    ];

    protected $messages = [
        'cause_of_death.required' => 'penyebab kematian diisi',
        'date_of_death.required' => 'tanggal kematian harus diisi',
        'annotator.required' => 'yang menerangkan harus diisi',
        'child_to.required' => 'anak ke - harus diisi',
    ];

    public function render()
    {
        return view('livewire.create-mail.surat-akta-kematian-form');
    }

    public function selectSubject(UserData $userData){
        $this->subject = $userData;
    }

    public function create(UserData $userData, Mail $mail){

        if(is_null($this->subject)){
            $this->emit('subjectNotFound');
        }

        $this->validate([
            'date_of_death' => 'required',
            'cause_of_death' => 'required',
            'annotator' => 'required',
            'child_to' => 'required',
        ]);

        $field = json_encode([
            'date_of_death' => $this->date_of_death,
            'cause_of_death' => $this->cause_of_death,
            'annotator' => $this->annotator,
            'subject' => $this->subject->id
        ]);
        
        try {

            DB::table('users_mail')->insert([
                'mail_id' => $mail->id,
                'resident_id' => $userData->id ,
                'field' => $field,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            $msg = 'Surat Berhasil Dibuat';
            $status = true;

        } catch (\Exception $e){
            $msg = $e->getMessage();
            $status = false;
        }

        $this->emit('mailSubmitted', compact('msg', 'status'));        

    }
    
}
