<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Travalers &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

  </head>
  <body>
  <!--NABVAR-->
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-1" role="banner">

        <div class="container">
          <div class="row align-items-center">


            <div class="col-10 col-md-8 d-none d-xl-block">
              <nav class="nabvar navbar-expand-lg  bg-light site-navigation text-right text-lg-center fixed-top" >

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-6 col-xl-2 fi">
                        <h1 class="mb-0">
                          <a href="/login">
                           <img src="images/Logo.jpg" alt="Image" class="img-fluid" width="100" height="140" controls>
                          </a>
                        </h1>
                    </div>
                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                  <li>
                    <a href="/welcome">HOME</a>
                  </li>

                  <li><a href="/sobreBolivia">SOBRE BOLIVIA</a></li>
                  <li class="has-children">
                    <a href="#">EXPERIENCIAS</a>
                   <ul class="dropdown">
                      <li><a href="/blog">Ecoturismo</a></li>
                      <li><a href="/experiencias">Turismo de Aventura</a></li>
                      <li><a href="/eventosCulturales">Eventos culturales</a></li>
                      <li><a href="/patrimonio">Patrimonio de la humanidad</a></li>
                    </ul>
                  </li>

                  <li><a href="/contactos">CONTACTO</a></li>
                  <!-- <li><a href="booking.html">Book Online</a></li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
              </nav>
            </div>



              <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>

          </div>
        </div>

      </header>

   <!--CIUDADES SLIDES-->

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/LaPaz.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


              <h1 class=" font-weight-light" style="color: white;"> BIENVENIDO A LA PAZ</h1>
              <p class="mb-5">
                  La Paz está ubicado al oeste del país.
                  La economía del Departamento de La Paz es la segunda economía
                  más grande del país.​
                  Su configuración geográfica y urbana permite que el recién llegado
                  se oriente fácilmente en la ciudad y se sienta permanentemente
                  desafiado por las cambiantes facetas que, desde sus distintos
                  ángulos, ella le ofrece. La Paz de noche es un espectáculo
                  maravilloso, pues asemeja al cielo lleno de estrellas.
                </p>


            </div>
          </div>
        </div>
      </div>


    </div>

<!--DESTINOS POPULARES PARA QUE ESCOJA EL USUARIO-->
    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">LOS LUGARES TURÍSTICOS QUE PUEDEN ENCONTRAR SON LOS SIGUIENTES</h2>

          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="hoteles.html" class="unit-1 text-center">
              <img src="images/03.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Los Yungas</h3>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="hoteles.html" class="unit-1 text-center">
              <img src="images/04.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$320</strong>
                <h3 class="unit-1-heading">Tiwanaku</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="hoteles.html" class="unit-1 text-center">
              <img src="images/05.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$290</strong>
                <h3 class="unit-1-heading">Mercado de las Brujas</h3>
              </div>
            </a>
          </div>

        </div>
      </div>

    </div>




    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">BoliviaTravel</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>



          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Más información...</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="/welcome">Home</a></li>
                  <li><a href="#">Destinos</a></li>
                  <li><a href="/sobreBolivia">Sobre Bolivia</a></li>
                  <li><a href="#">Destinos más populares</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="/contactosDev">Sobre Nosotros</a></li>
                  <li><a href="#">Politicas de Privacidad</a></li>
                  <li><a href="/contactos">Contactanos!</a></li>
                </ul>
              </div>
            </div>



          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">


            <div class="mb-5">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">ENVIAR</button>
                  </div>
                </div>
              </form>

            </div>

          </div>

        </div>
        <!--FOOTER-->
        <div class="row  text-center">
          <div class="col-md-12">
            <div class="mb-5">
              <a href="https://www.facebook.com/MejorDestinoCultural/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="https://twitter.com/visit_bolivia?lang=es" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="https://www.instagram.com/visit_bolivia/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>

            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://www.silvertouch.com/wp-content/themes/silvertouch/externalfile.php?file=jquerymigrate3.js&"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.10/mediaelement-and-player.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>

  <script rel="stylesheet" href="{{ asset('/js/app.js') }}"></script>

  </body>
</html>
