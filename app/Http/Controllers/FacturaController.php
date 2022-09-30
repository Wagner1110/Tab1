<?php

namespace App\Http\Controllers;
use App\Models\Facturas;
use App\Models\Compras;
use App\Models\Productos;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function guardar(Request $request)
    {    
    
    $productos = new Facturas();
    $productos->id_cliente= $request->id_cliente;
    $productos->producto = $request->productos_id;
    $productos->cantidad = $request->cantidad;
    $productos->precio = $request->precio;
    $productos->total = $request->precio*$request->cantidad;
    $productos->save();
    return redirect('Factura/list'); 
    }

    public function list()
    {
    
      $productos = Facturas::all();
      return view('Factura/list', compact('productos'));
    }
}
