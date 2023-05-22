<?php

namespace App\Http\Controllers;

use App\Models\BLT;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BLTController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'masterData.blt';
    }

    public function index(Request $request){

        if($request->ajax()){

            $data = BLT::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(BLT $bLT){
        return view('admin.'.$this->folderName.'.form', compact('bLT'));
    }

    public function store(Request $request){


        $validated = $request->validate([
            'type' => 'required',
        ]);

        try {
            BLT::create($validated);
        } catch (\Exception $e){
            return redirect('/master-data/blt/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('master-data/blt')->with('success', 'create BLT successfully');

    }

    public function update(Request $request, BLT $bLT){

        $validated = $request->validate([
            'type' => 'required',
        ]);

        try {
            BLT::find($bLT->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/master-data/blt/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/blt')->with('success', 'update BLT successfully');

    }

    public function destroy(BLT $bLT){

        $data = BLT::find($bLT->id);

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
