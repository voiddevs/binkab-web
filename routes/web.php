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


Route::get('/lugares',function(){
	return view('lugares');
});
Route::get('/productos',function(){
	return view('productos');
});

Route::post('/save/{id}','lugares@store');
// Route::get('/assing','lugares@idClient');
// Route::get('/view','lugares@idClientShow');
Route::post('/saveTelefonoLugar','telefonos_lugar@store');
Route::get('/lugares', 'categorias@indexCategoria');
// Route::get('/actividades', 'lugares@index');
Route::post('/saveCategoria','categorias@store');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/destinos', function () {
    return view('destinos');
});

Route::get('/destinos/mazatlan', function () {
    return view('destinos-mazatlan');
});

//Paginas dinamicas
Route::get('/lugares-dinamicos', 'lugares@index');
Route::get('/lugares-admin', 'lugares@indexFull');
// Route::get('/lugares-dinamicos', 'productos@index');
// Route::get('/lugares-dinamicos', 'fotografias@index');
// Route::get('/lugares-dinamicos', 'lugares@index');
// Route::get('/lugares-dinamicos', 'actividades@index');


Route::put('/lugaresUpdate/{id}','lugares@update');
Route::resource('lugar','Lugares');