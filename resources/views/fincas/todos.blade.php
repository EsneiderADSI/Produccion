@extends('layouts.master')
@section('contenido')
	@if(sizeof($fincas) > 0)
    <table class="table table-striped table-hover">
     <tr>
                      <td>PDF de fincas</td>
                      <td><a href="crear_reporte/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="crear_reporte/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                      </tr>

</table>
		<table class="table table-striped table-hover">
			<thead>

                     
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Municipio</th>
					<th>Vereda</th>
                    <th>Vias</th>
                    <th>Propietario</th>
				</tr>
               
			</thead>
			<tbody>
				@foreach($fincas as $finca)
				<tr>
					<td>{{$finca->id}}</td>
                    <td>{{$finca->nombre_fin}}</td>
                    <td>{{$finca->municipio_fin}}</td>
                    <td>{{$finca->vereda_fin}}</td>
                    <td>{{$finca->viaacc_fin}}</td>
                    <td>{{$finca->persona_id}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
        
         <td>
         </td>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay fincas 
		</div>

		@endif
@endsection