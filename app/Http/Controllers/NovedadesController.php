<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class NovedadesController extends ClienteController
{
    //
	   {
    	$novedades = $this->obtenerTodosLosNovedades);
    	return view('novedades.todos', ['novedades' => $novedades]);
	   }
}
