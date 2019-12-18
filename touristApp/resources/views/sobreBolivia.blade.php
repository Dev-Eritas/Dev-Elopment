@extends('layouts.app')

@section('title', 'sobre Bolivia')

@section('content')


    <div class="site-section">

      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="images/toroToro.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block"><del class="text-white">$590</del> <span class="mx-1 text-white ">&mdash;</span> $120</strong>
                <h3 class="unit-1-heading">Toro Toro</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="images/illimani.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block"><del class="text-white">$390</del> <span class="mx-1 text-white ">&mdash;</span> $100</strong>
                <h3 class="unit-1-heading">Illimani (La Paz)</h3>
              </div>
            </a>
          </div>

          <div class="row align-items-center justify-content-center text-center">

              <p class="mb-5">Bolivia es Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.</p>

            </div>

    </div>

    <div class="site-section block-13 bg-light">


    <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7">
            <h2 class="font-weight-light text-black text-center">DATOS</h2>
          </div>
        </div>

        <div class="nonloop-block-13 owl-carousel">

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_4.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
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
                  <p class="text-black lead">&ldquo;Bolivia se encuentra en el corazón de sudamérica. Limita al noreste con el Brasil, al sudeste con el Paraguay, al sur con la Argentina, al sudoeste con Chile y al oeste con el Peru.&rdquo;</p>
                  <p class="">&mdash; <em>Ubicación</em></p>
                @endif
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_1.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                  <p class="text-black lead">&ldquo;Bolivia se divide en nueve departamentos: Chuquisaca, la Paz, Santa Cruz, Cochabamba, Oruro, Potosí, Tarija, Pando y Beni. Constitucionalmente, la capital de la república es la ciudad de Sucre en el departamento de Chuquisaca, y la sede de gobierno y capital adminstrativa es la ciudad de La Paz.&rdquo;</p>
                  <p class="">&mdash; <em>División política</em></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_2.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                  <p class="text-black lead">&ldquo;Bolivia es un país de grandes contrastes geográficos que reúne una alta diversidad de ecosistemas de características biogeográficas andinas, amázonicas y chaqueñas, con paisajes de rasgos únicos y particulares. Precisamente su posición geográfica caracterizada por una diversidad de alturas y climas ha sido el escenario de distintos asentamientos que han dado lugar a una fascinante diversidad cultural y étnica, que constituyen un valioso e invaluable patrimonio.&rdquo;</p>
                  <p class="">&mdash; <em>Geografía</em></p>
                </div>
              </div>
            </div>
          </div>

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



  </body>
  @endsection
