<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planificacion;
use App\Actividades;
use App\Gerencias;
use App\User;

class PlanificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=User::all();
        $gerencias=Gerencias::all();
        $planificaciones=Planificacion::all();

        return View('planificaciones.index', compact('planificaciones','gerencias','usuarios'));
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
        $fechaHoy = date($request->desde);
        $num_dia=num_dia($fechaHoy);
        $num_semana_actual=date('W', strtotime($fechaHoy));
        if ($num_dia==1 || $num_dia==2) {
            $num_semana_actual--;
        }

        $fechas = $request->desde." al ".$request->hasta1;
        $buscar = Planificacion::where([['fechas',$fechas],['id_gerencia',$request->id_gerencia]])->count();
        //dd($buscar);
        if($buscar>0) {
            flash('<i class="icon-circle-check"></i> Error ya existe planificacion registradas en esta area y/o fechas selecciondas')->warning();
            return redirect()->to('planificaciones');
        } else {
            $planificacion = new Planificacion();
            $planificacion->elaborado=$request->elaborado;
            $planificacion->aprobado=$request->aprobado;
            $planificacion->num_contrato=$request->num_contrato;
            $planificacion->fechas=$fechas;
            $planificacion->semana=$num_semana_actual;
            $planificacion->revision=$request->revision;
            $planificacion->id_gerencia=$request->id_gerencia;
            $planificacion->save();   

            flash('<i class="icon-circle-check"></i> Exito! Planificación registrada satisfactoriamente')->success();
            return redirect()->to('planificaciones');         
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
    public function destroy(Request $request, $id)
    {
        $actividades=Actividades::where('id_planificacion',$request->id)->get()->count();
        if ($actividades == 0 || $actividades == null) {
            $planificacion=Planificacion::find($request->id);

            if ($planificacion->delete()) {
                flash('<i class="icon-circle-check"></i> Planificación eliminada satisfactoriamente!')->success()->important();
            }else{
                flash('<i class="icon-circle-check"></i> Ocurrió un problema al eliminar la planificación! Inténtelo nuevamente!')->danger()->important();
            }
            return redirect()->to('planificaciones');
        }else{
            flash('<i class="icon-circle-check"></i> Hay actividades registradas en esta planificación! Elimine las actividades registradas')->warning();
            return redirect()->to('planificaciones');
        }

    }
}
