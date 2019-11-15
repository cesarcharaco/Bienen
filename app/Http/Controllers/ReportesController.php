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
        //dd('Hola mundo');
        if($request->tipo_reporte=="Excel"){
            dd('Reporte Excel');
        } else if ($request->tipo_reporte=="PDF"){
            dd('Reporte PDF');
            ## Filtro por área
            if ($request->filtro=="¨Planificaciones") {

            } elseif ($request->filtro=="Gerencias") {
                # GERENCIAS
                if ($request->tipo_filtro=="Todas") {
                    # TODAS...
                } elseif ($request->tipo_filtro=="NPI") {
                    # GERENCIA NPI...
                } elseif ($request->tipo_filtro=="CHO") {
                    # GERENCIA CHO...
                }
            } else if ($request->filtro=="Area") {
                if ($request->tipo_filtro=="Todas") {
                       
                } else if ($request->tipo_filtro=="1") {
                    //-- AREA EWS

                } else if ($request->tipo_filtro=="2") {
                    //-- AREA Planta Cero/Desaladora & Acueducto
                    
                } else if ($request->tipo_filtro=="3") {
                    //-- AREA Agua y Tranque
                    
                } else if ($request->tipo_filtro=="4") {
                    //-- AREA Filtro-Puerto
                    
                } else if ($request->tipo_filtro=="5") {
                    //-- AREA ECT
                    
                } else if ($request->tipo_filtro=="6") {
                    //-- AREA Los Colorados
                    
                }
            } elseif ($request->filtro=="Tipo") {
                # TIPOS...
                if ($request->tipo_filtro=="Todas") {
                    # TODAS..
                } else if ($request->tipo_filtro=="PM01") {
                    # TIPO PM01...
                } else if ($request->tipo_filtro=="PM02") {
                    # TIPO PM02...
                } else if ($request->tipo_filtro=="PM03") {
                    # TIPO PM03...
                } else if ($request->tipo_filtro=="PM04") {
                    # TIPO PM04...
                }
            } else if ($request->filtro=="Realizadas") {
                # REALIZADAS...
                if ($request->tipo_filtro=="Todas") {
                    # TODAS...
                } else if ($request->tipo_filtro=="Si") {
                    # SI...
                } elseif ($request->tipo_filtro=="No") {
                    # NO...
                }
            } else if ($request->filtro=="Dia") {
                # DÍA...
                if ($request->tipo_filtro=="Todas") {
                    # TODAS...
                } else if ($request->tipo_filtro=="1") {
                    # MIÉ...
                } else if ($request->tipo_filtro=="2") {
                    # JUE...
                } else if ($request->tipo_filtro=="3") {
                    # VIE...
                } else if ($request->tipo_filtro=="4") {
                    # SÁB...
                } else if ($request->tipo_filtro=="5") {
                    # DOM...
                } else if ($request->tipo_filtro=="6") {
                    # LUN...
                } else if ($request->tipo_filtro=="7") {
                    # MAR...
                }
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
