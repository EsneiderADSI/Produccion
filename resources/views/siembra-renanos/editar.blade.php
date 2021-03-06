@extends('layouts.master')

@section('contenido')		
		@if(sizeof($siembras) > 0)
	<form action="{{url('/renanos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$renano->id}}">

			<legend>Editar una Año</legend>

			<div class="form-group">
				<label for="">Año </label>
				<input type="text" class="form-control" name="ano_ren" required value="{{$renano->ano_ren}}">
			</div>
		
			<div class="form-group">
				<label for="">Produccion Real</label>
				<input type="date" class="form-control" name="proreal_ren" required value="{{$renano->proreal_ren}}">
			</div>
		
			<div class="form-group">
				<label for="">Produccion esperada </label>
				<input type="text" class="form-control" name="proesparada_ren" required value="{{$renano->proesparada_ren}}">
			</div>
            
			<div class="form-group">
				<label for="">Siembra</label>
				<select name="siembra_id" id="inputSiembra_id" class="form-control" required value="{{$renano->siembra_id}}">
					<option>Seleccione un siembra</option>
					@foreach($siembras as $siembra)
					<option value="{{$siembra->id}}" {{$siembra->id === $renano->siembra_id ? 'selected' : ''}}>{{$siembra->nombre_per}}</option>
					@endforeach
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Editar Año</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay siembras en este momento para editar Años
		</div>

		@endif
@endsection