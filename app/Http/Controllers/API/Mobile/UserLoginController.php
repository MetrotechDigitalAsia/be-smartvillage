<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\UserData;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    protected $userDb;

    public function __construct(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.residents_data as userDb';
    }

    public function login(UserLoginRequest $request){


        if(Auth::guard('resident')->attempt(['no_nik' => request()->get('nik'), 'password' => request()->get('password'), 'status' => 'Active'])){

            $data = UserLogin::join($this->userDb, 'userDb.no_nik', '=', 'user_logins.no_nik')
                    ->where('user_logins.no_nik', request()->get('nik'))
                    ->first([
                        'user_logins.id',
                        'userDb.id as resident_id',
                        'userDb.nama as name',
                        'userDb.no_nik as nik',
                        'userDb.no_kk as kk',
                        'userDb.alamat as address',
                        'userDb.jenis_kelamin as sex'
                    ]);

            $family = UserData::where('no_kk', function($query) use ($data) {
                $query->from('residents_data')
                ->select('no_nik')
                ->where('no_nik', $data->nik)->first();
            })->get([
                'id as resident_id', 
                'NO_KK as kk', 
                'NAMA as name',
                'ALAMAT as address',
                'SHDK as status'
            ]);

            $data->family = $family;


            return ResponseController::create($data, 'success', 'login berhasil', 200);
        }


        return ResponseController::create(null, 'error', 'Data Tidak Terdaftar', 200);

    }

    public function changePassword(ChangePasswordRequest $request, UserLogin $userLogin){

        $valid = [
            'no_nik' => $userLogin['no_nik'],
            'password' => request()->get('password')
        ];

        if(!Auth::guard('resident')->attempt($valid)){
            return ResponseController::create(null, 'error', 'kata Sandi Salah', 200);
        }
        
        if(request()->get('new_password') != request()->get('confirm_password')){
            return ResponseController::create(null, 'error', 'Konfirmasi kata Sandi Salah', 200);
        }

        $userLogin->update(['password' => bcrypt(request()->get('new_password'))]);

        return ResponseController::create('', 'success', 'Kata Sandi Berhasil diganti', 200);


    }

    public function getUserToken(Request $request, $userLogin){
        UserLogin::where('id',$userLogin)->first()->update(['fcm' => $request->token]);
        return ResponseController::create($request->token, 'success', 'Token Berhasil Disimpan', 200);
    }
}
