<?php

namespace App\Http\Controllers;

use App\Planificacion;
use Illuminate\Http\Request;
use App\Actividades;
use App\Gerencias;
use App\Areas;
use App\ActividadesProceso;
use App\Http\Requests\PlanificacionRequest;
use App\Empleados;
date_default_timezone_set('UTC');

ini_set('max_execution_time', 900);
set_time_limit(900);
class PlanificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planificaciones=Planificacion::all();
        $actividadesProceso=ActividadesProceso::all();
        $empleados=Empleados::all();
        //consultando las planificaciones del empleado
        if (\Auth::user()->tipo_usuario=="Empleado") {
            $empleado=Empleados::where(\Auth::user()->tipo_usuario->id)->first();
            $actividades=Empleados::find(\Auth::user()->id);
            $actividadesProceso=ActividadesProceso::where('id_empleado',$empleado->id)->get();
            //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_semana_actual=date('W', strtotime($fechaHoy));
            dd($actividadesProceso);

        return view("planificacion.index", compact('fechaHoy','num_semana_actual','actividades'));
        } else {
            // dd('das');
                //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_dia=num_dia($fechaHoy);
            $num_semana_actual=date('W', strtotime($fechaHoy));
            if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
            }
            
            $gerencias=Gerencias::all();
            $gerencias1=Gerencias::where('gerencia','NPI')->first();
            $gerencias2=Gerencias::where('gerencia','CHO')->first();
            
            
            //Par mostrar las planificaciones de la semana actual
            $planificacion1 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',1)->first();
            $planificacion2 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',2)->first();
            //para prueba

            /*$planificacion1 = Planificacion::where('semana',38)->where('id_gerencia',1)->first();
            $planificacion2 = Planificacion::where('semana',38)->where('id_gerencia',2)->first();
            $num_semana_actual=38;*/
            //------------------------------
            $planificacion3 = Planificacion::where('semana',$num_semana_actual)->get();
                
            $actividades=Actividades::where('id_planificacion',[$planificacion3[0]->id,$planificacion3[1]->id])->get();
                    
            
            // dd(count($actividades));
            $planificacion = Planificacion::where('semana','>=',$num_semana_actual)->get();
            //$planificacion = Planificacion::all();
            
            $areas=Areas::all();
            //actividades pm01
            $id_area=0;
            $envio=1;
            // dd($actividades->all());
        return view("planificacion.index", compact('fechaHoy','planificacion','planificacion1','planificacion2','areas','num_semana_actual','gerencias','gerencias1','gerencias2','actividades','id_area','envio','actividadesProceso','planificaciones','empleados'));
        }
        
        
        
    }
    public function buscar_api(){
        return $id = Empleados::all();
    }
    public function api_fc(){
        $consulta = Empleados::where('id',\Auth::user()->id)->first();
        $count = count($consulta);

        $eventos = array();    

        //foreach($consulta as $key){
            foreach ($consulta->actividades as $resultado){
                $id = $resultado['id'];
                $title = $resultado['task'];
                $start = $resultado['fecha_vencimiento'];
                
                $eventos[] = array('id' => $id, 'title' => $title, 'start' => $start);
                
            }
        //}
            //dd($eventos);
        
        $arrayJson = json_encode($eventos, JSON_UNESCAPED_UNICODE);
        print_r($arrayJson);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planificaciones=Planificacion::all();
        $actividadesProceso=ActividadesProceso::all();
        $empleados=Empleados::all();
        //consultando las planificaciones del empleado
        if (\Auth::user()->tipo_usuario=="Empleado") {
            $actividades=Empleados::find(\Auth::user()->id);
            //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_semana_actual=date('W', strtotime($fechaHoy));

        return view("planificacion.index", compact('fechaHoy','num_semana_actual','actividades'));
        } else {
            //dd('das');
                //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_dia=num_dia($fechaHoy);
            $num_semana_actual=date('W', strtotime($fechaHoy));
            if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
            }
            
            $gerencias=Gerencias::all();
            $gerencias1=Gerencias::where('gerencia','NPI')->first();
            $gerencias2=Gerencias::where('gerencia','CHO')->first();
            
            
            //Par mostrar las planificaciones de la semana actual
            $planificacion1 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',1)->first();
            $planificacion2 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',2)->first();
            //para prueba

            /*$planificacion1 = Planificacion::where('semana',38)->where('id_gerencia',1)->first();
            $planificacion2 = Planificacion::where('semana',38)->where('id_gerencia',2)->first();
            $num_semana_actual=38;*/
            //------------------------------
            //dd($planificacion1);
            
            $planificacion = Planificacion::where('semana','>=',$num_semana_actual)->get();
            //$planificacion = Planificacion::all();
            
            $areas=Areas::all();
            //actividades pm01
            $actividades=Actividades::where('id','<>',0)->orderBy('id','DESC')->get();
            $id_area=0;
            $envio=1;
            // dd($actividades->all());
        return view("planificacion.index", compact('fechaHoy','planificacion','planificacion1','planificacion2','areas','num_semana_actual','gerencias','gerencias1','gerencias2','actividades','id_area','envio','actividadesProceso','planificaciones'));
        }
        
        
        
    }

    public function view()
    {
        //consultando las planificaciones del empleado
        if (\Auth::user()->tipo_usuario=="Empleado") {
            $actividades=Empleados::find(\Auth::user()->id);
            //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_semana_actual=date('W', strtotime($fechaHoy));

        return view("planificacion.index", compact('fechaHoy','num_semana_actual','actividades'));
        } else {
            //dd('das');
                //averiguando en que semana estamos
            $fechaHoy = date('Y-m-d');
            $num_dia=num_dia($fechaHoy);
            $num_semana_actual=date('W', strtotime($fechaHoy));
            if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
            }
            //dd($num_semana_actual);
            $gerencias=Gerencias::all();
            
            
            
            //Par mostrar las planificaciones de la semana actual
            $planificacion1 = null;
            //para prueba
            /*$planificacion1 = Planificacion::where('semana',38)->where('id_gerencia',1)->first();
            $planificacion2 = Planificacion::where('semana',38)->where('id_gerencia',2)->first();
            $num_semana_actual=38;*/
            //------------------------------
            //dd($planificacion1);
            $planificacion = Planificacion::where('semana','>=',$num_semana_actual)->get();
            $areas=Areas::all();
            //actividades pm01
            $actividades=Actividades::select('id_area','id',\DB::raw('task'))->where('tipo','PM02')->groupBy('task')->orderBy('id','DESC')->get();
            //dd($actividades->all());
            $id_area=0;
            $envio=1;
        return view("planificacion.index", compact('planificacion','planificacion1','areas','num_semana_actual','gerencias','actividades','id_area','envio'));

        }
        
        
        
    }

    public function buscar_areas($id_gerencia)
    {
        //return $areas=\DB::table('actividades')->join('planificacion','planificacion.id','=','actividades.id_planificacion')->join('gerencias','gerencias.id','=','planificacion.id_gerencia')->join('areas','areas.id','=','actividades.id_area')->select('areas.*')->where('actividades.id_planificacion', $id_gerencia)->groupBy('id')->get();

        //return $actividades=\DB::where('id_planificacion', $id_gerencia)->get();

        // return $empleados=\DB::table('empleados')->join('empleados_has_areas','empleados_has_areas.id_empleado','=','empleados.id')->join('areas','areas.id',"=","empleados_has_areas.id_area")
        // ->select('empleados.*')->where('areas.id',$id_area)->get();

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
                }//cierre del switch
            }//fin del if
        }//fin del foreach
        }//fin del else
        

        //dd($planificaciones);
        
        $fecha=date('Y-m-d');
        $num_semana_actual=date('W', strtotime($fecha));

        return view('planificacion.index',compact('gerencias','areas','planificaciones','id_area','encontrado','num_semana_actual','tiempos'));
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

    public function buscar_pm01()
    {
        return $actividades=Actividades::where('tipo','PM02')->get();
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
