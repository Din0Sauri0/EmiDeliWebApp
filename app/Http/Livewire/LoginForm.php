<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{

    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
        'remember' => 'nullable'
    ];

    public function save()
    {
        $validate = $this->validate();
        $remember = array_pop($validate);

        if(Auth::attempt($validate, $remember))
        {
            request()->session()->regenerate();
            return redirect()->route('pedido');
        }
        
        return redirect()->route('login');

    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
