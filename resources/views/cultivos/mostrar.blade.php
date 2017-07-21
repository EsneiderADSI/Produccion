@extends('layouts.master')

@section('contenido')
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
					<th>id</th>
					<th>Nombre</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$cultivo->id}}</td>
					<td>{{$cultivo->nombre_cul}}</td>
				</tr>
			</tbody>
		</table>	
    
		
@endsection