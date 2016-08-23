@extends('layouts.master')
@section('contenido')
    <div class="list-group">
        <a href="{{url('/siembras')}}" class="list-group-item">Obtener Todos los Cultivos de guayaba </a>
        <a href="{{url('/personas')}}" class="list-group-item">Obtener Todos los Productores </a>
        <a href="{{url('/cosechas')}}" class="list-group-item">Obtener Todas las Cosechas </a>
        <a href="{{url('/fincas/')}}" class="list-group-item">Obtener todas las Fincas</a>
        <a href="{{url('/novedad/')}}" class="list-group-item">Obtener todas las Novedades</a>
        <a href="{{url('/renanos/')}}" class="list-group-item">Obtener todos los Años de produccion</a>
        
    </div>

<div class="list-group">
<a href="{{url('/cosechas/unico')}}" class="list-group-item"> Obtener una Cosecha</a>
<a href="{{url('/personas/unico')}}" class="list-group-item">Obtener Una Persona</a>
<a href="{{url('/siembras/unico')}}" class="list-group-item">Obtener Una Siembra</a>
<a href="{{url('/fincas/unico')}}" class="list-group-item">Obtener una Finca</a>
<a href="{{url('/novedad/unico')}}" class="list-group-item">Obtener una Novedad</a>
<a href="{{url('/renanos/unico')}}" class="list-group-item">Obtener un Año</a>
</div>

<div class="list-group">
			<a href="{{url('/cosechas/agregar')}}" class="list-group-item">Agregar Una Cosecha</a>
			<a href="{{url('/personas/siembras/agregar')}}" class="list-group-item">Agregar una Siembra</a>      
            <a href="{{url('/personas/agregar')}}" class="list-group-item">Agregar Una Persona</a>
            <a href="{{url('/persona/{idpersona}/finca/agregar')}}" class="list-group-item">Agregar Una Finca</a>  
            <a href="{{url('/novedad/agregar')}}" class="list-group-item">Agregar Una Novedad</a>
             <a href="{{url('/siembra/{idsiembra}/renano/agregar')}}" class="list-group-item">Agregar Una Año</a>         
		</div>


<div class="list-group">
			<a href="{{url('/cosechas/actualizar')}}" class="list-group-item">Actualizar Una Cosecha</a>
		<a href="{{url('/personas/actualizar')}}" class="list-group-item">Actualizar Una Persona</a>
        <a href="{{url('/personas/siembras/actualizar')}}" class="list-group-item">Actualizar Una Siembra</a>
        <a href="{{url('/persona/{idpersona}/finca/actualizar')}}" class="list-group-item">Actualizar Una Finca</a>
        <a href="{{url('/novedad/actualizar')}}" class="list-group-item">Actualizar Una Novedad</a>
        <a href="{{url('/siembra/{idsiembra}/renano/actualizar')}}" class="list-group-item">Actualizar Una Año</a>
        
		</div>

		<div class="list-group">
			<a href="{{url('/cosechas/eliminar')}}" class="list-group-item">Eliminar Una Cosecha</a>
			<a href="{{url('/personas/eliminar')}}" class="list-group-item">Eliminar Una Persona</a>
            <a href="{{url('/personas/siembras/eliminar')}}" class="list-group-item">Eliminar Una Siembra</a>
            <a href="{{url('/persona/finca/eliminar')}}" class="list-group-item">Eliminar Una Finca</a>
            <a href="{{url('/novedad/eliminar')}}" class="list-group-item">Eliminar Una Novedad</a>
            <a href="{{url('/siembra/renano/eliminar')}}" class="list-group-item">Eliminar Una Año</a>
		</div>
        
       <div class="list-group">
			<p><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a>
			  <a href="{{url('/personas/siembras')}}" class="list-group-item">Obtener las Siembras de Una Persona</a>
			  <a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener el rendimiento de la cosecha</a>
			  <a href="{{url('/siembras/cosechas/agregar')}}" class="list-group-item">Agregar una Cosecha a Una Siembra</a>
			  <a href="{{url('/siembras/cosechas/eliminar')}}" class="list-group-item">Eliminar una Cosecha de Una Siembra</a>
			     </div>
	     </p>
         
      
        

@endsection