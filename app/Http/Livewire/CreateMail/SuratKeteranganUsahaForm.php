<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SuratKeteranganUsahaForm extends Component
{

    public $business_name;
    public $business_address;
    public $npwp;

    protected $messages = [
        'business_name.required' => 'Nama Usaha harus diisi',
        'business_name.required' => 'Alamat Usaha harus diisi',
        'npwp.required' => 'NPWP harus diisi',
    ];

    protected $listeners = [
        'submitMail' => 'create'
    ];

    public function render()
    {
        return view('livewire.create-mail.surat-keterangan-usaha-form');
    }

    public function create(UserData $userData, Mail $mail){

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
