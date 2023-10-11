<?php

namespace App\Http\Livewire;

use App\Notifications\MailFinishNotification;
use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;

class FinishMailMenuBtn extends Component
{

    protected $listeners = [
        'refresh-mail-finish' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.finish-mail-menu-btn',[
            'notification_count' => DatabaseNotification::where('type', MailFinishNotification::class)
                                    ->whereNull('read_at')
                                    ->count()
        ]);
    }
}
