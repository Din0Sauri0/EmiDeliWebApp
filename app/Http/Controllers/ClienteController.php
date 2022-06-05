<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function index(){
        return view ('emideli.registrar_cliente');
    }
    public function create(Request $request){
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->contacto = $request->contacto;
        $cliente->direccion = $request->direccion;

        /*FALTA LA LA LLAVE FORANEA USER*/

        $cliente->save();
    }
}
