<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () 
{
    return view('principal');
});

Route::get('/productor', function () 
{
    return view('productor');
});

//-----cosecha controller-----------------------------------------------------------------------------
//Route::get('/prueba', 'Controller@obtenerAccessToken');
Route::get('/cosechas', 'CosechasController@mostrarCosechas');
//buscar cosecha por id
Route::get('/cosechas/unico', 'CosechasController@mostrarCosecha');
Route::post('/cosechas/unico', 'CosechasController@obtenerCosecha');
//Nueva cosecha
Route::post('/cosechas/agregar', 'CosechasController@crearCosecha');
Route::get('/cosechas/agregar', 'CosechasController@agregarCosecha');
//Actualizar cosecha
Route::put('/cosechas/actualizar', 'CosechasController@actualizarCosecha');
Route::post('/cosechas/actualizar', 'CosechasController@editarCosecha');
Route::get('/cosechas/actualizar', 'CosechasController@elegirCosecha');
//Eliminar cosecha
Route::post('/cosechas/eliminar', 'CosechasController@eliminarCosecha');
Route::get('/cosechas/eliminar', 'CosechasController@seleccionarCosecha');

//-----siembra controller-----------------------------------------------------------------------------

Route::get('/siembras', 'SiembrasController@mostrarSiembras');

Route::post('/siembras/unico', 'SiembrasController@obtenerSiembra');
Route::get('/siembras/unico', 'SiembrasController@mostrarSiembra');
//agregar una siembra
Route::post('/personas/siembras/agregar', 'PersonaSiembrasController@crearSiembra');
Route::get('/personas/siembras/agregar', 'PersonaSiembrasController@agregarSiembra');
//eliminar siembras
Route::get('/personas/siembras/eliminar', 'PersonaSiembrasController@seleccionarSiembra');
Route::post('/personas/siembras/eliminar', 'PersonaSiembrasController@eliminarSiembra');

//Editar siembras
Route::put('/personas/siembras/actualizar', 'PersonaSiembrasController@actualizarSiembra');
Route::post('/personas/siembras/actualizar', 'PersonaSiembrasController@editarSiembra');
Route::get('/personas/siembras/actualizar', 'PersonaSiembrasController@elegirSiembra');

//-----siembracosechas controller------------------------------------------------------------------

Route::post('/siembras/cosechas', 'SiembraCosechasController@mostrarCosechadeunasiembra');
Route::get('/siembras/cosechas', 'SiembraCosechasController@mostrarSiembras');
Route::get('/siembras/cosechas/rendimiento', 'SiembraCosechasController@mostrarrendimientoSiembras');

//Agregar cosechas a un siembra
Route::post('/siembras/cosechas/agregar', 'SiembraCosechasController@agregarCosechaSiembra');
Route::get('/siembras/cosechas/agregar', 'SiembraCosechasController@formularioagregarCosechasSiembras');
//Eliminar cosechas agregados a un siembra
Route::delete('/siembras/cosechas/eliminar', 'SiembraCosechasController@eliminarCosechaSiembra');
Route::post('/siembras/cosechas/eliminar', 'SiembraCosechasController@seleccionarCosechaSiembra');
Route::get('/siembras/cosechas/eliminar', 'SiembraCosechasController@seleccionarSiembra');

//------ mostrar las Personasiembras controller-------------------------------------------------------------------
Route::post('/personas/siembras', 'PersonaSiembrasController@mostrarSiembrasPersona');
Route::get('/personas/siembras', 'PersonaSiembrasController@mostrarPersonas');


//-----personas controller-----------------------------------------------------------------------------
Route::get('/personas', 'PersonasController@mostrarPersonas');


Route::post('/personas/unico', 'PersonasController@obtenerPersona');
Route::get('/personas/unico', 'PersonasController@mostrarPersona');

Route::post('/personas/agregar', 'PersonasController@crearPersona');
Route::get('/personas/agregar', 'PersonasController@agregarPersona');

Route::put('/personas/actualizar', 'PersonasController@actualizarPersona');
Route::post('/personas/actualizar', 'PersonasController@editarPersona');
Route::get('/personas/actualizar', 'PersonasController@elegirPersona');

Route::post('/personas/eliminar', 'PersonasController@eliminarPersona');
Route::get('/personas/eliminar', 'PersonasController@seleccionarPersona');




// procedimientos productos
//mostrar todos los productos
Route::get('/productos/', 'ProductosController@mostrarProductos');
//consultar un producto
Route::post('/productos/unico', 'ProductosController@obtenerProducto');
Route::get('/productos/unico', 'ProductosController@mostrarProducto');

//agregar un producto
Route::post('/productos/agregar', 'ProductosController@crearProducto');
Route::get('/productos/agregar', 'ProductosController@agregarProducto');

//actualizar un producto
Route::put('/productos/actualizar', 'ProductosController@actualizarProducto');
Route::post('/productos/actualizar', 'ProductosController@editarProducto');
Route::get('/productos/actualizar', 'ProductosController@elegirProducto');

//eliminiar un producto
Route::post('/productos/eliminar', 'ProductosController@eliminarProducto');
Route::get('/productos/eliminar', 'ProductosController@seleccionarProducto');


//-----Procedimientos fincas-----------------------------------------------------------------------------
Route::get('/fincas/', 'FincasController@mostrarFincas');
//buscar fincas por id
Route::get('/fincas/unico', 'FincasController@mostrarFinca');
Route::post('/fincas/unico', 'FincasController@obtenerFinca');
//agregar fincas

Route::post('/personas/fincas/agregar', 'FincasPersonasController@crearFinca');
Route::get('/personas/fincas/agregar', 'FincasPersonasController@agregarFinca');

//Actualizar fincas
Route::put('/fincas/actualizar', 'FincasController@actualizarFinca');
Route::post('/fincas/actualizar', 'FincasController@editarFinca');
Route::get('/fincas/actualizar', 'FincasController@elegirFinca');
//Eliminar fincas
Route::post('/fincas/eliminar', 'FincasController@eliminarFinca');
Route::get('/fincas/eliminar', 'FincasController@seleccionarFinca');