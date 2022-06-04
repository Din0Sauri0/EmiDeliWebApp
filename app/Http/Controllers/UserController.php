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
        $credentials = request()->only('email','password');

        if (Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect('/pedido');
        }
        return redirect('/login');
    }
}
