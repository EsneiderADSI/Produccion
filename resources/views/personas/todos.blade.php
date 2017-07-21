@extends('layouts.master')
@section('contenido')
	@if(sizeof($personas) > 0)
  <table class="table table-striped table-hover">
     <tr>
                      <td>PDF de personas</td>
                      <td><a href="reporteProducto/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="reporteProducto/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                      </tr>

</table>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre </th>
					<th>Correo </th>
					<th>Telefono </th>
                    <th>Programa </th>
                    
				
				</tr>
			</thead>
			<tbody>
				@foreach($personas as $persona)
				<tr>
					<td>{{$persona->id}}</td>
					<td>{{$persona->nombre_per}}</td>
                    <td>{{$persona->correo_per}}</td>
					<td>{{$persona->telefono_per}}</td>
                    <td>{{$persona->programa_per}}</td>
		
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay personas en este momento
		</div>

		@endif
@endsection