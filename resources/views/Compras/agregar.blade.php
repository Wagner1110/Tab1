@extends('plantilla')

@section('contenido')

<form action="{{ route('factura.guardar') }} "method="POST" enctype="multipart/form-data">
  @csrf
  
  <div class="col-md-11">
  <div class="form-grup">   
    <div class="form-group">
      <label for="exampleInputPassword1">ID</label>
      <input type="text" class="form-control" name="id_cliente" id="id_cliente" value="{{$cliente->id}}" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nombre</label>
        <input class="form-control" name="" id="" value="{{$cliente->nombre}}" >
        </div>     
 <br>
    <label for="">Productos</label>
    <select name="productos_id" id= "productos_id" class="form-control" >
      <option value="">--Seleccione un Producto--</option>
      @foreach($productos as $product)
      <option value="{{$product['nombre']}} ">{{ $product['nombre'] }} </option>
      @endforeach
    </select>
<br>
<div class="form-group">
  <label for="exampleInputPassword1">Precio</label>
  <input type="number" class="form-control" name="precio" id="precio" >
  </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Cantidad</label>
        <input type="num" class="form-control" name="cantidad" id="cantidad" >
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
</div>
</div>
      @endsection
