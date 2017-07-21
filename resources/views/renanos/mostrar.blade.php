@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Año</th>
					<th>Produccion total</th>
					<th>Produccion esparada</th>
					<th>Siembra/th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$renanos->id}}</td>
                    <td>{{$renanos->ano_ren}}</td>
                    <td>{{$renanos->proreal_ren}}</td>
                    <td>{{$renanos->proesparada_ren}}</td>
                    <td>{{$renanos->siembra_id}}</td>
                    
				</tr>
			</tbody>
		</table>
@endsection