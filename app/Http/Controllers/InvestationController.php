<?php

namespace App\Http\Controllers;

use App\Models\Investation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class InvestationController extends Controller
{
    
    private $folderName;

    public function __construct(){
        $this->folderName = 'investation';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = Investation::where('institute_name', 'like', '%'.$param.'%')
                    ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 
        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        $categories = ['Umum', 'Komuditas', 'Peternakan', 'Sumber Daya Manusia', 'Ekonomi'];
        return view('admin.'.$this->folderName.'.form', compact('categories'));
    }

    public function show(Investation $investation){
        $categories = ['Umum', 'Komuditas', 'Peternakan', 'Sumber Daya Manusia', 'Ekonomi'];
        return view('admin.'.$this->folderName.'.form', compact('categories', 'investation'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'fullname' => 'required',
            'institute_name' => 'required',
            'institute_address' => 'required',
            'investation_category' => 'required',
            'institute_email' => 'required',
            'institute_phone_number' => 'required',
            'institute_description' => 'required',
        ]);

        $validated['uuid'] = Str::uuid()->toString();


        try {
            Investation::create($validated);
        } catch (\Exception $e){
            return redirect('/informasi-desa/investasi/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/investasi')->with('success', 'create investation point successfully');

    }

    public function update(Investation $investation, Request $request){

        $validated = $request->validate([
            'fullname' => 'required',
            'institute_name' => 'required',
            'institute_address' => 'required',
            'investation_category' => 'required',
            'institute_email' => 'required',
            'institute_phone_number' => 'required',
            'institute_description' => 'required',
        ]);

        $validated['uuid'] = Str::uuid()->toString();

        try {
            Investation::find($investation->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/informasi-desa/investasi/show/'. $investation->slug)->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/investasi/show/'. $validated['uuid'])->with('success', 'Update Agenda Successfully');

    }

    public function destroy(Investation $investation){

        $data = Investation::find($investation->id);

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
