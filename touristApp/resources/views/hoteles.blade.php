@extends('layouts.app')

@section('title', 'Hoteles')

@section('content')


    <!--CONTENIDO DE LOS HOTELES-->

    <div class="site-section">
      <div class="container">
         <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div class="col-md-7">
            <h1 class="font-weight-light text-black text-center">Salar de Uyuni:</h1>
            <h2 class="font-weight-light text-black text-center">Hoteles</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="images/hotel1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Hotel 1: Hotel de Sal Cristal Samaña</h2>
            <p class="mb-4">Este hotel tranquilo con vista al salar de Uyuni se
                ubica en un edificio pintoresco hecho de bloques de sal.
                Está a 9 km de la emblemática plaza de las Banderas y a
                4 km de la estación de trenes Colchani.</p>
            <p>

              <a href="/hotelSalar1" class="btn btn-primary py-3 px-5 text-white text-center">Ver mas ></a>

            </p>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="images/hotel2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Hotel 2: Hotel De Sal Luna Salada</h2>
            <p class="mb-4">Bienvenido al Hotel Luna Salada & Spa, un hotel
              completamente hecho de sal en Bolivia que ofrece a sus huéspedes
              la esencia de los Andes, en el borde de los salares más grandes
              del mundo.</p>
            <p>
              <a href="/hotelSalar2" class="btn btn-primary py-3 px-5 text-white text-center">Ver mas ></a>
              </p>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="images/hotel3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Hotel 3: Tambo Coquesa Lodge</h2>
            <p class="mb-4">Estamos comprometidos con el desarrollo de las
              regiones impulsamos diferentes actividades turísticas, servimos
              a nuestros visitantes brindándoles atención y servicio personalizado</p>
            <p>
              <a href="/hotelSalar3" class="btn btn-primary py-3 px-5 text-white text-center">Ver mas ></a>

            </p>
          </div>
        </div>
      </div>
    </div>

  <!--FOOTER-->

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
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Destinos</a></li>
                  <li><a href="#">Sobre Bolivia</a></li>
                  <li><a href="#">Destinos más populares</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Sobre Nosotros</a></li>
                  <li><a href="#">Politicas de Privacidad</a></li>
                  <li><a href="#">Contactanos!</a></li>
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
        <div class="row pt-5 mt-5 text-center">
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


