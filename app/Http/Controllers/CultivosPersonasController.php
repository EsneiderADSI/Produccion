<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class CultivosPersonasController extends ClienteController
{
	  public function mostrarPersonas() 
    {
    	$personas = $this->obtenerTodasLasPersonas();
    	return view('persona-cultivos.personas', ['personas' => $personas]);
	}
    public function mostrarCultivosPersona(Request $request)
    {
    	$cultivoId_cul = $request->get('persona_id');
    	$cultivos = $this->obtenerFincasPersona($cultivoId_cul);
    	return view('persona-cultivos.cultivo', ['cultivos' => $cultivos]);	
	}
//Agregar cultivo
//1. Formulario para agregar un cultivo cargando las personas que ya están en la basede datos
public function agregarCultivo()
    {
		 $personas = $this->obtenerTodasLasPersonas();
		return view('persona-cultivos.agregar', ['personas' => $personas]);
    }
	
 
 
    public function crearCultivo(Request $request)
    {
        $this->almacenarCultvo$request);
        return redirect('/cultivos');
    }
//Eliminar una cultivo
//1.
	
	 public function seleccionarCultivo()
    {
        $cultivos = $this->obtenerTodosLosCultivos();
	
        return view('persona-cultivos.seleccionar', ['cultivos' => $cultivos]);
    }
//2.
    public function eliminarCultivo(Request $request)
    {
        $this->removerCultivo($request);
        return redirect('/cultivos');
    }

//actualizar cultivos
//1.

public function elegirCultivos()
    {
        $cultivos = $this->obtenerTodosLosCultivos();

        return view('persona-cultivos.elegir', ['cultivos' => $cultivos]);
    }
//2. Editar cultivo

    public function editarCultivos(Request $request)
    {
        $idCultivo = $request->get('cultivo_id_cul');

        $cultivo = $this->obtenerUnCultivo($idCultivo);
   		
        $personas = $this->obtenerTodasLasPersonas();

        return view('persona-cultivos.editar', ['cultivos' => $cultivo, 'personas' => $personas]);
    }

    public function actualizarCultivo(Request $request)
    {
        $this->modificarCultivo($request);

        return redirect('/cultivos');
	}
}

