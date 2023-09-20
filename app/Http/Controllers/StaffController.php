<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Article;
use App\Models\Position;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'masterData.staff';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = Staff::where('fullname', 'like', '%'.$param.'%')
                    ->orWhere('email', 'like', '%'.$param.'%')
                    ->latest()
                    ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        $staffPria = Staff::where('gender','Laki-Laki')->count();
        $staffWanita = Staff::where('gender','Perempuan')->count();
        $total = Staff::count();

        return view('admin.'.$this->folderName.'.index', compact('staffPria', 'staffWanita', 'total'));
    }

    public function create(){
        $positions = Position::all();
        return view('admin.'.$this->folderName.'.form', compact('positions'));
    }

    public function show(Staff $staff){
        $positions = Position::all();
        return view('admin.'.$this->folderName.'.form', compact('positions','staff'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'fullname' => 'required',
            'id_position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required',
            'status' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required'
        ]);

        $validated['uuid'] = Str::uuid()->toString();
        $validated['image'] = $request->file('image')->store('staff');

        try {
            Staff::create($validated);
        } catch (\Exception $e){
            return redirect('/master-data/staff/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('master-data/staff')->with('success', 'create staff successfully');

    }

    public function update(Request $request, Staff $staff){
        
        $validated = $request->validate([
            'fullname' => 'required',
            'id_position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required'
        ]);

        if($request->image){
            Storage::delete($staff->image);
            $validated['image'] = $request->file('image')->store('staff');
        }

        try {
            Staff::find($staff->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/master-data/staff/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/staff')->with('success', 'update staff successfully');

    }

    function destroy(Staff $staff){

        $data = Staff::find($staff->id);

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
