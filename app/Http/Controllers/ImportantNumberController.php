<?php

namespace App\Http\Controllers;

use App\Models\ImportantNumber;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ImportantNumberController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'importantNumber';
    }

    public function index(Request $request){

        if($request->ajax()){

            $data = ImportantNumber::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(ImportantNumber $importantNumber){
        $regency = ['Ubud', 'Tengah', 'Buangga', 'Kuah'];
        return view('admin.'.$this->folderName.'.form', compact('importantNumber', 'regency'));
    }

    public function create(){
        $regency = ['Ubud', 'Tengah', 'Buangga', 'Kuah'];
        return view('admin.'.$this->folderName.'.form', compact('regency'));
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'regency' => 'required',
            'address' => 'required'
        ]);

        $validated['uuid'] = Str::uuid()->toString();

        try {
            ImportantNumber::create($validated);
        } catch (\Exception $e){
            return redirect('/tourism-map/important-number/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('tourism-map/important-number')->with('success', 'create Important Number Point Successfully');

    }

    public function update(Request $request, ImportantNumber $importantNumber){

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'regency' => 'required',
            'address' => 'required'
        ]);

        $validated['uuid'] = $importantNumber->uuid;

        try {
            ImportantNumber::find($importantNumber->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/tourism-map/important-number/show/'. $importantNumber->uuid)->with('error', $e->getMessage());
            die;
        }

        return redirect('tourism-map/important-number')->with('success', 'Update Important Number Point Successfully');

    }

    public function destroy(ImportantNumber $importantNumber){

        $data = ImportantNumber::find($importantNumber->id);

        try {
            $data->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }

        return response()->json([
            'message' => $message,
            'route' => "admin"
        ]);

    }
}
