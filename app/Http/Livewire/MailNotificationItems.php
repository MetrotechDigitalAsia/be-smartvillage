<?php

namespace App\Http\Livewire;

use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;

class MailNotificationItems extends Component
{
    public function render()
    {
        return view('livewire.mail-notification-items',[
        'notifications' => DatabaseNotification::where('type', '=', 'App\Notifications\MailNotification')
                        ->whereNull('read_at')
                        ->latest()
                        ->get()
        ]);
    }

    public function deleteNotif($id){
        DatabaseNotification::find($id)->delete();
        $this->emitSelf('$refresh');
    }
}
