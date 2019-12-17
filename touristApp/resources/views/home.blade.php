@extends('layouts.appAdmin')

@section('title', 'Admin')

@section('content')

<div class="site-section">
    <div class="container">
         <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div class="col-md-7">
            <h2 class="font-weight-light text-black text-center">
            Hola {{ Auth::user()->name }} <span class="caret"></span>
            </h2>
          </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <a href="/admin"><div class="card-header bg-info"><h3>Dashboard HERE</h3></div></a>

                <div class="card-body bg-success">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>You are logged in!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
