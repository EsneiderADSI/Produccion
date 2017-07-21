<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;

use produccion\Http\Requests\UnicoRequest;

class UsuarioClienteController extends ClienteController
{
    //método para mostrar las usuarios
	
	public function mostrarUsuarioCliente()
	{
		$oauth_clients = $this->obtenerTodosLosUsuarios();
		return view('usuariocliente.todos', ['oauth_clients' => $oauth_clients]);
	}
	
	public function obtenerUsuario(UnicoRequest $request)
    {
        $id = $request->get('id');
        $oauth_clients = $this->obtenerUnUsuario($id);
        return view('usuariocliente.mostrar', ['oauth_clients' => $oauth_clients]);
    }
	
	public function mostrarUsuario()
    {
        return view('usuariocliente.unico');
    }
    
	//métodos para agregar usuarios
    public function agregarUsuario()
    {
        return view('usuariocliente.agregar');
    }
	

 
 
    public function crearUsuario(Request $request)
    {
        $this->almacenarUsuario($request);
        return redirect('/oauth_clients');
		
    }

	
		
	//Métodos para Modificar Usuarios
    //1. 
    public function elegirUsuario()
    {
        $oauth_clients = $this->obtenerTodosLosUsuarios();
        return view('usuariocliente.elegir', ['oauth_clients' => $oauth_clients]);
    }

	
	public function editarUsuario(Request $request)
    {
        $id = $request->get('oauth_clients_id');
        $oauth_clients = $this->obtenerUnUsuario($id);
        return view('usuariocliente.editar', ['oauth_clients' => $oauth_clients]);
    }
	
	
    public function actualizarUsuario(Request $request)
    {
        $this->modificarUsuario($request);
        return redirect('/oauth_clients');
    }

	
	//Método para Eliminar productos
	
		    public function seleccionarUsuario()
    {
        $oauth_clients = $this->obtenerTodosLosUsuarios();
        return view('usuariocliente.seleccionar', ['oauth_clients' => $oauth_clients]);
    }
	
    public function eliminarUsuario(Request $request)
    {
        $this->removerUsuario($request);
        return redirect('/oauth_clients');
    }
}