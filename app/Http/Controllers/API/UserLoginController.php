<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{

    public function login(UserLoginRequest $request){

        if(Auth::guard('resident')->attempt(['no_nik' => request()->get('nik'), 'password' => request()->get('password')])){

            $data = UserLogin::join('getasan_residents_db.userData as userDb', 'userDb.NO_NIK', '=', 'user_logins.no_nik')
                                ->where('user_logins.no_nik', request()->get('nik'))->first();

            return ResponseController::create($data, 'success', 'login berhasil', 200);
        }


        return ResponseController::create(null, 'error', 'Data Tidak Terdaftar', 401);

    }

    public function changePassword(ChangePasswordRequest $request, $id){

        $user = UserLogin::find($id);

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

        $data = UserLogin::join('getasan_residents_db.userData as userDb', 'userDb.NO_NIK', '=', 'user_logins.no_nik')->find($id);
        
        return ResponseController::create($data, 'success', 'Kata Sandi Berhasil diganti', 200);


    }


}
