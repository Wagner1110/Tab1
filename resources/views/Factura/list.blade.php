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
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>precio</th>
                    <th>total</th>
                    <th>fecha</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($productos as $product)
                            <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->producto }}</td>
                                    <td>{{ $product->cantidad }}</td>
                                    <td>{{ $product->precio }}</td>
                                    <td>{{ $product->total }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>precio</th>
                    <th>total</th>
                    <th>fecha</th>
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