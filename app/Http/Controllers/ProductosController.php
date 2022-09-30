<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Productos/registro');
    }
    public function list()
    {
        $produc = Productos::all();
        
        return view('Productos/list', compact('produc'));
    }
    public function editar($id){
    $prodc = Productos::findOrFail($id);
    return view('Productos/editar', compact('prodc'));
    }
    public function guardar(Request $request)
    {
        $producto = new Productos();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->save();
        return redirect('Productos/registro');
    }
    
    public function eliminar($id){
      $pp = Productos::find($id);
      $pp->delete();
      return redirect()->route('productos.list');
    }

   
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modproducto = Productos::findOrFail($id);
        $modproducto->nombre = $request->nombre;
$modproducto->precio = $request->precio;
$modproducto->descripcion = $request->descripcion;
$modproducto->cantidad = $request->cantidad;
$modproducto->save();
return redirect()->route('productos.list');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
