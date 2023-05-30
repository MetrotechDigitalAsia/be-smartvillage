<?php

namespace App\Http\Livewire;

use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;

class NotificationCount extends Component
{

    protected $listeners = ['notifAdded' => '$refresh'];

    public function render()
    {
        return view('livewire.notification-count', ['notifCount' => DatabaseNotification::whereNull('read_at')->count()]);
    }
}
