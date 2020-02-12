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
    /*protected function conexion()
    {
        $connected = @fopen("http://www.google.com:80/","r"); 

        if($connected) { return true; } else { return false; }
        
    }*/
    public function index()
    {
         /*if ($this->conexion()) {
             dd("conectado");
         } else {
             dd("no conectado");
         }*/
         //$this->envio_avisos();
        $novedades=Novedades::where('id','<>',0)->orderBy('created_at','DESC')->get();

        $fecha1=date("Y-m-d");
        $fecha2=date("Y-m-d",strtotime($fecha1."- 1 days"));
        $fecha3=date("Y-m-d",strtotime($fecha1."- 2 days"));
        $fecha4=date("Y-m-d",strtotime($fecha1."- 3 days"));

        $fechaNove=Novedades::where('fecha',[$fecha1,$fecha2,$fecha3,$fecha4])->groupBy('fecha')->get();
        // dd(count($fechaNove));
        // dd($fecha1, $fecha2, $fecha3, $fecha4);
        $muro=Muro::all();
        if (\Auth::User()->tipo_user=="Admin") {
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
            return view('home', compact('empleados','areas','hallado','lista_empleado','actividades','hoy','id_planificacion1','id_planificacion2','notas','num_notas','actividadesProceso','muro','novedades','fechaNove','fecha2','fecha3','fecha4'));
        } elseif (\Auth::User()->tipo_user=="Empleado") {
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

            return view('home', compact('empleados','actividades','areas','planificacion','notas','num_notas','actividadesProceso','muro','novedades','fechaNove','fecha2','fecha3','fecha4'));
        } elseif (\Auth::User()->tipo_user=="Admin de Empleado") {
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

            $empleado=Empleados::where('id_usuario', \Auth::User()->id)->first();
            $actividadesProceso=ActividadesProceso::where('id_empleado',$empleado->id)->get();

            return view('home', compact('empleados','actividades','areas','planificacion','notas','num_notas','actividadesProceso','muro','novedades','fechaNove','fecha2','fecha3','fecha4'));
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
        $empleados=Empleados::where('id',4)->get();
        //consultando fechas de vencimiento de licencias
        foreach ($empleados as $key) {
            $fechav_licn=$key->datoslaborales->fechav_licn;
            $fechav_licn_c=strtotime($fechav_licn);
            if ($hoy_c<$fechav_licn_c) {
                # no ha pasado la fecha de vencimiento
                $date1 = new \DateTime($fechav_licn);
                $date2 = new \DateTime($hoy);
                $diff = $date1->diff($date2);
                
                
                //a quien se envia.....
                $nombres=$key->nombres." ".$key->apellidos." RUT: ".$key->rut;
                //mensaje a enviar 
                $aviso=Avisos::where('motivo','Vencimiento de Licencia')->first();
                //dd($aviso);
                $mensaje=$aviso->mensaje."  Faltan ".$diff->days ."days para vencerse la licencia.";
                $asunto="Bienen! | Vencimiento de Licencia";
                $destinatario=$key->email;
                //enviando correo
                $r=Mail::send('email_avisos.aviso',
                    ['nombres'=>$nombres, 'mensaje' => $mensaje], function ($m) use ($nombres,$asunto,$destinatario,$mensaje) {
                    $m->from('verticallavictoria@gmail.com', 'Bienen!');
                    $m->to($destinatario)->subject($asunto);
                });
            } else {
                $date1 = new \DateTime($fechav_licn);
                $date2 = new \DateTime($hoy);
                $diff = $date1->diff($date2);
                // will output 2 days
                
                dd("ya paso la fecha de vencimiento han transcurrido ".$diff->days . ' days ');
            }
            

            
        }

        /*$nombres=$user->name;
            $codigo=$this->generarCodigo();
            $nueva_clave=\Hash::make($codigo);
            $user->password=$nueva_clave;
            $user->save();
            ini_set('max_execution_time', 360); //3 minutes 
            $asunto="Bienen! | Recuperación de contraseña";
                $destinatario=$request->email;
                $r=Mail::send('auth.passwords.recuperar_clave',
                    ['nombres'=>$nombres, 'codigo' => $codigo], function ($m) use ($nombres,$asunto,$destinatario,$codigo) {
                    $m->from('info@fcrealvictoria.com.ve', 'Bienen!');
                    $m->to($destinatario)->subject($asunto);
                });*/
    }
}
