@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/suelo/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Suelo</legend>
		
			<div class="form-group">
				<label for="">Suelos</label>
				<select name="suelo_Id_sue" id="inputsuelo_Id_sue" class="form-control" required>
                <option>Por favor elija un Suelo</option>
					@foreach($suelos as $suelos)
					<option value="{{$suelos->Id_sue}}">{{$suelos->Nombre_sue}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection