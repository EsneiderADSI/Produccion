@extends('layouts.master')

@section('contenido')

	<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>id</th>
                    <th>Tipo</th>
					<th>Nombre</th>
                    <th>Observaciones</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$suelos->id}}</td>
                    <td>{{$suelos->tipo_sue}}</td>
					<td>{{$suelos->nombre_sue}}</td>
                    <td>{{$suelos->observaciones_sue}}</td>
				</tr>
			</tbody>
		</table>	
    
		
@endsection