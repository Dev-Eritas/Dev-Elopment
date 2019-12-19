@extends('layouts.app')

@section('title', 'Hotel 2')

@section('content')
    <!--CONTENIDO-->
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-md-7">
                    <h1 class="font-weight-light text-black text-center">Hotel De Sal Luna Salada:</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6">
                <h4>Un hotel completamente hecho de sal en Bolivia que ofrece a
                    sus huéspedes la esencia de los Andes, en el borde de los
                    salares más grandes del mundo. Te invitamos a quedarte con
                    nosotros mientras visitas uno de los lugares más singulares
                    de la tierra, donde experimentarás la naturaleza de una forma
                    completamente nueva.
                    Salga a los salares blancos a pocos metros de las puertas de
                    nuestro hotel, a una gran extensión de blanco hasta donde la
                    vista alcanza.
                </h4>
            </div>
            <div class="col-md-6">
                <video autoplay="autoplay" muted="muted" loop="loop" width="450" height="400" controls>
                    <source src="videos/HotelCristal.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="container">
        <!--SLIDER CAROUSEL-->

        <div class="container text-center">
            <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                    <li data-target="#mycarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/hotelSalLuna/image1.jpg" width="1020" height="640" controls>
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/hotelSalLuna/image2.jpg" width="1020" height="640" controls>
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/hotelSalLuna/image3.jpg" width="1020" height="640" controls>
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/hotelSalLuna/image4.jpg" width="1020" height="640" controls>
                        <div class="carousel-caption"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--UBICACIÓN-->
    <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
            <div class="mb-5">
                <div class="row-fluid">
                    <div class="span8">
                        <iframe width="900" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                    </div>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero
                            atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis
                            blanditiis, minima minus odio!</p>
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
                                <input type="text" class="form-control border-secondary text-white bg-transparent"
                                       placeholder="Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-white" type="button" id="button-addon2">ENVIAR
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="mb-5">
                        <a href="https://www.facebook.com/MejorDestinoCultural/" class="pl-0 pr-3"><span
                                class="icon-facebook"></span></a>
                        <a href="https://twitter.com/visit_bolivia?lang=es" class="pl-3 pr-3"><span
                                class="icon-twitter"></span></a>
                        <a href="https://www.instagram.com/visit_bolivia/" class="pl-3 pr-3"><span
                                class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>



