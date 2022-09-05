@extends('plantilla')

@section('contenido')
<br>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio(s)</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($produc as $product)
                            <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->nombre }}</td>
                                    <td>Q. {{ $product->precio }}</td>
                                    <td>{{ $product->descripcion }}</td>
                                    <td>{{ $product->cantidad }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td> 
                                    <a href="{{ route('productos.editar', $product->id) }}"
                                            class="btn btn-warning" title="Editar"><i
                                            class="fas fa-user-edit"></i></a>
                                            <a href="{{ route('productos.eliminar', $product->id) }}"
                                            class="btn btn-danger" title="eliminar"><i
                                            class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio(s)</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection