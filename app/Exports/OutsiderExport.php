<?php

namespace App\Exports;

use App\Models\Outsider;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OutsiderExport implements FromCollection, WithHeadings, WithEvents, WithMapping, WithStyles, ShouldAutoSize
{

    use Exportable, RegistersEventListeners;
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $headers;

    public function __construct($headers)
    {
        $this->headers = $headers;
    }

    public function collection()
    {
        return Outsider::all();
    }

    public function map($outsider): array
    {

        $headers = [];

        foreach ($this->headers as $header) {
            if ($header == 'status_akta_kelahiran' || $header == 'status_akta_perkawinan') {
                $headers[] = $outsider->{$header} == 1 ? 'ADA' : 'TIDAK';
            } else {
                $headers[] = $outsider->{$header};
            }
        }

        return $headers;

    }

    public function headings(): array
    {

        $headers = [];

        foreach ($this->headers as $header) {
            $formattedHeader = str_replace('_', ' ', ucfirst($header));
            if ($header == 'no_nik') {
                $headers[] = 'No NIK';
            } elseif ($header == 'no_kk') {
                $headers[] = 'No KK';
            } else {
                $headers[] = $formattedHeader;
            }
        }

        return $headers;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
