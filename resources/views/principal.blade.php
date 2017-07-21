@extends('layouts.master')
@section('contenido')

<!-- Inicio Fila 1-->
<div class="container">
<!--siembras------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Listarsiembras.png">
      <div >
         <h5><a href="{{url('/siembras')}}" class="list-group-item"> Listar siembras</a></h5> 
      </div>
   </div>
 </div>
 
 <!--Productores------------------------------->
 
 
 <div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/ListarTodosproductores.png">
      <div>
          <h5> <a href="{{url('/personas')}}" class="list-group-item">Listar Agricultores</a></h5>
      </div>
   </div>
 </div>
 
 <!--Fincas ************************-->
<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Listarfincas.png">
      <div >
         <h5><a href="{{url('/fincas')}}"  class="list-group-item">Listar Fincas </a></h5>
      </div>
   </div>
 </div>
 
 <!--Suelos------------------------------->

<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Listarsuelos.png">
      <div >
          <h5 ><a href="{{url('/suelos')}}" class="list-group-item">Listar Suelos</a></h5>
      </div>
   </div>
 </div>


<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Listarproductos.png">
      <div>
          <h5 ><a href="{{url('/productos')}}" class="list-group-item">Listar Productos</a></h5>
      </div>
   </div>
 </div>
 
 <!--Novedades------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ListarNovedad.png">
      <div >
          <h5 ><a href="{{url('/novedades')}}" class="list-group-item">Listar Novedades</a></h5>
      </div>
   </div>
 </div>

<!--Final Fila 1 -******* Inicio Fila 2--> 
</div>  <div class="container">
 
 
 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenersiembra.png">
   <div>
   <h5> <a href="{{url('/siembras/unico')}}" class="list-group-item">Buscar Siembra </a>
  </h5>
   </div>
 </div>
 </div>
 
 
 <!--Productores------------------------------->
 
 <div class="col-xs-2">
   <div class="thumbnail" id="salto2">
   <img src="/images/Obtenerpersona.png">
      <div>
          <h5 ><a href="{{url('/personas/unico')}}" class="list-group-item">Buscar Agricultor</a></h5>
      </div>
   </div>
 </div>

<!--Fincas ************************-->
<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Obtenerfinca.png">
      <div >
          <h5><a href="{{url('/fincas/unico')}}" class="list-group-item">Buscar Finca</a></h5>
      </div>
   </div>
 </div>


<!--  ***** Suelos--> 
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/suelo.png" >
      <div >
          <h5><a href="{{url('/suelos/unico')}}" class="list-group-item">Buscar Suelo </a></h5>
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail" id="salto">
   <img src="/images/Obtenerproducto.png">
      <div >
          <h5><a href="{{url('/productos/unico')}}" class="list-group-item">Buscar Producto </a></h5>
      </div>
   </div>
 </div>

<!--Novedades------------------------------->

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerNovedad.png">
      <div >
          <h5><a href="{{url('/novedades/unico')}}" class="list-group-item">Buscar Novedad </a></h5>
      </div>
   </div>
 </div>

 
 
 <!--Final Fila 2 -******* Inicio Fila 3--> 
</div>  <div class="container">
 
 
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenersiempersona.png" >
      <div>
          <h5><a href="{{url('/personas/siembras')}}" class="list-group-item">Consultar las siembras que tiene una Persona</a></h5>
      </div>
   </div>
 </div>
 
<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Obtenercosechasiembra.png">
      <div >
          <h5><a href="{{url('/siembras/cosechas')}}" class="list-group-item">Obtener las Cosechas de Una Siembra</a></h5>
      </div>
   </div>
	</div>
	
<div class="col-xs-2">
   <div class="thumbnail">
   
   <img src="/images/Obtenerrendimiento.png">
      <div >
          <h5 ><a href="{{url('/siembras/cosechas')}}"class="list-group-item">Obtener el rendimiento de la cosecha</a></h5>
      </div>
   </div>
 </div>


<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ListarTodosaños.png">
      <div >
          <h5 ><a href="{{url('/renanos')}}" class="list-group-item">Listar Produccion al Año</a></h5>
      </div>
   </div>
 </div>

<div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/ObtenerTodosaños.png">
      <div >
          <h5 ><a href="{{url('/renanos/unico')}}" class="list-group-item">Obtener la Produccion de un Año</a></h5>
      </div>
   </div>
 </div>

 <div class="col-xs-2">
   <div class="thumbnail">
   <img src="/images/Listarcosechas.png">
      <div >
          <h5 ><a href="{{url('/cosechas')}}" class="list-group-item">Listar Cosechas </a></h5>
      </div>
   </div>
 </div>
 
	</div>

@endsection