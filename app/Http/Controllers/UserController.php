<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view ('emideli.login');
    }

    public function login(){
        $credentials = request()->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        $remember = request()->filled('remember');

        if (Auth::attempt($credentials, $remember)){
            request()->session()->regenerate();
            return redirect()->route('pedido');
        }
        return redirect()->route('login');
    }
}
