@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/cultivos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Cultivo</legend>
		
			<div class="form-group">
				<label for="">Cultivos</label>
				<select name="cultivo_id" id="inputCultivo_id" class="form-control" required>
                <option>Por favor elija un Cultivo</option>
					@foreach($cultivos as $cultivo)
					<option value="{{$cultivo->id}}">{{$cultivo->nombre_cul}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection