@extends('layouts.master')

@section('contenido')		
		
             <form action="{{url('/personas/fincas/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un </legend>
		
			<div class="form-group">
				<label for="">finca</label>
				<select name="finca_id" id="finca_id" class="form-control" required>
                <option>Por favor elija un finca</option>
					@foreach($fincas as $finca)
					<option value="{{$finca->id}}">{{$finca->nombre_fin}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>
@endsection