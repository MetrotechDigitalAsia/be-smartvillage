<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteNotif extends Component
{

    public $notifId;
    public $data;

    public function render()
    {
        return view('livewire.delete-notif');
    }

    public function handleClick(){
        auth()->user()->notifications->where('id',$this->notifId)->first()->delete();
        $this->emit('notifAdded');
    }


}
