<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\ActividadesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use PDF;
class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
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
        if($request->tipo_reporte=="Excel"){
        	ActividadesExport::datos($request);
            return Excel::download(new ActividadesExport, 'Actividades.xlsx');
        } else if ($request->tipo_reporte=="PDF"){

            if ($request->planificacion!=0) {
                $condicion_plan=" && planificacion.semana=".$request->planificacion." ";
                //dd('Número de la semana',$condicion_plan);
            } else {
                //dd('Todos PLanificación');
                $condicion_plan="";
            }

            if ($request->gerencias!=0) {
                $condicion_geren=" && gerencias.id=".$request->gerencias." ";
            } else {
                //dd('Todos Gerencia');
                $condicion_geren="";
            }

            if ($request->areas!=0) {
                $condicion_areas=" && areas.id=".$request->areas." ";
            } else {
                //dd('Todos Áreas');
                $condicion_areas="";
            }

            if ($request->tipo!="0") {
                $condicion_tipo=" && actividades.tipo='".$request->tipo."' ";
            } else {
                //dd('Todos Tipo',$request->tipo);
                $condicion_tipo="";
            }

            if ($request->realizadas!="0") {
                $condicion_realizadas=" && actividades.realizada='".$request->realizadas."' ";
            } else {
                $condicion_realizadas="";
                //dd('Todos Días',$condicion_realizadas);
            }

            if ($request->dias!="0") {
                $condicion_dias=" && actividades.dia='".$request->dias."' ";
                //dd('Todos Días 11',$condicion_dias);
            } else {
                $condicion_dias="";
                //dd('Todos Días 00',$condicion_dias);
            }

            $sql="SELECT planificacion.elaborado,planificacion.aprobado,planificacion.num_contrato,planificacion.fechas,planificacion.semana,planificacion.revision,gerencias.gerencia,planificacion.id FROM planificacion,actividades,gerencias,areas WHERE planificacion.id_gerencia = gerencias.id && actividades.id_area=areas.id && actividades.id_planificacion=planificacion.id ".$condicion_plan." ".$condicion_geren." ".$condicion_areas." ".$condicion_realizadas." ".$condicion_tipo." ".$condicion_dias." group by planificacion.id";
            //dd($sql);
            $resultado=\DB::select($sql);
            //dd($resultado);
            /*como la consulta o acepta eloquent en el archivo blade.... 
            entonces crearemos un array para las planificaciones y actividades*/
            $planificacion=array();
            $actividades=array();
            $id_planificacion=array();
            $i=0;
            for ($i=0; $i < count($resultado); $i++) { 
                    
                $planificacion[$i][0]=$resultado[$i]->elaborado;
                $planificacion[$i][1]=$resultado[$i]->aprobado;
                $planificacion[$i][2]=$resultado[$i]->num_contrato;
                $planificacion[$i][3]=$resultado[$i]->fechas;
                $planificacion[$i][4]=$resultado[$i]->semana;
                $planificacion[$i][5]=$resultado[$i]->revision;
                $planificacion[$i][6]=$resultado[$i]->gerencia;
                $id_planificacion[$i]=$resultado[$i]->id;
            }
        
            $areas=array();
            $cant_act=array();//cantidad de actividades por planificacion
            $j=0;
            for ($i=0; $i < count($id_planificacion); $i++) { 
                $sql2="SELECT actividades.task,actividades.descripcion,actividades.turno,actividades.fecha_vencimiento,actividades.duracion_pro,actividades.cant_personas,actividades.duracion_real,actividades.dia,actividades.tipo,actividades.realizada,actividades.observacion1,actividades.observacion2,areas.area FROM planificacion,actividades,gerencias,areas WHERE planificacion.id=".$id_planificacion[$i]." && planificacion.id_gerencia = gerencias.id && actividades.id_area=areas.id && actividades.id_planificacion=planificacion.id ".$condicion_plan." ".$condicion_geren." ".$condicion_areas." ".$condicion_realizadas." ".$condicion_tipo." ".$condicion_dias."";

                $resultado2=\DB::select($sql2);
                $cant_act[$i]=0;
                for ($j=0; $j < count($resultado2); $j++) { 
                    
                    $actividades[$i][$j][0]=$resultado2[$j]->task;
                    $actividades[$i][$j][1]=$resultado2[$j]->descripcion;
                    $actividades[$i][$j][2]=$resultado2[$j]->turno;
                    $actividades[$i][$j][3]=$resultado2[$j]->fecha_vencimiento;
                    $actividades[$i][$j][4]=$resultado2[$j]->duracion_pro;
                    $actividades[$i][$j][5]=$resultado2[$j]->cant_personas;
                    $actividades[$i][$j][6]=$resultado2[$j]->duracion_real;
                    $actividades[$i][$j][7]=$resultado2[$j]->dia;
                    $actividades[$i][$j][8]=$resultado2[$j]->tipo;
                    $actividades[$i][$j][9]=$resultado2[$j]->realizada;
                    $actividades[$i][$j][10]=$resultado2[$j]->observacion1;
                    $actividades[$i][$j][11]=$resultado2[$j]->observacion2;
                    $actividades[$i][$j][12]=$resultado2[$j]->area;
                    $areas[$i]=$resultado2[$j]->area;
                    $cant_act[$i]=$cant_act[$i]+1;//cantidad de actividades por por planificacion
                    
                }
            }
            //dd($actividades);
            if (count($resultado)==0) {
                flash('<i class="icon-circle-check"></i> ¡No exiten datos para generar reporte PDF!')->error()->important();    
                return redirect()->to('reportes');
            } else {
                $pdf = PDF::loadView('reportes/pdf/PDF', array('resultado'=>$resultado, 'planificacion'=>$planificacion, 'cant_act'=>$cant_act,'areas'=>$areas,'actividades'=>$actividades));
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte_PDF.pdf');

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
