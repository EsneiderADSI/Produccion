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

Route::get('/administrador', function () 
{
    return view('administrador');
});

Route::get('/paracultivo', function () 
{
    return view('paracultivo');
});
//-----cosecha controller-------------------------------------------------------------

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

//-----siembra controller-------------------------------------------------------------

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
Route::put('/personas/fincas/actualizar', 'FincasPersonasController@actualizarFinca');
Route::post('/personas/fincas/actualizar', 'FincasPersonasController@editarFinca');
Route::get('/personas/fincas/actualizar', 'FincasPersonasController@elegirFinca');
//Eliminar fincas
Route::post('/personas/fincas/eliminar', 'FincasPersonasController@eliminarFinca');
Route::get('/personas/fincas/eliminar', 'FincasPersonasController@seleccionarFinca');

//-----novedades controller-----------------------------------------------------------------------------
Route::get('/novedades/', 'NovedadesController@mostrarNovedades');


Route::post('/novedades/unico', 'NovedadesController@obtenerNovedad');
Route::get('/novedades/unico', 'NovedadesController@mostrarNovedad');

Route::post('/siembras/novedades/agregar', 'NovedadesSiembrasController@crearNovedad');
Route::get('/siembras/novedades/agregar', 'NovedadesSiembrasController@agregarNovedad');

Route::put('/siembras/novedades/actualizar', 'NovedadesSiembrasController@actualizarNovedad');
Route::post('/siembras/novedades/actualizar', 'NovedadesSiembrasController@editarNovedad');
Route::get('/siembras/novedades/actualizar', 'NovedadesSiembrasController@elegirNovedad');

Route::post('/siembras/novedades/eliminar', 'NovedadesSiembrasController@eliminarNovedad');
Route::get('/siembras/novedades/eliminar', 'NovedadesSiembrasController@seleccionarNovedad');

//-----renano controller-----------------------------------------------------------------------------
Route::get('/renanos/', 'RenanosController@mostrarRenanos');
//buscar renanos por id
Route::get('/renanos/unico', 'RenanosController@mostrarRenano');
Route::post('/renanos/unico', 'RenanosController@obtenerRenano');
//Agregar renano
Route::post('/siembras/renanos/agregar', 'RenanosSiembrasController@crearRenanos');
Route::get('/siembras/renanos/agregar', 'RenanosSiembrasController@agregarRenano');
//Actualizar renano
Route::put('/siembras/renanos/actualizar', 'RenanosSiembrasController@actualizarRenano');
Route::post('/siembras/renanos/actualizar', 'RenanosSiembrasController@editarRenano');
Route::get('/siembras/renanos/actualizar', 'RenanosSiembrasController@elegirRenano');
//Eliminar renano
Route::post('/siembra/renanos/eliminar', 'RenanosSiembrasController@eliminarRenano');
Route::get('/siembra/renanos/eliminar', 'RenanosSiembrasController@seleccionarRenanos');



//---------------------------------------procedimientos para Suelos-----------------------------------------------
Route::get('/suelos/', 'SuelosController@mostrarSuelos');
//consultar un suelo
Route::post('/suelos/unico', 'SuelosController@obtenerSuelo');
Route::get('/suelos/unico', 'SuelosController@mostrarSuelo');

//agregar un suelo
Route::post('/suelos/agregar', 'SuelosController@crearSuelo');
Route::get('/suelos/agregar', 'SuelosController@agregarSuelo');

//actualizar un suelo
Route::put('/suelos/actualizar', 'SuelosController@actualizarSuelo');
Route::post('/suelos/actualizar', 'SuelosController@editarSuelo');
Route::get('/suelos/actualizar', 'SuelosController@elegirSuelo');

//eliminiar un suelo
Route::post('/suelos/eliminar', 'SuelosController@eliminarSuelo');
Route::get('/suelos/eliminar', 'SuelosController@seleccionarSuelo');

//-----repor pdf-----------------------------------------------------------------------------

Route::get('reportes', 'PdfController@index');
Route::get('crear_reporte/{tipo}', 'PdfController@crear_reporte');
Route::get('reporteNovedad/{tipo}', 'PdfController@reporteNovedad');
Route::get('reporteSiembra/{tipo}', 'PdfController@reporteSiembra');
Route::get('reportePersona/{tipo}', 'PdfController@reportePersona');
Route::get('reporteProducto/{tipo}', 'PdfController@reporteProducto');
Route::get('reporteCosecha/{tipo}', 'PdfController@reporteCosecha');
Route::get('reporteRendimiento/{tipo}', 'PdfController@reporteRendimiento');
Route::get('reporteCultivo/{tipo}', 'PdfController@reporteCultivo');




//-----Procedimientos cultivos-----------------------------------------------------------------------------
Route::get('/cultivos/', 'CultivosController@mostrarCultivos');
//consultar un cultivo
Route::post('/cultivos/unico', 'CultivosController@obtenerCultivo');
Route::get('/cultivos/unico', 'CultivosController@mostrarCultivo');

//agregar un cultvp
Route::post('/cultivos/agregar', 'CultivosController@crearCultivo');
Route::get('/cultivos/agregar', 'CultivosController@agregarCultivo');

//actualizar un cultivo
Route::put('/cultivos/actualizar', 'CultivosController@actualizarCultivo');
Route::post('/cultivos/actualizar', 'CultivosController@editarCultivo');
Route::get('/cultivos/actualizar', 'CultivosController@elegirCultivo');

//eliminiar un cultivo
Route::post('/cultivos/eliminar', 'CultivosController@eliminarCultivo');
Route::get('/cultivos/eliminar', 'CultivosController@seleccionarCultivo');

//---- reporte excel--------
Route::resource('/excel/','ExcelController');







