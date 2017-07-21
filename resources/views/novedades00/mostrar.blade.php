@extends('layouts.master')

@section('contenido')

	<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Labor Realizada</th>
					<th>Camellon</th>
					<th>Fecha</th>
					<th>Tiempo</th>
					<th>Estado</th>
                    <th>Costo</th>
                    <th>Operario</th>
                    <th>Etapa Fen.</th>
                    <th>Siembra</th>
                    <th>Producto</th>
					<th>Dosis</th>                    
					<th>C.Tox</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$novedades->id}}</td>
                    <td>{{$novedades->tipnov_nov}}</td>
                    <td>{{$novedades->camellon_nov}}</td>
                    <td>{{$novedades->fecha_nov}}</td>
                    <td>{{$novedades->tiempo_nov}}</td>
                    <td>{{$novedades->dosis_nov}}</td>
                    <td>{{$novedades->costopro_nov}}</td>
                    <td>{{$novedades->costoman_nov}}</td>
                    <td>{{$novedades->operario_nov}}</td>
                    <td>{{$novedades->estado_nov}}</td>
                    <td>{{$novedades->nombre_sie}}</td>
                    <td>{{$novedades->nombre_pro}}</td>
                    <td>{{$novedades->siembra_id}}</td>
                    <td>{{$novedades->producto_id}}</td>
                    <td>{{$novedades->cattoxica_nov}}</td>

				</tr>
			</tbody>
		</table>	
        
        
@endsection