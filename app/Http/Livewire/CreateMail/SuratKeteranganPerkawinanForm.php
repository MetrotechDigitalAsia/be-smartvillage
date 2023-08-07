<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SuratKeteranganPerkawinanForm extends Component
{

    public $subject1;
    public $subject2;
    public $marriage_status;
    public $marriage_to;
    public $marriage_date;
    public $religion;
    public $head_of_family_name;
    public $head_of_family_phone;
    public $head_of_family_email;
    public $number_of_family_members;
    public $postal_code;
    public $banjar;
    public $subject_1_father_name;
    public $subject_1_father_address;
    public $subject_1_father_nik;
    public $subject_1_father_job;
    public $subject_1_mother_name;
    public $subject_1_mother_nik;
    public $subject_1_mother_job;
    public $subject_2_father_name;
    public $subject_2_father_address;
    public $subject_2_father_nik;
    public $subject_2_father_job;
    public $subject_2_mother_name;
    public $subject_2_mother_nik;
    public $subject_2_mother_job;

    protected $listeners = [
        'selectSubject1' => 'setSubject1Data',
        'selectSubject2' => 'setSubject2Data',
        'submitMail' => 'create',
    ];

    public function render()
    {
        return view('livewire.create-mail.surat-keterangan-perkawinan-form');
    }

    public function setSubject1Data($id){
        $this->subject1 = $id;
    }

    public function setSubject2Data($id){
        $this->subject2 = $id;
    }

    public function create(UserData $userData, Mail $mail){

        if(is_null($this->subject1)){
            $this->emit('subject1NotFound');
            return;
        } 

        if(is_null($this->subject2)){
            $this->emit('subject2NotFound');
            return;
        }

        $subject_1 = UserData::whereId($this->subject1)->first([
            'id',
            'nama as name',
            'alamat as address',
            'pekerjaan as job',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'agama as religion',
            'no_nik as nik',
            'no_kk as kk',
            'kewarganegaraan as citizenship',
            'jenis_kelamin as gender',
            'banjar',
            DB::raw("CASE WHEN status_akta_kelahiran = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as birth_certificate"),
            DB::raw("CASE WHEN status_akta_perkawinan = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as marriage_certificate"),
            'no_akta_kelahiran as birth_certificate_number',
            'golongan_darah as blood_type',
            'pendidikan as education',
            'status_perkawinan as marriage_status'
        ]);

        $subject_2 = UserData::whereId($this->subject2)->first([
            'id',
            'nama as name',
            'alamat as address',
            'pekerjaan as job',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'agama as religion',
            'no_nik as nik',
            'no_kk as kk',
            'kewarganegaraan as citizenship',
            'jenis_kelamin as gender',
            'banjar',
            DB::raw("CASE WHEN status_akta_kelahiran = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as birth_certificate"),
            DB::raw("CASE WHEN status_akta_perkawinan = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as marriage_certificate"),
            'no_akta_kelahiran as birth_certificate_number',
            'golongan_darah as blood_type',
            'pendidikan as education',
            'status_perkawinan as marriage_status'
        ]);

        $this->validate([
            'marriage_status' => 'required',
            'marriage_to' => 'required',
            'marriage_date' => 'required',
            'religion' => 'required',
            'head_of_family_name' => 'required',
            'head_of_family_email' => 'required',
            'head_of_family_phone' => 'required',
            'number_of_family_members' => 'required',
            'subject_1_father_name' => 'required',
            'subject_1_father_address' => 'required',
            'subject_1_father_nik' => 'nullable',
            'subject_1_father_job' => 'nullable',
            'subject_1_mother_name' => 'required',
            'subject_1_mother_nik' => 'nullable',
            'subject_1_mother_job' => 'nullable',
            'subject_2_father_name' => 'required',
            'subject_2_father_address' => 'required',
            'subject_2_father_nik' => 'nullable',
            'subject_2_father_job' => 'nullable',
            'subject_2_mother_name' => 'required',
            'subject_2_mother_nik' => 'nullable',
            'subject_2_mother_job' => 'nullable',
            'banjar' => 'required',
        ]);

        $field = json_encode([
            'marriage_status' => $this->marriage_status,
            'marriage_to' => $this->marriage_to,
            'marriage_date' => $this->marriage_date,
            'religion' => $this->religion,
            'head_of_family_name' => $this->head_of_family_name,
            'head_of_family_email' => $this->head_of_family_email,
            'head_of_family_phone' => $this->head_of_family_phone,
            'number_of_family_members' => $this->number_of_family_members,
            'banjar' => $this->banjar,
            'subject_1_father_name' => $this->subject_1_father_name,
            'subject_1_father_address' => $this->subject_1_father_address,
            'subject_1_father_nik' => $this->subject_1_father_nik ?? '',
            'subject_1_father_job' => $this->subject_1_father_job ?? '',
            'subject_1_mother_name' => $this->subject_1_mother_name,
            'subject_1_mother_nik' => $this->subject_1_mother_nik ?? '',
            'subject_1_mother_job' => $this->subject_1_mother_job ?? '',
            'subject_2_father_name' => $this->subject_2_father_name,
            'subject_2_father_address' => $this->subject_2_father_address,
            'subject_2_father_nik' => $this->subject_2_father_nik ?? '',
            'subject_2_father_job' => $this->subject_2_father_job ?? '',
            'subject_2_mother_name' => $this->subject_2_mother_name,
            'subject_2_mother_nik' => $this->subject_2_mother_nik ?? '',
            'subject_2_mother_job' => $this->subject_2_mother_job ?? '',
            'subject_1' => $subject_1,
            'subject_2' => $subject_2,
            'postal_code' => $this->postal_code,
        ]);

        try {

            DB::table('users_mail')->insert([
                'mail_id' => $mail->id,
                'resident_id' => $userData->id,
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
