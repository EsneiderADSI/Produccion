@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/usuariocliente/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Usuario</legend>
		
			<div class="form-group">
				<label for="">Usuarios</label>
				<select name="oauth_clients_id" id="inputoauth_clients_id" class="form-control" required>
                <option>Por favor elija un Usuario</option>
					@foreach($oauth_client as $oauth_client)
					<option value="{{$oauth_clients->id}}">{{$oauth_client->name}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection