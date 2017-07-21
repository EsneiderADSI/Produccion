@extends('layouts.master')

@section('contenido')	
		  @if(sizeof($productos) > 0)
		  @if(sizeof($siembras) > 0)
          
          
          
          <head>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js"></script>
        <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.13.0.js"></script>
        <!--script src="script.js"></script-->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/script.js"></script>



<!--script type="text/javascript">
$(document).ready(function(){
    var maxField = 1000; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><div style="clear:both;"><div><img src="/images/limite2.png"></div><div id="div1" style="float:left; width:33.3%;"><div class="form-group"><label for="">¿Que Producto aplico?</label><select name="producto_id" id="inputProducto_id" class="form-control" required><option>Seleccione un Producto</option>@foreach($productos as $producto)<option value="{{$producto->id}}">{{$producto->nombre_pro}}</option>@endforeach</select></div></div><div id="div2" style="float:left; width:33.3%;"><div class="form-group"><label for="">Dosis aplicada en mg / ml</label><input type="text" class="form-control" name="dosis_nov" required></div></div><div id="div3" style="float:left; width:33.3%;"><div class="form-group"><label for="">Categoria toxica</label><select class="form-control" name="cattoxica_nov" required><option value="0">Seleccione una Categoria Toxica</option><option value="1000">No aplica</option><option value="1">categoria 1</option><option value="2">categoria 2</option><option value="3">categoria 3</option><option value="4">categoria 4</option></select></div></div></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><button type="button" class="btn btn-danger">Eliminar Nuevo Producto  <span class="glyphicon glyphicon-remove "></span></button></a><div><img src="/images/limite2.png"></div></div></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script-->




<!--script type="text/javascript">
$(document).ready(function(){
    var maxField = 1000; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><div style="clear:both;"><div><img src="/images/limite2.png"></div><div id="div1" style="float:left; width:33.3%;"><div class="form-group"><label for="">¿Que Producto aplico?</label><select name="producto_id" id="inputProducto_id" class="form-control" required><option>Seleccione un Producto</option>@foreach($productos as $producto)<option value="{{$producto->id}}">{{$producto->nombre_pro}}</option>@endforeach</select></div></div><div id="div2" style="float:left; width:33.3%;"><div class="form-group"><label for="">Dosis aplicada en mg / ml</label><input type="text" class="form-control" name="dosis_nov" required></div></div><div id="div3" style="float:left; width:33.3%;"><div class="form-group"><label for="">Categoria toxica</label><select class="form-control" name="cattoxica_nov" required><option value="0">Seleccione una Categoria Toxica</option><option value="1000">No aplica</option><option value="1">categoria 1</option><option value="2">categoria 2</option><option value="3">categoria 3</option><option value="4">categoria 4</option></select></div></div></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="/images/negative.png" width="20" height="20"/></a>Eliminar Nuevo Producto<div><img src="/images/limite2.png"></div></div></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script-->


</head>



  <body>

		<form action="{{url('/siembras/novedades/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del registro diario</legend>
	
      
          
            <div class="form-group">
				<label for="">Seleccione la siembra a la cúal va a realizar la novedad</label>
				<select name="siembra_id" id="inputSiembra_id" class="form-control" required>
					<option>Seleccione la siembra a la cúal va a realizar la novedad</option>
					@foreach($siembras as $siembra)
					<option value="{{$siembra->id}}">{{$siembra->nombre_sie}}</option>
					@endforeach
				</select>
			</div>
          
           
          <div class="form-group">
			<label for="">¿Qué Tipo de novedad va a realizar?</label>
			<select name="tipnov_nov" id="tipnov_nov" class="form-control" required>
					<option>Seleccione un Tipo de novedad</option>
					<option value="Defoliación">Defoliación</option>
					<option value="Poda de producción y sanitaria">Poda de producción y sanitaria</option>
					<option value="Control de malezas guadaña ">Control de malezas guadaña </option>
					<option value="Pasta protectora base del tallo (patín)">Pasta protectora base del tallo (patín)</option>
					<option value="Riego constante">Riego constante</option>
					<option value="Enmiendas">Enmiendas</option>
					<option value="Fertilización edáfica de acuerdo análisis de suelos">Fertilización edáfica de acuerdo análisis de suelos</option>
					<option value="Fertilización foliar">Fertilización foliar</option>
					<option value="Control hormigas en el suelo ">Control hormigas en el suelo </option>
					<option value="Control de malezas">Control de malezas</option>
					<option value="Trampas macphail">Trampas macphail</option>
					<option value="Toma de muestra para analisis forliar">Toma de muestra para analisis forliar</option>
					<option value="Labores culturales o mantenimientos">Labores culturales o mantenimientos</option>
					<option value="Fertilización">Fertilización</option>
					<option value="Fungicida">Fungicida</option>
					<option value="Insecticida">Insecticida</option>
					<option value="Herbicidas">Herbicidas</option>
					<option value="Otros">Otros</option>
            </select>
            
            
            
            
          </div>
            
            
			<div class="form-group">
				<label for="">Camellon</label>
				<input type="text" class="form-control" name="camellon_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">Fecha </label>
				<input type="date" class="form-control" name="fecha_nov" required>
			</div>
            
            
			<div class="form-group">
				<label for="">¿Cuanto Tiempo Dedico a la Novedad? (en horas) </label>
				<input type="text" class="form-control" name="tiempo_nov" required>
			</div>
                       
            
			<div class="form-group">
				<label for="">Estado de Ejecución de la labor  </label>
			
				<select class="form-control" name="costopro_nov" required >
				  <option value="Programada">Programada (por ejecutar)</option>
				  <option value="Finalizada">Finalizada</option>
				</select>
	  </div>
            
		  <div class="form-group">
				<label for="">Costo mano de obra y de los productos aplicados (sin decimales) </label>
				<input type="text" class="form-control" name="costoman_nov" required>
			</div>
            

			<div class="form-group">
				<label for="">Operario</label>
				<input type="text" class="form-control" name="operario_nov" required>
			</div>
			
			


		  <div class="form-group">
				<label for="">Estado Fenologico de la Siembra</label>
				<select name="estado_nov" id="estado_nov" class="form-control" required>
					<option>Seleccione un Estado Fenologico</option>
					<option value="1">Estado Vegetativo (en reposo) después de la cosecha</option>
					<option value="2">Floración</option>
					<option value="3">Foliación</option>
					<option value="4">Polinización/Cuajamiento del fruto</option>
					<option value="5">Primer Crecimiento del fruto</option>
					<option value="6">Desarrollo de la Yema Endurecimiento del endocarpio (Hueso que cubre la semilla)</option>
					<option value="7">Segundo crecimiento del mesocarpio (Pulpa)</option>
					<option value="8">Maduración de la fruta </option>
                </select>
			</div>
            
            <div class="form-group">
				<label for="">¿Que Producto aplico?</label>
				<select name="producto_id" id="inputProducto_id" class="form-control" required>
					<option>Seleccione un Producto</option>
					@foreach($productos as $producto)
					<option value="{{$producto->id}}">{{$producto->nombre_pro}}</option>
					@endforeach
				</select>
                </div>
                
                <div class="form-group">
				<label for="">Dosis aplicada en mg / ml</label>
				<input type="text" class="form-control" name="dosis_nov" required>
			</div>
           	
            	<div class="form-group">
				<label for="">Categoria toxica</label>
				<select class="form-control" name="cattoxica_nov" required>
				  <option value="0">Seleccione una Categoria Toxica</option>
				  <option value="1000">No aplica</option>
				  <option value="1">categoria 1</option>
				  <option value="2">categoria 2</option>
				  <option value="3">categoria 3</option>
				  <option value="4">categoria 4</option>
                </select>
			</div>
                <!--agregar nuevo producto>
                <p>
            <p>
           <div class="field_wrapper">
    <div>
        <div name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><button type="button" class="btn btn-success">Agregar Otro Producto  <span class="glyphicon glyphicon-plus"></span></button></a>
    </div></div>
</div>

<p>
<p>
 <!--Fin agregar nuevo producto-->
           
<p>
<p>
            
           		
			
	
		
					<div id="cajon3"><button type="submit" class="btn btn-primary">Crear Novedad</button>
		</form>
		
				@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay productos en este momento para crear una novedad
		</div>

		@endif

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay productos en este momento para crear una novedad
		</div>

		@endif
			</form></div> </body>

@endsection
	

                    
				