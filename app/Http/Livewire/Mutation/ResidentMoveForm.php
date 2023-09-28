<?php

namespace App\Http\Livewire\Mutation;

use App\Models\ResidentMoveMutation;
use App\Models\UserData;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ResidentMoveForm extends Component
{

    public $resident_id;
    public $move_date;
    public $reason;
    public $data_id;

    protected $listeners = [
        'selectMoveResident' => 'selectSubject'
    ];

    protected $messages = [
        'resident_id.required' => 'Penduduk harus diisi',
        'move_date.required' => 'Tanggal pindah harus diisi',
        'reason.required' => 'Alasan pindah harus diisi',
    ];

    public function mount($data)
    {
        $this->data_id = $data->id ?? null;
        $this->move_date = $data->move_date ?? null;
        $this->reason = $data->reason ?? null;
    }

    public function selectSubject($id){
        $this->resident_id = $id;
    }

    public function render()
    {
        return view('livewire.mutation.resident-move-form');
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
            'move_date' => 'required',
            'reason' => 'required',
        ]);

        try {

            $resident = UserData::find($this->resident_id)->update(['status_mutasi' => 'Pindah Keluar']);

            ResidentMoveMutation::create([
                'resident_id' => $this->resident_id,
                'move_date' => $this->move_date,
                'reason' => $this->reason,
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
            'move_date' => 'required',
            'reason' => 'required',
        ]);

        try {

            ResidentMoveMutation::find($this->data_id)->update([
                'move_date' => $this->move_date,
                'reason' => $this->reason,
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
