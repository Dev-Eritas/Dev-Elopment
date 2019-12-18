@extends('layouts.app')

@section('title', 'Bienvenido a Bolivia Travel')

@section('content')

<!--EVENTOS-->
<div class="site-section">
<div class="container">
        <div class="row justify-content-center mb-5" data-aos="fade-up">
         <div class="col-md-7">
           <h1 class="font-weight-light text-black text-center">Eventos Culturales:</h1>

         </div>
       </div>
</div>
</div>
<div class="site-section">

        <div class="container overlap-section">
          <div class="row">
            <div class="col-md-6 col-lg-6 mb-6 mb-lg-0">
              <a href="#" class="unit-1 text-center">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Visita nuestro Carnaval</h3>

                </div>

              </a>
              @if(Route::has('login'))
                    @extends('layouts.editorAdmin')
                    @section('content')
                            <div class="container-fluid">
                                <div class="row justify-content-center mb-5">

                                    <div class="container">
                                        <div class="row justify-content-center mb-5">
                                            <div class="col-lg-12 nopadding">
                                                <textarea id="txtEditor"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <li class="row justify-content-center mb-5"><a href="" class="btn btn-primary py-2 px-2 text-white">ACEPTAR CAMBIOS</a></li>
                            </div>
            @else
              <p>En diferentes ciudades y pueblos las fiestas de carnaval se
                  llevan a cabo con mucho entusiasmo. El carnaval en Bolivia es
                  tiempo de corsos y comparsas, de challa, de caporales y morenada,
                  de cerveza y chicha, de bailes y alegría. Fechas: 2, 3, 4 y 5 de
                  marzo.
              </p>
            @endif
            </div>
            <div class="col-md-6 col-lg-6 mb-6 mb-lg-0">
              <a href="#" class="unit-1 text-center">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Explora el famoso Salar de Uyuni</h3>
                </div>
              </a>
              <p>El salar de Uyuni es el mayor desierto de sal continuo del mundo,
                  con una superficie de 12 000 km². Está situado a unos 3650 msnm en
                  el suroeste de Bolivia, en la provincia de Daniel Campos en el
                  departamento de Potosí dentro de la región altiplánica de la
                  Cordillera de los Andes.</p>
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
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
  </div>


