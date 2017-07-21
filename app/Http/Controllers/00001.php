<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

class ClienteController extends Controller
{
      /**
      /**
     * Métodos para Siembras
     */
    protected function obtenerTodasLasSiembras()
    {
    	$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/siembras');
    	$datos = json_decode($respuesta);
    	$siembras = $datos->data;
    	return $siembras;
    }
	

	
	protected function almacenarSiembra(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $idPersona = $request->get('persona_id');

        $respuesta = $this->realizarPeticion('POST', "http://agroproduccion.guayabavelez.com/personas/{$idPersona}/siembras", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
	
//Borrar un siembra	
	protected function removerSiembra(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        
        $idSiembra = $request->get('siembra_id');

        $siembra = $this->obtenerUnaSiembra($idSiembra);
echo $siembra->id;
echo $siembra->persona_id;
        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/personas/{$siembra->persona_id}/siembras/{$siembra->id}", ['headers' => ['Authorization' => $accessToken]]);
    }
	//http://agroproduccion.guayabavelez.com/personas/5/siembras/5


	
	
//Editar un siembra

	protected function obtenerUnaSiembra($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/siembras/{$id}");
        $datos = json_decode($respuesta);
        $siembra = $datos->data;
        return $siembra;
    }
	
 protected function modificarSiembra(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $idSiembra = $request->get('siembra_id');
        $idPersona = $request->get('persona_id');

        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/personas/{$idPersona}/siembras/{$idSiembra}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }
    /**
     * Métodos para Cosechas
     */
    protected function obtenerTodasLasCosechas()
    {
    	$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/cosechas');
    	$datos = json_decode($respuesta);
    	$cosechas = $datos->data;
    	return $cosechas;
		
    }
	
	protected function obtenerUnaCosecha($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/cosechas/{$id}");
        $datos = json_decode($respuesta);
        $cosecha = $datos->data;
        return $cosecha;
    }
    protected function almacenarCosecha(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $respuesta = $this->realizarPeticion('POST', 'http://agroproduccion.guayabavelez.com/cosechas', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
    protected function modificarCosecha(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $id = $request->get('id');
        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/cosechas/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }
    protected function removerCosecha(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $id = $request->get('cosecha_id');
        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/cosechas/{$id}", ['headers' => ['Authorization' => $accessToken]]);
    }
    /**
     * Métodos para Personas
     */
    protected function obtenerTodasLasPersonas()
    {
   $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/personas/");
    	$datos = json_decode($respuesta);
    	$personas = $datos->data;
    	return $personas;
    }
	
	protected function obtenerUnaPersona($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/personas/{$id}");
        $datos = json_decode($respuesta);
        $persona = $datos->data;
        return $persona;
    }
    protected function almacenarPersona(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
       $respuesta = $this->realizarPeticion('POST', 'http://agroproduccion.guayabavelez.com/personas', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
    protected function modificarPersona(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $id = $request->get('id');
        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/personas/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }
    protected function removerPersona(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $id = $request->get('persona_id');
        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/personas/{$id}", ['headers' => ['Authorization' => $accessToken]]);
    }
	
	    /**
     * Métodos para SiembrasCosechas
     */
    protected function obtenerCosechasunaSiembra($siembraId)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/siembras/{$siembraId}/cosechas");
        $datos = json_decode($respuesta);
        $cosechas = $datos->data;
        return $cosechas;
    }
	
	    protected function obtenerrendimiento()
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/siembras/cosechas");
        $datos = json_decode($respuesta);
        $cosechas_siembras = $datos->data;
        return $cosechas_siembras;
    }
	
	 protected function agregarCosechaSiembras(Request $request)
    {
		
		echo "lele";
      /*  $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $siembraId = $request->get('siembra_id');
        $cosechaId = $request->get('cosecha_id');

       $this->realizarPeticion('POST', "http://agroproduccion.guayabavelez.com/siembras/{$siembraId}/cosechas/{$cosechaId}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);*/
    }
	

protected function removerCosechaSiembra(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        
        $idSiembra = $request->get('siembra_id');
        $idCosecha = $request->get('cosecha_id');

        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/siembras/{$idSiembra}/cosechas/{$idCosecha}", ['headers' => ['Authorization' => $accessToken]]);
    }
	
     /**
     * Métodos para PersonasSiembras
     */
    protected function obtenerSiembrasPersona($personaId)
    {
        $respuesta = $this->realizarPeticion('GET',"http://agroproduccion.guayabavelez.com/personas/{$personaId}/siembras");

        $datos = json_decode($respuesta);

        $siembras = $datos->data;

        return $siembras;
    }

//metodos para productos
	protected function obtenerTodosLosProductos()
	{
		$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/productos');
		$datos = json_decode($respuesta);
		$productos = $datos->data;
		return $productos;
		}
protected function obtenerUnProducto($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/productos/{$id}");
        $datos = json_decode($respuesta);
        $productos = $datos->data;
        return $productos;
    }	
	
protected function almacenarProducto(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $respuesta = $this->realizarPeticion('POST', 'http://agroproduccion.guayabavelez.com/productos', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
    protected function modificarProducto(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $id = $request->get('id');
        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/productos/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }
    protected function removerProducto(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $id = $request->get('productos_id');
        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/productos/{$id}", ['headers' => ['Authorization' => $accessToken]]);
    }
 

 //Métodos para Fincas
     
    protected function obtenerTodasLasFincas()
    {
    	$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/fincas');
    	$datos = json_decode($respuesta);
    	$fincas = $datos->data;
    	return $fincas;
		 }
		
	protected function obtenerUnaFinca($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/fincas/{$id}");
        $datos = json_decode($respuesta);
        $finca = $datos->data;
        return $finca;
    }
    protected function almacenarFinca(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        
		$idPersona = $request->get('persona_id');
		$respuesta = $this->realizarPeticion('POST', "http://agroproduccion.guayabavelez.com/personas/{$idPersona}/fincas", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
 	 protected function modificarFinca(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $idFinca = $request->get('finca_id');
        $idPersona = $request->get('persona_id');

        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/personas/{$idPersona}/fincas/{$idFinca}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }
       

	
	
	
protected function removerFinca(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        
        $idFinca = $request->get('finca_id');
        $finca = $this->obtenerUnaFinca($idFinca);

        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/personas/{$finca->persona_id}/fincas/{$finca->id}", ['headers' => ['Authorization' => $accessToken]]);
    }
		
	
	
	/**
     * Métodos para años produccion
     */
  /**
     * Métodos para Renanos
     */


	
    protected function obtenerTodasLasRenanos()
    {
    	$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/renanos');
    	$datos = json_decode($respuesta);
    	$renanos = $datos->data;
    	return $renanos;
		 }
		 
		 
		 
	protected function almacenarRenano(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $idFinca = $request->get('siembra_id');
        $respuesta = $this->realizarPeticion('POST', "http://agroproduccion.guayabavelez.com/siembras/{$idSiembra}/renanos", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
	
//Borrar un Renano
	
protected function removerRenano(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        
        $idRenano = $request->get('renano_id');

        $renano = $this->obtenerUnaRenano($idRenano);
echo $renano->id;
echo $renano->siembra_id;
        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/siembras/{$renano->siembra_id}/renanos/{$renano->id}", ['headers' => ['Authorization' => $accessToken]]);
    }
	
	
	//http://agroproduccion.guayabavelez.com/personas/5/siembras/5
	protected function obtenerUnaRenano($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/renanos/{$id}");
        $datos = json_decode($respuesta);
        $renano = $datos->data;
        return $renano;
    }
	//Editar un renano
 protected function modificarRenano(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $idRenano = $request->get('renano_id');
        $idSiembra = $request->get('siembra_id');
        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/siembras/{$idSiembra}/renanos/{$idRenano}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }
	
	
	
	
  /**
     * Métodos para Novedades
     */
    protected function obtenerTodasLasNovedades()
    {
    	$respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/novedades");
    	$datos = json_decode($respuesta);
    	$novedades = $datos->data;
    	return $novedades;	
    }
protected function obtenerUnaNovedad($id)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/novedades/{$id}");
        $datos = json_decode($respuesta);
        $novedad = $datos->data;
        return $novedad;
    
    }
	protected function almacenarNovedad(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $siembra_id = $request->get('siembra_id');
		
		$respuesta = $this->realizarPeticion('POST', "http://agroproduccion.guayabavelez.com/siembras/{$siembra_id}/novedades", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
   protected function modificarNovedad(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
		$idNovedad = $request->get('id');
		$siembra_id = $request->get('siembra_id');
        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/siembras/{$siembra_id}/novedades/{$idNovedad}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);

	}
protected function removerNovedad(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $idNovedad = $request->get('novedad_id');
        $novedad = $this->obtenerUnaNovedad($idNovedad);
        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/siembras/{$novedad->siembra_id}/novedades/{$novedad->id}", ['headers' => ['Authorization' => $accessToken]]);
    }

	
 //metodos para suelo
	protected function obtenerTodosLosSuelos()
	{
		$respuesta = $this->realizarPeticion('GET', 'http://agroproduccion.guayabavelez.com/suelos');
		$datos = json_decode($respuesta);
		$suelo = $datos->data;
		return $suelo;
		}
protected function obtenerUnSuelo($Id_sue)
    {
        $respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/suelos/{$Id_sue}");
        $datos = json_decode($respuesta);
        $suelo = $datos->data;
        return $suelo;
    }
	
	
	
protected function almacenarSuelo(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $respuesta = $this->realizarPeticion('POST', 'http://agroproduccion.guayabavelez.com/suelos', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }
    protected function modificarSuelo(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $Id_sue = $request->get('Id_sue');
        $respuesta = $this->realizarPeticion('PUT', "http://agroproduccion.guayabavelez.com/suelos/{$Id_sue}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('Id_sue')]);
    }
    protected function removerSuelo(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();
        $Id_sue = $request->get('suelo_Id_sue');
        $respuesta = $this->realizarPeticion('DELETE', "http://agroproduccion.guayabavelez.com/suelos/{$Id_sue}", ['headers' => ['Authorization' => $accessToken]]);
    }

    
}

