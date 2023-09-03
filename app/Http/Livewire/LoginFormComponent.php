<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginFormComponent extends Component
{

    public $email;
    public $password;
    public $type = 'password';

    protected $messages = [
        'email.required' => 'Email harus diisi',
        'password.required' => 'Password harus diisi',
    ];

    public function render()
    {
        return view('livewire.login-form-component');
    }

    public function handleSubmit(){

        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([ 'email' => $this->email, 'password' => $this->password])){
            switch (Auth::user()->type) {
                case 'Super':
                    return redirect()->intended('/');
                    break;
                case 'Umum':
                    return redirect()->intended('/');
                    break;
                case 'Pariwisata':
                    return redirect()->intended('/');
                    break;
                case 'Layanan':
                    return redirect()->intended('/');
                    break;
            }

        }  
        
        $this->emit('loginFailed');
        return;

    }

    public function changePasswordVisibilty(){
        $this->type = $this->type == 'password' ? 'text' : 'password';
        // if($this->type == 'password') $this->type = 'text';
        // else $this->type = 'password';
    }
}
