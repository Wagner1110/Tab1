@extends('plantilla')

@section('contenido')
<br>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

 
                    <form action="{{ route('productos.update', $prodc->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <!-- /.DATOS PRODUCTOS -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Registro de productos</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="nombre">Nombre del producto</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre" value="{{$prodc->nombre}}" required>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="precio">Precio</label>
                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Q</span>
                                            </div>
                                            <input type="number" id="precio" name="precio" class="form-control" value="{{$prodc->precio}}" required>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <textarea rows="5" class="form-control" name="descripcion" id="descripcion"
                                                placeholder="Descripcion del producto"> {{$prodc->descripcion}} </textarea>

                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" name="cantidad" class="form-control" id="cantidad" value="{{$prodc->cantidad}}" required>
                                </div>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- FIN DATOS CITAS -->

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