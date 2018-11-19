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

Route::get('/', function () { return view('welcome'); });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacto', function () { return view('contacto'); });
Route::get('/descargas', function () { return view('descargas'); });
Route::get('/registro', function () { return view('registro'); });
Route::get('/unidades', function () { return view('unidades'); });
Route::get('/administracion', function () { return view('administracion'); });
Route::get('/veralumno', function () { return view('veralumno'); });
Route::get('/administracion2', function () { return view('administracion2'); });
Route::get('/admindescarga', function () { return view('admindescarga'); });
Route::get('/correo', function () { return view('correo'); });

