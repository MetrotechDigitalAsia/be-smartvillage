<?php

namespace App\Http\Controllers;

use App\Exports\DeathResidentExport;
use App\Models\ResidentDiedMutation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ResidentDiedMutationController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'penduduk.mutasi.meninggal';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;
            $time = $request->get('query')['time'] ?? null;

            $data = ResidentDiedMutation::with('resident')
                    ->when(!is_null($param), function($query) use ($param){
                        $query->join('residents_data', 'residents_data.id', '=', 'resident_died_mutations.resident_id')
                        ->where('residents_data.nama', 'LIKE', "%$param%");
                    })
                    ->when(!is_null($time) && $time == 1, function($query) use ($time){
                        $query->whereMonth('resident_died_mutations.created_at', Carbon::now()->month)
                        ->whereYear('resident_died_mutations.created_at', Carbon::now()->year);
                    })
                    ->when(!is_null($time) && $time == 6, function($query) use ($time){
                        $query->whereBetween('resident_died_mutations.created_at', 
                            [Carbon::parse("01-01-".Carbon::now()->year), Carbon::parse("01-01-".Carbon::now()->year)->addMonth(5)]
                        );
                    })
                    ->when(!is_null($time) && $time == 12, function($query) use ($time){
                        $query->whereYear('resident_died_mutations.created_at', Carbon::now()->year);
                    })
                    ->latest('resident_died_mutations.created_at')
                    ->get();


            return DataTables::of($data)
            ->addColumn('name', function(ResidentDiedMutation $residentDiedMutation){
                return $residentDiedMutation->resident->nama;
            })
            ->addIndexColumn()
            ->toJson();

        }

        return view("admin.$this->folderName.index");

    }

    public function create(){
        return view("admin.$this->folderName.form");
    }

    function destroy(ResidentDiedMutation $residentDiedMutation){

        try {
            $residentDiedMutation->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
        ]);
    }

    public function show(ResidentDiedMutation $residentDiedMutation){
        return view("admin.$this->folderName.form", compact('residentDiedMutation'));
    }

    public function export(){
        $timeRange = request()->query('time') ?? null;
        return (new DeathResidentExport($timeRange))->download('data-penduduk-meninggal-'.time().'.xlsx');   
    }
}
