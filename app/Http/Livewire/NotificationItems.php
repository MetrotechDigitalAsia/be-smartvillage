<?php

namespace App\Http\Livewire;

use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;

class NotificationItems extends Component
{

    protected $listeners = ['notifAdded' => '$refresh'];

    public function render()
    {
        return view('livewire.notification-items', [
            'notifications' => DatabaseNotification::where('type', '=', 'App\Notifications\UmkmNotification')
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
