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
    public $rt;
    public $rw;
    public $banjar;

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
            'no_akta_kelahiran as birth_certifcate_number',
            'golongan_darah as blood_type',
            'pendidikan as education'
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
            'no_akta_kelahiran as birth_certifcate_number',
            'golongan_darah as blood_type',
            'pendidikan as education'
        ]);

        $subject_1_father = UserData::where('no_kk', $subject_1->kk)
                            ->where('shdk', 'KEPALA KELUARGA')->first([
                                'id',
                                'nama as name',
                                'no_nik as nik',
                                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age'),
                                'banjar',
                                'pekerjaan as job'
                            ]);

        $subject_1_mother = UserData::where('no_kk', $subject_1->kk)
                            ->where('shdk', 'ISTRI')->first([
                                'id',
                                'nama as name',
                                'no_nik as nik',
                                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age'),
                                'banjar',
                                'pekerjaan as job'
                            ]);

        $subject_2_father = UserData::where('no_kk', $subject_2->kk)
                            ->where('shdk', 'KEPALA KELUARGA')->first([
                                'id',
                                'nama as name',
                                'no_nik as nik',
                                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age'),
                                'banjar',
                                'pekerjaan as job',
                            ]);

        $subject_2_mother = UserData::where('no_kk', $subject_2->kk)
                            ->where('shdk', 'ISTRI')->first([
                                'id',
                                'nama as name',
                                'no_nik as nik',
                                DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age'),
                                'banjar',
                                'pekerjaan as job',
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
            'rt' => 'required',
            'rw' => 'required',
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
            'rt' => $this->rt,
            'rw' => $this->rw,
            'banjar' => $this->banjar,
            'subject_1_father' => $subject_1_father,
            'subject_1_mother' => $subject_1_mother,
            'subject_2_father' => $subject_2_father,
            'subject_2_mother' => $subject_2_mother,
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
