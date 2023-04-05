<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class AgendaController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'informasiDesa.agenda';
    }
    
    public function index(Request $request){
        
        if($request->ajax()){
            
            $param = $request->get('query')['generalSearch'] ?? '';

            $data = Agenda::where('title', 'like', '%'.$param.'%')
                            ->orWhere('author', 'like', '%'.$param.'%')->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(Agenda $agenda){
        return view('admin.'.$this->folderName.'.form', compact('agenda'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'author' => 'required',
            'date' => 'required'
        ]);

        $validated['slug'] = str_replace(' ', '-', Str::lower($request->title));

        try {
            Agenda::create($validated);
        } catch (\Exception $e){
            return redirect('/informasi-desa/agenda/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/agenda')->with('success', 'create agenda point successfully');

    }

    public function update(Agenda $agenda, Request $request){

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'author' => 'required',
            'date' => 'required'
        ]);

        $validated['slug'] = str_replace(' ', '-', Str::lower($request->title));

        try {
            Agenda::find($agenda->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/informasi-desa/agenda/show/'. $agenda->slug)->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/agenda')->with('success', 'Update Agenda Successfully');

    }

    public function destroy(Agenda $agenda){

        $data = Agenda::find($agenda->id);

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
