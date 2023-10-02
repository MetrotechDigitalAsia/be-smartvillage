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
        $this->folderName = 'masterData.admin';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = Admin::where('fullname', 'like', '%'.$param.'%')
                    ->latest()
                    ->orWhere('email', 'like', '%'.$param.'%')
                    ->get();
            

            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(Admin $admin){
        $categories = ['Super', 'Umum', 'Layanan', 'Pariwisata'];
        return view('admin.'.$this->folderName.'.form', compact('admin', 'categories'));
    }

    public function create(){
        $categories = ['Super', 'Umum', 'Layanan', 'Pariwisata'];
        return view('admin.'.$this->folderName.'.form', compact('categories'));
    }
    
    public function store(Request $request){

        $data = $request->validate([
            'fullname' => 'required',
            'email' => 'email|required|unique:admin',
            'password' => 'required',
            'repassword' => 'required',
            'status' => 'required',
            'type' => 'required'
        ]);

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
            'status' => 'required',
            'type' => 'required'
        ]);

        try {
            $admin->update($data);
            $msg = 'update successfully';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/master-data/admin')->with('success', $msg);

    }

    function destroy(Admin $admin){

        $admin->delete();

        try {
            $admin->delete();
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
