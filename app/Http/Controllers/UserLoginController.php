<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserLoginController extends Controller
{
    private $folderName;
    private $userDb;

    public function __construct(){
        $this->folderName = 'masterData.userLogin';
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.residents_data as userDB';
    }

    public function index(Request $request){

        // $data = UserLogin::join($this->userDb, 'userDB.no_nik', '=', 'user_logins.no_nik')->get(['userDB.no_nik', 'userDB.nama as name', 'user_logins.id']);
        // dd($data);

        if($request->ajax()){
            
            $param = $request->get('query')['generalSearch'] ?? '';
            
            $data = UserLogin::join($this->userDb, 'userDB.no_nik', '=', 'user_logins.no_nik')->get(['userDB.no_nik as nik', 'userDB.nama as name', 'user_logins.id']);
                    
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(UserLogin $userLogin){

        $data = UserLogin::join($this->userDb, 'userDB.no_nik', '=', 'user_logins.no_nik')
                            ->where('user_logins.id', $userLogin->id)
                            ->first(['userDB.nama as name', 'userDB.no_nik as nik', 'user_logins.status', 'user_logins.id']);
        return view('admin.'.$this->folderName.'.form', compact('data'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }


    public function update(Request $request, UserLogin $userLogin){


        try {

            UserLogin::find($userLogin->id)->update([
                'status' => $request['status']
            ]);

            $msg = 'update successfully';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/master-data/user-login')->with('success', $msg);

    }

    function destroy(UserLogin $userLogin){

        $data = UserLogin::find($userLogin->id);

        try {
            UserData::where('no_nik', $userLogin->no_nik)->first()->update([ 'AKUN_MOBILE_APP' => 0 ]);
            $data->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
            'route' => "UserLogin"
        ]);
    }

    public function getToken(Request $request){
        return $request->token;
    }

}
