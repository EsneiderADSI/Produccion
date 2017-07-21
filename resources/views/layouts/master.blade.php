<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Produccion Guayaba Vélez</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<link href="{{asset('css/estilos.css')}}" rel="stylesheet">
    
</head>

<body>

<!--<div class="page-header">
<a href="{{('/')}}"> 
     
      		
      
	<h1 align="left">
        	Producción de Guayaba <big> Vélez </big> 
            <img src="/images/Logo-produccion.png"  alt="" class="logo" />
    </h1>
</a>
              
</div>
   
        
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="{{url('/')}}">Principal.blade</a></li>
  <li role="presentation" class="active"><a href="{{url('productor')}}">Productor.blade</a></li>
  <li role="presentation"><a href="{{url('sesion')}}">sesion.blade</a></li>
</ul>  -->
    @include('componentes.errores')
    @yield('contenido')
    
    <div class="container-fluid">
    
    </div>

</body>

</html>