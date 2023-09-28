<?php

namespace App\Http\Livewire\Mutation;

use App\Models\ResidentDiedMutation;
use App\Models\UserData;
use Livewire\Component;

class ResidentDiedForm extends Component
{

    public $resident_id;
    public $cause_of_death;
    public $date_of_death;
    public $data_id;

    protected $listeners = [
        'selectDiedResident' => 'selectSubject'
    ];

    protected $messages = [
        'resident_id.required' => 'Penduduk harus diisi',
        'cause_of_death.required' => 'Penyebab kematian harus diisi',
        'date_of_death.required' => 'Tanggal kematian harus diisi',
    ];

    public function mount($data)
    {
        $this->data_id = $data->id ?? null;
        $this->cause_of_death = $data->cause_of_death ?? null;
        $this->date_of_death = $data->date_of_death ?? null;
    }

    public function selectSubject($id){
        $this->resident_id = $id;
    }

    public function render()
    {
        return view('livewire.mutation.resident-died-form');
    }

    public function handleSubmit(){

        is_null($this->data_id) 
        ? $this->create() 
        : $this->update();

    }

    public function create(){

        if(!$this->resident_id){
            $this->emit('residentNotFound');
            return;
        }

        $this->validate([
            'resident_id' => 'required',
            'date_of_death' => 'required',
            'cause_of_death' => 'required',
        ]);

        try {

            $resident = UserData::find($this->resident_id)->update(['status_mutasi' => 'Meninggal']);

            ResidentDiedMutation::create([
                'resident_id' => $this->resident_id,
                'date_of_death' => $this->date_of_death,
                'cause_of_death' => $this->cause_of_death,
            ]);

            $msg = 'Data Berhasil ditambah';
            $status = true;

        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $status = false;
        }

        $this->emit('mutationSubmitted', compact('msg', 'status'));

    }

    public function update(){

        $this->validate([
            'date_of_death' => 'required',
            'cause_of_death' => 'required',
        ]);

        try {

            ResidentDiedMutation::find($this->data_id)->update([
                'date_of_death' => $this->date_of_death,
                'cause_of_death' => $this->cause_of_death,
            ]);

            $msg = 'Data Berhasil diubah';
            $status = true;

        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $status = false;
        }

        $this->emit('mutationSubmitted', compact('msg', 'status'));

    }
}
