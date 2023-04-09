<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationItems extends Component
{

    protected $listeners = ['notifAdded' => 'render'];

    public function render()
    {
        return view('livewire.notification-items', [
            'notifications' => auth()->user()->unreadnotifications
        ]);
    }
}
