<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class CultivosController extends ClienteController
{
    //método para mostrar las cultivo
	
	public function mostrarCultivos()
	{
		$cultivo = $this->obtenerTodosLosCultivos();
		return view('cultivos.todos', ['cultivos' => $cultivo]);
	}
	
	public function obtenerCultivo(UnicoRequest $request)
    {
        $id = $request->get('id');
        $cultivo = $this->obtenerUnCultivo($id);
        return view('cultivos.mostrar', ['cultivos' => $cultivo]);
    }

	public function mostrarCultivo()
    {
        return view('cultivos.unico');
    }
    
	//métodos para agregar cultivo
    public function agregarCultivo()
    {
        return view('cultivos.agregar');
    }
	
 
 
    public function crearCultivo(Request $request)
    {

        $this->almacenarCultivo($request);
        return redirect('/cultivos');
    }
	
		
	//Métodos para Modificar cultivo
    //1. 
    public function elegirCultivo()
    {
        $cultivo = $this->obtenerTodosLosCultivos();
        return view('cultivos.elegir', ['cultivos' => $cultivo]);
    }
	
	public function editarCultivo(Request $request)
    {
        $id = $request->get('cultivo_id');
        $cultivo = $this->obtenerUnCultivo($id);
        return view('cultivos.editar', ['cultivos' => $cultivo]);
    }
	
	
    public function actualizarCultivo(Request $request)
    {
        $this->modificarCultivo($request);
        return redirect('/cultivos');
    }
	
	//Método para Eliminar cultivo
	
		    public function seleccionarCultivo()
    {
        $cultivo = $this->obtenerTodosLosCultivos();
        return view('cultivos.seleccionar', ['cultivos' => $cultivo]);
    }
	
    public function eliminarCultivo(Request $request)
    {
        $this->removerCultivo($request);
        return redirect('/cultivos');
    }
}