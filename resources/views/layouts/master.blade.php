<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Produccion Guayaba Vélez</title>
<!--<link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="jquery.js"></script>
	<script src="layouts/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!--link rel="stylesheet" type="text/css" href="../../../public/css/flexi-background.css">
<link rel="stylesheet" type="text/css" href="../../../public/css/styles.css">

<!--script src="../../../public/js/flexi-background.js"></script-->



    
</head>

<body>

<div class="page-header"><a href="{{('/')}}"> 
  <div align="center"><img src="/images/Logo-produccion.png"  alt="" width="200" height="200" align="top"/></div>
<h1 align="center">Producción de Guayaba <big> Vélez </big> </h1>
        	<br>
           
         </a>
              
</div>
   
        
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="{{url('principal')}}">Principal.blade</a></li>
  <li role="presentation" class="active"><a href="{{url('productor')}}">Productor.blade</a></li>
  <li role="presentation"><a href="{{url('sesion')}}">sesion.blade</a></li>
</ul>  
    @include('componentes.errores')
    @yield('contenido')
    
    <div class="container-fluid">
    
    </div>

</body>
</html>