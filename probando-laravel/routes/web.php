<?php

/*
|--------------------------------------------------------------------------
| Web Routes- Mis rutas de mis vistas Proyect brazos firmes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/notfound', function () {
    return view('welcome');
});*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/welcome',"IndexController@welcome");


Route::get('/notfound',"NotfoundController@go");



Route::get('/index',"IndexController@inicio");



Route::get('/quienesSomos',"IndexController@quienesomos");




Route::get('/dondeEstamos',"IndexController@dondeestamos");



Route::get('/contacto',"IndexController@contacto");



Route::get('/iniciarSesiones',"IndexController@iniciarsesiones");


Route::get('/Registrarse',"IndexController@registrarse");

Route::get('/admin',"IndexController@admin");


Auth::routes();

Route::get('/homeadmin', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

//Route::get('/', function () { return view('index'); })->middleware('auth');
