<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;
use produccion\Http\Requests\UnicoRequest;

class SuelosController extends ClienteController
{
       //método para mostrar las Suelos
	
		
	public function mostrarSuelos()
			
	{
		$suelos = $this->obtenerTodosLosSuelos();
		return view('suelos.todos', ['suelos' => $suelos]);
	}
	
	public function obtenerSuelo(UnicoRequest $request)
    {
        $id = $request->get('id');
        $suelos = $this->obtenerUnSuelo($id);
        return view('suelos.mostrar', ['suelos' => $suelos]);
    }
	
	
	public function mostrarSuelo()
    {
        return view('suelos.unico');
    }
    
	//métodos para agregar suelos
    public function agregarSuelo()
    {
        return view('suelos.agregar');
    }
	
 
 
    public function crearSuelo(Request $request)
    {

        $this->almacenarProducto($request);
        return redirect('/suelos');
    }
	
		
	//Métodos para Modificar Suelos
    //1. 
    public function elegirSuelo()
    {
        $suelos = $this->obtenerTodosLosSuelos();
        return view('suelos.elegir', ['suelos' => $suelos]);
    }
	
	public function editarSuelo(Request $request)
    {
        $id = $request->get('suelos_id');
        $suelos = $this->obtenerSuelo($id);
        return view('suelos.editar', ['suelos' => $suelos]);
    }
	
	
    public function actualizarSuelo(Request $request)
    {
        $this->modificarProducto($request);
        return redirect('/suelos');
    }
	
	//Método para Eliminar suelos
	
		    public function seleccionarSuelo()
    {
        $suelos = $this->obtenerTodosLosSuelos();
        return view('suelos.seleccionar', ['suelos' => $suelos]);
    }
	
    public function eliminarSuelo(Request $request)
    {
        $this->removerProducto($request);
        return redirect('/suelos');
    }
}
