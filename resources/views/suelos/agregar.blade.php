@extends('layouts.master')

@section('contenido')		
		
			<form action="{{url('/suelos/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Suelo</legend>
	
			<div class="form-group">
				<label for="">Id</label>
				<input type="number" class="form-control" name="id" required>
			</div>
            
            <div class="form-group">
				<label for="">Tipo</label>
				<input type="number" class="form-control" name="tipo_sue" required>
			</div>
            
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre_sue" required>
			</div>
            
            <div class="form-group">
				<label for="">Observaciones</label>
				<input type="text" class="form-control" name="observaciones_sue" required>
			</div>
     
			<button type="submit" class="btn btn-primary">Crear Suelo</button>
		</form>

@endsection