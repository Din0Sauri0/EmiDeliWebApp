<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create(){
        return view ('emideli.registrar_cliente');
    }
    public function store(){
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->contacto = $request->contacto;
        $cliente->direccion = $request->direccion;

        /*FALTA LA LA LLAVE FORANEA USER*/

        $cliente->save();
    }
}
