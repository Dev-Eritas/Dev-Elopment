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
                             <img src="images/Logo.jpg" alt="Image" class="img-fluid" width="80" height="140" controls>
                            </a>
                          </h1>
                      </div>
                  <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                    <li class="active">
                      <a href="/adminHome">DASHBOARD</a>
                    </li>

                    <li><a href="/contactosDevs">CONTACTOS</a></li>
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
        </header>

  @guest
          <div class="container-fluid mt-5">
              <p class="display-1">No tiene acceso a esta pagina</p>
              <a class="display-2" href="/welcome">Devuelta</a>
          </div>

  @else
  <!--dashboard-->
  <div class="site-section">

  </div>

   <div class="container">
   <div class="row">

   <!--team-1- MI PERFIL-->
   <div class="col-lg-4">
      <div class="our-team-main">
        <a href="/perfil"><img src="img/some_icons/user.png" class="img-fluid" /></a>
        <h3>Mi perfil:</h3>
        <p>todo acerca de mi información como el rol de administrador</p>
      </div>
   </div>

   <!--team-2 - REGISTRAR ADMINISTRADORES-->
   <div class="col-lg-4">
      <div class="our-team-main">
        <a href="/actualizaInfo"><img src="img/some_icons/actualizacion.png" class="img-fluid" /></a>
        <h3>Actualización de datos:</h3>
        <p>cambiar mi información como el rol de un administrador</p>
      </div>
   </div>

   <!--team-3 - ACTUALIZACIONES DE DATOS-->
   <div class="col-lg-4">
      <div class="our-team-main">
        <a href="/registrarAdmin"><img src="img/some_icons/administradores.png" class="img-fluid" /></a>
        <h3>Registrar administradores:</h3>
        <p>nuevos adnimistradores podrán ingresar a la página asignandoles email y contraseña</p>
      </div>
    </div>

   <!--team-4 - EDITAR CONTENIDOS-->
   <div class="col-lg-4">
      <div class="our-team-main">
        <a href="/contactosDevs"><img src="img/some_icons/editar.png" class="img-fluid" /></a>
        <h3>Editar contenidos:</h3>
        <p>se puede editar los contenidos de los lugares turísticos</p>
      </div>
   </div>

   <!--team-5 PÁGINA OFICIAL-->
    <div class="col-lg-4">
      <div class="our-team-main">
        <a href="/welcome"><img src="img/some_icons/pagina.png" class="img-fluid" /></a>
        <h3>Página oficial:</h3>
        <p>Ver la página que el usuario final donde verá los lugares turísticos</p>
      </div>
    </div>

   <!--team-6 - CONTACTOS-->
   <div class="col-lg-4">
      <div class="our-team-main">
        <a href="/contactosDevs"><img src="img/some_icons/members.png" class="img-fluid" /></a>
        <h3>Contactos:</h3>
        <p>Comunicación con los desarrolladores de la página de lugares turísticos</p>
      </div>
   </div>
   </div>
   </div>
  @endguest

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