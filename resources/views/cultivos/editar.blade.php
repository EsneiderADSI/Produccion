@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/cultivos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputid" class="form-control" value="{{$cultivo->id}}">

			<legend>Ingrese los Datos del Cultivo</legend>
		
		<div class="form-group">
				<label for="">Id</label>
				<input type="number" class="form-control" name="id" required value="{{$cultivo->id}}">
			</div>
            
            
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre_cul" required value="{{$cultivo->nombre_cul}}">
			</div>
            

			<button type="submit" class="btn btn-primary">Actualizar Cultivo</button>
		</form>

@endsection