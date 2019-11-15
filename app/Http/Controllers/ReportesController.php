<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        if($request->tipo_reporte=="Excel"){
            dd('Reporte Excel');
        } else if ($request->tipo_reporte=="PDF"){
            //dd('Reporte PDF');
           
            if ($request->planificacion=="0" && $request->gerencias=="0" && $request->areas=="0" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } else if ($request->planificacion!=="0" && $request->gerencias=="0" && $request->areas=="0" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# GERENCIA CON VALOR -> !=0 Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } else if ($request->planificacion=="0" && $request->gerencias=="0" && $request->areas=="1" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# AREA CON VALOR -> 1 Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } else if ($request->planificacion=="0" && $request->gerencias=="0" && $request->areas=="2" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# AREA CON VALOR -> 2 Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } else if ($request->planificacion=="0" && $request->gerencias=="0" && $request->areas=="3" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# AREA CON VALOR -> 3 Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } else if ($request->planificacion=="0" && $request->gerencias=="0" && $request->areas=="4" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# AREA CON VALOR -> 4 Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } else if ($request->planificacion=="0" && $request->gerencias=="0" && $request->areas=="5" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# AREA CON VALOR -> 5 Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } else if ($request->planificacion=="0" && $request->gerencias=="0" && $request->areas=="6" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# AREA CON VALOR -> 6 Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"');

            } elseif ($request->planificacion=="0" && $request->gerencias=="NPI" && $request->areas=="0" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GERENCIAS=="NPI" Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS"..');

            } elseif ($request->planificacion=="0" && $request->gerencias=="CHO" && $request->areas=="0" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GRENCIAS=="CHO" Y TODOS LOS CAMPOS CON VALOR -> 0 "TODOS".');

            } elseif ($request->planificacion=="0" && $request->gerencias=="NPI" && $request->areas==1 && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GERENCIAS="NPI", CAMPO AREA="1->EWS" Y TODOS LOS CAMPOS CON VALOR="0->TODOS"');

            } elseif ($request->planificacion=="0" && $request->gerencias=="NPI" && $request->areas==2 && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GERENCIAS="NPI", CAMPO AREA="2" Y TODOS LOS CAMPOS CON VALOR="0->TODOS"');

            } elseif ($request->planificacion=="0" && $request->gerencias=="NPI" && $request->areas==3 && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GERENCIAS="NPI", CAMPO AREA="3" Y TODOS LOS CAMPOS CON VALOR="0->TODOS"');

            } elseif ($request->planificacion=="0" && $request->gerencias=="CHO" && $request->areas==4 && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GERENCIAS="CHO", CAMPO AREA="4" Y TODOS LOS CAMPOS CON VALOR="0->TODOS"');

            } elseif ($request->planificacion=="0" && $request->gerencias=="CHO" && $request->areas==5 && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GERENCIAS="CHO", CAMPO AREA="5" Y TODOS LOS CAMPOS CON VALOR="0->TODOS"');

            } elseif ($request->planificacion=="0" && $request->gerencias=="CHO" && $request->areas==6 && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# CAMPO GERENCIAS="CHO", CAMPO AREA="6" Y TODOS LOS CAMPOS CON VALOR="0->TODOS"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="NPI" && $request->areas=="0" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="NPI" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="CHO" && $request->areas=="0" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="CHO" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="0" && $request->areas=="1" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - AREA="1" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="0" && $request->areas=="2" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - AREA="2" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="0" && $request->areas=="3" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - AREA="3" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="0" && $request->areas=="4" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - AREA="4" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="0" && $request->areas=="5" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - AREA="5" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="0" && $request->areas=="6" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - AREA="6" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="NPI" && $request->areas=="1" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="NPI" - AREA="1" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="NPI" && $request->areas=="2" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="NPI" - AREA="2" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="NPI" && $request->areas=="3" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="NPI" - AREA="3" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="CHO" && $request->areas=="4" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="CHO" - AREA="4" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="CHO" && $request->areas=="5" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="CHO" - AREA="5" - Y LOS DEMAS CAMPOS="0"');

            } elseif ($request->planificacion!=="0" && $request->gerencias=="CHO" && $request->areas=="6" && $request->realizadas=="0" && $request->tipo=="0" && $request->dias=="0") {
                dd($request->all(),'# PLANIFICACIÓN!=0 - GERENCIAS="CHO" - AREA="6" - Y LOS DEMAS CAMPOS="0"');

            }
            
        }
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
