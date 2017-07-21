@extends('layouts.master')
@section('contenido')

 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Gestion Cultvos</a>
    </div>
    </div>
  </div>

</nav>

<div class="container" align="center">
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/personas.png" width="180px;" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Cultivos</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/cultivos">Listar Cultivos</a></li>
    <li><a href="/cultivos/unico">Buscar Cultivos</a></li>
    <li><a href="/cultivos/agregar">Agregar Cultivos</a></li>
    <li><a href="/cultivos/actualizar">Actualizar Cultivos</a></li>
     <li><a href="/cultivos/eliminar">Eliminar Cultivos</a></li>
  </ul>
      
	
   </div>
 </div>
 </div>
 
 

@endsection