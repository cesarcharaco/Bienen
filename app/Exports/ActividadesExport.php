<?php

namespace App\Exports;

use App\Actividades;
use App\Planificacion;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ActividadesExport implements FromView
{
	public $planificacion="";
	public $gerencias="";
	public $areas="";
	public $realizadas="";
	public $tipo="";
	public $dias="";
	static function datos(Request $request)
	{
		$obj=new ActividadesExport();
		$obj->planificacion=$request->planificacion;
		$obj->gerencias=$request->gerencias;
		$obj->areas=$request->areas;
		$obj->realizadas=$request->realizadas;
		$obj->tipo=$request->tipo;
		$obj->dias=$request->dias;
	}
    public function view(): View
    {
    	
    	if ($this->planificacion!=0) {
                $condicion_plan=" && planificacion.semana=".$this->planificacion." ";
                //dd('Número de la semana',$condicion_plan);
            } else {
                //dd('Todos PLanificación');
                $condicion_plan="";
            }

            if ($this->gerencias!=0) {
                $condicion_geren=" && gerencias.id=".$this->gerencias." ";
            } else {
                //dd('Todos Gerencia');
                $condicion_geren="";
            }

            if ($this->areas!=0) {
                $condicion_areas=" && areas.id=".$this->areas." ";
            } else {
                //dd('Todos Áreas');
                $condicion_areas="";
            }

            if ($this->tipo!=0) {
                $condicion_tipo=" && actividades.tipo='".$this->tipo."' ";
            } else {
                //dd('Todos Tipo');
                $condicion_tipo="";
            }

            if ($this->realizadas!=0) {
                $condicion_realizadas=" && actividades.realizada=".$this->realizadas." ";
            } else {
                $condicion_realizadas="";
                //dd('Todos Días',$condicion_realizadas);
            }

            if ($this->dias!=0) {
                $condicion_dias=" && actividades.dia=".$this->dias." ";
            } else {
                //dd('Todos Días',$condicion_dias);
                $condicion_dias="";
            }

            $sql="SELECT planificacion.elaborado,planificacion.aprobado,planificacion.num_contrato,planificacion.fechas,planificacion.semana,planificacion.revision,gerencias.gerencia,planificacion.id FROM planificacion,actividades,gerencias,areas WHERE planificacion.id_gerencia = gerencias.id && actividades.id_area=areas.id && actividades.id_planificacion=planificacion.id ".$condicion_plan." ".$condicion_geren." ".$condicion_areas." ".$condicion_realizadas." ".$condicion_tipo." ".$condicion_dias."";

            $resultado=\DB::select($sql);
            //dd($resultado);
       //-----------------------------------------
    	/*$fecha=date('Y-m-d');
        $num_dia=num_dia($fecha);
        $num_semana_actual=date('W', strtotime($fecha));
        //dd($num_semana_actual);
        if ($num_dia==1 || $num_dia==2) {
                $num_semana_actual--;
        }*/
        /*como la consulta o acepta eloquent en el archivo blade.... 
        entonces crearemos un array para las planificaciones y actividades*/
        $planificacion=array();
        $actividades=array();
        $id_planificacion=array();
        
        //$plan=Planificacion::where('semana',$num_semana_actual)->get();
        $i=0;
        /*foreach ($plan as $key) {
        	$planificacion[$i][0]=$key->elaborado;
        	$planificacion[$i][1]=$key->aprobado;
        	$planificacion[$i][2]=$key->num_contrato;
        	$planificacion[$i][3]=$key->fechas;
        	$planificacion[$i][4]=$key->semana;
        	$planificacion[$i][5]=$key->revision;
        	$planificacion[$i][6]=$key->gerencias->gerencia;
        	$id_planificacion[$i]=$key->id;
        	$i++;

        }*/
        
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
        /*for ($i=0; $i < count($id_planificacion); $i++) { 
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
        }*/

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
        //-----------------------------------------------------
 		//dd($actividades);       
        if (count($resultado)==0) {
        	dd("dfvgbm,");
        	flash('<i class="icon-circle-check"></i> No exiten planificaciones registradas!')->warning()->important();
                
            return redirect()->to('planificacion/create');
        } else {
        
        return view('reportes.excel.actividades', [
            'planificacion' => $planificacion,'actividades' => $actividades,'areas' => $areas,'cant_act' => $cant_act
        ]);
        }
        
    }
}