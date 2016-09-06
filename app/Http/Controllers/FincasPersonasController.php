<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class FincasPersonasController extends ClienteController
{
    //mostrar las personas y sus fincas
	//Yesid falta hacer este link es muy parecido a consultar siembra por persona
	  public function mostrarPersonas()
    {
    	$personas = $this->obtenerTodasLasPersonas();
    	return view('persona-fincas.personas', ['personas' => $personas]);
	}
    public function mostrarFincasPersona(Request $request)
    {
    	$fincaId = $request->get('persona_id');
    	$fincas = $this->obtenerFincasPersona($fincaId);
    	return view('persona-siembras.finca', ['fincas' => $fincas]);	
	}
//Agregar finca
//1. Formulario para agregar una finca cargando las personas que ya están en la basede datos
  public function agregarFinca()
    {
		 $personas = $this->obtenerTodasLasPersonas();
		return view('persona-fincas.agregar', ['personas' => $personas]);
    }
	
 
 
    public function crearFinca(Request $request)
    {

	    $this->almacenarFinca($request);
        return redirect('/fincas');
    }
//Eliminar una finca
//1.
	
	 public function seleccionarFinca()
    {
        $fincas = $this->obtenerTodasLasFincas();
	
        return view('persona-fincas.seleccionar', ['fincas' => $fincas]);
    }
//2.
    public function eliminarFinca(Request $request)
    {
        $this->removerFinca($request);
        return redirect('/fincas');
    }
//actualizar fincas
//1.
public function elegirFinca()
    {
        $fincas = $this->obtenerTodasLasFincas();
        return view('fincas.elegir', ['fincas' => $fincas]);
    }
//2. Editar finca
    public function editarFinca(Request $request)
    {
        $idFinca = $request->get('finca_id');
        $finca = $this->obtenerUnaFinca($idFinca);
   		
        $personas = $this->obtenerTodasLasPersonas();
        return view('persona-fincas.editar', ['siembra' => $finca, 'personas' => $personas]);
    }
    public function actualizarFinca(Request $request)
    {
        $this->modificarFinca($request);
        return redirect('/Fincas');
	}
}