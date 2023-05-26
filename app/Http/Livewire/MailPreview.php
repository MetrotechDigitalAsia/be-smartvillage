<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MailPreview extends Component
{

    protected $data;

    protected $listeners = ['refreshMailDetail' => '$refresh'];

    public function mount($data){
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.mail-preview', ['data' => $this->data]);
    }
}
