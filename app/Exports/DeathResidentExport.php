<?php

namespace App\Exports;

use App\Models\ResidentDiedMutation;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DeathResidentExport implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize
{

    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */

    protected $timeRange;

    public function __construct($time)
    {
        return $this->timeRange = $time;
    }

    public function collection()
    {

        return ResidentDiedMutation::join('residents_data', 'residents_data.id', '=', 'resident_died_mutations.resident_id')
        ->when(!is_null($this->timeRange) && $this->timeRange == 1, function($query){
            $query->whereMonth('resident_died_mutations.created_at', Carbon::now()->month)
            ->whereYear('resident_died_mutations.created_at', Carbon::now()->year);
        })
        ->when(!is_null($this->timeRange) && $this->timeRange == 6, function($query){
            $query->whereBetween('resident_died_mutations.created_at', 
                [Carbon::parse("01-01-".Carbon::now()->year), Carbon::parse("01-01-".Carbon::now()->year)->addMonth(5)]
            );
        })
        ->when(!is_null($this->timeRange) && $this->timeRange == 12, function($query){
            $query->whereYear('resident_died_mutations.created_at', Carbon::now()->year);
        })
        ->get([
            DB::raw('ROW_NUMBER() OVER(ORDER BY residents_data.id) as row_index'),
            'nama',
            'no_nik',
            'no_kk',
            'alamat',
            'banjar',
            'date_of_death',
            'cause_of_death'
        ]);
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'NIK',
            'NO KK',
            'Alamat',
            'Banjar',
            'Tanggal Kematian',
            'Penyebab Kematian',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }


}
