@extends('layouts.master')

@section('contenido')	
@if(sizeof($personas) > 0)	
		
		<form action="{{url('/personas/fincas/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
					
			<input type="hidden" name="id" id="inputId" class="form-control">

			<legend>Ingrese los Datos de la Finca</legend>
		
			
            
            	<div class="form-group">
				<label for="">nombre de la Finca</label>
				<input type="text" class="form-control" name="nombre_fin" required >
			</div>
            
            
			<div class="form-group">
				<label for="">departamento en el cúal se encuentra la Finca </label>
				<input type="text" class="form-control" name="departamento_fin" required>
			</div>
            
            
			<div class="form-group">
				<label for="">municipio en el cúal se encuentra la Finca  </label>
				<input type="text" class="form-control" name="municipio_fin" required>
			</div>
            
            
			<div class="form-group">
				<label for="">vereda en la cúal se encuentra la Finca  </label>
				<input type="text" class="form-control" name="vereda_fin" required>
			</div>
            
            
			<div class="form-group">
				<label for="">Ubicación Latitud </label>
				<input type="text" class="form-control" name="latitud" required>
			</div>
            
            
			<div class="form-group">
				<label for="">Ubicación Longitud </label>
				<input type="text" class="form-control" name="longitud" required>
			</div>
            
          

			<div class="form-group">
				<label for="">via de acceso a la Finca</label>
				<input type="text" class="form-control" name="viaacc_fin" required>
			</div>

			<div class="form-group">
				<label for="">Integrantes de la Familia</label>
				<input type="text" class="form-control" name="intgamilia_fin" required>
			</div>

			<div class="form-group">
				<label for="">Jovenes entre 15 y 18 Años</label>
				<input type="text" class="form-control" name="jovenes1518" required">
			</div>
            
               
                <div class="form-group">
				<label for="">Seleccione el Propietario de la Finca</label>
				<select name="persona_id" id="persona_id" class="form-control" required>
					<option>Seleccione el propietario</option>
					@foreach($personas as $persona)
					<option value="{{$persona->id}}">{{$persona->nombre_per}}</option>
					@endforeach
				</select>
			</div>

           
            
          	
			<button type="submit" class="btn btn-primary">Actualizar Cosecha</button>
@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay Propietarios en este momento para crear una finca
		</div>

		@endif
			</form>
        
@endsection