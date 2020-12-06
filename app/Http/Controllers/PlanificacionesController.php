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
        $usuarios=User::whereIn('tipo_user', ['Admin', 'Planificacion'])->get();
        $gerencias=Gerencias::all();
        $planificaciones=Planificacion::where('anio',session('fecha_actual'))->get();

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
        $buscar = Planificacion::where('fechas',$fechas)->whereIn('id_gerencia',$request->id_gerencia)->count();
        //dd($buscar);
        if($buscar>0) {
            flash('<i class="icon-circle-check"></i> Error ya existe planificacion registradas en esta area y/o fechas selecciondas')->warning();
            return redirect()->to('planificaciones');
        } else {
            if ($request->anio_all) {
                $fechaInicio=strtotime(session('fecha_actual')."-01-01");
                $fechaFin=strtotime(session('fecha_actual')."-12-31");
                //Recorro las fechas y con la función strotime obtengo los lunes
                for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
                    //Sacar el dia de la semana con el modificador N de la funcion date
                    $dia = date('N', $i);
                    if($dia==3){
                        echo "Mie. ". date ("Y-m-d", $i)."<br>";
                    }
                }
            } else {
                $datos = $request['id_gerencia'];
                foreach($datos as $selected){                
                    $planificacion = new Planificacion();
                    $planificacion->elaborado=$request->elaborado;
                    $planificacion->aprobado=$request->aprobado;
                    $planificacion->num_contrato=$request->num_contrato;
                    $planificacion->fechas=$fechas;
                    $planificacion->semana=$num_semana_actual;
                    $planificacion->anio=$request->anio;
                    $planificacion->revision=$request->revision;
                    $planificacion->id_gerencia=$selected;
                    $planificacion->save();
                }                
                flash('<i class="icon-circle-check"></i> Exito! Planificación registrada satisfactoriamente')->success();
                return redirect()->to('planificaciones');
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
        //dd('hola mundo');
        $usuarios=User::whereIn('tipo_user', ['Admin', 'Planificacion'])->get();
        $gerencias=Gerencias::all();
        $planificacion=Planificacion::find($id);
        return view('planificaciones.edit',compact('planificacion','usuarios','gerencias'));
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

        //dd($request->all());
        $fechaHoy = date($request->desde);
        $num_dia=num_dia($fechaHoy);
        $num_semana_actual=date('W', strtotime($fechaHoy));
        if ($num_dia==1 || $num_dia==2) {
            $num_semana_actual--;
        }

        $fechas = $request->desde." al ".$request->hasta1;
        $plan = Planificacion::where('id',$id)->count();
        $buscar = Planificacion::where([['fechas',$fechas],['id_gerencia',$request->id_gerencia]])->count();
        $buscar_gerencias = Planificacion::where([['fechas',$request->fechas_r],['id_gerencia',$request->id_gerencia]])->first();
        //dd($buscar_gerencias);
        if ($request->cambiar_fechas==1 && $request->cambiar_gerencia!=1) {
            //dd('f');
            if($buscar>0) {
                flash('<i class="icon-circle-check"></i> Error ya existe planificación registradas en esta gerencia y/o fechas selecciondas')->warning();
                return redirect()->to('planificaciones');
            } else {
                $planificacion = Planificacion::find($id);
                $planificacion->elaborado=$request->elaborado;
                $planificacion->aprobado=$request->aprobado;
                $planificacion->num_contrato=$request->num_contrato;
                $planificacion->fechas=$fechas;
                $planificacion->semana=$num_semana_actual;
                $planificacion->anio=$request->anio;
                $planificacion->revision=$request->revision;
                $planificacion->id_gerencia=$request->id_gerencia;
                $planificacion->save();   

                flash('<i class="icon-circle-check"></i> Exito! Planificación modificada satisfactoriamente')->success();
                return redirect()->to('planificaciones');
            }
        } else if($request->cambiar_fechas!=1 && $request->cambiar_gerencia==1) {
            //dd('g');
            if ($buscar_gerencias != null) {
                flash('<i class="icon-circle-check"></i> Error ya existe planificación registradas en la gerencia seleccionda')->warning();
                return redirect()->to('planificaciones');
            } else {
                $planificacion = Planificacion::find($id);
                $planificacion->elaborado=$request->elaborado;
                $planificacion->aprobado=$request->aprobado;
                $planificacion->num_contrato=$request->num_contrato;
                $planificacion->revision=$request->revision;
                $planificacion->id_gerencia=$request->id_gerencia;
                $planificacion->save();   

                flash('<i class="icon-circle-check"></i> Exito! Planificación modificada satisfactoriamente')->success();
                return redirect()->to('planificaciones');
            }
        } else if($request->cambiar_gerencia==1 && $request->cambiar_fechas==1){
            //dd('todos');
            if($buscar>0) {
                flash('<i class="icon-circle-check"></i> Error ya existe planificación registradas en esta gerencia y/o fechas selecciondas')->warning();
                return redirect()->to('planificaciones');
            } else {
                $planificacion = Planificacion::find($id);
                $planificacion->elaborado=$request->elaborado;
                $planificacion->aprobado=$request->aprobado;
                $planificacion->num_contrato=$request->num_contrato;
                $planificacion->fechas=$fechas;
                $planificacion->semana=$num_semana_actual;
                $planificacion->anio=$request->anio;
                $planificacion->revision=$request->revision;
                $planificacion->id_gerencia=$request->id_gerencia;
                $planificacion->save();   

                flash('<i class="icon-circle-check"></i> Exito! Planificación modificada satisfactoriamente')->success();
                return redirect()->to('planificaciones');
            }
        }
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
