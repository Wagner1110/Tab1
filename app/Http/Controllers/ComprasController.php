<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductosController;
use App\Models\Productos;

class ComprasController extends Controller
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
        return view('Compras/registro');
    }

    public function list()
    {
        $Comp= Compras::all();
        
        return view('Compras/list', compact('Comp'));
    }
    public function editar($id){
        $Comp = Compras::findOrFail($id);
        return view('Compras/editar', compact('Comp'));
        }

        public function guardar(Request $request)
        {
            $Compras = new Compras();
            $Compras->nombre = $request->nombre;
            $Compras->nit = $request->nit;
            $Compras->direccion = $request->direccion;
            $Compras->fecha = $request->fecha;
            $Compras->estado = $request->estado;
            $Compras->save();
            return redirect('Compras/registro');
        }

        public function eliminar($id){
            $pp = Compras::find($id);
            $pp->delete();
            return redirect()->route('Compras.list');
          }
          
          public function agregar($id){
            $productos = Productos::all();
            $cliente = Compras::findOrFail($id); 
            
            return view ('Compras/agregar', compact('productos', 'cliente'), ['Compras'=>$cliente]);
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
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource/     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit(Compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modCompras = Compras::findOrFail($id);
        $modCompras->nombre = $request->nombre;
$modCompras->nit = $request->nit;
$modCompras->direccion = $request->direccion;
$modCompras->fecha = $request->fecha;
$modCompras->estado = $request->estado;
$modCompras->save();
return redirect()->route('Compras.list');
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compras $compras)
    {
        //
    }
}
