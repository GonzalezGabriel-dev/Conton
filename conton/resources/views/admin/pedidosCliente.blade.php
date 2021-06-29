@extends('admin.layouts.main')
@section('contenido')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Mis pedidos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                
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
                <td>${{$p->total}}</td>
                <td>{{$p->date}}</td>
                <td><button class="btn btn-danger btn-eliminar" title="Cancelar pedido" data-id="{{$p->id}}" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i></button>
                <form action="{{ url('/admin/pedidosCliente',['id'=>$p->id])}}" method="POST" id="formEliminar_{{ $p->id}}">
                @csrf
                <input type="hidden" name="id" value="{{$p->id}}">
                <input type="hidden" name="_method" value="delete">
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cancelar pedido</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h2 class="h6">Desea cancelar el producto</h2>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-danger btnCloseEliminar">Cancelar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->  
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
        var cliente=$(this).data('clienten');
        var clientes=$(this).data('cliente');
        var producto=$(this).data('producto');
        var cantidad=$(this).data('cantidad');
        var total=$(this).data('total');
        var fecha=$(this).data('fecha');
        $("#idEdit").val(id);
        $("#idClient").val(clientes);
        $("#idProduct").val(producto);
        $("#nameEdit").val(name);
        $("#descriptionEdit").val(cliente);
        $("#priceEdit").val(total);
        $("#priceEdit1").val(total);
        $("#stockEdit").val(cantidad);
        $("#stockEdit1").val(cantidad);
        $("#fecha").val(fecha);
        $("#fecha1").val(fecha);
      })
      $(".btnCloseEliminar").click(function(){
        console.log("Funciona");
        $("#formEliminar_"+idEliminar).submit();
      });
    });
  </script>
@endSection