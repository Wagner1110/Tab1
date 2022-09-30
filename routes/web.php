<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ComprasController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FacturaController;

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

//COMPRAS
Route::get('/Compras/registro',[ComprasController::class,'create'])->name('Compras.registro');
Route::get('/Compras/list',[ComprasController::class,'list'])->name('Compras.list');
Route::post('/Compras/guardar', [ComprasController::class, 'guardar'])->name('Compras.guardar');
Route::put('/Compras/update/{iden}',[ComprasController::class, 'update'])->name('Compras.update');
Route::get('/Compras/editar/{iden}',[ComprasController::class,'editar'])->name('Compras.editar');
Route::get('/Compras/eliminar/{iden}',[ComprasController::class, 'eliminar'])->name('Compras.eliminar');
Route::get('Compras/agregar/{iden}',[ComprasController::class, 'agregar'])->name('compras.agregar');
Route::post('/Factura/guardar', [FacturaController::class, 'guardar'])->name('factura.guardar');
Route::get('/Factura/list', [FacturaController::class, 'list'])->name('facturas.list');

//DETALLE DE FACTURA


/*
//USUARIOS

Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.crear');
*/
Route::get('/logout', [Controller::class, 'logout'])->name('logout');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('principal');
    })->name('dashboard');
});
