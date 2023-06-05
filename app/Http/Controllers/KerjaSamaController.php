<?php

namespace App\Http\Controllers;

use App\Models\KerjaSama;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KerjaSamaController extends Controller
{

    private $folderName;

    public function __construct(){
        $this->folderName = 'informasiDesa.kerjaSama';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $data = KerjaSama::latest()->get();
                    
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(KerjaSama $kerjaSama){
        return view('admin.'.$this->folderName.'.form', compact('kerjaSama'));
    }


    public function store(Request $request){

        $data = $request->validate([
            'image' => 'required',
            'description' => 'required'
        ]);

        $data['image'] = $request->file('image')->store('kerjSama');

        try {

            KerjaSama::create($data);
            $message = 'create kerja sama successfully';

        } catch (\Exception $e) {
            $message = $e->getMessage();
            return redirect('/informasi-desa/kerja-sama-desa/create')->with('success', $message);
        }

        return redirect('/informasi-desa/kerja-sama-desa')->with('success', $message);


        return view('admin.'.$this->folderName.'.form', compact('kerjaSama'));
    }

    public function update(Request $request, KerjaSama $kerjaSama){

        try {
            $kerjaSama->update($request->all());
            $message = 'update kerja sama successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/informasi-desa/kerja-sama-desa')->with('success', $message);

    }

    function destroy(KerjaSama $kerjaSama){

        $data = KerjaSama::find($kerjaSama->id);

        try {
            $data->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
        ]);
    }

}
