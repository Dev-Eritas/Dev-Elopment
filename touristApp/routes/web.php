<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*-------------------------  USUARIO NORMAL  --------------------------*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sobreBolivia', function () {
    return view('sobreBolivia');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Route::get('/ciudad', function (){
    return view('ciudad');
});

Route::get('/hoteles', function (){
    return view('hoteles');
});

Route::get('/hotelSalar1', function (){
    return view('hotelSalar1');
});

Route::get('/hotelSalar2', function (){
    return view('hotelSalar2');
});

Route::get('/hotelSalar3', function (){
    return view('hotelSalar3');
});

Route::get('/blog', function (){
    return view('blog');
});

Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/patrimonio', function (){
    return view('patrimonio');
});

Route::get('/experiencias', function (){
    return view('experiencias');
});

Route::get('/blog', function (){
    return view('blog');
});

Route::get('/eventosCulturales', function (){
    return view('eventosCulturales');
});

/*-----------------------------  ADMINISTRADOR  ---------------------------------*/
Route::get('/admin', function(){
    return view('admin.adminHome');
});

Route::get('/perfil', function(){
    return view('admin.perfil');
});

Route::get('/actualizaInfo', function(){
    return view('admin.actualizaInfo');
});

Route::get('/registrarAdmin', function(){
    return view('admin.registrarAdmin');
});

Route::get('/editor', function(){
    return view('admin.editor');
});

Route::get('/listaPaginas', function(){
    return view('admin.listaPaginas');
});

Route::get('/paginaOficial', function(){
    return view('welcome');
});

Route::get('/contactosDevs', function(){
    return view('admin.contactosDev');
});

