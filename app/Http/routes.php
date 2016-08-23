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


//-----estudiante controller-----------------------------------------------------------------------------

Route::get('/prueba', 'Controller@obtenerAccessToken');
Route::get('/cosechas', 'CosechasController@mostrarCosechas');
//buscar estudiante por id
Route::get('/cosechas/unico', 'CosechasController@mostrarCosecha');
Route::post('/cosechas/unico', 'CosechasController@obtenerCosecha');
//Nuevo estudiante
Route::post('/cosechas/agregar', 'CosechasController@crearCosecha');
Route::get('/cosechas/agregar', 'CosechasController@agregarCosecha');
//Actualizar estudiante
Route::put('/cosechas/actualizar', 'CosechasController@actualizarCosecha');
Route::post('/cosechas/actualizar', 'CosechasController@editarCosecha');
Route::get('/cosechas/actualizar', 'CosechasController@elegirCosecha');
//Eliminar estudiante
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

//------ Personasiembras controller-------------------------------------------------------------------
Route::post('/personas/siembras', 'PersonaSiembrasController@mostrarSiembrasPersona');
Route::get('/personas/siembras', 'PersonaSiembrasController@mostrarPersonas');

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

//-----fincas controller-----------------------------------------------------------------------------
Route::get('/fincas/', 'FincasController@mostrarFincas');
//buscar fincas por id
Route::get('/fincas/unico', 'FincasController@mostrarFinca');
Route::post('/fincas/unico', 'FincasController@obtenerFinca');
//Agregar finca
Route::post('/persona/{idpersona}/finca/agregar', 'FincasPersonasController@crearFinca');
Route::get('/persona/{idpersona}/finca/agregar', 'FincasPersonasController@agregarFinca');
//Actualizar finca
Route::put('/persona/{idpersona}/finca/actualizar', 'FincasPersonasController@actualizarFinca');
Route::post('/persona/{idperson}/finca/actualizar', 'FincasPersonasController@editarFinca');
Route::get('/persona/{idpersona}/finca/actualizar', 'FincasPersonasController@elegirFinca');
//Eliminar finca
Route::post('/persona/finca/eliminar', 'FincasPersonasController@eliminarFinca');
Route::get('/persona/finca/eliminar', 'FincasPersonasController@seleccionarFinca');


//-----novedades controller-----------------------------------------------------------------------------
Route::get('/novedad/', 'NovedadesController@mostrarNovedades');


Route::post('/novedad/unico', 'NovedadesController@obtenerNovedad');
Route::get('/novedad/unico', 'NovedadesController@mostrarNovedad');

Route::post('/novedad/agregar', 'NovedadesController@crearNovedad');

Route::get('/novedad/agregar', 'NovedadesController@agregarNovedad');

Route::put('/novedad/actualizar', 'NovedadesController@actualizarNovedad');
Route::post('/novedad/actualizar', 'NovedadesController@editarNovedad');
Route::get('/novedad/actualizar', 'NovedadesController@elegirNovedad');

Route::post('/personas/eliminar', 'NovedadesController@eliminarNovedad');
Route::get('/personas/eliminar', 'NovedadesController@seleccionarNovedad');

//-----anopro controller-----------------------------------------------------------------------------
Route::get('/renanos/', 'RenanosController@mostrarRenanos');
//buscar renanos por id
Route::get('/renanos/unico', 'RenanosController@mostrarRenano');
Route::post('/renanos/unico', 'RenanosController@obtenerRenano');
//Agregar renano
Route::post('/siembra/{idsiembra}/renano/agregar', 'FincasPersonasController@crearRenanos');
Route::get('/siembra/{idsiembra}/renano/agregar', 'FincasPersonasController@agregarRenano');
//Actualizar renano
Route::put('/siembra/{idsiembra}/renano/actualizar', 'RenanosSiembraController@actualizarRenano');
Route::post('/siembra/{idsiembra}/renano/actualizar', 'RenanosSiembraController@editarRenanos');
Route::get('/siembra/{idsiembra}/renano/actualizar', 'RenanosSiembraController@elegirRenano');
//Eliminar renano
Route::post('/siembra/renano/eliminar', 'RenanosSiembraController@eliminarRenanos');
Route::get('/siembra/renano/eliminar', 'RenanosSiembraController@seleccionarRenanos');

