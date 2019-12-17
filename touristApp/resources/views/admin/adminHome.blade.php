@extends('layouts.appAdmin')

@section('title', 'Admin - dashboard')

@section('content')

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
        <a href="/listaPaginas"><img src="img/some_icons/editar.png" class="img-fluid" /></a>
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


