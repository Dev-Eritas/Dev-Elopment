@extends('layouts.editorAdmin')

@section('title', 'Admin - dashboard')

@section('content')
		<div class="container-fluid">
			<div class="row justify-content-center mb-5">
				<h2 class="demo-text">EDITOR DE TEXTO</h2>
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

