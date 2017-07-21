@extends('layouts.master')

@section('contenido')
@if(sizeof($personas) > 0)

	<form action="{{url('/personas/fincas/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$finca->id}}">

			<legend>Ingrese los Datos de la Finca</legend>
		
			
            
            	<div class="form-group">
				<label for="">nombre de la Finca</label>
				<input type="text" class="form-control" name="nombre_fin" required value="{{$finca->nombre_fin}}">
			</div>
            
            
			<div class="form-group">
				<label for="">departamento en el cúal se encuentra la Finca </label>
				<input type="text" class="form-control" name="departamento_fin" required value="{{$finca->departamento_fin}}">
			</div>
            
            
			<div class="form-group">
				<label for="">municipio en el cúal se encuentra la Finca  </label>
				<input type="text" class="form-control" name="municipio_fin" required value="{{$finca->municipio_fin}}">
			</div>
            
            
			<div class="form-group">
				<label for="">vereda en la cúal se encuentra la Finca  </label>
				<input type="text" class="form-control" name="vereda_fin" required value="{{$finca->vereda_fin}}">
			</div>
            
            
			<div class="form-group">
				<label for="">Ubicación Latitud </label>
				<input type="text" class="form-control" name="latitud" required value="{{$finca->latitud}}">
			</div>
            
            
			<div class="form-group">
				<label for="">Ubicación Longitud </label>
				<input type="text" class="form-control" name="longitud" required value="{{$finca->longitud}}">
			</div>
            
          

			<div class="form-group">
				<label for="">via de acceso a la Finca</label>
				<input type="text" class="form-control" name="viaacc_fin" required value="{{$finca->viaacc_fin}}">
			</div>

			<div class="form-group">
				<label for="">Integrantes de la Familia</label>
				<input type="text" class="form-control" name="intgamilia_fin" required value="{{$finca->intgamilia_fin}}">
			</div>

			<div class="form-group">
				<label for="">Jovenes entre 15 y 18 Años</label>
				<input type="text" class="form-control" name="jovenes1518" required value="{{$finca->jovenes1518}}">
			</div>
            
            <div class="form-group">
				<label for="">Seleccione el Propietario de la Finca</label>
				<select name="persona_id" id="inputPersona_id" class="form-control" required >
					<option>Seleccione un persona</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}" {{$persona->id === $finca->persona_id ? 'selected' : ''}}>{{$persona->nombre_per}}</option>
					@endforeach
				</select>

            
            
          	
			<button type="submit" class="btn btn-primary">Actualizar Finca</button>
@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay Propietarios en este momento para crear una finca
		</div>

		@endif
			</form>
        
@endsection