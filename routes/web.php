<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/elfaro.html', function () {
    return view('elfaro');
});

Route::get('/tecnologia.html', function () {
    return view('tecnologia');
});

Route::get('/vivienda.html', function () {
    return view('vivienda');
});

Route::get('/negocios.html', function () {
    return view('negocios');
});

Route::get('/deportes.html', function () {
    return view('deportes');
});

Route::get('/cultura.html', function () {
    return view('cultura');
});

Route::get('/corea.html', function () {
    return view('corea');
});

Route::get('/concepcion.html', function () {
    return view('concepcion');
});

Route::get('/anunciomac.html', function () {
    return view('anunciomac');
});

Route::get('/anuncioiphone.html', function () {
    return view('anuncioiphone');
});

Route::get('/anunciocalefactor.html', function () {
    return view('anunciocalefactor');
});