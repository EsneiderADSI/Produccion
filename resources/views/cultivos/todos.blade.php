@extends('layouts.master')
@section('contenido')
	@if(sizeof($cultivos) > 0)
    <table class="table table-striped table-hover">
          <tr>
                      <td>PDF de Cultivos</td>
                      <td><a href="reporteCultivo/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver PDF</button></a></td>
                      <td><a href="reporteCultivo/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar PDF</button></a></td>
                    </tr>
                    		</table>
                            
                            <table class="table table-striped table-hover">
          <tr>
                      <td>Excel de Cultivos</td>
                      <td><a href="{{url('/excel/')}}" target="_blank" ><button class="btn btn-block btn-success btn-xs">Excel</button></a></td>
                      
                    </tr>
                    		</table>
    
    
 
    

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cultivos as $cultivo)
				<tr>
					<td>{{$cultivo->id}}</td>
					<td>{{$cultivo->nombre_cul}}</td>
                   
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