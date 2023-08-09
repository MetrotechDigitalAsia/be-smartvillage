<?php

namespace App\Http\Controllers;

use App\Exports\OutsiderExport;
use App\Models\Outsider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OutsiderController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'penduduk.outsider';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;

            $data = Outsider::latest()
                    ->when(!is_null($param) && !preg_match('/[0-9]/', $param), function($query) use ($param){
                        $query->where('nama', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($param) && !preg_match('/[a-zA-Z]/', $param), function($query) use ($param){
                        $query->where('no_nik', 'like', '%'.$param.'%');
                    })
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');

    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(Outsider $outsider){
        $currYear = Carbon::now()->format('Y');
        $outsiderAge = Carbon::parse($outsider->tanggal_lahir)->format('Y');
        $outsider->umur = $currYear - $outsiderAge;
        return view('admin.'.$this->folderName.'.form', compact('outsider'));
    }

    public function store(Request $request){

        try {
            Outsider::create($request->all());
            $message = 'create outsider resident successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/data-penduduk/penduduk-luar')->with('success', $message);

    }

    public function update(Request $request, Outsider $outsider){

        try {
            $outsider->update($request->all());
            $message = 'update outsider resident successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/data-penduduk/penduduk-luar')->with('success', $message);

    }

    public function exportData(){
        $data = array_keys(request()->all());
        array_shift($data);
        array_pop($data);

        return (new OutsiderExport($data))->download('data-penduduk-luar-'.time().'.xlsx');
    }

    public function destroy(Outsider $outsider){

        try {
            $outsider->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
        ]);
    }
}
