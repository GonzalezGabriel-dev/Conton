<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/estilos.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>CONTON</title>
</head>
<body>
    <nav class="navbar navbar-dark border-bottom sticky-top bg-white">
        <div class="container-fluid">
            
            <img class="navbar-brand logo" src="./logo.png" alt="">
            <div class="d-flex d-none d-sm-block d-lg-block">
            <nav class="navbar navbar-light ">
                <a href="#" class="nav-link active me-2 border-bottom border-info bton fw-bold">Inicio</a>
                <a href="#conocenos" class="nav-link nov-link active me-2 fw-bold bton">Conocenos</a>
                <a href="#producto" class="nav-link nov-link active me-2 fw-bold bton">Nuestro Producto</a>  
                <a href="#section-contact" class="nav-link active me-2 fw-bold bton">Contacto</a>
                <a href="{{route('login')}}" class="nav-link active me-2 fw-bold bton">Iniciar Sesión</a>
            </nav>
            </div>
            <a class="btn btn-primary d-block d-sm-none d-lg-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>
            </a>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
              <nav class="navbar navbar-light ">
                <a href="#" class="nav-link active me-2 border-bottom border-info bton fw-bold">Inicio</a>
                <a href="#conocenos" class="nav-link nov-link active me-2 fw-bold bton" >Conocenos</a>
                <a href="#producto" class="nav-link nov-link active me-2 fw-bold bton">Nuestro Producto</a>  
                <a href="#section-contact" class="nav-link active me-2 fw-bold bton">Contacto</a>
            </nav>
              </div>
            </div>
            
            
        </div>
    </nav>
    <section class="">
    <div class="container" style="height: 100%;">
    <h1 class="" style="width: 100%;">Mayor seguridad y eficacia, cuidando a tus clientes y a tu negocio</h1>
    <img src="./1.png" width="100%" class="pt-4 " alt="">
        <!-- <div class="row" style="height: 100%;">
            <div class="col txt mx-auto">
                <h1 class="fw-bold pt-5 text-uppercase" style="width: 70%;">Mayor seguridad y eficacia, cuidando a tus clientes y a tu negocio</h1>
            </div>
            <div class="col centrar d-none d-lg-flex">
                <img src="./logo.png" width="100%" class="pt-4 " alt="">
            </div>
        </div> -->
    </div>
    </section>
    <!-- <section class="ini bg-light" id="conocenos">
    <div class="container">
        <div class="row padd">
            <div class="col-12 centrar pb-1"><h1 class="fw-bold">CONOCENOS</h1></div>
            <div class="col centrar pt-5">
                <p class="fw-bold fs-5 tex">CONTON es un contador de personas que registra la capacidad de personas que pueden ingresar en tu negocio, además CONTON te ayuda generando reportes de las visitas diarias, o de cierto mes con la finalidad de que lleves un registro en tu economía, y no solo eso te permite verificar la temperatura y el uso correcto del cubre bocas de cada uno de tus clientes, para una mayor seguridad en cuanto a los temas de salud, cuidando a tus clientes, cuidas tu negocio. </p>  
            </div>
            <div class="col centrar d-none d-lg-block pt-5">
                <img src="./Aforo5.jpg" class="img-fluid" style="border-radius: 50px;" alt="">
            </div>
        </div>
    </div>
    </section> -->
    <br>
    <br>
    <br>
    <br>
    <section class="ini bg-light" id="conocenos">
    <div class="container"style="background-color: aqua;">
        <div class="row padd" style="background-color: aqua;">
           
        </div>
    </div>
    </section>
    
    <section class=" ini " id="producto">
    <div class="container">
        <div class="row padd">
            <div class="col-12 centrar pb-1"><h1 class="fw-bold">NUESTRO PRODUCTO</h1></div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 pt-4" style="text-align: center;"><h2 class="fw-bold" style="color:#4334eb">BENEFICIOS</h2></div>
                    <div class="col-12" style="text-align: justify;">
                        <ul>
                            <li>Facilitar las tareas de cada trabajador o del encargado. Al ahorrar tiempo para poder realizar otras actividades.</li>
                            <li class="pt-2">Generación de reportes diarios.</li>
                            <li class="pt-2">Mejora en la economía, ya que permite conocer el número de personas  en tiempo real  que visitan un  negocio.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 pt-4" style="text-align: center;"><h2 class="fw-bold" style="color:#4334eb">FUNCIONES</h2></div>
                    <DIV class="col-12">
                        <ol>
                            <li>Medidor de temperatura</li>
                            <li class="pt-2">Señal de alarmas</li>
                            <li class="pt-2">Verifica el uso de cubre bocas</li>
                            <li class="pt-2">Contador de personas</li>
                            <li class="pt-2">Dispensador de gel antibacterial</li>
                        </ol>
                    </DIV>
                </div>
            </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col centrar"> <img src="./Aforo1.jpg" class="img-fluid rounded" style="height:200px" alt=""> </div>
            <div class="col centrar"> <img src="./Aforo3.jpg" class="img-fluid" style="height:200px" alt=""> </div>
          </div>
        </div>
    </div>
    </section>
    <section class="site-section bg-light" id="section-contact">
      <div class="container padd">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">CONTACTO</h2>
          </div>

          <div class="col-md-7 mb-5 site-animate" id="contact">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Correo</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Mensaje</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe tu mensaje"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Enviar mensaje">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate d-none d-lg-block">
            <p><img src="./logo.png" alt="" class="img-fluid"></p>
            <p class="text-black">
              Dirección: <br> Av. Benito Juárez, #350 <br> Nuevo Casas Grandes, Chihuahua <br> <br>
              Teléfono: <br> 636 694 65 44 Email: <br> <a href="mailto:info@yoursite.com">info@CONTON.com</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-facebook"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">CONTON.com</a>
  </div>
  <!-- Copyright -->
</footer>
    
    
    
    <script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        $(document).ready(function(){
            $('.nov-link').on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 600, 'linear');
        });
        $('.bton').on('click', function() {
          $('.bton').removeClass("border-bottom border-info")
          $(this).addClass(" border-bottom border-info");
          $('#collapseExample').collapse('hide');
        });
        

        });
    </script>
</body>
</html>