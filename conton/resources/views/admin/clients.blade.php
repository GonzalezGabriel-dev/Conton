@extends('admin.layouts.main')
@section('contenido')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            
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
                <th>Correo</th>
                <th>Nivel</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($usuarios as $p)
              <tr>
                <td><img src="{{asset('usuarios/'.$p->image_profile)}}" alt="" width="70px" height="70px"></td>
                <td>{{$p->name}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->level}}</td>
                <td><button class="btn btn-danger btn-eliminar" data-id="{{$p->id}}" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i></button>
                <button class="btn btn-primary btn-editar" data-id="{{$p->id}}" data-nombre="{{$p->name}}" data-email="{{$p->email}}" data-level="{{$p->level}}"  data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button>
                <form action="{{ url('/admin/usuarios',['id'=>$p->id])}}" method="POST" id="formEliminar_{{ $p->id}}">
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
              <h4 class="modal-title">Editar Usuarios</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/usuarios/edit" method="POST" enctype="multipart/form-data">
              @if($message=Session::get('errorEdit'))
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
                  <label for="descripcion">Correo</label>
                  <input type="text" class="form-control form-control-border" id="correoEdit" name="correo" value="{{@old('correo')}}">
              </div>
              <div class="form-group">
                  <label for="stock">Nivel</label>
                  <input type="text" min="0" class="form-control form-control-border" id="nivelEdit" name="nivel" value="{{@old('nivel')}}">
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
              <h4 class="modal-title">Eliminar Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h2 class="h6">Desea eliminar el usuario</h2>
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
        var email=$(this).data('email');
        var level=$(this).data('level');
        $("#idEdit").val(id);
        $("#nameEdit").val(name);
        $("#correoEdit").val(email);
        $("#nivelEdit").val(level);
      })
      $(".btnCloseEliminar").click(function(){
        $("#formEliminar_"+idEliminar).submit();
      });
    });
  </script>
@endSection
