@extends('layouts.master')
@section('contenido')
	@if(sizeof($fincas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Municipio</th>
					<th>Vereda</th>
                    <th>Vias</th>
                    <th>Propietario</th>
				</tr>
			</thead>
			<tbody>
				@foreach($fincas as $finca)
				<tr>
					<td>{{$fincas->id}}</td>
                    <td>{{$fincas->nombre_fin}}</td>
                    <td>{{$fincas->municipio_fin}}</td>
                    <td>{{$fincas->vereda_fin}}</td>
                    <td>{{$fincas->viaacc_fin}}</td>
                    <td>{{$fincas->persona_id}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay fincas 
		</div>

		@endif
@endsection