@extends('layouts.master')
@section('contenido')



<!--ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="{{url('principal')}}">Principal.blade</a></li>
  <li role="presentation" class="active"><a href="{{url('productor')}}">Productor.blade</a></li>
  <li role="presentation"><a href="{{url('sesion')}}">sesion.blade</a></li>
</ul-->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Obtener Extendido</a>
    </div>
    </div>
  </div>
</nav>

<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtener Todoscultivos.png" width="200" height="200">
      <div class="caption">
          <h3> <a href="{{url('/siembras')}}" class="list-group-item">Obtener Todos los Cultivos de guayaba </a></h3>
         
      </div>
   </div>
 </div>
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtener TodosPRODC.png" width="235" height="235">
      <div class="caption">
          <h3><a href="{{url('/personas')}}" class="list-group-item">Obtener Todos los Productores </a></h3>
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtener Todoscosechas.png" width="235" height="235">
      <div class="caption">
          <h3><a href="{{url('/cosechas')}}" class="list-group-item">Obtener Todas las Cosechas </a></h3>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtener Todosfincas.png" width="235" height="235">
      <div class="caption">
          <h3><a href="{{url('/fincas/')}}" class="list-group-item">Obtener todas las fincas</a></h3>
      </div>
   </div>
 </div>
 </div>
 
 <div class="container">
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtener Todosaños.png" width="200" height="200">
      <div class="caption">
          <h3><a href="{{url('/anopro/')}}" class="list-group-item">Obtener todos los Años de Produccion</a></h3>
      </div>
   </div>
 </div>
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosnovedad.png" width="235" height="235">
      <div class="caption">
          <h3><a href="{{url('/novedad/')}}" class="list-group-item">Obtener todas las Novedades</a></h3>
      </div>
   </div>
 </div>
 
 </div>
 
 
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Obtener Simple</a>
    </div>
    </div>
  </div>
</nav>

<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/guayaba.png" width="200" height="200">
      <div class="caption">
          <h3> <a href="{{url('/cosechas/unico')}}" class="list-group-item"> Obtener una Cosecha</a></h3>
         
      </div>
   </div>
 </div>
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/persona.png" width="170" height="170">
      <div class="caption">
          <h3><a href="{{url('/personas/unico')}}" class="list-group-item">Obtener Una Persona</a></h3>
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/siembra.png" width="145" height="145">
      <div class="caption">
          <h3><a href="{{url('/siembras/unico')}}" class="list-group-item">Obtener Una Siembra</a></h3>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/finca2.png" width="250" height="250">
      <div class="caption">
          <h3><a href="{{url('/fincas/unico')}}" class="list-group-item">Obtener Una Finca</a></h3>
      </div>
   </div>
 </div>
 </div>
 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Obtener Simple</a>
    </div>
    </div>
  </div>
</nav>

<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png" width="200" height="200">
      <div class="caption">
          <h3><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a></h3>
         
      </div>
   </div>
 </div>
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenersiempersona.png" width="200" height="200">
      <div class="caption">
          <h3> <a href="{{url('/personas/siembras')}}" class="list-group-item">Obtener las Siembras de Una Persona</a></h3>
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenerrendimientocosecha.png" width="200" height="200">
      <div class="caption">
          <h3> <a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener el rendimiento de la cosecha</a></h3>
      </div>
   </div>
 </div>
 
 
 
 
 <!--div class="list-group">
			<p><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a>
			  <a href="{{url('/personas/siembras')}}" class="list-group-item">Obtener las Siembras de Una Persona</a>
			  <a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener el rendimiento de la cosecha</a>
			  <a href="{{url('/siembras/cosechas/agregar')}}" class="list-group-item">Agregar una Cosecha a Una Siembra</a>
			  <a href="{{url('/siembras/cosechas/eliminar')}}" class="list-group-item">Eliminar una Cosecha de Una Siembra</a>
			     </div-->
 
 

@endsection