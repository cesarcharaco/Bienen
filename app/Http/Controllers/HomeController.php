<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
use App\Areas;
use App\Actividades;
use App\ActividadesProceso;
use App\Planificacion;
use App\Notas;
use App\Muro;
use App\Novedades;
use App\Avisos;
use Mail;
date_default_timezone_set('UTC');
ini_set('max_execution_time', 3000);
set_time_limit(3000);
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    protected function conexion()
    {
        $connected = @fopen("http://www.google.com:80/","r"); 

        if($connected) { return true; } else { return false; }
        
    }
    public function index()
    {
        
        
        if ($this->conexion()) {
             
         if(\Auth::user()->tipo_user!="Empleado"){

            $this->envio_avisos();
            }
         }/* else {
             dd("no conectado");
         }*/
            //dd("+++++");
        $dia=dia(date('Y-m-d'));
        $novedades=Novedades::where('id','<>',0)->orderBy('created_at','DESC')->get();

        $fecha1=date("Y-m-d");
        $fecha2=date("Y-m-d",strtotime($fecha1."- 1 days"));
        $fecha3=date("Y-m-d",strtotime($fecha1."- 2 days"));
        $fecha4=date("Y-m-d",strtotime($fecha1."- 3 days"));

        $fechaNove=Novedades::where('fecha',[$fecha1,$fecha2,$fecha3,$fecha4])->groupBy('fecha')->get();
        // dd(count($fechaNove));
        // dd($fecha1, $fecha2, $fecha3, $fecha4);
        $muro=Muro::all();
        if (\Auth::User()->tipo_user!="Empleado" || \Auth::User()->tipo_user!="Admin de Empleado") {

            //obteniendo id_empleado
            $empleado=Empleados::where('id_usuario',\Auth::User()->id)->first();
            //conteo de horas
            //areas registradas
            $mis_areas=Areas::all();
            //variables de conteo
            $dp=array();//arreglo para la duracion proyectada
            $dr=array();//arreglo para la duracion real
            $totaldp=0;
            $totaldr=0;
            $i=0;
            //inicializando
            foreach ($mis_areas as $key) {
                $dp[$i]=0;
                $dr[$i]=0;
                $i++;
            }
            
            //consultando actividades asignadas
            if (!is_null($empleado)) {
                

            $buscar=\DB::table('actividades_proceso')->join('actividades','actividades.id','actividades_proceso.id_actividad')->join('empleados','empleados.id','actividades_proceso.id_empleado')->where('id_empleado',$empleado->id)->where('actividades.dia',$dia)->select('actividades.duracion_pro','actividades.duracion_real','actividades.id_area')->get();
            $k=0;
            foreach ($mis_areas as $key) {
                for ($j=0; $j < count($buscar); $j++) { 
                    if ($buscar[$j]->id_area==$key->id) {
                      if ($buscar[$j]->duracion_pro!="NULL") {
                            $dp[$k]+=$buscar[$j]->duracion_pro;
                            $totaldp+=$buscar[$j]->duracion_pro;
                        }
                      if ($buscar[$j]->duracion_real!="NULL") {
                            $dr[$k]+=$buscar[$j]->duracion_real;
                            $totaldr+=$buscar[$j]->duracion_real;
                        }  
                    }
                }
                $k++;
            }
            }

            //fin del conteo de duraciones
            # code...
                //dd("dfghjk");
            $lista_empleado=Empleados::all();
            $empleados=Empleados::all();
            $areas=Areas::all();
            $hallado=0;
            $actividades=Actividades::all();
            $hoy=date('Y-m-d');
            $notas=Notas::where('id_empleado',\Auth::User()->id)->get();
            $num_notas=count($notas);
            //--- buscando planificacion actual
            $fechaHoy = date('Y-m-d');
            $num_dia=num_dia($fechaHoy);
            $num_semana_actual=date('W', strtotime($fechaHoy));
            if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
            }

            $planificacion1 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',1)->first();
            if (is_null($planificacion1)) {
                $id_planificacion1=0;
            } else {
                $id_planificacion1=$planificacion1->id;
            }
            $planificacion2 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',2)->first();
            if (is_null($planificacion2)) {
                $id_planificacion2=0;
            } else {
                $id_planificacion2=$planificacion2->id;
            }
            //-----------
            $actividadesProceso=\DB::table('actividades_proceso')->join('actividades','actividades.id','actividades_proceso.id_actividad')->join('planificacion','planificacion.id','actividades.id_planificacion')->select('actividades.*','actividades_proceso.*')->where('planificacion.semana',$num_semana_actual)->get();
            // dd($num_semana_actual);
            //$actividadesProceso=ActividadesProceso::all();
            //------------------calculo de totales para el usuario MEL----------

            $fechaHoy = date('Y-m-d');
            $num_dia=num_dia($fechaHoy);
            $num_semana_actual=date('W', strtotime($fechaHoy));
            if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
            }
            $ews[] = array();
            //--------------------------------------
            //------- obteniendo para la gerencia 1---------------
            $planificacion=Planificacion::where('id_gerencia',1)->where('semana',$num_semana_actual)->first();
            $planificacion2=Planificacion::where('id_gerencia',2)->where('semana',$num_semana_actual)->first();

            //------------EWS----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM01')->count();
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM01')->where('realizada','No')->count();
                $ews[0]=$total_pm01;
                $ews[1]=$total_pm01_si;
                $ews[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM02')->count();
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM02')->where('realizada','No')->count();
                $ews[3]=$total_pm02;
                $ews[4]=$total_pm02_si;
                $ews[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM03')->count();
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM03')->where('realizada','No')->count();
                $ews[6]=$total_pm03;
                $ews[7]=$total_pm03_si;
                $ews[8]=$total_pm03_no;

                $total_pm04=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM04')->where('realizada','No')->count();
                $ews[9]=$total_pm04;
                $ews[10]=$total_pm04_si;
                $ews[11]=$total_pm04_no;
            //---------FIN DE EWS------------



            //---------------------------fin del calculo de totales----------------

            return view('home', compact('empleados','areas','hallado','lista_empleado','actividades','hoy','id_planificacion1','id_planificacion2','notas','num_notas','actividadesProceso','muro','novedades','fechaNove','fecha2','fecha3','fecha4','dr','dp','totaldp','totaldr','num_semana_actual','ews'));
        } elseif (\Auth::User()->tipo_user=="Empleado") {
            //obteniendo id_empleado
                if (!is_null($empleado)) {
                

            $buscar=\DB::table('actividades_proceso')->join('actividades','actividades.id','actividades_proceso.id_actividad')->join('empleados','empleados.id','actividades_proceso.id_empleado')->where('id_empleado',$empleado->id)->where('actividades.dia',$dia)->select('actividades.duracion_pro','actividades.duracion_real','actividades.id_area')->get();
            //areas registradas
            $mis_areas=Areas::all();
            //variables de conteo
            $dp=array();//arreglo para la duracion proyectada
            $dr=array();//arreglo para la duracion real 
            $totaldr=0;
            $totaldp=0;
            $i=0;
            //inicializando
            foreach ($mis_areas as $key) {
                $dp[$i]=0;
                $dr[$i]=0;
                $i++;
            }
            $k=0;
            foreach ($mis_areas as $key) {
                for ($j=0; $j < count($buscar); $j++) { 
                    if ($buscar[$j]->id_area==$key->id) {
                      if ($buscar[$j]->duracion_pro!="NULL") {
                            $dp[$k]+=$buscar[$j]->duracion_pro;
                            $totaldp+=$buscar[$j]->duracion_pro;
                        }
                      if ($buscar[$j]->duracion_real!="NULL") {
                            $dr[$k]+=$buscar[$j]->duracion_real;
                            $totaldr+=$buscar[$j]->duracion_real;
                        }  
                    }
                }
                $k++;
            }
            }
            //fin del conteo de duraciones


            $notas=Notas::where('id_empleado',\Auth::User()->id)->get();
            $num_notas=count($notas);
            $fechaHoy = date('Y-m-d');
            $num_dia=num_dia($fechaHoy);
            $num_semana_actual=date('W', strtotime($fechaHoy));
            if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
            }
            
            $actividades=Actividades::select('id_area','id',\DB::raw('task'))->where('tipo','PM02')->groupBy('task')->orderBy('id','DESC')->get();
            $areas=Areas::all();
            $planificacion = Planificacion::where('semana','>=',$num_semana_actual)->get();

            $empleados = Empleados::where('empleados.email',\Auth::User()->email)->get();

            $empleado=Empleados::where('id_usuario', \Auth::User()->id)->first();
            $actividadesProceso=ActividadesProceso::where('id_empleado',$empleado->id)->get();

            return view('home', compact('empleados','actividades','areas','planificacion','notas','num_notas','actividadesProceso','muro','novedades','fechaNove','fecha2','fecha3','fecha4','dp','dr','totaldp','totaldr'));
        } elseif (\Auth::User()->tipo_user=="Admin de Empleado") {
            //obteniendo id_empleado
                $empleado=Empleados::where('id_usuario',\Auth::User()->id)->first();
            //conteo de horas
            //consultando actividades asignadas
            if (!is_null($empleado)) {
                

            $buscar=\DB::table('actividades_proceso')->join('actividades','actividades.id','actividades_proceso.id_actividad')->join('empleados','empleados.id','actividades_proceso.id_empleado')->where('id_empleado',$empleado->id)->where('actividades.dia',$dia)->select('actividades.duracion_pro','actividades.duracion_real','actividades.id_area')->get();
            //areas registradas
            $mis_areas=Areas::all();
            //variables de conteo
            $dp=array();//arreglo para la duracion proyectada
            $dr=array();//arreglo para la duracion real 
            $totaldp=0;
            $totaldr=0;
            $i=0;
            //inicializando
            foreach ($mis_areas as $key) {
                $dp[$i]=0;
                $dr[$i]=0;
                $i++;
            }
            $k=0;
            foreach ($mis_areas as $key) {
                for ($j=0; $j < count($buscar); $j++) { 
                    if ($buscar[$j]->id_area==$key->id) {
                      if ($buscar[$j]->duracion_pro!="NULL") {
                            $dp[$k]+=$buscar[$j]->duracion_pro;
                            $totaldp+=$buscar[$j]->duracion_pro;
                        }
                      if ($buscar[$j]->duracion_real!="NULL") {
                            $dr[$k]+=$buscar[$j]->duracion_real;
                            $totaldr+=$buscar[$j]->duracion_real;
                        }  
                    }
                }
                $k++;
            }
            }
            //fin del conteo de duraciones
            $contador=1;
            $notas=Notas::where('id_empleado',\Auth::User()->id)->get();
            $num_notas=count($notas);
            $fechaHoy = date('Y-m-d');
            $num_dia=num_dia($fechaHoy);
            $num_semana_actual=date('W', strtotime($fechaHoy));
            if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
            }
            
            $actividades=Actividades::select('id_area','id',\DB::raw('task'))->where('tipo','PM02')->groupBy('task')->orderBy('id','DESC')->get();
            $areas=Areas::all();
            $planificacion = Planificacion::where('semana','>=',$num_semana_actual)->get();

            $empleados = Empleados::where('empleados.email',\Auth::User()->email)->get();

            
            $actividadesProceso=ActividadesProceso::where('id_empleado',$empleado->id)->get();

            return view('home', compact('empleados','actividades','areas','planificacion','notas','num_notas','actividadesProceso','muro','novedades','fechaNove','fecha2','fecha3','fecha4','dr','dp','totaldp','totaldr'));
        }
    }

    public function buscar(Request $request) 
    {
        //dd('hola');
        $hallado=1;
        $areas=Areas::all();
        $lista_empleado=Empleados::all();
        $hoy=date('Y-m-d');
        //--- buscando planificacion actual
        $fechaHoy = date('Y-m-d');
        $num_dia=num_dia($fechaHoy);
        $num_semana_actual=date('W', strtotime($fechaHoy));
        if ($num_dia==1 || $num_dia==2) {
            $num_semana_actual--;
        }

        $planificacion1 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',1)->first();
        if (is_null($planificacion1)) {
            $id_planificacion1=0;
        } else {
            $id_planificacion1=$planificacion1->id;
        }
        $planificacion2 = Planificacion::where('semana',$num_semana_actual)->where('id_gerencia',2)->first();
        if (is_null($planificacion2)) {
            $id_planificacion2=0;
        } else {
            $id_planificacion2=$planificacion2->id;
        }
        //-----------
        if($request->tipo_busqueda=="empleado") {
            $empleados = Empleados::where('empleados.id', [$request->empleado])->get();
        } else if($request->tipo_busqueda=="area"){
            $empleados = Empleados::where('empleados.id_area', [$request->area])->get();
        }
        
        return view('home', compact('empleados','hallado','areas','lista_empleado','hoy','id_planificacion1','id_planificacion2'));
    }

    public function dashboardStadistic()
    {
        $fechaHoy = date('Y-m-d');
        $num_dia=num_dia($fechaHoy);
        $num_semana_actual=date('W', strtotime($fechaHoy));
        if ($num_dia==1 || $num_dia==2) {
            $num_semana_actual--;
        }
        $empleados=Empleados::all()->count();
        $actividades = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)->count();

        $realizada = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where('actividades.realizada','Si')->count();

        $act_mie = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where([['planificacion.semana',$num_semana_actual],['actividades.dia','Mié']])->count();
        $act_jue = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where([['planificacion.semana',$num_semana_actual],['actividades.dia','Jue']])->count();
        $act_vie = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where([['planificacion.semana',$num_semana_actual],['actividades.dia','Vie']])->count();
        $act_sab = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where([['planificacion.semana',$num_semana_actual],['actividades.dia','Sáb']])->count();
        $act_dom = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where([['planificacion.semana',$num_semana_actual],['actividades.dia','Dom']])->count();
        $act_lun = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where([['planificacion.semana',$num_semana_actual],['actividades.dia','Lun']])->count();
        $act_mar = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where([['planificacion.semana',$num_semana_actual],['actividades.dia','Mar']])->count();

        $rea_mie = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where([['actividades.realizada','Si'],['actividades.dia','Mié']])->count();
        $rea_jue = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where([['actividades.realizada','Si'],['actividades.dia','Jue']])->count();
        $rea_vie = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where([['actividades.realizada','Si'],['actividades.dia','Vie']])->count();
        $rea_sab = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where([['actividades.realizada','Si'],['actividades.dia','Sáb']])->count();
        $rea_dom = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where([['actividades.realizada','Si'],['actividades.dia','Dom']])->count();
        $rea_lun = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where([['actividades.realizada','Si'],['actividades.dia','Lun']])->count();
        $rea_mar = Actividades::join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$num_semana_actual)
            ->where([['actividades.realizada','Si'],['actividades.dia','Mar']])->count();

        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(["Miércoles", "Jueves", "Viernes", "Sábado", "Domingo", "Lunes", "Martes"])
        ->datasets([
            [
                "label" => "Cantidad de actividades",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$act_mie, $act_jue, $act_vie, $act_sab, $act_dom, $act_lun, $act_mar],
            ],
            [
                "label" => "Actividades realizadas",
                'borderColor' => "#03A9F4",
                "pointBorderColor" => "#03A9F4",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$rea_mie, $rea_jue, $rea_vie, $rea_sab, $rea_dom, $rea_lun, $rea_mar],
            ]
        ])
        ->options([]);

        return view('estadisticas', compact('empleados','actividades','realizada','chartjs'));
    }
    protected function envio_avisos()
    {
        //primero la fecha de hoy
        $hoy=date('Y-m-d');
        $hoy_c=strtotime(date('Y-m-d'));
        

        //consultando a todos los empleados
        $empleados=Empleados::all();
        //consultando fechas de vencimiento de licencias

        foreach ($empleados as $key) {
            
            //-- envio de aviso en caso de vencimiento de licencia----------------
            foreach ($key->licencias as $key2) {
                
            $fechav_licn=$key2->pivot->fecha_vence;
            $fechav_licn_c=strtotime($fechav_licn);
                # no ha pasado la fecha de vencimiento
                $date1 = new \DateTime($fechav_licn);
                $date2 = new \DateTime($hoy);
                $diff = $date1->diff($date2);
                $nombres=$key->nombres." ".$key->apellidos." RUT: ".$key->rut;
                //mensaje a enviar 
                $aviso=Avisos::where('motivo','Vencimiento de Licencia')->first();
                //dd($aviso);
                $mensaje=$aviso->mensaje."  Faltan ".$diff->days ." días para vencerse la licencia ".$key2->licencia;
                $asunto="Bienen! | Vencimiento de Licencia";
                $destinatario=$key->email;

            if ($hoy_c<=$fechav_licn_c) {
                //en caso de que falten dias para vencerse
                
                //a quien se envia.....
                //antes de enviar el correo se necesita saber si ya se ha enviado
                
                //echo $diff->days."---------";
                if (count($key->avisos)!=0) {

                    $cont=0;
                    $c=0;//cuenta si hubo envio de avisos hoy
                    # en caso de tener avisos
                    foreach ($key->avisos as $key2) {
                        if ($key2->pivot->id_aviso==$aviso->id and $key2->pivot->status=="Enviado") {
                            $cont++;
                        }
                        $created_at=substr($key2->pivot->created_at,0,10)."<br>";
                        //echo strcmp($created_at,$hoy)."<br>";
                        if ($key2->pivot->id_aviso==$aviso->id and strcmp($created_at,$hoy)==4) {

                            $c++;
                        }
                    }
                        //echo $diff->days."---------".$cont;
                    
                    if (($diff->days==30 || $diff->days<=10) && $c==0) {
                        # enviando el correo cuando le falten 30 o 10 dias para el vencimiento

                        $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                        });
                        //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                    }
                    //dd("-------");
                }else{
                    //considicionando para que envie el aviso cuando falten 30 dias o menos
                    //pero solo la primera vez cuando no tiene avisos
                    //echo $diff->days."---------";
                if($diff->days<=30){
                    //enviando correo si no tiene avisos registrados
                    $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                    });
                    //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                }
                }//fin de condicional si no tiene avisos registrados

                
            } else {
                //en el caso de que se paso la fecha de vencimiento
                if (count($key->avisos)!=0) {

                    $cont=0;
                    $c=0;//cuenta si hubo envio de avisos hoy
                    # en caso de tener avisos
                    foreach ($key->avisos as $key2) {
                        if ($key2->pivot->id_aviso==$aviso->id and $key2->pivot->status=="Enviado") {
                            $cont++;
                        }
                        $created_at=substr($key2->pivot->created_at,0,10)."<br>";
                        //echo strcmp($created_at,$hoy)."<br>";
                        if ($key2->pivot->id_aviso==$aviso->id and strcmp($created_at,$hoy)==4) {

                            $c++;
                        }
                    }
                        
                    
                    if (($diff->days==30 || $diff->days<=10) && $c==0) {
                        # enviando el correo cuando le falten 30 o 10 dias para el vencimiento
                        $mensaje=$aviso->mensaje."  Tiene ".$diff->days ." días vencida la licencia ".$key2->licencia;
                        $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                        });
                        //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                    }
                }else{
                    //considicionando para que envie el aviso cuando falten 30 dias o menos
                    //pero solo la primera vez cuando no tiene avisos
                        //echo $diff->days."---------";
                if($diff->days<=10){
                    $mensaje=$aviso->mensaje."  Tiene ".$diff->days ." días vencida la licencia ".$key2->licencia;
                    //enviando correo si no tiene avisos registrados
                    $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                    });
                    //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                }
                }//fin de condicional si no tiene avisos registrados
            }//fin del else en caso de que se pasó la fecha de vencimiento
        }//fin del foreach de licencias

            //----fin de envio de aviso en caso de vencimiento de licencia
            //--- envio de avisos por vencimientos de examenes
            foreach ($key->examenes as $key2) {
                //echo $key2->pivot->fecha_vence."<br>";
                $fecha_vence=$key2->pivot->fecha_vence;
                $fecha_vence_c=strtotime($fecha_vence);
                # no ha pasado la fecha de vencimiento
                $date1 = new \DateTime($fecha_vence);
                $date2 = new \DateTime($hoy);
                $diff = $date1->diff($date2);
                /*if($key->id==4){
                    echo $diff->days."<br>";
                }*/
                $nombres=$key->nombres." ".$key->apellidos." RUT: ".$key->rut;
                //mensaje a enviar 
                $aviso=Avisos::where('motivo','Vencimiento de Exámenes')->first();
                //dd($aviso);
                $mensaje=$aviso->mensaje."  Faltan ".$diff->days ." días para vencerse el exámen <b>".$key2->examen."</b>.";
                $asunto="Bienen! | Vencimiento de Exámenes";
                $destinatario=$key->email;
                
            if ($hoy_c<=$fecha_vence_c) {
                
                //en caso de que falten dias para vencerse
                
                //a quien se envia.....
                //antes de enviar el correo se necesita saber si ya se ha enviado
                
                //echo $diff->days."---------";
                if (count($key->avisos)!=0) {

                    $cont=0;
                    $c=0;//cuenta si hubo envio de avisos hoy
                    # en caso de tener avisos
                    foreach ($key->avisos as $key2) {
                        if ($key2->pivot->id_aviso==$aviso->id and $key2->pivot->status=="Enviado") {
                            $cont++;
                        }
                        $created_at=substr($key2->pivot->created_at,0,10)."<br>";
                        //echo strcmp($created_at,$hoy)."<br>";
                        if ($key2->pivot->id_aviso==$aviso->id and strcmp($created_at,$hoy)==4) {

                            $c++;
                        }
                    }
                        //echo $diff->days."---------".$cont;
                    /*if($key->id==4){
                    echo $diff->days."---".$cont."----".$c."<br>";
                    }*/
                    if (($diff->days==30 || $diff->days<=10) && $c==0) {
                        # enviando el correo cuando le falten 30 o 10 dias para el vencimiento
                        $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                        });
                        //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                    }
                }else{
                    //considicionando para que envie el aviso cuando falten 30 dias o menos
                    //pero solo la primera vez cuando no tiene avisos
                    //echo $diff->days."---------";
                    /*if($key->id==4){
                    echo $diff->days."<br>";
                    }*/
                if($diff->days<=30){
                    //enviando correo si no tiene avisos registrados
                    $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                    });
                    //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                }
                }//fin de condicional si no tiene avisos registrados

                
            } else {
                /*if($key->id==4){
                    echo $diff->days."<br>";
                }*/
                //en el caso de que se paso la fecha de vencimiento
                if (count($key->avisos)!=0) {

                    $cont=0;
                    $c=0;//cuenta si hubo envio de avisos hoy
                    # en caso de tener avisos
                    foreach ($key->avisos as $key2) {
                        if ($key2->pivot->id_aviso==$aviso->id and $key2->pivot->status=="Enviado") {
                            $cont++;
                        }
                        $created_at=substr($key2->pivot->created_at,0,10)."<br>";
                        //echo strcmp($created_at,$hoy)."<br>";
                        if ($key2->pivot->id_aviso==$aviso->id and strcmp($created_at,$hoy)==4) {

                            $c++;
                        }
                    }
                        
                    
                    if (($diff->days==30 || $diff->days<=10) && $c==0) {
                        # enviando el correo cuando le falten 30 o 10 dias para el vencimiento
                        $mensaje=$aviso->mensaje."  Tienen ".$diff->days ." días vencido el exámen <b>".$key2->examen."</b>.";
                        $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                        });
                        //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                    }
                }else{
                    //considicionando para que envie el aviso cuando falten 30 dias o menos
                    //pero solo la primera vez cuando no tiene avisos
                        //echo $diff->days."---------";
                if($diff->days<=30){
                    $mensaje=$aviso->mensaje."  Tienen ".$diff->days ." días vencido el exámen <b>".$key2->examen."</b>.";
                    //enviando correo si no tiene avisos registrados
                    $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                    });
                    //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                }
                }//fin de condicional si no tiene avisos registrados
            }
            }//fin del foreach de examenes


            //---fin de envio de avisos por vecimiento de examenes
            //--- envio de avisos por vencimientos de examenes
            foreach ($key->cursos as $key2) {
                //echo $key2->pivot->fecha_vence."<br>";
                $fecha_vence=$key2->pivot->fecha_vence;
                $fecha_vence_c=strtotime($fecha_vence);
                # no ha pasado la fecha de vencimiento
                $date1 = new \DateTime($fecha_vence);
                $date2 = new \DateTime($hoy);
                $diff = $date1->diff($date2);
                /*if($key->id==4){
                    echo $diff->days."<br>";
                }*/
                $nombres=$key->nombres." ".$key->apellidos." RUT: ".$key->rut;
                //mensaje a enviar 
                $aviso=Avisos::where('motivo','Vencimiento de Cursos')->first();
                //dd($aviso);
                $mensaje=$aviso->mensaje."  Faltan ".$diff->days ." días para vencerse el curso <b>".$key2->curso."</b>.";
                $asunto="Bienen! | Vencimiento de Cursos";
                $destinatario=$key->email;
                
            if ($hoy_c<=$fecha_vence_c) {
                
                //en caso de que falten dias para vencerse
                
                //a quien se envia.....
                //antes de enviar el correo se necesita saber si ya se ha enviado
                
                //echo $diff->days."---------";
                if (count($key->avisos)!=0) {

                    $cont=0;
                    $c=0;//cuenta si hubo envio de avisos hoy
                    # en caso de tener avisos
                    foreach ($key->avisos as $key2) {
                        if ($key2->pivot->id_aviso==$aviso->id and $key2->pivot->status=="Enviado") {
                            $cont++;
                        }
                        $created_at=substr($key2->pivot->created_at,0,10)."<br>";
                        //echo strcmp($created_at,$hoy)."<br>";
                        if ($key2->pivot->id_aviso==$aviso->id and strcmp($created_at,$hoy)==4) {

                            $c++;
                        }
                    }
                        //echo $diff->days."---------".$cont;
                    /*if($key->id==4){
                    echo $diff->days."---".$cont."----".$c."<br>";
                    }*/
                    if (($diff->days==30 || $diff->days<=10) && $c==0) {
                        //echo "string";
                        # enviando el correo cuando le falten 30 o 10 dias para el vencimiento
                        $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                        });
                        //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                    }
                }else{
                    //considicionando para que envie el aviso cuando falten 30 dias o menos
                    //pero solo la primera vez cuando no tiene avisos
                    //echo $diff->days."---------";
                    /*if($key->id==4){
                    echo $diff->days."<br>";
                    }*/
                if($diff->days<=30){
                    //enviando correo si no tiene avisos registrados
                    $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                    });
                    //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                }
                }//fin de condicional si no tiene avisos registrados

                
            } else {
                /*if($key->id==4){
                    echo $diff->days."<br>";
                }*/
                //en el caso de que se paso la fecha de vencimiento
                if (count($key->avisos)!=0) {

                    $cont=0;
                    $c=0;//cuenta si hubo envio de avisos hoy
                    # en caso de tener avisos
                    foreach ($key->avisos as $key2) {
                        if ($key2->pivot->id_aviso==$aviso->id and $key2->pivot->status=="Enviado") {
                            $cont++;
                        }
                        $created_at=substr($key2->pivot->created_at,0,10)."<br>";
                        //echo strcmp($created_at,$hoy)."<br>";
                        if ($key2->pivot->id_aviso==$aviso->id and strcmp($created_at,$hoy)==4) {

                            $c++;
                        }
                    }
                        
                    
                    if (($diff->days==30 || $diff->days<=10) && $c==0) {
                        # enviando el correo cuando le falten 30 o 10 dias para el vencimiento
                        $mensaje=$aviso->mensaje."  Tienen ".$diff->days ." días vencido el curso <b>".$key2->curso."</b>.";
                        $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                        });
                        //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                    }
                }else{
                    //considicionando para que envie el aviso cuando falten 30 dias o menos
                    //pero solo la primera vez cuando no tiene avisos
                        //echo $diff->days."---------";
                if($diff->days<=30){
                    $mensaje=$aviso->mensaje."  Tienen ".$diff->days ." días vencido el curso <b>".$key2->examen."</b>.";
                    //enviando correo si no tiene avisos registrados
                    $r=Mail::send('email_avisos.aviso',
                        ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                        $m->from('bienen@eiche.cl', 'Bienen!');
                        $m->to($destinatario)->subject($asunto);
                    });
                    //registrando que se envió el correo
                        \DB::table('avisos_enviados')->insert([
                            'id_aviso' => $aviso->id,
                            'id_empleado' => $key->id,
                            'created_at' => $hoy
                        ]);
                }
                }//fin de condicional si no tiene avisos registrados
            }
            }//fin del foreach de cursos
            //fin de envio de avisos de cursos
            //dd("---------------");
        }
                //dd("----");

    }
    
}
