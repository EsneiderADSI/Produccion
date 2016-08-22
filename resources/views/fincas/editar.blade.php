@extends('layouts.master')

@section('contenido')		
		@if(sizeof($personas) > 0)
	<form action="{{url('/fincas/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$fincas->id}}">

			<legend>Editar una Finca</legend>

			<div class="form-group">
				<label for="">nombre_fin </label>
				<input type="text" class="form-control" name="nombre_fin" required value="{{$fincas->nombre_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">departamento_fin </label>
				<input type="date" class="form-control" name="departamento_fin" required value="{{$fincas->departamento_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">municipio_fin </label>
				<input type="text" class="form-control" name="municipio_fin" required value="{{$fincas->municipio_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">vereda_fin </label>
				<input type="text" class="form-control" name="vereda_fin" required value="{{$fincas->vereda_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">latitud </label>
				<input type="text" class="form-control" name="latitud" required value="{{$fincas->latitud}}">
			</div>
		
			<div class="form-group">
				<label for="">longitud </label>
				<input type="text" class="form-control" name="longitud" required value="{{$fincas->longitud}}">
			</div>
		
			<div class="form-group">
				<label for="">viaacc_fin </label>
				<input type="text" class="form-control" name="viaacc_fin" required value="{{$fincas->viaacc_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">intgamilia_fin </label>
				<input type="text" class="form-control" name="intgamilia_fin" required value="{{$fincas->intgamilia_fin}}">
			</div>
		
			<div class="form-group">
				<label for="">jovenes1518</label>
				<input type="text" class="form-control" name="jovenes1518" required value="{{$fincas->jovenes1518}}">
			</div>
		
               
			<div class="form-group">
				<label for="">Persona</label>
				<select name="persona_id" id="inputPersona_id" class="form-control" required value="{{$fincas->persona_id}}">
					<option>Seleccione un persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}" {{$persona->id === $sfinca->persona_id ? 'selected' : ''}}>{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Editar Finca</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay personas en este momento para editar Finca
		</div>

		@endif
@endsection