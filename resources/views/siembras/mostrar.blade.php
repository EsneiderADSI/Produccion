@extends('layouts.master')

@section('contenido')

<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Fecha de siembra</th>
                    <th>Estado</th>
					<th>Numero de plantas</th>
                    <th>Area (mt2)</th>
                    <th>Tipo riego</th>
                    <th>Fuente de agua</th>
                    <th>Edad</th>
                    <th>Distancia</th>
					<th>Propietario</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$siembra->id}}</td>
					<td>{{$siembra->fecha_sie}}</td>
                    <td>{{$siembra->estado_sie}}</td>
					<td>{{$siembra->numplantas_sie}}</td>
                    <td>{{$siembra->area_sie}}</td>
                     <td>{{$siembra->tiporiego_sie}}</td>
                     <td>{{$siembra->fteagua_sie}}</td>
                     <td>{{$siembra->edad_sie}}</td>
					<td>{{$siembra->distancia_sie}}</td>
                    <td>{{$siembra->persona_id}}</td>
				</tr>
			</tbody>
		</table>
@endsection