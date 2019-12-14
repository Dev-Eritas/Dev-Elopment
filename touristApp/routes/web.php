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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return view('admin.adminHome');
});

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
