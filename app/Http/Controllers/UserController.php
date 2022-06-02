<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view ('emideli.login');
    }

    public function login(){
        $credentials = request()->only('email','password');

        dump ($credentials);
       /* return redirect('/pedido');*/
    }
}
