@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Municipio</th>
					<th>Vereda</th>
                    <th>Vias</th>
                    <th>Propietario</th>
                  
			</thead>
			<tbody>
				<tr>
					<td>{{$finca->id}}</td>
                    <td>{{$finca->nombre_fin}}</td>
                    <td>{{$finca->municipio_fin}}</td>
                    <td>{{$finca->vereda_fin}}</td>
                    <td>{{$finca->viaacc_fin}}</td>
                    <td>{{$finca->persona_id}}</td>

				</tr>
			</tbody>
		</table>
@endsection