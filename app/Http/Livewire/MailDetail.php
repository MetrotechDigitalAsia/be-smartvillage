<?php

namespace App\Http\Livewire;

use App\Models\Mail;
use App\Models\Signature;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class MailDetail extends Component
{

    public $userDb;
    public $mailId;
    public $perbekel;
    public $mail;
     
    protected $listeners = [
        'refreshMailDetail' => '$refresh'
    ];

    public function mount($mailId, $perbekel){
        $slug = request()->query('type');
        $this->mail = Mail::whereSlug($slug)->first();
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.residents_data as applicant';
        $this->mailId = $mailId;
        $this->perbekel = $perbekel;
    }


    public function render()
    {

        switch ($this->mail->title) {
            case 'Surat Keterangan Tempat Usaha':
                $data = $this->getSKTU();
                break;
            case 'Surat Keterangan Kelahiran':
                $data = $this->getSuratKelahiran();
                break;
            case 'Surat Keterangan Meninggal':
                $data = $this->getSuratKematian();
                break;
            case 'Surat Keterangan Perkawinan':
                $data = $this->getSuratPerkawinan();
                break;
            case 'Surat Keterangan Pindah':
                $data = $this->getSuratPindah();
                break;
        }

        if($this->mail->title != 'Surat Keterangan Pindah'){
            $data->saksi_1 = Signature::find($data->saksi_1) ?? null;
            $data->saksi_2 = Signature::find($data->saksi_2) ?? null;

        }
        
        $kelian = Signature::where('position', '=','Kelian Banjar')
                    ->where('banjar', $data->applicant_banjar)
                    ->first();

        return view('livewire.mail-detail', [
            'data' => $data,
            'kelian' => $kelian
        ]);
    }

    public function getSKTU(){

        $data = DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'applicant.id', '=', 'userMail.resident_id')
        ->where('userMail.id', '=', $this->mailId)
        ->first([
            'userMail.id',
            'mails.title',
            'mails.slug',
            'userMail.mail_number',
            'userMail.status',
            'userMail.field',
            'userMail.signature',
            'userMail.user_id',
            'userMail.saksi_1',
            'userMail.saksi_2',
            'applicant.nama as applicant_name',
            'applicant.no_nik as applicant_nik',
            'applicant.no_kk as applicant_no_kk',
            'applicant.kewarganegaraan as applicant_citizenship',
            'applicant.jenis_kelamin as applicant_sex',
            'applicant.tempat_lahir as applicant_birthplace',
            'applicant.tanggal_lahir as applicant_birthdate',
            'applicant.agama as applicant_religion',
            'applicant.pekerjaan as applicant_job',
            'applicant.alamat as applicant_address',
            'applicant.banjar as applicant_banjar',
            'applicant.shdk as applicant_family_status',
            DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
            'userMail.created_at',
            'registration_number',
            'registration_date',
        ]);

        return $data;

    }

    public function getSuratPindah(){

        $data = DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'applicant.id', '=', 'userMail.resident_id')
        ->where('userMail.id', '=', $this->mailId)
        ->first([
            'userMail.id',
            'mails.title',
            'mails.slug',
            'userMail.field',
            'userMail.signature',
            'userMail.user_id',
            'userMail.status',
            'applicant.nama as applicant_name',
            'applicant.no_nik as applicant_nik',
            'applicant.no_kk as applicant_no_kk',
            'applicant.kewarganegaraan as applicant_citizenship',
            'applicant.jenis_kelamin as applicant_sex',
            'applicant.tempat_lahir as applicant_birthplace',
            'applicant.tanggal_lahir as applicant_birthdate',
            'applicant.alamat as applicant_address',
            'applicant.banjar as applicant_banjar',
        ]);

        return $data;

    }

    public function getSuratKelahiran(){

        $data = DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'applicant.id', '=', 'userMail.resident_id')
        ->leftjoin('mail_files', 'mail_files.users_mail_id', '=', 'userMail.id')
        ->where('userMail.id', '=', $this->mailId)
        ->first([
            'userMail.id',
            'mails.title',
            'mails.slug',
            'userMail.mail_number',
            'userMail.status',
            'userMail.field',
            'userMail.signature',
            'userMail.user_id',
            'userMail.saksi_1',
            'userMail.saksi_2',
            'applicant.nama as applicant_name',
            'applicant.no_nik as applicant_nik',
            'applicant.no_kk as applicant_no_kk',
            'applicant.kewarganegaraan as applicant_citizenship',
            'applicant.jenis_kelamin as applicant_sex',
            'applicant.tempat_lahir as applicant_birthplace',
            'applicant.tanggal_lahir as applicant_birthdate',
            'applicant.agama as applicant_religion',
            'applicant.pekerjaan as applicant_job',
            'applicant.alamat as applicant_address',
            'applicant.banjar as applicant_banjar',
            'applicant.shdk as applicant_family_status',
            DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
            'userMail.created_at',
            'registration_number',
            'registration_date',
            'mail_files.name as file'
        ]);

        return $data;

    }

    public function getSuratKematian(){

        $data = DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'applicant.id', '=', 'userMail.resident_id')
        ->where('userMail.id', '=', $this->mailId)
        ->first([
            'userMail.id',
            'mails.title',
            'mails.slug',
            'userMail.mail_number',
            'userMail.status',
            'userMail.field',
            'userMail.signature',
            'userMail.user_id',
            'userMail.saksi_1',
            'userMail.saksi_2',
            'applicant.nama as applicant_name',
            'applicant.no_nik as applicant_nik',
            'applicant.no_kk as applicant_no_kk',
            'applicant.kewarganegaraan as applicant_citizenship',
            'applicant.alamat as applicant_address',
            'applicant.pekerjaan as applicant_job',
            'applicant.banjar as applicant_banjar',
            DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
            'userMail.created_at',
            'userMail.petugas',
            'registration_number',
            'registration_date',
        ]);

        $json = json_decode($data->field);

        $data->petugas = Signature::find($data->petugas);

        Log::debug((array)$data);

        $data->subject = UserData::whereId($json->subject)->first([
            'nama as name',
            'banjar',
            'jenis_kelamin as gender',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'kewarganegaraan as citizenship',
            'agama as religion',
            'no_nik as nik',
            'pekerjaan as job',
            'alamat as address'
        ]);

        return $data;

    }

    public function getSuratPerkawinan(){
        $data = DB::table('users_mail as userMail')
        ->join('mails', 'mails.id', '=', 'userMail.mail_id')
        ->join($this->userDb, 'applicant.id', '=', 'userMail.resident_id')
        ->where('userMail.id', '=', $this->mailId)
        ->first([
            'userMail.id',
            'mails.title',
            'mails.slug',
            'userMail.mail_number',
            'userMail.status',
            'userMail.field',
            'userMail.signature',
            'userMail.user_id',
            'userMail.saksi_1',
            'userMail.saksi_2',
            'applicant.nama as applicant_name',
            'applicant.no_nik as applicant_nik',
            'applicant.no_kk as applicant_no_kk',
            'applicant.kewarganegaraan as applicant_citizenship',
            'applicant.alamat as applicant_address',
            'applicant.pekerjaan as applicant_job',
            'applicant.banjar as applicant_banjar',
            DB::raw('YEAR(NOW()) - YEAR(tanggal_lahir) as applicant_age'),
            'userMail.created_at',
            'registration_number',
            'registration_date'
        ]);

        return $data;
    }


}
