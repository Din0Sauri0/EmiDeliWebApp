<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TestNotification;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Ganancia;
use Carbon\Carbon;
use DateTime;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Route;

class PedidoController extends Controller
{
    public function index(){
        date_default_timezone_set('America/Santiago');
        $clients = Cliente::all();
        $ruta = Route::currentRouteName();
        $pedidos = Pedido::all();
        
        foreach($pedidos->all() as $pedido){
            
            $fecha_actual = new DateTime("now");
            $fecha_pedido = date_create($pedido->start);
            $diferencia = date_diff($fecha_actual, $fecha_pedido);
            $dif_dia = intval($diferencia->format('%a'));
            if($fecha_pedido >= $fecha_actual){
                if ($dif_dia == 4 or $dif_dia == 0){
                    Notification::route('mail', 'gustavo.ovalle.emideli@emideli.online')->notify(new TestNotification($pedido->title, $pedido->start, $pedido->id));
                }
            }

        }
        return view('emideli.registrar_pedido', compact('clients', 'ruta'));
    }

    public function create(Request $request){
        $pedido = new Pedido();
        $ganancia = new Ganancia();

        $request->validate([
            'tipo_pedido'=>'required',
            'nombre_cliente'=>'required',
            'abono'=>'required',
            'fecha_entrega'=>'required',
            'total_pedido'=>'required',
            'descripcion'=>'required'
        ]);

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

        $date = Carbon::parse($pedido->start);
        $month = $date->format('m');
        $year = $date->format('Y');
        $ganancia->mes = $month;
        $ganancia->year = $year;
        $ganancia->total = $request->total_pedido;
        $ganancia->user_id = Auth::id();
        $ganancia->save();

        return redirect('/pedido');
    }

    public function show(){
        $pedidos = Pedido::all();
        return $pedidos;
    }

    public function pedido_id($id){
        $pedido = Pedido::findOrFail($id);
        $ruta = Route::currentRouteName();
        return view('emideli.ver_pedido', compact('pedido', 'ruta'));
        
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
