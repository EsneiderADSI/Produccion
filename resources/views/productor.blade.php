<<<<<<< HEAD
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
      <a class="navbar-brand" href="#">Gestión siembras de Guayaba</a>
    </div>
    </div>
  </div>
</nav>

<div class="container">
<!--siembras------------------------------->

<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/siembras.png">
      <div class="caption">
          <h4 ><a href="{{url('/siembras')}}" class="list-group-item"> Listar siembras</a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
  
   <img src="/images/siembra.png">
   <h4 > <a href="{{url('/siembras/unico')}}" class="list-group-item">
Consulta siembras por código
          </a>
  </h4>
   </div>
  
 </div>
 

<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenersiempersona.png" >
      <div class="caption">
          <h4><a href="{{url('/personas/siembras')}}" class="list-group-item" >Consultar siembras de una Persona</a></h4>
      </div>
   </div>
 </div>
 
<!--Productores------------------------------->

<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosproductores.png" >
      <div class="caption">
          <h4> <a href="{{url('/personas')}}" class="list-group-item" >Listar Productores</a></h4>
      </div>
   </div>
 </div>
</div>


<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/persona.png" >
      <div class="caption">
          <h4 ><a href="{{url('/personas/unico')}}" class="list-group-item">Obtener Una Persona</a></h4>
      </div>
   </div>
 </div>

<!--Cosecchas------------------------------->

<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/guayabas.png">
      <div class="caption">
          <h4 ><a href="{{url('/cosechas')}}" class="list-group-item">Listar Cosechas </a></h4>
      </div>
   </div>
 </div>




<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/guayaba.png" >
      <div class="caption">
          <h4> <a href="{{url('/cosechas/unico')}}" class="list-group-item" >Obtener una Cosecha</a></h4>
      </div>
   </div>
 </div>


<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png" class="">
      <div class="caption">
          <h4><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a></h4>
      </div>
   </div>
 </div>
</div>

<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/Obtenerrendimientocosecha.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/siembras/cosechas')}}"class="list-group-item" >Obtener el rendimiento de la cosecha</a></h4>
      </div>
   </div>
 </div>


<!--Fincas------------------------------->

<div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/fincaandfincas.png" class="">
      <div class="caption">
          <h4><a href="{{url('/fincas')}}"  class="list-group-item">Listar fincas </a></h4>
      </div>
   </div>
 </div>


<div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/finca2.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/fincas/unico')}}" class="list-group-item">Obtener una finca</a></h4>
      </div>
   </div>
 </div>



<!--año------------------------------->

<div class="col-xs-3">
   <div class="thumbnail">

   <img src="/images/ObtenerTodosaños.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/anopro')}}" class="list-group-item" >Listar Produccion al Año</a></h4>
      </div>
   </div>
 </div>
</div>


<!--Productos------------------------------->
<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/productos.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/productos')}}" class="list-group-item">Listar Todos los Productos</a></h4>
      </div>
   </div>
 </div>



<!--Suelos------------------------------->

<div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/suelos.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/suelos')}}" class="list-group-item">Listar Suelos</a></h4>
      </div>
   </div>
 </div>


<!--Novedades------------------------------->

<div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/ObtenerTodosnovedad.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/novedad')}}" class="list-group-item">Listar Novedades </a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/suelo.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/suelo/unico')}}" class="list-group-item">Obtener Un Suelo </a></h4>
      </div>
   </div>
 </div>
 
</div>

<div class="container">
 <div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/ObtenerTodosproductores.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/usuariocliente')}}" class="list-group-item">Listar Usuarios </a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/persona.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/usariocliente/unico')}}" class="list-group-item">Obtener un Usuario </a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/guayaba.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/productos/unico')}}" class="list-group-item">Obtener un Producto </a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   
   <img src="/images/ObtenerTodosnovedad.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/novedades')}}" class="list-group-item">Obtener Novedades </a></h4>
      </div>
   </div>
 </div>
</div>

 <div class="container">
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/suelos.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/suelo/unico')}}" class="list-group-item">Buscar Suelo </a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosnovedad.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/novedades/unico')}}" class="list-group-item">Buscar Novedad </a></h4>
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenerrendimientocosecha.png" class="">
      <div class="caption">
          <h4 ><a href="{{url('/anospro')}}" class="list-group-item">Obtener Rendimiento al Año </a></h4>
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
      <a class="navbar-brand">Obtener Datos Hijos</a>
    </div>
     
    </div>
  </div>
</nav>

<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png" width="" height="">
      <div class="caption">
          <h3><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a></h3>
         
      </div>
   </div>
 </div>
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenerrendimientocosecha.png" width="" height="">
      <div class="caption">
          <h3> <a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener el rendimiento de la cosecha</a></h3>
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
      <a class="navbar-brand">Gestion</a>
    </div>
    </div>
  </div>
</nav>

<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/personas.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Personas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Personas</a></li>
    <li><a href="#">Buscar Personas</a></li>
    <li><a href="{{url('/personas/agregar')}}">Agregar Personas</a></li>
    <li><a href="{{url('/personas/actualizar')}}">Actualizar Personas</a></li>
     <li><a href="{{url('/personas/eliminar')}}">Eliminar Personas</a></li>
  </ul>
      
	
   </div>
 </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/fincaandfincas.png">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Fincas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Fincas</a></li>
    <li><a href="#">Buscar Fincas</a></li>
    <li><a href="{{url('/fincas/agregar')}}">Agregar Fincas</a></li>
    <li><a href="{{url('/fincas/actualizar')}}"> Actualizar Fincas</a></li>
     <li><a href="{{url('/fincas/eliminar')}}">Eliminar Fincas</a></li>
  </ul>

          
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/guayabas.png" width="" height="">
   <p>
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Cosecha</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Cosechas</a></li>
    <li><a href="#">Buscar Cosecha</a></li>
    <li><a href="{{url('/cosechas/agregar')}}">Agregar Cosecha</a></li>
    <li><a href="{{url('/cosechas/actualizar')}}">Actualizar Cosecha</a></li>
     <li><a href="{{url('/cosechas/eliminar')}}">Eliminar Cosecha</a></li>
  </ul>
  
  
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/productos.png" width="" height="">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Productos</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li> <a href="{{url('/productos')}}">Obtener Productos</a></li>
    <li><a href="{{url('/productos/unico')}}">Buscar Producto</a></li>
    <li><a href="{{url('/productos/agregar')}}">Agregar Producto</a></li>
    <li><a href="{{url('/productos/actualizar')}}">Actualizar Producto</a></li>
     <li><a href="{{url('/productos/eliminar')}}">Eliminar Producto</a></li>
  </ul>
  
       
        
      </div>
   </div>
 </div>
 </div>
 
 <div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/suelos.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Suelo</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/suelo')}}">Obtener Suelos</a></li>
    <li><a href="{{url('/suelo/unico')}}">Buscar Suelo</a></li>
    <li><a href="{{url('/suelo/agregar')}}">Agregar Suelo</a></li>
    <li><a href="{{url('/suelo/actualizar')}}">Actualizar Suelo</a></li>
     <li><a href="{{url('/suelo/eliminar')}}">Eliminar Suelo</a></li>
  </ul>
  

         
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/agregar-usuarioverde.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Usuarios</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/usuariocliente')}}">Obtener Usuarios</a></li>
    <li><a href="{{url('/usuariocliente/unico')}}">Buscar Usuario</a></li>
    <li><a href="{{url('/usuariocliente/agregar')}}">Agregar Usuario</a></li>
    <li><a href="{{url('/usuariocliente/actualizar')}}">Actualizar Usuario</a></li>
     <li><a href="{{url('/usuariocliente/eliminar')}}" >Eliminar Usuario</a></li>
  </ul>
  

      </div>
   </div>
 </div>

 
  <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenerrendimientocosecha.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Rendimiento Año</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/anopros')}}">Obtener Rendimiento Año</a></li>
    <li><a href="{{url('/anopros/unico')}}">Buscar Rendimiento Año</a></li>
    <li><a href="{{url('/anopros/agregar')}}">Agregar Rendimiento Año</a></li>
    <li><a href="{{url('/anopros/actualizar')}}">Actualizar Rendimiento Año</a></li>
     <li><a href="{{url('/anopros/eliminar')}}" >Eliminar Rendimiento Año</a></li>
  </ul>
  

      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Cosecha Siembra</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/siembra/cosechas')}}">Obtener Cosecha-Siembra</a></li>
    <li><a href="{{url('/siembras/cosechas/unico')}}">Buscar Cosecha-Siembra</a></li>
    <li><a href="{{url('/siembras/cosechas/agregar')}}">Agregar Cosecha-Siembra</a></li>
    <li><a href="{{url('/siembras/cosechas/actualizar')}}">Actualizar Cosecha-Siembra</a></li>
     <li><a href="{{url('/siembras/cosechas/eliminar')}}" >Eliminar Cosecha-Siembra</a></li>
  </ul>
  

      </div>
   </div>
 </div>
</div>
 
 <div class="container">
  <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosnovedad.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Novedades</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/novedades')}}">Obtener Novedad</a></li>
    <li><a href="{{url('/novedades/unico')}}">Buscar Novedad</a></li>
    <li><a href="{{url('/novedades/agregar')}}">Agregar Novedad</a></li>
    <li><a href="{{url('/novedades/actualizar')}}">Actualizar Novedad</a></li>
     <li><a href="{{url('/novedades/eliminar')}}" >Eliminar Novedad</a></li>
  </ul>
  

      </div>
   </div>
 </div>

 </div>
 
=======
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
   <img src="/images/siembra.png" width="147" height="147">
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
      <a class="navbar-brand">Obtener Datos Hijos</a>
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
      <a class="navbar-brand">Gestion</a>
    </div>
    </div>
  </div>
</nav>

<div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/personas.png" width="180" height="180">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Personas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Personas</a></li>
    <li><a href="#">Buscar Personas</a></li>
    <li><a href="{{url('/personas/agregar')}}">Agregar Personas</a></li>
    <!--li role="separator" class="divider"></li-->
    <li><a href="{{url('/personas/actualizar')}}">Actualizar Personas</a></li>
     <li><a href="{{url('/personas/eliminar')}}">Eliminar Personas</a></li>
  </ul>
      
	<!--a href="{{url('/personas/eliminar')}}">
       <a href="{{url('/personas/agregar')}}" >
<a href="{{url('/personas/actualizar')}}"-->
   </div>
 </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/fincaandfincas3.png">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Fincas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Fincas</a></li>
    <li><a href="#">Buscar Fincas</a></li>
    <li><a href="{{url('/fincas/agregar')}}">Agregar Fincas</a></li>
    <!--li role="separator" class="divider"></li-->
    <li><a href="{{url('/fincas/actualizar')}}"> Actualizar Fincas</a></li>
     <li><a href="{{url('/fincas/eliminar')}}">Eliminar Fincas</a></li>
  </ul>

            <!--a href="{{url('/fincas/agregar')}}">
 <a href="{{url('/fincas/actualizar')}}"> 
             <a href="{{url('/fincas/eliminar')}}"-->
  
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/guayabas.png" width="195" height="195">
   <p>
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Cosecha</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Cosechas</a></li>
    <li><a href="#">Buscar Cosecha</a></li>
    <li><a href="{{url('/cosechas/agregar')}}">Agregar Cosecha</a></li>
    <!--li role="separator" class="divider"></li-->
    <li><a href="{{url('/cosechas/actualizar')}}">Actualizar Cosecha</a></li>
     <li><a href="{{url('/cosechas/eliminar')}}">Eliminar Cosecha</a></li>
  </ul>
  
<!--a href="{{url('/cosechas/agregar')}}">
			<a href="{{url('/cosechas/actualizar')}}">
<a href="{{url('/cosechas/eliminar')}}"-->
  
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/productos.png" width="140" height="140">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Productos</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li> <a href="{{url('/productos')}}">Obtener Productos</a></li>
    <li><a href="{{url('/productos/unico')}}">Buscar Producto</a></li>
    <li><a href="{{url('/productos/agregar')}}">Agregar Producto</a></li>
    <!--li role="separator" class="divider"></li-->
    <li><a href="{{url('/productos/actualizar')}}">Actualizar Producto</a></li>
     <li><a href="{{url('/productos/eliminar')}}">Eliminar Producto</a></li>
  </ul>
  
       <!--a href="{{url('/productos')}}">
        <a href="{{url('/productos/unico')}}">
        <a href="{{url('/productos/agregar')}}">
        <a href="{{url('/productos/actualizar')}}">
        <a href="{{url('/productos/eliminar')}}"-->
        
      </div>
   </div>
 </div>
 </div>
 
 <div class="container">
<div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/suelos.png" width="140" height="140">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Suelo</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/suelo')}}">Obtener Suelos</a></li>
    <li><a href="{{url('/suelo/unico')}}">Buscar Suelo</a></li>
    <li><a href="{{url('/suelo/agregar')}}">Agregar Suelo</a></li>
    <!--li> role="separator" class="divider"></li-->
    <li><a href="{{url('/suelo/actualizar')}}">Actualizar Suelo</a></li>
     <li><a href="{{url('/suelo/eliminar')}}">Eliminar Suelo</a></li>
  </ul>
  
  <!--a href="{{url('/suelo')}}">
        <a href="{{url('/suelo/unico')}}">
        <a href="{{url('/suelo/agregar')}}">
        <a href="{{url('/suelo/actualizar')}}">
        <a href="{{url('/suelo/eliminar')}}"-->
         
      </div>
   </div>
 </div>
 
 <div class="col-xs-3">
   <div class="thumbnail">
   <img src="/images/agregar-usuarioverde.png" width="140" height="140">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Usuarios</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/usuariocliente')}}">Obtener Usuarios</a></li>
    <li><a href="{{url('/usuariocliente/unico')}}">Buscar Usuario</a></li>
    <li><a href="{{url('/usuariocliente/agregar')}}">Agregar Usuario</a></li>
    <!--li role="separator" class="divider"></li-->
    <li><a href="{{url('/usuariocliente/actualizar')}}">Actualizar Usuario</a></li>
     <li><a href="{{url('/usuariocliente/eliminar')}}" >Eliminar Usuario</a></li>
  </ul>
  
 <!--a href="{{url('/usuariocliente')}}">
        <a href="{{url('/usuariocliente/unico')}}">
        <a href="{{url('/usuariocliente/agregar')}}">
        <a href="{{url('/usuariocliente/actualizar')}}">
        <a href="{{url('/usuariocliente/eliminar')}}"-->
      </div>
   </div>
 </div>

 </div>
 
    
<!--

// personas
	<a href="{{url('/personas/eliminar')}}" class="list-group-item">Eliminar Una Persona</a>
       <a href="{{url('/personas/agregar')}}" class="list-group-item">Agregar Una Persona</a>
		<a href="{{url('/personas/eliminar')}}" class="list-group-item">Eliminar Una Persona</a>

//fincas
            <a href="{{url('/fincas/agregar')}}" class="list-group-item">Agregar Una Finca</a>
 <a href="{{url('/fincas/actualizar')}}" class="list-group-item">Actualizar Una Finca</a>
             <a href="{{url('/fincas/eliminar')}}" class="list-group-item">Eliminar Una Finca</a>
//cosecha
<a href="{{url('/cosechas/agregar')}}" class="list-group-item">Agregar Una Cosecha</a>
			<a href="{{url('/cosechas/actualizar')}}" class="list-group-item">Actualizar Una Cosecha</a>
<a href="{{url('/cosechas/eliminar')}}" class="list-group-item">Eliminar Una Cosecha</a>
//producto
<div class="list-group">
        <p><a href="{{url('/productos')}}" class="list-group-item">Listar Todos los Productos</a>
        <a href="{{url('/productos/unico')}}" class="list-group-item">Obtener un Producto</a>
        <a href="{{url('/productos/agregar')}}" class="list-group-item">Agregar un Producto</a>
        <a href="{{url('/productos/actualizar')}}" class="list-group-item">Actualizar un Producto</a>
        <a href="{{url('/productos/eliminar')}}" class="list-group-item">Eliminar un Producto</a>
        
        </div>


//suelo
<div class="list-group">
        <p><a href="{{url('/suelo')}}" class="list-group-item">Listar Todos los Suelos</a>
        <a href="{{url('/suelo/unico')}}" class="list-group-item">Obtener un Suelo</a>
        <a href="{{url('/suelo/agregar')}}" class="list-group-item">Agregar un Suelo</a>
        <a href="{{url('/suelo/actualizar')}}" class="list-group-item">Actualizar un Suelo</a>
        <a href="{{url('/suelo/eliminar')}}" class="list-group-item">Eliminar un Suelo</a>
        
        </div>
        
        
//usuarios
<div class="list-group">
        <p><a href="{{url('/usuariocliente')}}" class="list-group-item">Listar Todos los Usuarios</a>
        <a href="{{url('/usuariocliente/unico')}}" class="list-group-item">Obtener un Usuario</a>
        <a href="{{url('/usuariocliente/agregar')}}" class="list-group-item">Agregar un Usuario</a>
        <a href="{{url('/usuariocliente/actualizar')}}" class="list-group-item">Actualizar un Usuario</a>
        <a href="{{url('/usuariocliente/eliminar')}}" class="list-group-item">Eliminar un Usuario</a>
        
        </div>
//---------------------------------------------------------------
<!--div class="list-group">
			<a href="{{url('/cosechas/agregar')}}" class="list-group-item">Agregar Una Cosecha</a>
			<a href="{{url('/personas/siembras/agregar')}}" class="list-group-item">Agregar una Siembra</a>      
            <a href="{{url('/personas/agregar')}}" class="list-group-item">Agregar Una Persona</a>
            <a href="{{url('/fincas/agregar')}}" class="list-group-item">Agregar Una Finca</a>         
		</div>

<div class="list-group">
			<a href="{{url('/cosechas/actualizar')}}" class="list-group-item">Actualizar Una Cosecha</a>
		<a href="{{url('/personas/actualizar')}}" class="list-group-item">Actualizar Una Persona</a>
        <a href="{{url('/personas/siembras/actualizar')}}" class="list-group-item">Actualizar Una Siembra</a>
        <a href="{{url('/fincas/actualizar')}}" class="list-group-item">Actualizar Una Finca</a>
        
</div>

		<div class="list-group">
			<a href="{{url('/cosechas/eliminar')}}" class="list-group-item">Eliminar Una Cosecha</a>

			<a href="{{url('/personas/eliminar')}}" class="list-group-item">Eliminar Una Persona</a>
            <a href="{{url('/personas/siembras/eliminar')}}" class="list-group-item">Eliminar Una Siembra</a>
            <a href="{{url('/fincas/eliminar')}}" class="list-group-item">Eliminar Una Finca</a>
		</div>
        
       <!--div class="list-group">
			<p><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a>
			  <a href="{{url('/personas/siembras')}}" class="list-group-item">Obtener las Siembras de Una Persona</a>
			  <a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener el rendimiento de la cosecha</a>
			  <a href="{{url('/siembras/cosechas/agregar')}}" class="list-group-item">Agregar una Cosecha a Una Siembra</a>
			  <a href="{{url('/siembras/cosechas/eliminar')}}" class="list-group-item">Eliminar una Cosecha de Una Siembra</a>
			     </div>
	     </p-->
         
            
       
      <!--div class="list-group">
        <a href="{{url('/siembras')}}" class="list-group-item">Obtener Todos los Cultivos de guayaba </a>
        <a href="{{url('/personas')}}" class="list-group-item">Obtener Todos los Productores </a>
        <a href="{{url('/cosechas')}}" class="list-group-item">Obtener Todas las Cosechas </a>
        <a href="{{url('/fincas/')}}" class="list-group-item">Obtener todas las fincas</a>
        <a href="{{url('/anopro/')}}" class="list-group-item">Obtener todos los Años de produccion</a>
        <a href="{{url('/novedad/')}}" class="list-group-item">Obtener todas las Novedades</a>
        
    </div-->

<!--div class="list-group">
<a href="{{url('/cosechas/unico')}}" class="list-group-item"> Obtener una Cosecha</a>
<a href="{{url('/personas/unico')}}" class="list-group-item">Obtener Una Persona</a>
<a href="{{url('/siembras/unico')}}" class="list-group-item">Obtener Una Siembra</a>
<a href="{{url('/fincas/unico')}}" class="list-group-item">Obtener una finca</a>
</div-->
         

         
      
        

>>>>>>> origin/master
@endsection