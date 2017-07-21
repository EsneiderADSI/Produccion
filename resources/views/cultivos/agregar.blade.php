@extends('layouts.master')

@section('contenido')		
		
			<form action="{{url('/cultivos/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Cultivo</legend>
	
			<div class="form-group">
				<label for="">Id</label>
				<input type="number" class="form-control" name="id" required>
			</div>
            
            
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre_cul" required>
			</div>
            
     
			<button type="submit" class="btn btn-primary">Crear Cultivo</button>
		</form>

@endsection