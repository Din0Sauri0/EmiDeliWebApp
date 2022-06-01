<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//? modelos
use App\Models\Cliente;
use App\Models\User;

class WebServiceController extends Controller
{
    public function get_clients(){
        $clients = Cliente::all();

        return $clients;
    }

    public function add_clients(Request $request){
        $clients = new Cliente();

        $clients->nombre = $request->nombre;
        $clients->contacto = $request->contacto;
        $clients->direccion = $request->direccion;
        $clients->save();

        return $clients;
    }

    public function validate_user(Request $request){
        $username = $request->usuario;
        $password = $request->password;

        return 'validate_user';
    }
}
