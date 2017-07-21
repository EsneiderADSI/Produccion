@extends('layouts.master')
@section('contenido')
	@if(sizeof($productos) > 0)
  <table class="table table-striped table-hover">
     <tr>
                      <td>PDF de productos</td>
                      <td><a href="reporteProducto/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      <td><a href="reporteProducto/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                      </tr>

</table>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Tipo</th>
					<th>Nombre </th>
					<th>Observaciones</th>
                    <th>created_at</th>
                    <th>updated_at</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
				<tr>
					<td>{{$producto->id}}</td>
					<td>{{$producto->tipo_pro}}</td>
					<td>{{$producto->nombre_pro}}</td>
					<td>{{$producto->observaciones_pro}}</td>
                    <td>{{$producto->created_at}}</td>
                    <td>{{$producto->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>


<button type="submit" class="btn btn-primary" onclick="history.back()">Volver atrás</button>
      
		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay productos en este momento
		</div>
        
        

		@endif
@endsection