<?php

namespace App\Exports;

use App\Actividades;
use App\Planificacion;
use App\Gerencias;
use App\Areas;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Files\NewExcelFile;

class ActividadesCronoExport implements FromView
{
	public $planificacion="";
	public $gerencias;
	public $areas="";

    
	public function datos(Request $request)
	{
        //dd($request->all());
		//$obj=new ActividadesExport();
		$this->planificacion=$request->planificacion;
		$this->gerencias=$request->gerencias;
		$this->areas=$request->areas;
	}
    
    public function view(): View
    {
    	//dd($this->departamentos);

            
            $gerencia=Gerencias::where('gerencia',$this->gerencias)->first();
            $areas=Areas::find($this->areas);
            $planificacion=Planificacion::where('semana',$this->planificacion)->where('id_gerencia',$gerencia->id)->first();
            $actividades=Actividades::where('id_planificacion', $planificacion->id)->where('id_area', $this->areas)->get();
            
            
            


            // ACTIVIDADES REALIZADAS
            $resultado=count($actividades);
            $cant_act=$resultado;
            $areas=$areas->area;

    		
            $total_pm01=0;
            $acti_Nrealizadas_PM01=0;
            $acti_realizadas_PM01=0;

            $total_pm02=0;
            $acti_Nrealizadas_PM02=0;
            $acti_realizadas_PM02=0;

            $total_pm03=0;
            $acti_Nrealizadas_PM03=0;
            $acti_realizadas_PM03=0;

            $total_pm04=0;
            $acti_Nrealizadas_PM04=0;
            $acti_realizadas_PM04=0;




                for ($i=0; $i < count($actividades); $i++) { 

                    if ($actividades[$i]->tipo == "PM01") {
                        $total_pm01++;
                        if ($actividades[$i]->realizada == 'No') {
                            $acti_Nrealizadas_PM01++;
                        }else{
                            $acti_realizadas_PM01++;
                        }
                    }elseif($actividades[$i]->tipo == "PM02"){
                        $total_pm02++;
                        if ($actividades[$i]->realizada == 'No') {
                            $acti_Nrealizadas_PM02++;
                        }else{
                            $acti_realizadas_PM02++;
                        }
                    }elseif($actividades[$i]->tipo == "PM03"){
                        $total_pm03++;
                        if ($actividades[$i]->realizada == 'No') {
                            $acti_Nrealizadas_PM03++;
                        }else{
                            $acti_realizadas_PM03++;
                        }
                    }else{
                        $total_pm04++;
                        if ($actividades[$i]->realizada == 'No') {
                            $acti_Nrealizadas_PM04++;
                        }else{
                            $acti_realizadas_PM04++;
                        }
                    }
                }

                //DURACION DE LAS ACTIVIDADES

                $duracion_pro_pm01=0;
                $duracion_real_pm01=0;
                $duracion_pro_pm02=0;
                $duracion_real_pm02=0;
                $duracion_pro_pm03=0;
                $duracion_real_pm03=0;
                $duracion_pro_pm04=0;
                $duracion_real_pm04=0;

                for ($i=0; $i < count($actividades); $i++) { 

                    if ($actividades[$i]->tipo == "PM01") {

                        if ($actividades[$i]->duracion_pro > 0) {
                            $duracion_pro_pm01=$duracion_pro_pm01+$actividades[$i]->duracion_pro;
                        }

                        if ($actividades[$i]->duracion_real > 0) {
                            $duracion_real_pm01=$duracion_real_pm01+$actividades[$i]->duracion_real;
                        }

                    }elseif($actividades[$i]->tipo == "PM02"){
                        if ($actividades[$i]->duracion_pro > 0) {
                            $duracion_pro_pm02=$duracion_pro_pm02+$actividades[$i]->duracion_pro;
                        }

                        if ($actividades[$i]->duracion_real > 0) {
                            $duracion_real_pm02=$duracion_real_pm02+$actividades[$i]->duracion_real;
                        }
                       
                    }elseif($actividades[$i]->tipo == "PM03"){
                        if ($actividades[$i]->duracion_pro > 0) {
                            $duracion_pro_pm03=$duracion_pro_pm03+$actividades[$i]->duracion_pro;
                        }

                        if ($actividades[$i]->duracion_real > 0) {
                            $duracion_real_pm03=$duracion_real_pm03+$actividades[$i]->duracion_real;
                        }
                        
                    }else{
                        if ($actividades[$i]->duracion_pro > 0) {
                            $duracion_pro_pm04=$duracion_pro_pm04+$actividades[$i]->duracion_pro;
                        }

                        if ($actividades[$i]->duracion_real > 0) {
                            $duracion_real_pm04=$duracion_real_pm04+$actividades[$i]->duracion_real;
                        }
                    }
                }

        //-----------------------------------------------------
 		//dd($resultado);

        if ($resultado==0) {
        	//dd("---------------");
        	flash('<i class="icon-circle-check"></i> No exiten actividades registradas en la planificacion seleccionada!')->warning()->important();
                
            return redirect()->back();
        } else {
        //dd($resultado."---------------".$areas);
        return view('reportes.crono.cronoEXCEL', ['resultado' => $resultado,
                    'planificacion' => $planificacion,
                    'cant_act' =>$cant_act, 
                    'areas' => $areas, 
                    'actividades' =>$actividades,
                    'total_pm01' => $total_pm01,
                    'acti_Nrealizadas_PM01' => $acti_Nrealizadas_PM01,
                    'acti_realizadas_PM01' => $acti_realizadas_PM01,
                    'total_pm02' => $total_pm02,
                    'acti_Nrealizadas_PM02' => $acti_Nrealizadas_PM02,
                    'acti_realizadas_PM02' => $acti_realizadas_PM02,
                    'total_pm03' => $total_pm03,
                    'acti_Nrealizadas_PM03' => $acti_Nrealizadas_PM03,
                    'acti_realizadas_PM03' => $acti_realizadas_PM03,
                    'total_pm04' => $total_pm04,
                    'acti_Nrealizadas_PM04' => $acti_Nrealizadas_PM04,
                    'acti_realizadas_PM04' => $acti_realizadas_PM04,
                    'duracion_pro_pm01' => $duracion_pro_pm01,
                    'duracion_real_pm01' => $duracion_real_pm01,
                    'duracion_pro_pm02' => $duracion_pro_pm02,
                    'duracion_real_pm02' => $duracion_real_pm02,
                    'duracion_pro_pm03' => $duracion_pro_pm03,
                    'duracion_real_pm03' => $duracion_real_pm03,
                    'duracion_pro_pm04' => $duracion_pro_pm04,
                    'duracion_real_pm04' => $duracion_real_pm04]);
        }
        
    }
}