<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Yajra\DataTables\DataTables;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    private $folderName;

    public function __construct(){
        $this->folderName = 'admin';
    }

    public function index(Request $request){

        if($request->ajax()){

            $data = Admin::all();
            return DataTables::of($data)->make(true);

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(Admin $admin){
        return view('admin.'.$this->folderName.'.form', compact('admin'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }
    
    public function store(Request $request){

        $data = $request->validate([
            'fullname' => 'required',
            'email' => 'email|required|unique:admin',
            'password' => 'required',
            'repassword' => 'required',
            'status' => 'required'
        ]);

        $data['uuid'] = Str::uuid()->toString();
        $data['password'] = bcrypt($data['password']);

        try {
            Admin::create($data);
            $message = 'create data successfully';
        } catch (Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/master-data/admin')->with('success', $message);

    }

    public function update(Request $request, Admin $admin){


        $data = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'status' => 'required'
        ]);

        // dd($request);

        try {
            Admin::where('uuid', $admin->uuid)->update($data);
            $msg = 'update successfully';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/master-data/admin/show/'.$admin->uuid)->with('success', $msg);

    }

    function destroy(Admin $admin){

        $event = Admin::where('uuid', $admin->uuid);

        try {
            $event->delete();
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
