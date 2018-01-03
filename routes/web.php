<?php

 use App\Articulos as Articulos;

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

Route::get('/proveedores', ['middleware' => 'auth', function () {
    return view('proveedores');
}]);

Route::get('/manobra',['middleware' => 'auth', function () {
    return view('manobra');
}]);

Route::get('/articulos', ['middleware' => 'auth',function () {
    return view('articulos');
}]);


Route::get('/tipoarticulos', ['middleware' => 'auth', function () {
    return view('tipoarticulos');
}]);

Route::get('/tipovehiculo', ['middleware' => 'auth', function () {
    return view('tipovehiculo');
}]);


Route::get('/almacen', ['middleware' => 'auth', function () {
    return view('almacen');
}]);

Route::get('/cliente', ['middleware' => 'auth', function () {
    return view('cliente');
}]);

Route::get('/fabricantes', ['middleware' => 'auth', function () {
    return view('fabricante');
}]);

Route::get('/agregar_articulo', ['middleware' => 'auth', function () {
    return view('agregar/agregar_articulo');
}]);

Route::get('/agregar_tipoarticulo', ['middleware' => 'auth', function () {
    return view('agregar/agregar_tipoarticulo');
}]);

Route::get('/agregar_tipovehiculo', ['middleware' => 'auth', function () {
    return view('agregar/agregar_tipovehiculo');
}]);

Route::get('/agregar_proveedor', ['middleware' => 'auth', function () {
    return view('agregar/agregar_proveedor');
}]);

Route::get('/agregar_almacen', ['middleware' => 'auth', function () {
    return view('agregar/agregar_almacen');
}]);

Route::get('/agregar_fabricante', ['middleware' => 'auth', function () {
    return view('agregar/agregar_fabricante');
}]);

Route::get('/agregar_manobra', ['middleware' => 'auth',function () {
    return view('agregar/agregar_manobra');
}]);

Route::get('/actualizar_proveedor', ['middleware' => 'auth', function () {
    return view('edit/actualizar_proveedor');
}]);




Route::get('formulario', 'StorageController@index');

Route::post('storage/create', 'StorageController@save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('ver/{articuloId}', 'ArticulosController@ver'); //Muestra el formulario de Edicion

Route::get('actualizar_proveedor/{proveedoresId}', 'ProveedoresController@actualizar_provedor'); //Muestra el formulario de Edicion
Route::get('actualizar_articulo/{articuloId}', 'ArticulosController@actualizar_articulo'); //Muestra el formulario de Edicion
Route::get('actualizar_tipoarticulo/{id}', 'TipoarticuloController@edit'); //Muestra el formulario de Edicion
Route::get('actualizar_almacen/{id}', 'AlmacenController@edit'); //Muestra el formulario de Edicion
Route::get('actualizar_fabricante/{id}', 'FabricanteController@edit'); //Muestra el formulario de Edicion
Route::get('actualizar_tipovehiculo/{id}', 'TipovehiculoController@edit'); //Muestra el formulario de Edicion
Route::get('actualizar_manobra/{id}', 'ManobraController@edit'); //Muestra el formulario de Edicion

/*nombres para controlador*/
Route::get('guardar_proveedor', 'ProveedoresController@guardar_act_proveedor')->name('guardar_proveedor');

Route::post('guardar_articulo', 'ArticulosController@guardar_act_articulo')->name('guardar_articulo');
Route::post('guardar_almacen', 'AlmacenController@guardar_almacen')->name('guardar_almacen');
Route::post('guardar_fabricante', 'FabricanteController@guardar_fabricante')->name('guardar_fabricante');
Route::post('guardar_tipovehiculo', 'TipovehiculoController@guardar_tipovehiculo')->name('guardar_tipovehiculo');

Route::post('guardar_manobra', 'ManobraController@guardar_manobra')->name('guardar_manobra');

Route::post('agregar_articulo', 'ArticulosController@agregar_articulo')->name('agregar_articulo');

Route::post('agregar_proveedor', 'ProveedoresController@agregar_proveedor')->name('agregar_proveedor');

Route::post('agregar_tipoarticulo', 'TipoarticuloController@store')->name('agregar_tipoarticulo');
Route::post('agregar_almacen', 'AlmacenController@store')->name('agregar_almacen');
Route::post('agregar_fabricante', 'FabricanteController@store')->name('agregar_fabricante');
Route::post('agregar_tipovehiculo', 'TipovehiculoController@store')->name('agregar_tipovehiculo');
Route::post('agregar_manobra', 'ManobraController@store')->name('agregar_manobra');



Route::delete('articulos_delete/{id}', function ($id) {
    $user = App\Articulos::find($id)->delete();
    return Redirect::back();
});



