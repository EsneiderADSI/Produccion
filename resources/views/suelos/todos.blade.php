@extends('layouts.master')
@section('contenido')
	@if(sizeof($suelos) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
                    <th>Tipo</th>
					<th>Nombre</th>
                    <th>Observaciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($suelos as $suelo)
				<tr>
					<td>{{$suelo->id}}</td>
                    <td>{{$suelo->tipo_sue}}</td>
					<td>{{$suelo->nombre_sue}}</td>
                    <td>{{$suelo->observaciones_sue}}</td>
                   
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay suelo en este momento
		</div>

		@endif
@endsection