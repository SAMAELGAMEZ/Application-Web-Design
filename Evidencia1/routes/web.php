<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

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

// Usando resource para simplificar las rutas RESTful
Route::resource('pedido', PedidoController::class);

// Definiendo las rutas manualmente, en caso de que quieras tener un mayor control
/*
// Definiendo las rutas manualmente, en caso de que quieras tener un mayor control
Route::get('pedido', [PedidoController::class, 'index'])->name('pedido.index'); 
Route::post('pedido', [PedidoController::class, 'store'])->name('pedido.store'); 
Route::get('pedido/create', [PedidoController::class, 'create'])->name('pedido.create'); 
Route::get('pedido/{id}', [PedidoController::class, 'show'])->name('pedido.show'); 
Route::patch('pedido/{id}', [PedidoController::class, 'update'])->name('pedido.update'); 
Route::delete('pedido/{id}', [PedidoController::class, 'destroy'])->name('pedido.destroy'); 
Route::get('pedido/{id}/edit', [PedidoController::class, 'edit'])->name('pedido.edit');

*/