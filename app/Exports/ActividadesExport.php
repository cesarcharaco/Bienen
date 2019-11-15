<?php

namespace App\Exports;

use App\Actividades;
use App\Planificacion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ActividadesExport implements FromView
{
    public function view(): View
    {
    	$fecha=date('Y-m-d');
        $num_dia=num_dia($fecha);
        $num_semana_actual=date('W', strtotime($fecha));
        //dd($num_semana_actual);
        if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
        }
        /*como la consulta o acepta eloquent en el archivo blade.... 
        entonces crearemos un array para las planificaciones y actividades*/
        $planificacion=array();
        $actividades=array();
        $id_planificacion=array();
        
        $plan=Planificacion::where('semana',$num_semana_actual)->get();
        $i=0;
        foreach ($plan as $key) {
        	$planificacion[$i][0]=$key->elaborado;
        	$planificacion[$i][1]=$key->aprobado;
        	$planificacion[$i][2]=$key->num_contrato;
        	$planificacion[$i][3]=$key->fechas;
        	$planificacion[$i][4]=$key->semana;
        	$planificacion[$i][5]=$key->revision;
        	$planificacion[$i][6]=$key->gerencias->gerencia;
        	$id_planificacion[$i]=$key->id;
        	$i++;

        }
        
        $areas=array();
        $cant_act=array();//cantidad de actividades por planificacion
        $j=0;
        for ($i=0; $i < count($id_planificacion); $i++) { 
        	$act=Actividades::where('id_planificacion',$id_planificacion[$i])->get();
        	$cant_act[$i]=0;
        	foreach ($act as $key) {
        		$actividades[$i][$j][0]=$key->task;
        		$actividades[$i][$j][1]=$key->descripcion;
        		$actividades[$i][$j][2]=$key->turno;
        		$actividades[$i][$j][3]=$key->fecha_vencimiento;
        		$actividades[$i][$j][4]=$key->duracion_pro;
        		$actividades[$i][$j][5]=$key->cant_personas;
        		$actividades[$i][$j][6]=$key->duracion_real;
        		$actividades[$i][$j][7]=$key->dia;
        		$actividades[$i][$j][8]=$key->tipo;
        		$actividades[$i][$j][9]=$key->realizada;
        		$actividades[$i][$j][10]=$key->observacion1;
        		$actividades[$i][$j][11]=$key->observacion2;
        		$actividades[$i][$j][12]=$key->areas->areas;
        		$areas[$i]=$key->areas->area;
        		$cant_act[$i]=$cant_act[$i]+1;//cantidad de actividades por por planificacion
        		$j++;
        	}
        }

        //-----------------------------------------------------
        return view('reportes.excel.actividades', [
            'planificacion' => $planificacion,'actividades' => $actividades,'areas' => $areas,'cant_act' => $cant_act
        ]);
    }
}