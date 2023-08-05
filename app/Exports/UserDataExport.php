<?php

namespace App\Exports;

use App\Models\UserData;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UserDataExport implements FromQuery, WithHeadings, WithEvents, WithMapping, WithStyles, ShouldAutoSize
{

    use Exportable, RegistersEventListeners;

    protected $banjar;
    protected $headers;

    public function __construct($banjar = null, $headers)
    {
        $this->banjar = $banjar;
        $this->headers = $headers;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return UserData::query()->when(!is_null($this->banjar), function($query){
            $query->where('banjar', $this->banjar);
        });
    }

    public function map($userData): array
    {

        $headers = [];

        foreach ($this->headers as $header) {
            if ($header == 'status_akta_kelahiran' || $header == 'status_akta_perkawinan') {
                $headers[] = $userData->{$header} == 1 ? 'ADA' : 'TIDAK';
            } else {
                $headers[] = $userData->{$header};
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
            } elseif($header == 'rt'){
                $headers[] = 'RT';
            } elseif($header == 'rw'){
                $headers[] = 'RW';
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
