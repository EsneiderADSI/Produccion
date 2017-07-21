@extends('layouts.master')

@section('contenido')		
		@if(sizeof($siembras) > 0)
    <table class="table table-striped table-hover">
     <tr>
                      <td>PDF de siembras</td>
                      <td><a href="reporteSiembra/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="reporteSiembra/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                      </tr>

</table>
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
				@foreach($siembras as $siembra)
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
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay siembras en este momento
		</div>

		@endif
@endsection