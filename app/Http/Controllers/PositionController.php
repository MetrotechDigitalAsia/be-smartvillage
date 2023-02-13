<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PositionController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'position';
    }

    public function index(Request $request){

        if($request->ajax()){
            $data = Position::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 
        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName. '.form');
    }
    
    public function show(Position $position){
        return view('admin.'.$this->folderName. '.form', compact('position'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'position_name' => 'required',
        ]);

        try {
            Position::create($validated);
        } catch (\Exception $e){
            return redirect('/master-data/position/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/position')->with('success', 'create position successfully');

    }

    public function update(Request $request, Position $position){
        
        $validated = $request->validate([
            'position_name' => 'required'
        ]);

        try {
            Position::find($position->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/master-data/position/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/position')->with('success', 'update position successfully');

    }

    function destroy(Position $position){

        $data = Position::find($position->id);

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
