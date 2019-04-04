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
    return view('inicio');
});


Route::get('/lugares',function(){
	return view('lugares');
});
// Route::get('/actividades',function(){
// 	return view('actividades');
// });
// Route::get('/fotografias',function(){
// 	return view('fotografias');
// });
Route::get('/productos',function(){
	return view('productos');
});
// Route::get('/personal',function(){
// 	return view('lugar-personal');
// });
Route::get('/personal/{id}', 'lugares@indexPersonal');
Route::get('/actividades/{id}', 'actividades@indexUsuario');
Route::get('/fotografias/{id}', 'fotografias@indexUsuarioFoto');
Route::get('/lugares/{id}', 'lugares@indexUsuarioLugar');

Route::post('/save','lugares@store');
Route::post('/saveActividad','actividades@store');
Route::post('/saveFotografia','fotografias@store');
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
Route::get('/lugares-dinamicos/{id}', 'lugares@index');
Route::get('/lugares-admin', 'lugares@indexFull');
Route::get('/vista-actividades/{id}', 'lugares@indexJoin');
// Route::get('/lugares-dinamicos', 'productos@index');
// Route::get('/lugares-dinamicos', 'fotografias@index');
// Route::get('/lugares-dinamicos', 'lugares@index');
// Route::get('/lugares-dinamicos', 'actividades@index');


Route::put('/lugaresUpdate/{id}','lugares@update');
Route::resource('lugar','Lugares');
Route::get('/destinos/monterrey', function () {
    return view('destinos-monterrey');
});

Route::get('/destinos/guanajuato', function () {
    return view('destinos-guanajuato');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('passwords/email','Auth\PasswordController@getEmail');
Route::post('passwords/email', 'Auth\PasswordController@postEmail');

Route::get('passwords/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('passwords/reset', 'Auth\PasswordController@postReset');
