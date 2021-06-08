<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
   <!--  <link rel="stylesheet" href="{{ asset('/estilos.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">

<link rel="shortcut icon" href="{{ asset('/assets/img/logo2.png') }}" />
<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>CONTON</title>
</head>
<body>
<header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo" style="right:150px;">   <img class="" style="width: 40px; height: 50px;" src="assets/img/logo2.png" alt=""></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Inicio</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Conocenos</a></li>
                        <li class="nav__item"><a href="#product" class="nav__link">Nuestro Producto</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contacto</a></li>
                        <li class="nav__item"><a href="{{route('login')}}" class="nav__link">Iniciar Sesión</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
        
            <section class="home bd-grid" id="home">
                <div class="home__data" class="col-12">
                    <h1 style="font-size: xx-large;"><br>Mayor seguridad y eficacia,<br>cuidando a tus clientes y<br> a tu negocio</h1>

                    
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-instagram'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-facebook' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/3.png" style="width: 350px; height: 200px;" alt="">
                </div>
            </section>

        
            <section class="about section " id="about">
                <h2 class="section-title">Conócenos</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/Aforo5.jpg" alt="">
                    </div>
                    
                    <div>
                       
                        <p class="about__text" style="text-align: justify; text-justify: inter-palabra;">CONTON es un contador de personas que registra la capacidad de personas que pueden ingresar en tu negocio, además CONTON te ayuda generando reportes de las visitas diarias, o de cierto mes con la finalidad de que lleves un registro en tu economía, y no solo eso te permite verificar la temperatura y el uso correcto del cubre bocas de cada uno de tus clientes, para una mayor seguridad en cuanto a los temas de salud, cuidando a tus clientes, cuidas tu negocio. </p>           
                    </div>                                   
                </div>
            </section>

         
            <section class="product section" id="product">
                <h2 class="section-title">Nuestro Producto</h2>

                <div class="product__container bd-grid">          
                    <div>
                        <h2 class="product__subtitle">Beneficios</h2>
                        <div class="col-12" style="text-align: justify; " >
                            <ol>
                                <li class="pt-2">Facilitar las tareas de cada trabajador o del encargado, al ahorrar tiempo para poder realizar otras actividades.</li>
                                <li class="pt-2">Generación de reportes diarios.</li>
                                <li class="pt-2">Mejora en la economía, ya que permite conocer el número de personas  en tiempo real  que visitan un  negocio.</li>
                            </ol>
                        </div>
                        <img src="assets/img/Aforo1.jpg" alt="" class="product__img">
                    </div>
                    
                    <div class="col-12" style="text-align: justify; ">  
                        <h2 class="product__subtitle" >Funciones</h2>
                        <DIV class="col-12">
                            <ol>
                                <li class="pt-2">Medidor de temperatura</li>
                                <li class="pt-2">Señal de alarmas</li>
                                <li class="pt-2">Verifica el uso de cubre bocas</li>
                                <li class="pt-2">Contador de personas</li>
                                <li class="pt-2">Dispensador de gel antibacterial</li>
                            </ol>
                        </DIV>            
                        <img src="assets/img/Aforo3.jpg" alt="" class="product__img">
                    </div>
                </div>
            </section>

            <section class="contact section" id="contact">
                <h2 class="section-title">Contacto</h2>

                <div class="contact__container bd-grid">
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
                
            </section>
        </main>


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

        <script src="https://unpkg.com/scrollreveal"></script>

      
        
<script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
 <!--    <script>
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
    </script> -->
</body>
</html>