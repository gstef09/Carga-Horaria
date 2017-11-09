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


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->middleware('checkStatus');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'HomeController@index')->name('home');

Route::resource('docentes', 'DocentesController', ['except' => ['destroy']]);
Route::get('descargar-docentes', 'DocentesController@excel')->name('docentes.excel');
Route::resource('periodos','PeriodoController');
Route::resource('materias','MateriasController');
Route::resource('cursos','CursosController', ['except' => ['show']]);
Route::resource('facultades','FacultadesController');
Route::get('faculties','FacultadesController@obtenerFacultades');
Route::get('carriers','CarrerasController@obtenerCarreras');
Route::resource('carreras','CarrerasController');


Route::resource('usuarios', 'UsersController', ['only' => ['index', 'create', 'store']]);


