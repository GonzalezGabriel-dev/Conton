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
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              @if(sizeof($imagen)>0)
              <div class="col-12">
                <img src="{{asset('img/productos/'.$imagen[0]->image)}}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                @foreach($imagen as $i)
                <div class="product-image-thumb"><img src="{{asset('img/productos/'.$i->image)}}" alt="Product Image"></div>
                @endforeach
              </div>
              @else
              <div class="col-12">
                <h4>Imagenes no encontradas</h4>
              </div>
              @endif
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$producto->name}}</h3>
              <p>{{$producto->description}}</p>

              <hr>


              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                ${{$producto->price}}
                </h2>
              </div>

              <div class="mt-4">
                <div id="comprar" class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Comprar
                </div>

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Añadir al carrito
                </div>
              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      @if($cliente=='null')
              <!-- Modal -->
      <div class="modal fade" id="modalClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registra tus datos de cliente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/compra/cliente" method="POST">
              @csrf
                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                <input type="hidden" name="name_client" value="{{ Auth::user()->name }}">
                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                <div class="form-group">
                    <label for="nombre">Dirección</label>
                    <input type="text" required class="form-control form-control-border" name="address" value="{{@old('nombre')}}">
                </div>
                <div class="form-group">
                    <label for="nombre">Telefono</label>
                    <input type="text" required class="form-control form-control-border" name="phone" value="{{@old('nombre')}}">
                </div>
                <div class="form-group">
                    <label for="nombre">Ciudad</label>
                    <input type="text" required class="form-control form-control-border" name="city" value="{{@old('nombre')}}">
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Guardar información</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      @endif
      
      <div class="modal fade" id="modalComprar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">¿Estas seguro de comprarlo?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <h5 class="total">Total: ${{$producto->price}}</h5>
        <form id="form" method="POST" action="/admin/compra/generar">
        @csrf
        <input type="hidden" name="id" value="{{$producto->id}}">
        <input type="hidden" name="id_client" value="{{$cliente->id_user}}">
        <input type="hidden" id="total" name="total" value="{{$producto->price}}">
        <input type="hidden" name="status" value="0">
        <input type="hidden" name="date" value="{{date('Y-m-d')}}">
        <input type="number" min="1" placeholder="Ingresa la cantidad" class="cantidad form-control form-control-border" name="quantity" value="1">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Comprar</button>
      </div>
      </form>
    </div>
  </div>
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
    
    $(document).ready(function(){
      
      $("#comprar").click(function(){
        $('#modalComprar').modal('toggle')
      });
      $(".cantidad").change(function(){
        $costo={{$producto->price}};
        $('#total').val($(this).val()*$costo);
        $('.total').text("Total: $"+$(this).val()*$costo);
      });
    
    @if($cliente=='null')


  
 $('#modalClient').modal('toggle');


@endif
});
  </script>
@endSection