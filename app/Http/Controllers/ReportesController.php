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

            if ($request->planificacion!=0) {
                $condicion_plan=" && planificacion.semana=".$request->planificacion." ";
                //dd('Número de la semana',$condicion_plan);
            } else {
                //dd('Todos PLanificación');
                $condicion_plan="";
            }

            if ($request->gerencias!=0) {
                $condicion_geren=" && gerencias.id=".$request->gerencias." ";
            } else {
                //dd('Todos Gerencia');
                $condicion_geren="";
            }

            if ($request->areas!=0) {
                $condicion_areas=" && areas.id=".$request->areas." ";
            } else {
                //dd('Todos Áreas');
                $condicion_areas="";
            }

            if ($request->tipo!=0) {
                $condicion_tipo=" && actividades.tipo='".$request->tipo."' ";
            } else {
                //dd('Todos Tipo');
                $condicion_tipo="";
            }

            if ($request->realizadas!=0) {
                $condicion_realizadas=" && actividades.realizada=".$request->realizadas." ";
            } else {
                $condicion_realizadas="";
                //dd('Todos Días',$condicion_realizadas);
            }

            if ($request->dias!=0) {
                $condicion_dias=" && actividades.dia=".$request->dias." ";
            } else {
                //dd('Todos Días',$condicion_dias);
                $condicion_dias="";
            }

            $sql="SELECT * FROM planificacion,actividades,gerencias,areas WHERE planificacion.id_gerencia = gerencias.id && actividades.id_area=areas.id && actividades.id_planificacion=planificacion.id ".$condicion_plan." ".$condicion_geren." ".$condicion_areas." ".$condicion_realizadas." ".$condicion_tipo." ".$condicion_dias."";

            $resultado=\DB::select($sql);
            dd($resultado);
            
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
