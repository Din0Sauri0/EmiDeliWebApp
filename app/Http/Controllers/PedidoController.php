<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){
        return view('emideli.registrar_pedido');
    }

    public function create(Request $request){
        $pedido = new Pedido();


        $pedido->tipo_pedido = $request->tipo_pedido;
        $pedido->nombre_cliente = $request->nombre_cliente;
        $pedido->abono = $request->abono;
        $pedido->fecha_entrega = $request->fecha_entrega;
        $pedido->imagen = $request->imagen;
        $pedido->total = $request->total_pedido;
        $pedido->descripcion = $request->descripcion;

        $pedido->save();

        return view ('emideli.registrar_pedido');
    }
}
