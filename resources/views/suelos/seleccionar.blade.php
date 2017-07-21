@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/suelos/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Suelo</legend>
		
			<div class="form-group">
				<label for="">Suelo</label>
				<select name="suelos_id" id="inputsuelos_id" class="form-control" required>
                <option>Por favor elija un Suelo</option>
					@foreach($suelos as $suelo)
					<option value="{{$suelo->id}}">{{$suelo->nombre_sue}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection