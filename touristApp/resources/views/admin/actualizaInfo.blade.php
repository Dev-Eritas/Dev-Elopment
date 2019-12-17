@extends('layouts.appAdmin')

@section('title', 'Admin - actualizar')

@section('content')


    <!--ACTUALIZAR CONTAINER-->
    <header>
        <div class="site-section bg-light">
            <div class="container">
              <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-5 mb-5">
                    <div class="form-holder">
                      <div class="form-content">
                        <div class="form-items">
                          <p></p>
                          <div class="site-section">
                              <div class="container">
                                 <div class="row justify-content-center mb-5" data-aos="fade-up">
                                  <div class="col-md-7">

                                    <h4 class="font-weight-light text-black text-center">ACTUALIZA TUS DATOS!</h4>
                                  </div>
                                </div>
                        <form class="" method="post" action="#">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Nombre:</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="name"  placeholder="Ingresa tu nombre"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Email:</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="email" id="email"  placeholder="Ingresa tu Email"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="cols-sm-2 control-label">Nombre de usuario:</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="username" id="username"  placeholder="Ingresa tu nombre de usuario"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Contraseña:</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password"  placeholder="Ingresa tu contrasaeña"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Confirmar contraseña:</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirma tu contraseña"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <a href="https://deepak646.blogspot.com/" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Enviar</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      </header>


  </div>

