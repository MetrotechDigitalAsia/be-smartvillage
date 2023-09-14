<?php

namespace App\Exports;

use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UserDataExport extends DefaultValueBinder implements FromQuery, WithHeadings, WithEvents, WithMapping, WithStyles, ShouldAutoSize, WithCustomValueBinder
{

    use Exportable, RegistersEventListeners;

    protected $banjar;
    protected $headers;

    public function __construct($banjar, $headers)
    {
        $this->banjar = $banjar;
        $this->headers = $headers;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {

        return UserData::query()->when($this->banjar != '', function($query){
            $query->where('banjar', $this->banjar);
        })
        ->addSelect(DB::raw('ROW_NUMBER() OVER(ORDER BY id) as No'), 'residents_data.*');
        
    }
    
    public function bindValue(Cell $cell, $value)
    {


        if (is_numeric($value) && strlen($value) != 16) {
            $cell->setValueExplicit($value, DataType::TYPE_NUMERIC);
            return true;
        } else {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);
            return true;
        }

        // else return default behavior
        // return parent::bindValue($cell, $value);
    }

    public function map($userData): array
    {

        
        foreach ($this->headers as $header) {
            if ($header == 'status_akta_kelahiran' || $header == 'status_akta_perkawinan') {
                $headers[] = $userData->{$header} == 1 ? 'ADA' : 'TIDAK';
            } else if($header == 'umur') {
                $headers[] = Carbon::now()->format('Y') - Carbon::parse($userData->tanggal_lahir)->format('Y');
            } else if(($header == 'tanggal_lahir' || $header == 'tanggal_perkawinan') && !is_null($userData->{$header})) {
                $headers[] = Carbon::parse($userData->{$header})->format('d-m-Y');
            } else {
                $headers[] = $userData->{$header};
            }
        }

        return $headers;

    }

    public function headings(): array
    {

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
