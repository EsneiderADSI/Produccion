@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/usuariocliente/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputid" class="form-control" value="{{$oauth_clients->id}}">

			<legend>Ingrese los Datos del Usuario</legend>
		
		<div class="form-group">
				<label for="">Id</label>
				<input type="number" class="form-control" name="id" required value="{{$oauth_clients->id}}">
			</div>
            
			<div class="form-group">
				<label for="">Secreto</label>
				<input type="text" class="form-control" name="secret" required value="{{$oauth_clients->secret}}">
			</div>
            
            <div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="name" required value="{{$oauth_clients->name}}">
			</div>
            
        
			<button type="submit" class="btn btn-primary">Actualizar Usuario</button>
		</form>

@endsection