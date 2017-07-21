<?php

namespace produccion\Http\Controllers;

use Illuminate\Http\Request;

use produccion\Http\Requests;
use App\Http\Controllers\Controller;




class PdfController extends ClienteController

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("fincas.todos");
    }


      public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
		$pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
		
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte($tipo){

        $vistaurl="pdf.fincaPDF";

		$fincas = $this->obtenerTodasLasFincas();

     return $this->crearPDF($fincas, $vistaurl,$tipo);
	 
	} 
 public function reporteNovedad($tipo){

		
		$vistaurl="pdf.novedadPDF";

		$novedades = $this->obtenerTodasLasNovedades();
    	

     return $this->crearPDF($novedades, $vistaurl,$tipo);

}
 public function reporteSiembra($tipo){

		
		$vistaurl="pdf.siembraPDF";

		$siembras = $this->obtenerTodasLasSiembras();
    	

     return $this->crearPDF($siembras, $vistaurl,$tipo);

}

 public function reportePersona($tipo){

		
		$vistaurl="pdf.personaPDF";

		$personas = $this->obtenerTodasLasPersonas();
    	

     return $this->crearPDF($personas, $vistaurl,$tipo);

}

 public function reporteProducto($tipo){

		
		$vistaurl="pdf.productoPDF";

		$productos = $this->obtenerTodosLosProductos();
    	

     return $this->crearPDF($productos, $vistaurl,$tipo);

}

 public function reporteCosecha($tipo){

		
		$vistaurl="pdf.cosechaPDF";

		$cosechas = $this->obtenerTodasLasCosechas();
    	

     return $this->crearPDF($cosechas, $vistaurl,$tipo);

}

 public function reporteRendimiento($tipo){

		
		$vistaurl="pdf.renanoPDF";

		$renanos = $this->obtenerTodasLasRenanos();
    	

     return $this->crearPDF($renanos, $vistaurl,$tipo);

}

public function reporteCultivo($tipo){

		
		$vistaurl="pdf.cultivoPDF";

		$cultivos = $this->obtenerTodosLosCultivos();
    	

     return $this->crearPDF($cultivos, $vistaurl,$tipo);

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
