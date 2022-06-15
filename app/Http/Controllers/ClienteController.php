<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ClienteController extends Controller
{
    public function index(){
        $clients= Cliente::all();
        $ruta = Route::currentRouteName();
        return view ('emideli.registrar_cliente', compact('clients', 'ruta'));
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
    public function destroy($id){
        Cliente::destroy($id);
        return redirect('/cliente')->with('destroy','El cliente ha sido eliminado');
    }
    public function update(Request $request, $id){
        $cliente = Cliente::find($id);
        
        $cliente->nombre = $request->nombre;
        $cliente->contacto = $request->contacto;
        $cliente->direccion = $request->direccion;

        $cliente->save();

        return redirect('/cliente')->with('update','El cliente ha sido modificado');
    }
}
