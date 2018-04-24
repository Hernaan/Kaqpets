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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('indexAdmin');
});

Route::group(['prefix' => 'noticias'], function() {
  Route::get('/',[
    'middleware' => 'auth',
    'uses' => 'NoticiaController@index'
    ]);
  Route::match(['get', 'post'], 'create', 'NoticiaController@create');
  Route::match(['get', 'put'], 'update/{id}', 'NoticiaController@update');
  Route::get('show/{id}', 'NoticiaController@show');
  Route::delete('delete/{id}', 'NoticiaController@destroy');
});

Route::group(['prefix' => 'mascotas'], function() {
  Route::get('/',[
    'middleware' => 'auth',
    'uses' => 'MascotaController@index'
    ]);
  Route::match(['get', 'post'], 'create', 'MascotaController@create');
  Route::match(['get', 'put'], 'update/{id}', 'MascotaController@update');
  Route::get('show/{id}', 'MascotaController@show');
  Route::delete('delete/{id}', 'MascotaController@destroy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PetsController@index');
Route::get('/about', 'PetsController@about');
Route::get('/photo', 'PetsController@photo');
Route::get('/adopcion', 'PetsController@adopcion');
Route::get('/voluntario', 'PetsController@voluntario');
Route::get('/noticia', 'PetsController@noticia');
Route::get('/contacto', 'PetsController@contacto');
