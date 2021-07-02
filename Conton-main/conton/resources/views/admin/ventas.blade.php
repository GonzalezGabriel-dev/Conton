@extends('admin.layouts.main')
@section('contenido')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Ventas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a class="btn btn-outline-primary btn-sm" target="_blank" href="{{url('admin/generarPDF')}}">
                       <i class="fa fa-print"></i> Generar PDF</a>
                </li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        @if($message=Session::get('Listo'))
                <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
                  <h5>Listo:</h5>
                  <p>{{$message}}</p>
                </div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th>Producto </th>
                <th>Cliente</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Fecha</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($order as $p)
              <tr>
                <td>{{$p->name}}</td>
                <td>{{$p->name_client}}</td>
                <td>{{$p->quantity}}</td>
                <td>{{$p->amount}}</td>
                <td>{{$p->date}}</td>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endSection
@section('script')
  <script>
    var idEliminar=-1;
    $(document).ready(function(){
      @if($message=Session::get('errorInsertar'))
        $("#modal-add").modal('show')
        
      @endif
      @if($message=Session::get('errorEdit'))
        $("#modal-edit").modal('show')
      @endif
      $(".btn-eliminar").click(function(){
        var id=$(this).data('id');
        idEliminar=id;
      })
      $(".btn-editar").click(function(){
        var id=$(this).data('id');
        var name=$(this).data('nombre');
        var description=$(this).data('descripcion');
        var precio=$(this).data('price');
        var stock=$(this).data('stock');
        var tags=$(this).data('tags');
        $("#idEdit").val(id);
        $("#nameEdit").val(name);
        $("#descriptionEdit").val(description);
        $("#priceEdit").val(precio);
        $("#stockEdit").val(stock);
        $("#tagsEdit").val(tags);
      })
      $(".btnCloseEliminar").click(function(){
        console.log("Funciona");
        //$("#formEliminar_"+idEliminar).submit();
      });
    });
  </script>
@endSection