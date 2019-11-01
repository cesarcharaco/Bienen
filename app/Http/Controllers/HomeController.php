<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
use App\Areas;
use App\Actividades;
use App\Planificacion;
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
    public function index()
    {
        if (\Auth::User()->tipo_user=="Admin") {
            # code...
            $lista_empleado=Empleados::all();
            $empleados=Empleados::all();
            $areas=Areas::all();
            $hallado=0;
            $actividades=Actividades::all();
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
            return view('home', compact('empleados','areas','hallado','lista_empleado','actividades','hoy','id_planificacion1','id_planificacion2'));
        } elseif (\Auth::User()->tipo_user=="Empleado") {

            $empleados = Empleados::where('empleados.email',\Auth::User()->email)->get();

            return view('home', compact('empleados'));
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
        return view('estadisticas');
    }
}
