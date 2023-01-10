<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class UserLoginController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'userLogin';
    }

    public function index(Request $request){

        if($request->ajax()){
            $data = UserLogin::all();
            return DataTables::of($data)->make(true);
        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(UserLogin $userLogin){
        return view('admin.'.$this->folderName.'.form', compact('userLogin'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function store(Request $request){

        $data = $request->validate([
            'no_nik' => 'required',
            'password' => 'required',
            'repassword' => 'required',
            'status' => 'required'
        ]);

        if($request->password != $request->repassword){
            return redirect('/master-data/user-login/create')->with('error', 'password and re-password must be same');
        }

        $data['uuid'] = Str::uuid()->toString();
        $data['password'] = bcrypt($data['password']);

        try {
            UserLogin::create($data);
            $message = 'create data successfully';
        } catch (Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/master-data/user-login')->with('success', $message);

    }

    public function update(Request $request, UserLogin $userLogin){

        $data = $request->validate([
            'no_nik' => 'required',
            'status' => 'required'
        ]);

        try {
            UserLogin::find($userLogin->id)->update($data);
            $msg = 'update successfully';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/master-data/user-login/show/'.$userLogin->uuid)->with('success', $msg);

    }

    function destroy(UserLogin $userLogin){

        $event = UserLogin::where('uuid', $userLogin->uuid);

        try {
            $event->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
            'route' => "UserLogin"
        ]);
    }

}
