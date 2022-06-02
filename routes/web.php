<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GananciaController;
use App\Http\Controllers\WebServiceController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [UserController::class, 'index']);


Route::controller(PedidoController::class)->group(function(){
    Route::get('/pedido', [PedidoController::class, 'index']);
    Route::get('/pedido/cargar', [PedidoController::class, 'show']);
    Route::post('/pedido/registro', [PedidoController::class, 'create'])->name('registro_pedido');
});



Route::controller(ClienteController::class)->group(function(){
    Route::get('/cliente',[ClienteController::class, 'index']);
    Route::post('/cliente/registro', [ClienteController::class, 'create'])->name('registro_cliente');
});

Route::controller(WebServiceController::class)->group(function(){
    Route::get('/webservice/clients', 'get_clients');
});