<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailForm extends Component
{

    public $mail;

    public $applicant_data;

    public $business_name;
    public $business_address;
    public $npwp;

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

    protected $listeners = [
        'selectResident' => 'selectResident',
        'submitCreateMailForm' => 'handleSubmit'
    ];

    protected $messages = [
        'business_name.required' => 'Nama Usaha harus diisi',
        'business_name.required' => 'Alamat Usaha harus diisi',
        'npwp.required' => 'NPWP harus diisi',
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
                $this->createSKTU();
                break;
            case 'Surat Keterangan Kelahiran':
                $this->createSuratKelahiran();
                break;
            
            default:
                # code...
                break;
        }

    }

    public function createSuratKelahiran(){
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
            'NO_KK' => $this->applicant_data->no_kk
        ]);

        $field = json_decode($field,true);

        $husband = UserData::where('shdk', 'KEPALA KELUARGA')
                ->where('no_kk', $this->applicant_data->no_kk)
                ->first([
                    'nama as name', 
                    'pekerjaan as job', 
                    'kewarganegaraan as citizenship',
                    'tempat_lahir as birthplace',
                    'tanggal_lahir as birthdate',
                    'no_nik as nik',
                    DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age')
                ]);

        $wife = UserData::where('SHDK', 'ISTRI')
                ->where('no_kk', $this->applicant_data->no_kk)
                ->first([
                    'nama as name', 
                    'pekerjaan as job', 
                    'kewarganegaraan as citizenship',
                    'tempat_lahir as birthplace',
                    'tanggal_lahir as birthdate',
                    'no_nik as nik',
                    DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as age')
                ]);

        $field = [
            ...$field,
            'NO_KK' => $this->applicant_data->no_kk,
            'address' => $this->applicant_data->alamat,
            'husband' => $husband,
            'wife' => $wife 
        ];

        try {

            DB::table('users_mail')->insert([
                'mail_id' => $this->mail->id,
                'resident_id' => $this->applicant_data->id,
                'field' => json_encode($field),
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

    public function createSKTU(){

        $this->validate([
            'business_name' => 'required',
            'business_address' => 'required',
            'npwp' => 'required',
        ]);

        $field = json_encode([
            'business_name' => $this->business_name,
            'business_address' => $this->business_address,
            'npwp' => $this->npwp,
        ]);

        try {

            DB::table('users_mail')->insert([
                'mail_id' => $this->mail->id,
                'resident_id' => $this->applicant_data->id,
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

        $this->emit('mailSubmitted', compact('status', 'msg'));

    }

    public function selectResident($id){
        $user = UserData::find($id);
        $this->applicant_data = $user ;
    }
}
