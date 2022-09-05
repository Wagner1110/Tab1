<?php

use App\Http\Controllers\ProductosController;
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

//PRODUCTOS
Route::get('/Productos/registro',[ProductosController::class,'create'])->name('productos.registro');
Route::get('/Productos/list',[ProductosController::class,'list'])->name('productos.list');
Route::post('/Productos/guardar', [ProductosController::class, 'guardar'])->name('productos.guardar');
Route::get('/Productos/editar/{iden}',[ProductosController::class,'editar'])->name('productos.editar');
Route::put('/Productos/update/{iden}',[ProductosController::class, 'update'])->name('productos.update');
Route::get('/Productos/eliminar/{iden}',[ProductosController::class, 'eliminar'])->name('productos.eliminar');

/*
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.crear');
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
