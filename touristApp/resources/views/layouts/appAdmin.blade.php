<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>--}}
    {{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}
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
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
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
<div class="site-wrap" id="app">
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
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="nabvar navbar-expand-lg  bg-light site-navigation text-right text-lg-center fixed-top">
                                <div class="">
                                    <div class="">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <div class="col-6 col-xl-2 fi">
                                                <h1 class="mb-0">
                                                    <a href="/welcome">
                                                        <img src="images/Logo.jpg" alt="Image" class="img-fluid"
                                                             width="100" height="140" controls>
                                                    </a>
                                                </h1>
                                            </div>

                                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                                <li class="active">
                                                    <a href="/admin">DASHBOARD</a>
                                                </li>

                                                <li><a href="/contactosDevs">CONTACTOS</a></li>
                                                <!-- <li><a href="booking.html">Book Online</a></li> -->
                                            </ul>
                                            <!--aqui es register y login-->
                                            <!-- Right Side Of Navbar -->
                                            <ul class="navbar-nav ml-auto">
                                                <!-- Authentication Links -->
                                                @guest
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                           href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               href="{{ route('register') }}">{{ __('Register') }}</a>
                                                        </li>
                                                    @endif
                                                @else
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                        </a>

                                                        <ul class="dropdown" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                  method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </ul>
                                                    </li>
                                                @endguest
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"
                                     style="position: relative; top: 3px;">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                        <span class="icon-menu h3"></span>
                                    </a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
