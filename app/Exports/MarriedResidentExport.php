<?php

namespace App\Exports;

use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MarriedResidentExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    protected $num = 0;

    public function collection()
    {
        return UserData::whereNotNull('tanggal_perkawinan')
        ->latest('tanggal_perkawinan')
        ->get([
            'nama',
            'no_nik',
            'no_kk',
            'status_perkawinan',
            'alamat',
            'banjar',
            'tanggal_perkawinan'
        ]);
    }

    public function map($userData): array
    {

        $this->num++;

        return [
            $this->num,
            $userData->nama,
            $userData->no_nik,
            $userData->no_kk,
            $userData->status_perkawinan,
            $userData->alamat,
            $userData->banjar,
            !is_null($userData->tanggal_perkawinan) ? Carbon::parse($userData->tanggal_perkawinan)->format('d-m-Y') : null,

        ];

    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'NIK',
            'NO KK',
            'Status Perkawinan',
            'Alamat',
            'Banjar',
            'Tanggal Perkawinan'
        ];
    }


    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
