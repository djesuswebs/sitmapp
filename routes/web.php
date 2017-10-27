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
    return view('auth/login');
});

Route::get('/index', function () {
    return view('sitmadm/index');
});

Route::get('/proveedores', function () {
    return view('proveedores');
});

Route::get('/manobra', function () {
    return view('manobra');
});

Route::get('/articulos', function () {
    return view('articulos');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/actualizar_proveedor', function () {
    return view('edit/actualizar_proveedor');
});


Route::get('formulario', 'StorageController@index');

Route::post('storage/create', 'StorageController@save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('actualizar_proveedor/{proveedoresId}', 'ProveedoresController@actualizar_provedor'); //Muestra el formulario de Edicion
Route::get('actualizar_articulo/{articuloId}', 'ArticulosController@actualizar_articulo'); //Muestra el formulario de Edicion

Route::get('guardar_proveedor', 'ProveedoresController@guardar_act_proveedor')->name('guardar_proveedor');
Route::post('guardar_articulo', 'ArticulosController@guardar_act_articulo')->name('guardar_articulo');
