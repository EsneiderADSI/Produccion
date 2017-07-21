@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/siembras/novedades/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija una Novedad</legend>
		
			<div class="form-group">
				<label for="">Novedad </label>
				<select name="novedad_id" id="inputidNovedad" class="form-control" required>
                <option>Por favor elija una novedad</option>
					@foreach($novedades as $novedad)
					<option value="{{$novedad->id}}"> {{$novedad->fecha_nov}},  {{$novedad->tipnov_nov}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection