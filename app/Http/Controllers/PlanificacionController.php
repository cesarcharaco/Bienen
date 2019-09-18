<?php

namespace App\Http\Controllers;

use App\Planificacion;
use Illuminate\Http\Request;
use App\Actividades;
use App\Gerencias;
use App\Areas;
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
        return view('planificacion.index',compact('gerencias','areas','encontrado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fechaHoy = date('Y-m-d');
        $planificacion = Planificacion::all();
        $areas=Areas::all();
        return view("planificacion.create", compact('fechaHoy','planificacion','areas'));
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
        }
        
        //dd($planificaciones);

        return view('planificacion.index',compact('gerencias','areas','planificaciones','id_area','encontrado'));
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
