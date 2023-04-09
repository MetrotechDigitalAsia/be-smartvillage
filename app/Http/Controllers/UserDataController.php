<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class UserDataController extends Controller
{
    private $folderName;
    private $userDb;

    public function __construct(){
        $this->folderName = 'masterData.residentData';
        $this->userDb = env('DB_RESIDENT_DATABASE'). 'resident_data as userDB';
    }

    public function index(Request $request){

        $data = UserData::all();

        if($request->ajax()){

            $data = UserData::latest()->get();
                    
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(UserData $userData){
        return view('admin.'.$this->folderName.'.form', compact('userData'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'NAMA' => 'required',
            'TEMPAT_LAHIR' => 'required',
            'TANGGAL_LAHIR' => 'required',
            'SHDK' => 'nullable',
            'ALAMAT' => 'required',
            'NO_KK' => 'required',
            'NIK' => 'required',
            'JENIS_KELAMIN' => 'required',
            'UMUR' => 'nullable',
            'PEKERJAAN' => 'nullable',
            'KEWARGANEGARAAN' => 'nullable',
            'PENDIDIKAN' => 'nullable',
            'AKUN_MOBILE_APP' => 'nullable'
        ]);

        $data['uuid'] = Str::uuid()->toString();

        try {

            UserData::create($data);

            if(!isNull($data['AKUN_MOBILE_APP'])){
                UserLogin::create([
                    'no_nik' => $data['NIK'],
                    'password' => bcrypt($data['password']),
                    'status' => 'Active'
                ]);
            }

            $message = 'create user successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/master-data/data-penduduk')->with('success', $message);

    }

    public function update(Request $request, UserData $userData){

        $data = $request->validate([
            'NAMA' => 'required',
            'TEMPAT_LAHIR' => 'required',
            'TANGGAL_LAHIR' => 'required',
            'SHDK' => 'nullable',
            'ALAMAT' => 'required',
            'NO_KK' => 'required',
            'NIK' => 'required',
            'JENIS_KELAMIN' => 'required',
            'UMUR' => 'nullable',
            'PEKERJAAN' => 'nullable',
            'KEWARGANEGARAAN' => 'nullable',
            'PENDIDIKAN' => 'nullable'
        ]);

        try {
            UserData::find($userData->id)->update($data);
            $message = 'update user successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/master-data/data-penduduk')->with('success', $message);

    }

    function destroy(UserData $userData){

        $data = UserData::where('uuid', $userData->uuid);

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

    public function createMobileAccount(UserData $userData){

        try {

            UserLogin::create([
                'no_nik' => $userData['NIK'],
                'password' => bcrypt($userData['password']),
                'status' => 'Active'
            ]);

            UserData::find($userData->id)->update(['AKUN_MOBILE_APP' => true]);
            $message = 'create user mobile account successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

    }

}
