@extends('layouts.master')

@section('contenido')		
		@if(sizeof($cosechas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
                    <th>Id</th>
					<th>Fecha de cosecha</th>
					<th>Produccion esperada</th>
					<th>Producion real</th>
					<th>Destino</th>
					<th>Observaciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cosechas as $cosecha)
				<tr>
					<td>{{$cosecha->id}}</td>
					<td>{{$cosecha->fecha_cos}}</td>
					<td>{{$cosecha->pro_esp_cos}}</td>
					<td>{{$cosecha->prototal_cos}}</td>
					<td>{{$cosecha->destino_cos}}</td>
					<td>{{$cosecha->observaciones_cos}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay cosechas en el siembra seleccionado
		</div>

		@endif
@endsection