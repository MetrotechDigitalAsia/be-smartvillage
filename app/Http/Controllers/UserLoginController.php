<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Exception;
use Illuminate\Support\Str;

class UserLoginController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'userLogin';
    }

    public function index(Request $request){

        $data = UserLogin::join('getasan_residents_db.userData as userDb', 'userDb.NO_NIK', '=', 'user_logins.no_nik')->get();

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = UserLogin::join('getasan_residents_db.userData as userDb', 'userDb.NO_NIK', '=', 'user_logins.no_nik')
                    ->get();
                    
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function show(UserLogin $userLogin){

        $data = UserLogin::join('getasan_residents_db.userData as userDb', 'userDb.NO_NIK', '=', 'user_logins.no_nik')
                            ->where('uuid', $userLogin->uuid)->first();

        // dd($data);

        return view('admin.'.$this->folderName.'.form', compact('data'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function store(Request $request){

        $data = $request->validate([
            'status' => 'required',
            'NAMA_LENGKAP' => 'required',
            'TEMPAT_LAHIR' => 'required',
            'TANGGAL_LAHIR' => 'required',
            'SHDK' => 'required',
            'ALAMAT' => 'required',
            'DESA' => 'required',
            'NO_KK' => 'required',
            'NO_NIK' => 'required',
        ]);

        $data['uuid'] = Str::uuid()->toString();
        // $data['password'] = bcrypt($data['password']);

        try {
            UserData::create($data);
            UserLogin::create([
                'uuid' => $data['uuid'],
                'no_nik' => $data['NO_NIK'],
                'password' => bcrypt($data['NO_NIK']),
                'status' => $data['status']
            ]);
            $message = 'create user successfully';
        } catch (Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/master-data/user-login')->with('success', $message);

    }

    public function update(Request $request, UserLogin $userLogin){

        $data = $request->validate([
            'status' => 'required',
            'NAMA_LENGKAP' => 'required',
            'TEMPAT_LAHIR' => 'required',
            'TANGGAL_LAHIR' => 'required',
            'SHDK' => 'required',
            'ALAMAT' => 'required',
            'DESA' => 'required',
            'NO_KK' => 'required',
            'NO_NIK' => 'required',
            'uuid' => 'required',
            'id'  => 'required'
        ]);

        try {
            // UserLogin::find($userLogin->id)->update($data);

            UserData::find($data['id'])->update($data);
            UserLogin::where('uuid', $data['uuid'])->first()->update([
                'no_nik' => $data['NO_NIK'],
                'status' => $data['status']
            ]);

            $msg = 'update successfully';
        } catch (\Exception $e){
            $msg = $e->getMessage();
        }

        return redirect('/master-data/user-login')->with('success', $msg);

    }

    function destroy(UserLogin $userLogin){

        $data = UserLogin::where('uuid', $userLogin->uuid);

        try {
            UserData::where('NO_NIK', $userLogin->no_nik)->delete();
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

}
