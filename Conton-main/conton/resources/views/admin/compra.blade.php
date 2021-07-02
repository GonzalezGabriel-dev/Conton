@extends('admin.layouts.main')
@section('contenido')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Comprar</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    @if($message=Session::get('Listo'))
                <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
                  <h5>Listo:</h5>
                  <p>{{$message}}</p>
                </div>
          @endif
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
          @foreach($producto as $p)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">

                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7 pt-4">
                      <h2 class="lead"><b>{{$p->name}}</b></h2>
                      <p class="text-muted text-sm"><b>Precio: </b>{{$p->price}}</p>
                    </div>
                    <div class="col-5 text-center pt-4">
                      <img src="{{asset('img/productos/'.$p->image)}}" alt="user-avatar" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="{{url('admin/compra?id='.$p->id)}}" class="btn btn-md btn-primary">
                       Ver producto
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
        
        <!-- /.card-body -->
        
        <!-- /.card-footer -->
      </div>
      </div>
      <!-- /.card -->

    

     

    
    <!--Modal Editar-->
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">CONFIRMAR PEDIDO</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/pedidos/edit" method="POST" enctype="multipart/form-data">
              @if($message=Session::get('errorInsertar'))
                <div class="alert alert-danger alert-dismissable fade show col-12" role="alert">
                  <h5>Error</h5>
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>

              @endif
                @csrf
            <div class="modal-body">
            <input type="hidden" id="idEdit" name="id">
            <input type="hidden" id="idProduct" name="id_product">
            <input type="hidden" id="idClient" name="id_client">
            <input type="hidden"  id="stockEdit" name="quantity">
            <input type="hidden"  id="priceEdit" name="precio">
            <input type="hidden"  id="fecha" name="date">
              <div class="form-group">
                  <label for="nombre">Nombre del producto</label>
                  <input type="text" disabled class="form-control form-control-border" id="nameEdit" name="nombre" value="{{@old('nombre')}}">
              </div>
              <div class="form-group">
                  <label for="descripcion">Nombre del cliente</label>
                  <input type="text" disabled class="form-control form-control-border" id="descriptionEdit" name="descripcion" value="{{@old('descripcion')}}">
              </div>
              <div class="form-group">
                  <label for="stock">Cantidad</label>
                  <input type="text" disabled class="form-control form-control-border" id="stockEdit1"  value="{{@old('stock')}}">
              </div>
              <div class="form-group">
                <label for="precio">Total</label>
                <input type="text" disabled class="form-control form-control-border" id="priceEdit1"  value="{{@old('precio')}}">
              </div>
              <div class="form-group">
                  <label for="tags">Fecha</label>
                  <input type="text" disabled class="form-control form-control-border" id="fecha1"  value="{{@old('tags')}}">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Enviar pedido</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Eliminar Productos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h2 class="h6">Desea eliminar el producto</h2>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-danger btnCloseEliminar">Eliminar</button>
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
$(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
  </script>
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