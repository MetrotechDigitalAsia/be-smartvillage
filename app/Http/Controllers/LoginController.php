<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index(){
        return view('login');
    }

    public function auth(Request $request){

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt([...$validated, 'status' => 'Active'])){
            $request->session()->regenerate();
            return redirect()->intended('/tourism-map');
            die;
        }

        return back()->withErrors('loginFailed', 'login gagal');
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
