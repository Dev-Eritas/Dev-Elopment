@extends('layouts.app')

@section('title', 'Patrimonio')

@section('content')

<!--Patrimonio-->
<div class="site-section">
<div class="container">
        <div class="row justify-content-center mb-5" data-aos="fade-up">
         <div class="col-md-7">
           <h1 class="font-weight-light text-black text-center">Patrimonio de la Humanidad:</h1>

         </div>
       </div>
</div>
</div>
<div class="site-section">

        <div class="container overlap-section">
          <div class="row">
            <div class="col-md-6 col-lg-6 mb-6 mb-lg-0">
              <a href="#" class="unit-1 text-center">
                <img src="images/04.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Enterate de Tiwanaku</h3>

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
              <p>El Centro Espiritual y Político de la Cultura Tiwanaku es Patrimonio
                  Mundial desde el año 2000, debido a su Valor Universal Excepcional
                  expresado en la concepción y maestría constructiva de los templos y
                  de la estatuaria monumental. Su unidad reside también en los
                  conocimientos de una sociedad multiétnica, dirigida por líderes
                  políticos y espirituales durante más de 1000 años.</p>
            @endif
            </div>
            <div class="col-md-6 col-lg-6 mb-6 mb-lg-0">
              <a href="#" class="unit-1 text-center">
                <img src="images/samaipata2.jpg" alt="Image" class="img-fluid">

                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Explora el fuerte de Samaipata</h3>
                </div>
              </a>
              <p>Es un sitio arqueológico precolombino de Bolivia, ubicado a pocos kilómetros
                  del pueblo de Samaipata en la provincia Florida, departamento de Santa Cruz,
                  a una altura de 1950 msnm. Está situado en las estribaciones orientales de
                  los Andes bolivianos y es un popular destino turístico para bolivianos y
                  extranjeros por igual.
                  Fue declarado Patrimonio Cultural de la Humanidad por la Unesco el año 1998 y
                  es considerada la piedra tallada más grande del mundo.​</p>
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

