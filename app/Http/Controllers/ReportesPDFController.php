<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividades;
use App\Planificacion;
use PDF;

class ReportesPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function actividades(Request $request)
    {
        //$planificacion=Planificacion::where('semana',$request->semana)->groupby('semana')->first();
        //dd($planificacion);
        $act_mie=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area],['actividades.dia',"Mié"]])->get();
        $act_jue=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area],['actividades.dia',"Jue"]])->get();
        $act_vie=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area],['actividades.dia',"Vie"]])->get();
        $act_sab=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area],['actividades.dia',"Sáb"]])->get();
        $act_dom=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area],['actividades.dia',"Dom"]])->get();
        $act_lun=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area],['actividades.dia',"Lun"]])->get();
        $act_mar=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area],['actividades.dia',"Mar"]])->get();
        //$planificacion1=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                //->where(['actividades.id_planificacion',$planificacion->id])->first();
        //dd($planificacion1);
        $total_mie=count($act_mie);
        $total_jue=count($act_jue);
        $total_vie=count($act_vie);
        $total_sab=count($act_sab);
        $total_dom=count($act_dom);
        $total_lun=count($act_lun);
        $total_mar=count($act_mar);

        //dd($total);
        $pdf = PDF::loadView('reportes/pdf/actividades', array('act_mie'=>$act_mie,'act_jue'=>$act_jue,'act_vie'=>$act_vie,'act_sab'=>$act_sab,'act_dom'=>$act_dom,'act_lun'=>$act_lun,'act_mar'=>$act_mar,'total_mie'=>$total_mie,'total_jue'=>$total_jue,'total_vie'=>$total_vie,'total_sab'=>$total_sab,'total_dom'=>$total_dom,'total_lun'=>$total_lun,'total_mar'=>$total_mar));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('Actividades.pdf');

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
