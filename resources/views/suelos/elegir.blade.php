@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/suelos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Suelo</legend>
		
			<div class="form-group">
				<label for="">Suelos</label>
				<select name="suelos_id" id="inputsuelos_id" class="form-control" required>
                <option>Por favor elija un Suelo</option>
					@foreach($suelos as $suelos)
					<option value="{{$suelos->id}}">{{$suelos->nombre_sue}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection