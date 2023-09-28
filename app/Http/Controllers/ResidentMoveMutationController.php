<?php

namespace App\Http\Controllers;

use App\Models\ResidentMoveMutation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Svg\Tag\Rect;
use Yajra\DataTables\DataTables;

class ResidentMoveMutationController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'penduduk.mutasi.pindahKeluar';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;
            $time = $request->get('query')['time'] ?? null;

            $data = ResidentMoveMutation::with('resident')
                    ->when(!is_null($param), function($query) use ($param){
                        $query->join('residents_data', 'residents_data.id', '=', 'resident_move_mutations.resident_id')
                        ->where('residents_data.nama', 'LIKE', "%$param%");
                    })
                    ->when(!is_null($time) && $time == 1, function($query) use ($time){
                        $query->whereMonth('resident_move_mutations.created_at', Carbon::now()->month)
                        ->whereYear('resident_move_mutations.created_at', Carbon::now()->year);
                    })
                    ->when(!is_null($time) && $time == 6, function($query) use ($time){
                        $query->whereBetween('resident_move_mutations.created_at', 
                            [Carbon::parse("01-01-".Carbon::now()->year), Carbon::parse("01-01-".Carbon::now()->year)->addMonth(5)]
                        );
                    })
                    ->when(!is_null($time) && $time == 12, function($query) use ($time){
                        $query->whereYear('resident_move_mutations.created_at', Carbon::now()->year);
                    })
                    ->latest('resident_move_mutations.created_at')
                    ->get();


            return DataTables::of($data)
            ->addColumn('name', function(ResidentMoveMutation $residentMoveMutation){
                return $residentMoveMutation->resident->nama;
            })
            ->addIndexColumn()
            ->toJson();

        }

        return view("admin.$this->folderName.index");

    }

    public function create(){
        return view("admin.$this->folderName.form");
    }

    public function show(ResidentMoveMutation $residentMoveMutation){
        return view("admin.$this->folderName.form", compact('residentMoveMutation'));
    }
}
