@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/usuariocliente/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Usuario</legend>
		
			<div class="form-group">
				<label for="">Usuarios</label>
				<select name="oauth_clients_id" id="inputoauth_clients_id" class="form-control" required>
                <option>Por favor elija un Producto</option>
					@foreach($oauth_clients as $oauth_clients)
					<option value="{{$oauth_clients->id}}">{{$oauth_clients->name}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection