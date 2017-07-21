<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;


use App\Novidad;

use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller 
{
    public function index()
 {
 
        Excel::create('Excel', function($excel) {
 
            $excel->sheet('Productos', function($sheet) {
 
              	$respuesta = $this->realizarPeticion('GET', "http://agroproduccion.guayabavelez.com/fincas");
    	$datos = json_decode($respuesta);
    	 $novedades = $datos->data;
				$data=collect($novedades);
				$data=$data->map(function ($item){return get_object_vars($item);});
				
		
				
                $sheet->fromArray($data);
 
            });
        })->export('xls');
 
 }
}
