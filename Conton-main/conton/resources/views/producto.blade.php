
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <section class=" ini " id="producto">
    <div class="container">
        <div class="row padd">
            <div class="col-12 centrar pb-1"><h1 class="fw-bold">NUESTRO PRODUCTO</h1></div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 pt-4" style="text-align: center;"><h2 class="fw-bold">BENEFICIOS</h2></div>
                    <div class="col-12" style="text-align: justify;">
                        <ul>
                            <li>Facilitar las tareas de cada trabajador o del encargado. Al ahorrar tiempo para poder realizar otras actividades</li>
                            <li class="pt-2">Generación de reportes diarios, verifica quizá las visitas en un mes, diarias, etc. (abarca la parte de la economía, y cierta parte en la seguridad, porque se tendría un reporte de las personas que quizá con temperatura hayan activado la alarma y aparte porque se tendría un reporte de las veces que se excedió el aforo de personas.</li>
                            <li class="pt-2">Mejora en la economía, ya que permite conocer el número de personas  en tiempo real  que visitan un  negocio.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 pt-4" style="text-align: center;"><h2 class="fw-bold">FUNCIONES</h2></div>
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
        });
        

        });
    </script>
</body>
</html>