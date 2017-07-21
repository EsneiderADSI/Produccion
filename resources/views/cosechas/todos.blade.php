@extends('layouts.master')
@section('contenido')
	@if(sizeof($cosechas) > 0)
    <table class="table table-striped table-hover">
     <tr>
                      <td>PDF de cosechas</td>
                      <td><a href="reporteCosecha/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="reporteCosecha/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                      </tr>

</table>
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
			<strong>Ups</strong> No hay cosechas en este momento
		</div>

		@endif
@endsection