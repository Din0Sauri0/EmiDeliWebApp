<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GananciaController;
use App\Http\Controllers\WebServiceController;
use App\Models\Ganancia;
use App\Http\Livewire\RegistrarCliente;
use App\Notifications\TestNotification;
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

Route::controller(UserController::class)->group(function(){
    Route::get('/login', [UserController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login',[UserController::class, 'login'])->name('login_ingresar')->middleware('guest');

    Route::post('/logout',[UserController::class, 'logout'])->name('logout');
});
Route::controller(PedidoController::class)->middleware('auth')->group(function(){
    Route::get('/pedido', [PedidoController::class, 'index'])->name('pedido');
    Route::get('/pedido/cargar', [PedidoController::class, 'show']);
    Route::post('/pedido/registro', [PedidoController::class, 'create'])->name('registro_pedido');
    Route::post('/pedido/{id}',[PedidoController::class, 'update'])->name('actualizar_pedido');
    Route::delete('/pedido/{id}',[PedidoController::class, 'destroy'])->name('eliminar_pedido');

    Route::get('/pedido/{id}', [PedidoController::class, 'pedido_id'])->name('pedido_id');
});
Route::controller(ClienteController::class)->middleware('auth')->group(function(){
    Route::get('/cliente',[ClienteController::class, 'index'])->name('cliente');
    // Route::post('/cliente/registro', [ClienteController::class, 'create'])->name('registro_cliente');
    // Route::post('/cliente/{id}',[ClienteController::class, 'update'])->name('actualizar_cliente');
    // Route::delete('/cliente/{id}',[ClienteController::class, 'destroy'])->name('eliminar_cliente');
});


Route::controller(GananciaController::class)->group(function(){
    Route::get('/ganancia',[GananciaController::class, 'index'])->name('ganancia');
    Route::post('/ganancia',[GananciaController::class, 'select_between'])->name('ganancia_between');

});

// Route::controller(WebServiceController::class)->group(function(){
//     Route::get('/webservice/clients', 'get_clients');
//     Route::post('/webservice/clients/add','add_clients');
//     Route::post('/webservice/user/validate','validate_user');
// });
