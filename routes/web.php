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
    return view('home');
});

<<<<<<< HEAD
Route::get('/lugares',function(){
	return view('lugares');
});

Route::post('/save','lugares@store');
Route::post('/saveTelefonoLugar','telefonos_lugar@store');
Route::get('/lugares', 'categorias@indexCategoria');
Route::get('/actividades', 'lugares@index');
Route::post('/saveCategoria','categorias@store');
=======
Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/destinos', function () {
    return view('destinos');
});

Route::get('/destinos/mazatlan', function () {
    return view('destinos-mazatlan');
});
>>>>>>> fd4eefe07210f8dfb3e177cd6b3321c805b4150d
