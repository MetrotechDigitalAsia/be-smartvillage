<?php

namespace App\Http\Livewire;

use App\Notifications\MailProcessNotification;
use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;

class ProcessMailMenuBtn extends Component
{

    protected $listeners = [
        'refresh-mail-process' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.process-mail-menu-btn', [
            'notification_count' => DatabaseNotification::where('type', MailProcessNotification::class)
                                    ->whereNull('read_at')
                                    ->count()
        ]);
    }
}
