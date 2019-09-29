<?php

namespace App\Http\Controllers;

use App\Planificacion;
use Illuminate\Http\Request;
use App\Actividades;
use App\Gerencias;
use App\Areas;
use App\Http\Requests\PlanificacionRequest;
use App\Empleados;
date_default_timezone_set('UTC');
class PlanificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerencias=Gerencias::all();
        $areas=Areas::all();
        $encontrado=0;
        //averiguando en que semana estamos
        $fecha=date('Y-m-d');
        $num_semana_actual=date('W', strtotime($fecha));
        //dd($num_semana_actual);
        
        return view('planificacion.index',compact('gerencias','areas','encontrado','num_semana_actual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //consultando las planificaciones del empleado
        if (\Auth::user()->tipo_usuario=="Empleado") {
            $actividades=Empleados::find(\Auth::user()->id);
            //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_semana_actual=date('W', strtotime($fechaHoy));

        return view("planificacion.create", compact('fechaHoy','num_semana_actual','actividades'));
        } else {
                //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_semana_actual=date('W', strtotime($fechaHoy));
            $gerencias=Gerencias::all();
            $gerencias1=Gerencias::where('gerencia','NPI')->first();
            $gerencias2=Gerencias::where('gerencia','CHO')->first();
            $planificacion = Planificacion::where('semana',$num_semana_actual)->get();
            $areas=Areas::all();

        return view("planificacion.create", compact('fechaHoy','planificacion','areas','num_semana_actual','gerencias','gerencias1','gerencias2'));
        }
        
        
        
    }

    public function buscar_areas($id_gerencia)
    {
        return $areas=Areas::where('id_gerencia',$id_gerencia)->get();
    }

    public function buscar(Request $request)
    {
        //dd($request->all());
        $planificaciones=Planificacion::where('id_gerencia',$request->id_gerencia)->where('semana',$request->semanas)->first();
        $gerencias=Gerencias::all();
        $areas=Areas::all();
        $id_area=$request->id_area;

        if(empty($planificaciones)){
            $encontrado=0;
        }else{
            $encontrado=1;
            //contando actividades por dia
        $mie=0;$jue=0;$vie=0;$sab=0;$dom=0;$lun=0;$mar=0;
        //variables para sumar totales de duracion
        $tiempos = array();
        //inicializando
        $tiempos[0][0]="Duración Proyectada";
        $tiempos[1][0]="Duración Real";
        for ($i=0; $i < 2; $i++) { 
            for ($j=1; $j < 8; $j++) { 
                $tiempos[$i][$j]=0;
            }
        }
        //miercoles
        $t1mie=0;$t2mie=0;
        //jueves
        $t1jue=0;$t2jue=0;
        //viernes
        $t1vie=0;$t2vie=0;
        //sabado
        $t1sab=0;$t2sab=0;
        //domingo
        $t1dom=0;$t2dom=0;
        //lunes
        $t1lun=0;$t2lun=0;
        //martes
        $t1mar=0;$t2mar=0;
        foreach ($planificaciones->actividades as $key) {
            if ($id_area==$key->id_area) {
                $dia=dia($key->fecha_vencimiento);
                switch ($dia) {
                    case 'Mié':
                        $mie++;
                        $t1mie+=$key->duracion_pro;
                        $t2mie+=$key->duracion_real;
                        $tiempos[0][1]+=$key->duracion_pro;
                        $tiempos[1][1]+=$key->duracion_real;
                        break;
                    case 'Jue':
                        $jue++;
                        $t1jue+=$key->duracion_pro;
                        $t2jue+=$key->duracion_real;
                        $tiempos[0][2]+=$key->duracion_pro;
                        $tiempos[1][2]+=$key->duracion_real;
                        break;
                    case 'Vie':
                        $vie++;
                        $t1vie+=$key->duracion_pro;
                        $t2vie+=$key->duracion_real;
                        $tiempos[0][3]+=$key->duracion_pro;
                        $tiempos[1][3]+=$key->duracion_real;
                        break;
                    case 'Sáb':
                        $sab++;
                        $t1sab+=$key->duracion_pro;
                        $t2sab+=$key->duracion_real;
                        $tiempos[0][4]+=$key->duracion_pro;
                        $tiempos[1][4]+=$key->duracion_real;
                        break;
                    case 'Dom':
                        $dom++;
                        $t1dom+=$key->duracion_pro;
                        $t2dom+=$key->duracion_real;
                        $tiempos[0][5]+=$key->duracion_pro;
                        $tiempos[1][5]+=$key->duracion_real;
                        break;
                    case 'Lun':
                        $lun++;
                        $t1lun+=$key->duracion_pro;
                        $t2lun+=$key->duracion_real;
                        $tiempos[0][6]+=$key->duracion_pro;
                        $tiempos[1][6]+=$key->duracion_real;
                        break;
                    case 'Mar':
                        $mar++;
                        $t1mar+=$key->duracion_pro;
                        $t2mar+=$key->duracion_real;
                        $tiempos[0][7]+=$key->duracion_pro;
                        $tiempos[1][7]+=$key->duracion_real;
                        break;
                }
            }
        }
        }
        

        //dd($planificaciones);
        
        $fecha=date('Y-m-d');
        $num_semana_actual=date('W', strtotime($fecha));

        return view('planificacion.index',compact('gerencias','areas','planificaciones','id_area','encontrado','mie','jue','vie','sab','dom','lun','mar','t1mie','t2mie','t1jue','t2jue','t1vie','t2vie','t1sab','t2sab','t1dom','t2dom','t1lun','t2lun','t1mar','t2mie','num_semana_actual','tiempos'));
    }

    public function calcular_fechas($num_semana)
    {
        $anio=date('Y');
        $siguiente=$num_semana+1;
        $fecha1=date("d-m-Y",strtotime($anio."-W".$num_semana."-3"));
        $fecha2=date("d-m-Y",strtotime($anio."-W".$siguiente."-2"));
        $fechas=$fecha1." al ".$fecha2;

        return $fechas;

    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanificacionRequest $request)
    {
        //dd($request->all());
        $planificacion= new Planificacion();

        $planificacion->fill($request->all())->save();

        flash('<i class="icon-circle-check"></i> Planificación registrada satisfactoriamente!')->success()->important();
        return redirect()->to('planificacion');
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
