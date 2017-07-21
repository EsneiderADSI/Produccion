@extends('layouts.master')
@section('contenido')
	@if(sizeof($renano) > 0)
  <table class="table table-striped table-hover">
     <tr>
                      <td>PDF de Rendimineto</td>
                      <td><a href="reporteRendimiento/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="reporteRendimiento/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                      </tr>

</table>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Año</th>
					<th>Produccion total</th>
					<th>Produccion esparada</th>
					<th>Siembra</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($renano as $renano)
				<tr>
					<td>{{$renano->id}}</td>
                    <td>{{$renano->ano_ren}}</td>
                    <td>{{$renano->proreal_ren}}</td>
                    <td>{{$renano->proesparada_ren}}</td>
                    <td>{{$renano->siembra_id}}</td>
				
				
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay años de produccion 
		</div>

		@endif
@endsection