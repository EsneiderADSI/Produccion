@extends('layouts.master')

@section('contenido')		
		@if(sizeof($siembras) > 0)

		<form action="{{url('/siembras/cosechas')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un Siembra</legend>
			<div class="form-group">
				<label for="">Siembra</label>
				<select name="siembra_id" id="inputSiembra_id" class="form-control" required>
					<option>Seleccione un siembra</option>
					@foreach($siembras as $siembra)
					<option value="{{$siembra->id}}">{{$siembra->fecha_sie}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Obtener Rendimiento de las Cosechas</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay siembras en este momento
		</div>

		@endif
@endsection