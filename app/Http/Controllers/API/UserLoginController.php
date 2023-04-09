<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{


    protected $userDb;

    public function __construct(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
    }

    public function login(UserLoginRequest $request){

        if(Auth::guard('resident')->attempt(['no_nik' => request()->get('nik'), 'password' => request()->get('password'), 'status' => 'Active'])){

            $data = UserLogin::join($this->userDb, 'userDb.NIK', '=', 'user_logins.no_nik')
                                ->where('user_logins.no_nik', request()->get('nik'))
                                ->first([
                                    'userDb.id',
                                    'userDb.NAMA as name',
                                    'userDb.NIK as nik',
                                    'userDb.ALAMAT as address',

                                ]);

            return ResponseController::create($data, 'success', 'login berhasil', 200);
        }


        return ResponseController::create(null, 'error', 'Data Tidak Terdaftar', 401);

    }

    public function changePassword(ChangePasswordRequest $request, $id){

        $user = UserLogin::where('uuid', $id)->first();

        $valid = [
            'no_nik' => $user['no_nik'],
            'password' => request()->get('password')
        ];

        if(!Auth::guard('resident')->attempt($valid)){
            return ResponseController::create(null, 'error', 'kata Sandi Salah', 401);
        }
        
        if(request()->get('new_password') != request()->get('confirm_password')){
            return ResponseController::create(null, 'error', 'Konfirmasi kata Sandi Salah', 401);
        }

        UserLogin::where('uuid', $id)->update(['password' => bcrypt(request()->get('new_password'))]);

        $data = UserLogin::join('getasan_residents_db.userData as userDb', 'userDb.NO_NIK', '=', 'user_logins.no_nik')->find($user->id);
        
        return ResponseController::create($data, 'success', 'Kata Sandi Berhasil diganti', 200);


    }


}
