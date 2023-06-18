<?php

namespace App\Http\Livewire;

use App\Models\Saksi;
use App\Models\Signature;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailDetail extends Component
{

    public $userDb;
    public $mailId;
    public $perbekel;
    
    protected $listeners = [
        'refreshMailDetail' => '$refresh'
    ];

    public function mount($mailId, $perbekel){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as applicant';
        $this->mailId = $mailId;
        $this->perbekel = $perbekel;
    }


    public function render()
    {

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
            'userMail.created_at'
        ]);

        $saksi_1 = Saksi::where('position', '!=', 'Kelian Banjar Dinas '. $data->applicant_banjar)->first();
        $saksi_2 = Saksi::where('position', '!=', 'Kelian Banjar Dinas '. $data->applicant_banjar)
                        ->where('position', '!=', $saksi_1->position)
                        ->first();
        
        $saksi = compact('saksi_1', 'saksi_2');

        $kelian = Signature::where('position', '=','Kelian Banjar')
                    ->where('banjar', $data->applicant_banjar)
                    ->first();

        return view('livewire.mail-detail', compact('data', 'saksi', 'kelian'));
    }
}
