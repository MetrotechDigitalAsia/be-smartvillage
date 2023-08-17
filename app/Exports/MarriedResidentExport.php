<?php

namespace App\Exports;

use App\Models\UserData;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MarriedResidentExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    public function collection()
    {
        return UserData::where('status_perkawinan', 'Kawin Tercatat')->get([
            DB::raw('ROW_NUMBER() OVER(ORDER BY residents_data.id) as row_index'),
            'nama',
            'no_nik',
            'no_kk',
            'status_perkawinan',
            'alamat',
            'banjar'
        ]);
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
            'Banjar'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}
