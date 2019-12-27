<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planificacion;
use App\Actividades;
use App\Empleados;
use App\ActividadesProceso;

class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planificaciones=planificacion::all();
        //$planificaciones=Actividades::groupBy('task')->orderBy('id','DESC')->get();
        return view('planificacion.asignaciones.index', compact('planificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $empleados=Empleados::all();
        $contador=1;
        $actividades=Actividades::all();
        return view('planificacion.asignaciones.create', compact('contador','actividades','empleados'));
    }


    public function buscar_empleado($id_empleado)
    {
        

        // return $actividades_proceso=ActividadesProceso::where('id_empleado',$id_empleado)->get(); $actividades=\DB::table('actividades')->whereIn('id',$actividades_proceso)->orderByRaw(\DB::raw("FIELD(id, ".implode(",",$actividades_proceso).")"))->get();

        return $empleado=\DB::table('empleados')->join('actividades_proceso','actividades_proceso.id_empleado','=','empleados.id')->join('actividades','actividades.id',"=","actividades_proceso.id_actividad")
        ->select('actividades.*')->where('empleados.id',$id_empleado)->get();
    }

    public function buscar_empleado2($activi)
    {
        

        return $actividades=\DB::table('actividades')->whereIn('id',$activi)->orderByRaw(\DB::raw("FIELD(id, ".implode(",",$actividades_proceso).")"))->get();
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
