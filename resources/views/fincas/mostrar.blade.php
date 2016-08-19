@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Departamento</th>
					<th>Municipio</th>
					<th>Vereda</th>
					<th>Latitud</th>
					<th>Longitud</th>
                    <th>Vias</th>
                    <th>Int. Familia</th>
                    <th>Jovenes</th>
                    <th>Propietario</th>
                    <th>Created</th>
                    <th>Updated</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$finca->id}}</td>
                    <td>{{$finca->nombre_fin}}</td>
                    <td>{{$finca->departamento_fin}}</td>
                    <td>{{$finca->municipio_fin}}</td>
                    <td>{{$finca->vereda_fin}}</td>
                    <td>{{$finca->latitud}}</td>
                    <td>{{$finca->longitud}}</td>
                    <td>{{$finca->viaacc_fin}}</td>
                    <td>{{$finca->intgamilia_fin}}</td>
                    <td>{{$finca->jovenes1518}}</td>
                    <td>{{$finca->persona_id}}</td>
                    <td>{{$finca->created_at}}</td>
                    <td>{{$finca->updated_at}}</td>
				</tr>
			</tbody>
		</table>
@endsection