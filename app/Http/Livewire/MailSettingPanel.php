<?php

namespace App\Http\Livewire;

use App\Models\Signature;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MailSettingPanel extends Component
{

    public $mailId;
    public $saksi1;
    public $saksi2;
    public $petugas;
    public $mail_num;
    public $slug;

    protected $listeners = [
        'setMailNumber' => 'setMailNumber',
        'setSaksi1' => 'setSaksi1',
        'setSaksi2' => 'setSaksi2'
    ];

    public function mount($mailId){
        $this->mailId = $mailId;

        $mail = DB::table('users_mail')
        ->join('mails', 'mails.id', '=', 'users_mail.mail_id')
        ->where('users_mail.id', $mailId)
        ->first([
            'mail_number',
            'saksi_1',
            'saksi_2',
            'petugas',
            'slug',
        ]);

        $this->slug = $mail->slug;
        $this->saksi1 = $mail->saksi_1;
        $this->saksi2 = $mail->saksi_2;
        $this->mail_num = $mail->mail_number;
        $this->petugas = $mail->petugas;
    }

    public function render()
    {
        return view('livewire.mail-setting-panel',[
            'signatures' => Signature::all()
        ]);
    }

    public function handleChange(){
        
        try {

            DB::table('users_mail')->where('id', $this->mailId)
            ->update([
                'mail_number' => $this->mail_num,
                'saksi_1' => $this->saksi1,
                'saksi_2' => $this->saksi2,
                'petugas' => $this->petugas
            ]);
            $status = true;
            $msg = 'Perubahan diterapkan';
        } catch (\Exception $e){
            $msg = $e->getMessage();
            $status = true;
        }

        $this->emit('mailChanges', compact('msg', 'status'));
        $this->emitTo('mail-detail','refreshMailDetail');
    }

    public function resetMail(){
        
        try {

            DB::table('users_mail')->where('id', $this->mailId)
            ->update([
                'mail_number' => null,
                'saksi_1' => null,
                'saksi_2' => null,
                'petugas' => null
            ]);
            $status = true;
            $msg = 'Perubahan diterapkan';
        } catch (\Exception $e){
            $msg = $e->getMessage();
            $status = true;
        }

        $this->saksi1 = '';
        $this->saksi2 = '';
        $this->mail_num = '';
        $this->petugas = '';

        $this->emit('mailChanges', compact('msg', 'status'));
        $this->emitTo('mail-detail','refreshMailDetail');
    }
}
