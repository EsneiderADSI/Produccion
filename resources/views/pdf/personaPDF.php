<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Reporte de productores</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #ECF0F5;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}


.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
	width: 100%;
	max-width: 100%;
	margin-bottom: 20px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 12px;
}

table {
    background-color: transparent;
		font:100% Arial, Helvetica, sans-serif; 
}
table{width:100%;border-collapse:collapse;margin:1em 0;}
th, td{text-align:left;padding:.6em;border:1px solid #fff;}
th{
	color: #fff;
	background-color: #33CC99;
	background-image: url(tr_back.gif);
	background-repeat: repeat-x;
}
td{background:#e5f1f4;}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
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
}


</style>
	  
</head>
<body>

<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Reporte de productores - <?=  $date; ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                  <thead>
                     <tr style="font-size: small">
                    <th>Id</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Telefono</th>
                    <th>Programa</th>
                  </tr>
                  </thead>
                    <tbody>
                  <?php foreach($data as $personas){ ?>
                 
                    <tr style="font-size: 12px">
                    <td  ><?= $personas->id?></td>
                    <td><?=$personas->nombre_per?></td>
                    <td><?=$personas->correo_per?></td>
                    <td><?=$personas->telefono_per?></td>
                    <td style="text-align: justify"><?=$personas->programa_per?></td>
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


