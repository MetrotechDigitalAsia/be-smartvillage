<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class SignatureController extends Controller
{

    protected $folderName;

    public function __construct(){
        $this->folderName = 'persuratan.signature';
    }

    public function index(){

        if(request()->ajax()){

            $data = Signature::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(Signature $signature){
        return view('admin.'.$this->folderName.'.form', compact('signature'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'image' => 'required',
            'name' => 'required',
            'position' => 'required',
            'banjar' => 'nullable',
        ]);

        
        try {
            $validated['image'] = $request->file('image')->store('signature');
            Signature::create($validated);
        } catch (\Exception $e){
            return redirect('/persuratan/signature/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/persuratan/signature')->with('success', 'create signature successfully');

    }

    public function update(Request $request, Signature $signature){

        $data = [
            'user_login_id' => 2,
            'uuid' => Str::uuid()->toString()
        ];

        $data['image'] = $request->file('image')->store('signature');

        try {
            Signature::find($signature->id)->udpate($data);
        } catch (\Exception $e){
            return redirect('/persuratan/signature/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/persuratan/signature')->with('success', 'create signature successfully');

    }

    function destroy(Signature $signature){

        $data = Signature::find($signature->id);

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
