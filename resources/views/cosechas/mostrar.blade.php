@extends('layouts.master')

@section('contenido')

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
				<tr>
					<td>{{$cosecha->id}}</td>
					<td>{{$cosecha->fecha_cos}}</td>
					<td>{{$cosecha->pro_esp_cos}}</td>
					<td>{{$cosecha->prototal_cos}}</td>
					<td>{{$cosecha->destino_cos}}</td>
					<td>{{$cosecha->observaciones_cos}}</td>
				</tr>
			</tbody>
		</table>
@endsection