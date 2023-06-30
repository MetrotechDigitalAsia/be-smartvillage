<?php

namespace App\Http\Livewire;

use App\Models\UserData;
use Livewire\Component;

class SearchResidentComponent extends Component
{

    protected $listeners = [
        'handleChangeResident' => 'handleChange'
    ];

    public function render()
    {
        return view('livewire.search-resident-component');
    }

    public function handleChange(UserData $userData){
        $this->emit('searchResult', $userData);
    }

}
