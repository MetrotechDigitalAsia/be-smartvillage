<?php

namespace App\Http\Livewire;

use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationItems extends Component
{

    protected $listeners = ['notifAdded' => '$refresh'];


    public $mails;
    public $umkm;
    public $notifCount;

    public function render()
    {


        $this->mails = DatabaseNotification::where('type', '=', 'App\Notifications\MailNotification')
                        ->whereNull('read_at')
                        ->latest()
                        ->get();

        $this->umkm = DatabaseNotification::where('type', '=', 'App\Notifications\UmkmNotification')
                        ->whereNull('read_at')
                        ->latest()
                        ->get();

        $this->notifCount = DatabaseNotification::whereNull('read_at')->count();

        return view('livewire.notification-items', [
            'mails' => $this->mails,
            'umkm' => $this->umkm
        ]);
    }

    public function deleteNotif($id){
        DatabaseNotification::find($id)->delete();
        $this->emitSelf('$refresh');
        $this->emit('notifAdded');
    }
}
