@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/suelos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputid" class="form-control" value="{{$suelos->id}}">

			<legend>Ingrese los Datos del Suelo</legend>
		
		<div class="form-group">
				<label for="">Id</label>
				<input type="number" class="form-control" name="id" required value="{{$suelos->id}}">
			</div>
            
            <div class="form-group">
				<label for="">Tipo</label>
				<input type="number" class="form-control" name="tipo_sue" required value="{{$suelos->tipo_sue}}">
			</div>
            
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre_sue" required value="{{$suelos->nombre_sue}}">
			</div>
            
            <div class="form-group">
				<label for="">Observaciones</label>
				<input type="number" class="form-control" name="observaciones_sue" required value="{{$suelos->observaciones_sue}}">
			</div>

			<button type="submit" class="btn btn-primary">Actualizar Suelo</button>
		</form>

@endsection