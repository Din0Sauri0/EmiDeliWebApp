<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/registro_pedido', function(){
    return view('emideli.registrar_pedido');
});

Route::get('/login', function(){
    return view('emideli.login');
});

Route::get('/registro_cliente', function(){
    return view('emideli.registrar_cliente');
});