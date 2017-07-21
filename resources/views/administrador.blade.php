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
      <a class="navbar-brand">Gestion</a>
    </div>
    </div>
  </div>

</nav>

<div class="container" align="center">
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/personas.png" width="180px;" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Personas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/personas">Listar Personas</a></li>
    <li><a href="/personas/unico">Buscar Personas</a></li>
    <li><a href="/personas/agregar">Agregar Personas</a></li>
    <li><a href="/personas/actualizar">Actualizar Personas</a></li>
     <li><a href="/personas/eliminar">Eliminar Personas</a></li>
  </ul>
      
	
   </div>
 </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/fincaandfincas.png">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Fincas</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/fincas">Listar Fincas</a></li>
    <li><a href="/fincas/unico">Buscar Fincas</a></li>
    <li><a href="/personas/fincas/agregar">Agregar Fincas</a></li>
    <li><a href="/personas/fincas/actualizar"> Actualizar Fincas</a></li>
     <li><a href="/personas/fincas/eliminar">Eliminar Fincas</a></li>
  </ul>

          
      </div>
   </div>
 </div>
 
 
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/guayabas.png" width="" height="">
   <p>
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Cosecha</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/cosechas">Listar Cosechas</a></li>
    <li><a href="/cosechas/unico">Buscar Cosecha</a></li>
    <li><a href="/cosechas/agregar">Agregar Cosecha</a></li>
    <li><a href="/cosechas/actualizar">Actualizar Cosecha</a></li>
     <li><a href="/cosechas/eliminar">Eliminar Cosecha</a></li>
  </ul>
  
  
      </div>
   </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/productos.png" width="" height="">
   <p>
     <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Productos</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li> <a href="/productos">Listar Productos</a></li>
    <li><a href="/productos/unico">Buscar Producto</a></li>
    <li><a href="/productos/agregar">Agregar Producto</a></li>
    <li><a href="/productos/actualizar">Actualizar Producto</a></li>
     <li><a href="/productos/eliminar">Eliminar Producto</a></li>
  </ul>
  
       
        
      </div>
   </div>
 </div>



 </div>

 
  <div class="container" align="center">
  
  
  <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/suelos.png" >
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gestión Suelo</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/suelos">Listar Suelos</a></li>
    <li><a href="/suelos/unico">Buscar Suelo</a></li>
    <li><a href="/suelos/agregar">Agregar Suelo</a></li>
    <li><a href="/suelos/actualizar">Actualizar Suelo</a></li>
     <li><a href="/suelos/eliminar">Eliminar Suelo</a></li>
  </ul>
  

         
      </div>
   </div>
 </div>
 
  
  
  <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/rendimiento.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">G. Rend. al Año</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/renanos">Listar Rendimiento Año</a></li>
    <li><a href="/renanos/unico">Buscar Rendimiento Año</a></li>
    <li><a href="/siembras/renanos/agregar">Agregar Rendimiento Año</a></li>
    <li><a href="/siembras/renanos/actualizar">Actualizar Rendimiento Año</a></li>
     <li><a href="/siembras/renanos/eliminar" >Eliminar Rendimiento Año</a></li>
  </ul>
  

      </div>
   </div>
 </div>
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">G. CosechaSiembra</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/siembra/cosechas">Listar Cosecha-Siembra</a></li>
    <li><a href="/siembras/cosechas/unico">Buscar Cosecha-Siembra</a></li>
    <li><a href="/siembras/cosechas/agregar">Agregar Cosecha-Siembra</a></li>
    <li><a href="/siembras/cosechas/actualizar">Actualizar Cosecha-Siembra</a></li>
     <li><a href="/siembras/cosechas/eliminar" >Eliminar Cosecha-Siembra</a></li>
  </ul>
  

      </div>
   </div>
 </div>

 

  <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/novedades.png" width="" height="">
      <div class="dropdown" align="center">
             <button  class="btn btn-default dropdown-toggle" type="submit" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">G. Labores Diarias</h3>
          <span class="caret"></span>
  </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/novedades">Listar Labores Diarias</a></li>
    <li><a href="/novedades/unico">Buscar Labores Diarias</a></li>
    <li><a href="/siembras/novedades/agregar">Agregar Labores Diarias</a></li>
    <li><a href="/siembras/novedades/actualizar">Actualizar Labores Diarias</a></li>
     <li><a href="/siembras/novedades/eliminar" >Eliminar Labores Diarias</a></li>
  </ul>
  

      </div>
   </div>
 </div>
 
 
 
 </div>
 
 
 
 
 
 
 
 
 
 
 
 <!-- Inicio consultas ************************************
 **********************-->
<div class="container">
<!--siembras------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Listarsiembras.png">
      <div >
         <h5><a href="/siembras" class="list-group-item"> Listar siembras</a></h5> 
      </div>
   </div>
 </div>
 
 <!--Productores------------------------------->
 
 
 <div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/ListarTodosproductores.png">
      <div>
          <h5> <a href="/personas" class="list-group-item">Listar Agricultores</a></h5>
      </div>
   </div>
 </div>
 
 <!--Fincas ************************-->
<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Listarfincas.png">
      <div >
         <h5><a href="/fincas"  class="list-group-item">Listar Fincas </a></h5>
      </div>
   </div>
 </div>
 
 <!--Suelos------------------------------->

<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Listarsuelos.png">
      <div >
          <h5 ><a href="/suelos" class="list-group-item">Listar Suelos</a></h5>
      </div>
   </div>
 </div>


<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Listarproductos.png">
      <div>
          <h5 ><a href="/productos" class="list-group-item">Listar Productos</a></h5>
      </div>
   </div>
 </div>
 
 <!--Novedades------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ListarNovedad.png">
      <div >
          <h5 ><a href="/novedades" class="list-group-item">Listar Novedades</a></h5>
      </div>
   </div>
 </div>

<!--Final Fila 1 -******* Inicio Fila 2--> 
</div>  <div class="container">
 
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenersiembra.png">
   <div>
   <h5> <a href="/siembras/unico" class="list-group-item">Buscar Siembra </a>
  </h5>
   </div>
 </div>
 </div>
 
 
 <!--Productores------------------------------->
 
 <div class="col-xs-2">
   <div class="thumbnail" id="salto2">
   <img src="/images/Obtenerpersona.png">
      <div>
          <h5 ><a href="/personas/unico" class="list-group-item">Buscar Agricultor</a></h5>
      </div>
   </div>
 </div>

<!--Fincas ************************-->
<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Obtenerfinca.png">
      <div >
          <h5><a href="/fincas/unico" class="list-group-item">Buscar Finca</a></h5>
      </div>
   </div>
 </div>


<!--  ***** Suelos--> 
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/suelo.png" >
      <div >
          <h5><a href="/suelos/unico" class="list-group-item">Buscar Suelo </a></h5>
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Obtenerproducto.png">
      <div >
          <h5><a href="/productos/unico" class="list-group-item">Buscar Producto </a></h5>
      </div>
   </div>
 </div>

<!--Novedades------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerNovedad.png">
      <div >
          <h5><a href="/novedades/unico" class="list-group-item">Buscar Labores Diarias </a></h5>
      </div>
   </div>
 </div>

 
 
 <!--Final Fila 2 -******* Inicio Fila 3--> 
</div>  <div class="container">
 
 
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenersiempersona.png" >
      <div>
          <h5><a href="/personas/siembras" class="list-group-item">Consultar las siembras que tiene una Persona</a></h5>
      </div>
   </div>
 </div>
 
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png">
      <div >
          <h5><a href="/siembras/cosechas" class="list-group-item">Listar las Cosechas de Una Siembra</a></h5>
      </div>
   </div>
	</div>
	
<div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/Obtenerrendimiento.png">
      <div >
          <h5 ><a href="/siembras/cosechas"class="list-group-item">Listar el rendimiento de la cosecha</a></h5>
      </div>
   </div>
 </div>


<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ListarTodosaños.png">
      <div >
          <h5 ><a href="/renanos" class="list-group-item">Listar Produccion al Año</a></h5>
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosaños.png">
      <div >
          <h5 ><a href="/renanos/unico" class="list-group-item">Listar la Produccion de un Año</a></h5>
      </div>
   </div>
 </div>

 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Listarcosechas.png">
      <div >
          <h5 ><a href="/cosechas" class="list-group-item">Listar Cosechas </a></h5>
      </div>
   </div>
 </div>
 
	</div>

@endsection