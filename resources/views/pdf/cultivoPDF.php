<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Reporte de Cultivos</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

/*.box {
    position: relative;
    border-radius: 3px;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}*/
div img {
  position: absolute;
  top: -30px; 
  left: 50px;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #000;;
}


.box-header .box-title {
	display: inline-block;
	font-size: 24px;
	margin: 0;
	line-height: 1;
}

.box-title2 {
	display: inline-block;
	font-size: 15px;
	margin: 0;
	line-height: 1;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	line-height: 9px;
	
}

.box-title3 {
	display: inline-block;
	font-size: 20px;
	margin: 0;
	line-height: 1;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	
}

.box-body {
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
	padding: 10px;
	font-size: 10px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}

.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #000;
    padding: 10px;
    background-color: #fff;
}

.table-bordered {
    border: 1px solid #000;
}


.table {
	width: 100%;
	max-width: 100%;
	margin-bottom: 20px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 9px;
	border:#000;
	
}

table {
    background-color: transparent;
		font:100% Arial, Helvetica, sans-serif; 
			border:#000;

}
table{width:100%;border-collapse:collapse;margin:1em 0; border:#000;
}
th, td{text-align:left;padding:.6em;border:1px solid #000;}
th{
	color: #000;
	background-color:#CCC;
	background-image: url(tr_back.gif);
	background-repeat: repeat-x;
}
/*td{background:#e5f1f4;}*/

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #000;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
	}

.bg-red {
    background-color: #dd4b39 !important;
	background:#CCC;
}

 #header2 {position:relative;} 
</style>
	  
</head>
<body>
<div id="header2">
<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title3" align="center">Reporte de Cultivos - <?=  $date; ?></h3>
                  <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title2" align="center">Servicio Nacional de Aprendizaje</h3> <p><h3 class="box-title2"  align="center">Centro de Gestión Agroempresarial del Oriente </h3></p><p><h3 class="box-title3"  align="center">REGISTRO DIARIO DE LABORES							
 </h3></p>
 
 <div class="container"><img src="./images/logoSena.png"/ width="120" height="120"></div></div>
 
 
                  <!--Tabla de datos basicos>
                  
</div-->

<table class="table table-bordered">
<tbody>
<tr>
<th>FINCA</td>
<td>Villa Luz</td>
<th>UBICACIÓN</td>
<td>Vereda Pozo Negro Municipio de Barbosa</td>
<th>CULTIVO Y VARIEDAD</td>
<td>DURAZNO GRAN JARILLO</td>
</tr>
<tr>
<th>PROPIETARIO</td>
<td>Centro de Gestión Agroempresarial del Oriente, SENA VÉLEZ</td>
<th>ASESOR TÉCNICO	
</td>
<td>CLAUDIA VEGA	
</td>
</tr>
<tr>
<th>No. PLANTAS
</td>
<td>364</td>
<th>DENSIDAD DE SIEMBRA	
</td>
<td>5m x 3m</td>
<th>AREA SEMBRADA	
</td>
<td>Media Hectarea	
</td>
</tr>
</tbody>
</table>




                </div><!-- /.box-header -->

<!--div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Reporte de Cultivos - <?=  $date; ?></h3>
                </div><!-- /.box-header -->
                <div class="container">
                  <table class="table table-bordered">
                  <thead>
                     <tr style="font-size: small">
                    <th>Id</th>
					<th>Nombre</th>
                  </tr>
                  </thead>
                    <tbody>
                    
                  <?php foreach($data as $cultivos){ ?>
                 
                    <tr style="font-size: 12px">
                    <td  ><?= $cultivos->id?></td>
                    <td><?=$cultivos->nombre_cul?></td>
                    </tr>

                    <?php  } ?>
                    
                    </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
            </div>


	
</body>
</html>


