<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){
        $clients = Cliente::all();
        return view('emideli.registrar_pedido', compact('clients'));
    }

    public function create(Request $request){
        $pedido = new Pedido();

        if ($request->abono > $request->total_pedido){
            return redirect('/pedido')->with('muchaplata', 'El abono no debe ser mayor al total del pedido');
        };

        $pedido->tipo_pedido = $request->tipo_pedido;
        $pedido->title = $request->nombre_cliente;
        $pedido->abono = $request->abono;
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $uploads = 'img/Uploads/';
            $file_name = time().'-'.$file->getClientOriginalName();
            $success = $request->file('imagen')->move($uploads, $file_name);
            $pedido->imagen = $uploads.$file_name;
        };
        $pedido->start = $request->fecha_entrega;
        $pedido->end = $request->fecha_entrega;
        $pedido->total = $request->total_pedido;
        $pedido->descripcion = $request->descripcion;

        $pedido->save();

        return redirect('/pedido');
    }

    public function show(){
        $pedidos = Pedido::all();
        return $pedidos;

    }

    public function pedido_id($id){
        $pedido = Pedido::findOrFail($id);

        return view('emideli.ver_pedido', compact('pedido'));
        
    }
    public function destroy($id){
        $nombreCliente = Pedido::find($id);
        Pedido::destroy($id);

        return redirect('/pedido')->with('destroy','El pedido de '.$nombreCliente->title.' ha sido eliminado');
    }
    public function update($id, Request $request){
        $pedido = Pedido::find($id);

        if ($request->abono > $request->total_pedido){
            return redirect('/pedido/{$id}')->with('muchaplata', 'El abono no debe ser mayor al total del pedido');
        };

        $pedido->tipo_pedido = $request->tipo_pedido;
        $pedido->title = $request->nombre_cliente;
        $pedido->abono = $request->abono;
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $uploads = 'img/Uploads/';
            $file_name = time().'-'.$file->getClientOriginalName();
            $success = $request->file('imagen')->move($uploads, $file_name);
            $pedido->imagen = $uploads.$file_name;
        };
        $pedido->start = $request->fecha_entrega;
        $pedido->end = $request->fecha_entrega;
        $pedido->total = $request->total_pedido;
        $pedido->descripcion = $request->descripcion;

        $pedido->save();   
    
        return redirect('/pedido/'.$pedido->id)->with('update','El pedido ha sido actualizado');
    }
}
