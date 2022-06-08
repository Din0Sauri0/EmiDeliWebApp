<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function index(){

        $clients= Cliente::all();
        return view ('emideli.registrar_cliente', compact('clients'));
    }
    public function create(Request $request ){
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->contacto = $request->contacto;
        $cliente->direccion = $request->direccion;
        $cliente->user_id= auth()->id();

        $cliente->save();

        return redirect('/cliente');
    }

}
