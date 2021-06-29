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
    return view('index');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/producto', [App\Http\Controllers\HomeController::class, 'index'])->name('producto');
Route::group(['prefix'=>'admin','as'=>'admin.'],function(){  
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class,'index']);
    Route::get('/usuarios', [App\Http\Controllers\Admin\UsuariosController::class,'index']);
    Route::get('/clientes', [App\Http\Controllers\Admin\ClientesController::class,'index']);
    Route::get('/productos', [App\Http\Controllers\Admin\ProductosController::class,'index']);
    Route::get('/ventas', [App\Http\Controllers\Admin\ProductosController::class,'index']);
    Route::get('/generarPDF', [App\Http\Controllers\Admin\VentasController::class,'generar']);
    Route::get('/comprar', [App\Http\Controllers\Admin\CompraController::class,'index']);
    Route::get('/compra', [App\Http\Controllers\Admin\ComprarController::class,'index']);
    Route::get('/pedidoCliente', [App\Http\Controllers\Admin\PedidoClienteController::class,'index']);
    Route::post('/productos/edit', [App\Http\Controllers\Admin\ProductosController::class,'edit']);
    Route::post('/usuarios/edit', [App\Http\Controllers\Admin\UsuariosController::class,'edit']);
    Route::post('/compra/generar', [App\Http\Controllers\Admin\ComprarController::class,'generar']);
    Route::post('/compra/cliente', [App\Http\Controllers\Admin\ComprarController::class,'cliente']);
    Route::post('/pedidos/edit', [App\Http\Controllers\Admin\PedidoController::class,'edit']);
    Route::get('/categorias', function () { return view('admin.categorias'); });
    Route::resource('productos',App\Http\Controllers\Admin\ProductosController::class);
    Route::resource('usuarios',App\Http\Controllers\Admin\UsuariosController::class);
    Route::resource('clientes',App\Http\Controllers\Admin\ClientesController::class);
    Route::resource('pedidos',App\Http\Controllers\Admin\PedidoController::class);
    Route::resource('pedidosCliente',App\Http\Controllers\Admin\PedidoClienteController::class);
    Route::resource('ventas',App\Http\Controllers\Admin\VentasController::class);
    Route::resource('comprar',App\Http\Controllers\Admin\CompraController::class);
    Route::resource('compra',App\Http\Controllers\Admin\ComprarController::class);
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
