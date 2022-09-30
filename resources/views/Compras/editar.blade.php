@extends('plantilla')

@section('contenido')
<br>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

 
                    <form action="{{ route('Compras.update', $Comp->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


     <div class="col-md-11">
    <form>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Nit</label>
    <input type="text" class="form-control" name="nit" id="nit" value="{{$Comp->nit}}" required >
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="num" class="form-control" name="nombre" id="nombre" value="{{$Comp->nombre}}" required  >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{$Comp->direccion}}" required  >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha</label>
            <input type="date" class="form-control" name="fecha" id="fecha" value="{{$Comp->fecha}}" required  >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" value="{{$Comp->estado}}" required >
                </div>
  
   
   
    

                        <button type="submit" class="btn btn-primary col-sm-12"><i class="fas fa-save"></i>
                            Actualizar</button>
                    </form>





                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection