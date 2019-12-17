@extends('layouts.app')

@section('title', 'Ciudades')

@section('content')

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
            <a href="/hoteles" class="unit-1 text-center">
              <img src="images/03.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Los Yungas</h3>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="/hoteles" class="unit-1 text-center">
              <img src="images/04.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$320</strong>
                <h3 class="unit-1-heading">Tiwanaku</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="/hoteles" class="unit-1 text-center">
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


