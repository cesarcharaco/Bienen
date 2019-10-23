<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
use App\Areas;

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
        $empleados=Empleados::all();
        $areas=Areas::all();
        $hallado=0;
        return view('home', compact('empleados','areas','hallado'));
    }

    public function buscar(Request $request) 
    {

    }

    public function dashboardStadistic()
    {
        return view('estadisticas');
    }
}
