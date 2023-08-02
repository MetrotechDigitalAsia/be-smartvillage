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
    public $time_of_death;
    public $place_of_death;
    public $cause_of_death;
    public $annotator;
    public $subject;
    public $child_to;
    public $subject_father_name;
    public $subject_father_citizenship;
    public $subject_mother_name;
    public $subject_mother_citizenship;

    protected $listeners = [
        'selectDeathSubject' => 'selectSubject',
        'submitMail' => 'create'
    ];

    protected $messages = [
        'cause_of_death.required' => 'penyebab kematian diisi',
        'date_of_death.required' => 'tanggal kematian harus diisi',
        'time_of_death.required' => 'waktu kematian harus diisi',
        'place_of_death.required' => 'tempat meninggal harus diisi',
        'annotator.required' => 'yang menerangkan harus diisi',
        'child_to.required' => 'anak ke - harus diisi',
        'subject_father_name.required' => 'nama ayah diisi',
        'subject_father_citizenship.required' => 'kewarganegaraan ayah diisi',
        'subject_mother_name.required' => 'nama ibu diisi',
        'subject_mother_citizenship.required' => 'kewarganegaraan ibu diisi',
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
            'time_of_death' => 'required',
            'cause_of_death' => 'required',
            'place_of_death' => 'required',
            'annotator' => 'required',
            'child_to' => 'required',
            'subject_father_name' => 'required',
            'subject_father_citizenship' => 'required',
            'subject_mother_name' => 'required',
            'subject_mother_citizenship' => 'required',
        ]);

        $field = json_encode([
            'date_of_death' => $this->date_of_death,
            'time_of_death' => $this->time_of_death,
            'cause_of_death' => $this->cause_of_death,
            'place_of_death' => $this->place_of_death,
            'child_to' => $this->child_to,
            'annotator' => $this->annotator,
            'subject' => $this->subject->id,
            'subject_father_name' => $this->subject_father_name,
            'subject_father_citizenship' => $this->subject_father_citizenship,
            'subject_mother_name' => $this->subject_mother_name,
            'subject_mother_citizenship' => $this->subject_mother_citizenship,
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
