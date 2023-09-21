<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\MailFile;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class SuratKeteranganKelahiranForm extends Component
{

    use WithFileUploads;

    public $file;
    public $child_name;
    public $child_sex;
    public $child_birthplace;
    public $child_birth_date;
    public $child_birth_day;
    public $child_birth_time;
    public $child_birth_of_place;
    public $child_birth_type;
    public $birth_count;
    public $birth_attendant;
    public $baby_weight;
    public $baby_length;
    public $hospital_mail_number;
    public $hospital_mail_number_date;

    protected $listeners = [
        'submitMail' => 'create'
    ];

    protected $messages = [
        'child_name.required' => 'Nama anak harus diisi',
        'child_sex.required' => 'Jenis kelamin anak harus diisi',
        'child_birthplace.required' => 'Tempat lahir anak harus diisi',
        'child_birth_date.required' => 'Tanggal lahir anak harus diisi',
        'child_birth_time.required' => 'Waktu lahir anak harus diisi',
        'child_birth_of_place.required' => 'Tempat di lahirkan harus diisi',
        'birth_count.required' => 'Jumlah kelahiran harus diisi',
        'child_birth_type.required' => 'Jenis kelahiran harus diisi',
        'birth_attendant.required' => 'Penolong kelahiran harus diisi',
        'baby_weight.required' => 'Berat Bayi harus diisi',
        'baby_length.required' => 'Panjang Bayi harus diisi',
        'hospital_mail_number_date.required' => 'Tanggal Nomor Surat Keterangan Dokter/Bidan/Rumah Sakit harus diisi',
        'hospital_mail_number.required' => 'Nomor Surat Keterangan Dokter/Bidan/Rumah Sakit harus diisi',
    ];

    public function render()
    {
        return view('livewire.create-mail.surat-keterangan-kelahiran-form');
    }

    public function create(UserData $userData, Mail $mail){

        $this->validate([
            'child_name' => 'required',
            'child_sex' => 'required',
            'child_birthplace' => 'required',
            'child_birth_date' => 'required',
            'child_birth_time' => 'required',
            'child_birth_of_place' => 'required',
            'child_birth_type' => 'required',
            'birth_count' => 'required',
            'birth_attendant' => 'required',
            'baby_weight' => 'required',
            'baby_length' => 'required',
            'hospital_mail_number_date' => 'required',
            'hospital_mail_number' => 'required',
            'file' => 'required'
        ]);

        $father = UserData::where('shdk', 'KEPALA KELUARGA')
                ->where('no_kk', $userData->no_kk)
                ->first([
                    'nama as name', 
                    'pekerjaan as job', 
                    'kewarganegaraan as citizenship',
                    'tempat_lahir as birthplace',
                    'tanggal_lahir as birthdate',
                    'no_nik as nik',
                    'alamat as address',
                    DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age')
                ]);

        $mother = UserData::where('SHDK', 'ISTRI')
                ->where('no_kk', $userData->no_kk)
                ->first([
                    'nama as name', 
                    'pekerjaan as job', 
                    'kewarganegaraan as citizenship',
                    'tempat_lahir as birthplace',
                    'tanggal_lahir as birthdate',
                    'no_nik as nik',
                    'alamat as address',
                    DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age')
                ]);

        $field = json_encode([
            'child_name' => $this->child_name,
            'child_sex' => $this->child_sex,
            'child_birthplace' => $this->child_birthplace,
            'child_birth_date' => $this->child_birth_date,
            'child_birth_time' => $this->child_birth_time,
            'child_birth_of_place' => $this->child_birth_of_place,
            'child_birth_type' => $this->child_birth_type,
            'birth_count' => $this->birth_count,
            'birth_attendant' => $this->birth_attendant,
            'baby_weight' => $this->baby_weight,
            'baby_length' => $this->baby_length,
            'child_birthday' => Carbon::parse($this->child_birth_date)->translatedFormat('l'),
            'NO_KK' => $userData->no_kk,
            'hospital_mail_number_date' => $this->hospital_mail_number_date,
            'hospital_mail_number' => $this->hospital_mail_number,
            'subject_father_name' => $father->name,
            'subject_father_nik' => $father->nik,
            'subject_father_citizenship' => $father->citizenship,
            'subject_father_birthplace' => $father->birthplace,
            'subject_father_birthdate' => $father->birthdate,
            'subject_father_job' => $father->job,
            'subject_father_address' => $father->address,
            'subject_father_age' => $father->age,
            'subject_mother_name' => $mother->name,
            'subject_mother_nik' => $mother->nik,
            'subject_mother_citizenship' => $mother->citizenship,
            'subject_mother_birthplace' => $mother->birthplace,
            'subject_mother_birthdate' => $mother->birthdate,
            'subject_mother_age' => $mother->age,
            'subject_mother_job' => $mother->job,
            'subject_mother_address' => $mother->address,
        ]);

        $field = json_decode($field,true);

        $field = [
            ...$field,
            'NO_KK' => $userData->no_kk,
            'address' => $userData->alamat,
        ];

        try {

            DB::table('users_mail')->insert([
                'mail_id' => $mail->id,
                'resident_id' => $userData->id ,
                'field' => json_encode($field),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            $mail = DB::table('users_mail')->latest()->first();

            $file = $this->file->store('mail-files');

            MailFile::create([
                'users_mail_id' => $mail->id,
                'name' => $file
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
