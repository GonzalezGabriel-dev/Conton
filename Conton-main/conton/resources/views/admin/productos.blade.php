@extends('admin.layouts.main')
@section('contenido')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal-add">
                       <i class="fa fa-plus"></i> Agregar Productos</button>
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
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Tags</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($productos as $p)
              <tr>
                <td><img src="{{asset('img/productos/'.$p->image)}}" alt="" width="70px" height="70px"></td>
                <td>{{$p->name}}</td>
                <td>{{$p->description}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->tags}}</td>
                <td><button class="btn btn-danger btn-eliminar" data-id="{{$p->id}}" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i></button>
                <button class="btn btn-primary btn-editar" data-id="{{$p->id}}" data-nombre="{{$p->name}}" data-descripcion="{{$p->description}}" data-price="{{$p->price}}" data-stock="{{$p->stock}}" data-tags="{{$p->tags}}" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button>
                <form action="{{ url('/admin/productos',['id'=>$p->id])}}" method="POST" id="formEliminar_{{ $p->id}}">
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
    <!--Modal Editar-->
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar Productos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/productos/edit" method="POST" enctype="multipart/form-data">
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
              <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control form-control-border" id="nameEdit" name="nombre" value="{{@old('nombre')}}">
              </div>
              <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <input type="text" class="form-control form-control-border" id="descriptionEdit" name="descripcion" value="{{@old('descripcion')}}">
              </div>
              <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" min="0" class="form-control form-control-border" id="stockEdit" name="stock" value="{{@old('stock')}}">
              </div>
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" min="1" class="form-control form-control-border" id="priceEdit" name="precio" value="{{@old('precio')}}">
              </div>
              <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control form-control-border" id="tagsEdit" name="tags" value="{{@old('tags')}}">
              </div>
              <div class="form-group">
                  <label for="imagen">Imagen</label>
                  <input type="file" class="form-control form-control-border" id="imagen" name="imagen" value="{{@old('imagen')}}">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!--Modal Agregar-->
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar Productos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/productos" method="POST" enctype="multipart/form-data">
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
              <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control form-control-border" id="nombre" name="nombre" value="{{@old('nombre')}}">
              </div>
              <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <input type="text" class="form-control form-control-border" id="descripcion" name="descripcion" value="{{@old('descripcion')}}">
              </div>
              <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" min="0" class="form-control form-control-border" id="stock" name="stock" value="{{@old('stock')}}">
              </div>
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" min="1" class="form-control form-control-border" id="precio" name="precio" value="{{@old('precio')}}">
              </div>
              <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control form-control-border" id="tags" name="tags" value="{{@old('tags')}}">
              </div>
              <div class="form-group">
                  <label for="imagen">Imagen</label>
                  <input type="file" class="form-control form-control-border" id="imagen" name="imagen" value="{{@old('imagen')}}">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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