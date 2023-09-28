<?php

namespace App\Http\Resources\Exports;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResidentMoveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'row_index' => $this->row_index,
            'nama' => $this->nama,
            'no_nik' => $this->no_nik,
            'no_kk' => $this->no_kk,
            'alamat' => $this->alamat,
            'banjar' => $this->banjar,
            'move_date' => Carbon::parse($this->move_date)->format('d-m-Y'),
            'reason' => $this->reason
        ];
    }
}
