<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
use App\Areas;
use App\Actividades;

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
        $lista_empleado=Empleados::all();
        $empleados=Empleados::all();
        $areas=Areas::all();
        $hallado=0;
        $actividades=Actividades::all();
        $hoy=date('Y-m-d');
        return view('home', compact('empleados','areas','hallado','lista_empleado','actividades','hoy'));
    }

    public function buscar(Request $request) 
    {
        //dd('hola');
        $hallado=1;
        $areas=Areas::all();
        $lista_empleado=Empleados::all();

        if($request->tipo_busqueda=="empleado") {
            $empleados = Empleados::where('empleados.id', [$request->empleado])->get();
        } else if($request->tipo_busqueda=="area"){
            $empleados = Empleados::where('empleados.id_area', [$request->area])->get();
        }
        
        return view('home', compact('empleados','hallado','areas','lista_empleado'));
    }

    public function dashboardStadistic()
    {
        return view('estadisticas');
    }
}
