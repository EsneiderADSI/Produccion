@extends('layouts.master')

@section('contenido')

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
				<tr>
					<td>{{$persona->id}}</td>
					<td>{{$persona->nombre_per}}</td>
                    <td>{{$persona->correo_per}}</td>
					<td>{{$persona->telefono_per}}</td>
                    <td>{{$persona->programa_per}}</td>
				</tr>
			</tbody>
		</table>	
        
        
@endsection