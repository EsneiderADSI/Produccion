@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/cultivos/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Cultivo</legend>
		
			<div class="form-group">
				<label for="">Cultivo</label>
				<select name="cultivo_id" id="inputcultivo_id" class="form-control" required>
                <option>Por favor elija un Cultivo</option>
					@foreach($cultivos as $cultivo)
					<option value="{{$cultivo->id}}">{{$cultivo->nombre_cul}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection