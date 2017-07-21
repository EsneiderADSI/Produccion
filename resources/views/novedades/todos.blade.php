@extends('layouts.master')
@section('contenido')
	@if(sizeof($novedades) > 0)
    <table class="table table-striped table-hover">
          <tr>
                      <td>PDF de Novedades</td>
                      <td><a href="reporteNovedad/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver PDF</button></a></td>
                      <td><a href="reporteNovedad/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar PDF</button></a></td>
                    </tr>
                    		</table>
                            
                            <table class="table table-striped table-hover">
          <tr>
                      <td>Excel de Novedades</td>
                      <td><a href="{{url('/excel/')}}" target="_blank" ><button class="btn btn-block btn-success btn-xs">Excel</button></a></td>
                      
                    </tr>
                    		</table>
                            
                            
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
				@foreach($novedades as $novedades)
				<tr>
					<td>{{$novedades->id}}</td>
                    <td>{{$novedades->tipnov_nov}}</td>
                    <td>{{$novedades->camellon_nov}}</td>
                    <td>{{$novedades->fecha_nov}}</td>
                    <td>{{$novedades->tiempo_nov}}</td>
                    <td>{{$novedades->costopro_nov}}</td>
                    <td>{{$novedades->costoman_nov}}</td>
                    <td>{{$novedades->operario_nov}}</td>
                    <td>{{$novedades->estado_nov}}</td>
                    <td>{{$novedades->nombre_sie}}</td>
                    <td>{{$novedades->nombre_pro}}</td>
					<td>{{$novedades->dosis_nov}}</td>
                    <td>{{$novedades->cattoxica_nov}}</td>

				</tr>
				@endforeach
			</tbody>
		</table>
        
         <td>
         </td>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay novedades
		</div>

		@endif
@endsection