@extends('layouts.master')

@section('contenido')

	<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Secreto</th>
					<th>Nombre</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$oauth_clients->id}}</td>
					<td>{{$oauth_clients->secret}}</td>
					<td>{{$oauth_clients->name}}</td>
				</tr>
			</tbody>
		</table>	
    
		
@endsection