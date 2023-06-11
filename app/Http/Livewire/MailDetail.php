<?php

namespace App\Http\Livewire;

use App\Models\Saksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailDetail extends Component
{

    public $userDb;
    public $mailId;
    public $perbekel;
    public $kelian;
    protected $data;
    public $saksi;
    
    protected $listeners = [
        'refreshMailDetail' => '$refresh'
    ];

    public function mount($mailId, $perbekel, $kelian){

        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as applicant';
        $this->mailId = $mailId;
        $this->perbekel = $perbekel;
        $this->kelian = $kelian;

        $this->data = DB::table('users_mail as userMail')
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
            'applicant.NAMA as applicant_name',
            'applicant.NIK as applicant_nik',
            'applicant.NO_KK as applicant_no_kk',
            'applicant.KEWARGANEGARAAN as applicant_citizenship',
            'applicant.JENIS_KELAMIN as applicant_sex',
            'applicant.TEMPAT_LAHIR as applicant_birthplace',
            'applicant.TANGGAL_LAHIR as applicant_birthdate',
            'applicant.AGAMA as applicant_religion',
            'applicant.PEKERJAAN as applicant_job',
            'applicant.ALAMAT as applicant_address',
            'applicant.BANJAR as applicant_banjar',
            'userMail.created_at'
        ]);

        $saksi_1 = Saksi::where('position', '!=', 'Kelian Banjar Dinas '. $this->data->applicant_banjar)->first();
        $saksi_2 = Saksi::where('position', '!=', 'Kelian Banjar Dinas '. $this->data->applicant_banjar)
                        ->where('position', '!=', $saksi_1->position)
                        ->first();
        
        $this->saksi = compact('saksi_1', 'saksi_2');

    }


    public function render()
    {

        return view('livewire.mail-detail', ['data' => $this->data]);
    }
}
