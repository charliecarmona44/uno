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

Route::get('/loginuser',"IndexController@loginuser");

Route::get('/registeruser',"IndexController@registeruser");

Route::get('/loginn',"IndexController@loginn");

Auth::routes();



Route::get('/homeadmin', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');



//Route::get('/', 'Auth\LoginController@login');

//Route::get ('/login','LoginController@login');
//Route::post ('/verificar','LoginUsuarioController@LoginUsuario');

//Route::get('/', function () { return view('index'); })->middleware('auth');


/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

*/