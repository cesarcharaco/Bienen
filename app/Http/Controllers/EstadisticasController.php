<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gerencias;
use App\Planificacion;
use App\Actividades;
use App\Areas;
class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerencias = Gerencias::all();
        $planificacion=planificacion::where('id','<>',0)->groupBy('semana')->get();
        return view('estadisticas.index', compact('gerencias','planificacion'));
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
        if($request->areas!=""){
            $area=Areas::where('area',$request->areas)->first();
        }
        //dd($area->id);
        //$request->all();
        //------- obteniendo para la gerencia 1 - 2---------------
        $planificacion=Planificacion::where('id_gerencia',1)->where('semana',$request->planificacion)->first();
        $planificacion2=Planificacion::where('id_gerencia',2)->where('semana',$request->planificacion)->first();
        if($request->gerencias=="NPI") {
            //dd('Gerencia NPI seleccionada');
            if ($request->areas=="todas") {
                //dd('Gerencia NPI Todas las áreas seleccionada');
                $ews[] = array();
                $pcda[] = array();
                $agua[] = array();

                //------------EWS----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM01')->count();
                $total_pm01_ews= $total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM01')->where('realizada','No')->count();
                $ews[0]=$total_pm01;
                $ews[1]=$total_pm01_si;
                $ews[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM02')->count();
                $total_pm02_ews= $total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM02')->where('realizada','No')->count();
                $ews[3]=$total_pm02;
                $ews[4]=$total_pm02_si;
                $ews[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM03')->count();
                $total_pm03_ews= $total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM03')->where('realizada','No')->count();
                $ews[6]=$total_pm03;
                $ews[7]=$total_pm03_si;
                $ews[8]=$total_pm03_no;

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('tipo','PM04')->where('realizada','No')->count();
                $ews[9]=$total_pm04;
                $ews[10]=$total_pm04_si;
                $ews[11]=$total_pm04_no;*/
            //---------FIN DE EWS------------
            //------------Planta Cero----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM01')->count();
                $total_pm01_planta=$total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM01')->where('realizada','No')->count();
                $pcda[0]=$total_pm01;
                $pcda[1]=$total_pm01_si;
                $pcda[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM02')->count();
                $total_pm02_planta=$total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM02')->where('realizada','No')->count();
                $pcda[3]=$total_pm02;
                $pcda[4]=$total_pm02_si;
                $pcda[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM03')->count();
                $total_pm03_planta=$total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM03')->where('realizada','No')->count();
                $pcda[6]=$total_pm03;
                $pcda[7]=$total_pm03_si;
                $pcda[8]=$total_pm03_no;

                //dd($pcda[0],$pcda[1],$pcda[2],$pcda[3],$pcda[4],$pcda[5],$pcda[6],$pcda[7],$pcda[8]);

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('tipo','PM04')->where('realizada','No')->count();
                $pcda[9]=$total_pm04;
                $pcda[10]=$total_pm04_si;
                $pcda[11]=$total_pm04_no;*/
            //---------FIN DE Planta Cero------------
            //------------Agua y tranque----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM01')->count();
                $total_pm01_agua=$total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM01')->where('realizada','No')->count();
                $agua[0]=$total_pm01;
                $agua[1]=$total_pm01_si;
                $agua[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM02')->count();
                $total_pm02_agua=$total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM02')->where('realizada','No')->count();
                $agua[3]=$total_pm02;
                $agua[4]=$total_pm02_si;
                $agua[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM03')->count();
                $total_pm03_agua=$total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM03')->where('realizada','No')->count();
                $agua[6]=$total_pm03;
                $agua[7]=$total_pm03_si;
                $agua[8]=$total_pm03_no;

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',3)->where('tipo','PM04')->where('realizada','No')->count();
                $agua[9]=$total_pm04;
                $agua[10]=$total_pm04_si;
                $agua[11]=$total_pm04_no;*/
            //---------FIN DE AGUA Y TRANQUE------------
                //--------------------totales de NPI---------------
                $pm01_si_g1=$ews[1]+$pcda[1]+$agua[1];//total de pm01_si en NPI
                $pm01_no_g1=$ews[2]+$pcda[2]+$agua[2];//total de pm01_no en NPI

                $pm02_si_g1=$ews[4]+$pcda[4]+$agua[4];//total de pm02_si en NPI
                $pm02_no_g1=$ews[5]+$pcda[5]+$agua[5];//total de pm02_no en NPI

                $pm03_si_g1=$ews[7]+$pcda[7]+$agua[7];//total de pm03_si en NPI
                $pm03_no_g1=$ews[8]+$pcda[8]+$agua[8];//total de pm03_no en NPI

                $pm01_g1=$ews[0]+$pcda[0]+$agua[0];//total de pm01 en NPI
                $pm02_g1=$ews[3]+$pcda[3]+$agua[3];//total de pm02 en NPI
                $pm03_g1=$ews[6]+$pcda[6]+$agua[6];//total de pm03 en NPI

                //CÓDIGO DE LAS GRÁFICAS//
                $graf_pm02_g1 = app()->chartjs
                ->name('pieChartTest6')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Realizadas: ', 'No Realizadas: '])
                ->datasets([
                    [
                        'backgroundColor' => ['#BDBDBD', '#D7CCC8'],
                        'hoverBackgroundColor' => ['#BDBDBD', '#D7CCC8'],
                        'data' => [$pm02_si_g1, $pm02_no_g1]
                    ]
                ])
                ->options([]);

                $graf_act_pm02_vs_act_pm03_g1 = app()->chartjs
                ->name('graf_act_pm02_vs_act_pm03_g1')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['TOTAL PM02', 'TOTAL PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#48C9A9','#EF5350'],
                        'data' => [$pm02_g1, $pm03_g1]
                    ]
                ])
                ->options([]);

                $graf_total_act_g1 = app()->chartjs
                ->name('graf_total_act_g1')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$pm01_g1,$pm02_g1, $pm03_g1]
                    ]
                ])
                ->options([]);

                $graf_total_ews= app()->chartjs
                ->name('graf_total_ews')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_ews,$total_pm02_ews, $total_pm03_ews]
                    ]
                ])
                ->options([]);

                $graf_total_planta= app()->chartjs
                ->name('graf_total_planta')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_planta,$total_pm02_planta, $total_pm03_planta]
                    ]
                ])
                ->options([]);

                $graf_total_agua= app()->chartjs
                ->name('graf_total_agua')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_agua,$total_pm02_agua, $total_pm03_agua]
                    ]
                ])
                ->options([]);

                return view('estadisticas.show', compact('request','planificacion','ews','pcda','agua','pm02_si_g1','pm02_no_g1','pm02_g1','pm03_g1','pm01_si_g1','pm01_no_g1','pm02_si_g1','pm02_no_g1','pm03_si_g1','pm03_no_g1','graf_pm02_g1','graf_act_pm02_vs_act_pm03_g1','graf_total_act_g1','graf_total_ews','graf_total_planta','graf_total_agua'));
            } else{
                //dd($request->all());
                //dd('Gerencia NPI área XXX');
                $area=Areas::where('area',$request->areas)->first();
                $gerencias=Gerencias::where('gerencia',$request->gerencias)->first();
                //dd($gerencias->id);
                $planificacion_form=Planificacion::where('id_gerencia',$gerencias->id)->where('semana',$request->planificacion)->first();

                $count_area[] = array();
                //--------------------------------------
                //------------ÁREA----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM01')->count();
                $total_pm01_area= $total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM01')->where('realizada','No')->count();
                $count_area[0]=$total_pm01;
                $count_area[1]=$total_pm01_si;
                $count_area[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM02')->count();
                $total_pm02_area= $total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM02')->where('realizada','No')->count();
                $count_area[3]=$total_pm02;
                $count_area[4]=$total_pm02_si;
                $count_area[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM03')->count();
                $total_pm03_area= $total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM03')->where('realizada','No')->count();
                $count_area[6]=$total_pm03;
                $count_area[7]=$total_pm03_si;
                $count_area[8]=$total_pm03_no;

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',$request->area)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',$request->area)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',$request->area)->where('tipo','PM04')->where('realizada','No')->count();
                $count_area[9]=$total_pm04;
                $count_area[10]=$total_pm04_si;
                $count_area[11]=$total_pm04_no;*/
            //---------FIN DE ÁREA------------
                $pm02_g1=$count_area[3];//total de pm02 en NPI
                $pm03_g1=$count_area[6];//total de pm03 en NPI

                //dd($count_area[1],$count_area[2],$count_area[3],$count_area[4],$count_area[5],$count_area[6],$count_area[7],$count_area[8]);

                //CÓDIGO DE LAS GRÁFICAS//
                $graf_act_pm02_vs_act_pm03_g1 = app()->chartjs
                ->name('graf_act_pm02_vs_act_pm03_g1')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['TOTAL PM02', 'TOTAL PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#48C9A9','#EF5350'],
                        'data' => [54, 33]
                    ]
                ])
                ->options([]);

                $graf_total_act_g1 = app()->chartjs
                ->name('graf_total_act_g1')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [12,33, 43]
                    ]
                ])
                ->options([]);

                $graf_total= app()->chartjs
                ->name('graf_total')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_area,$total_pm02_area,$total_pm03_area]
                    ]
                ])
                ->options([]);

                $gerencia = $request->gerencias;
                $area = $request->areas;

                return view('estadisticas.area', compact('gerencia','area','planificacion','count_area','graf_act_pm02_vs_act_pm03_g1','graf_total_act_g1','graf_total','graf_hh_1','graf_hh_2','graf_hh_3'));

            }
            
        } else if ($request->gerencias=="CHO") {
            //dd('Gerencia CHO seleccionada');
            if ($request->areas=="todas") {
                //dd('Gerencia CHO Todas las áreas seleccionada');
                $filtro[] = array();
                $ect[] = array();
                $colorados[] = array();
                //------------FILTRO Y PUERTO----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM01')->count();
                $total_pm01_filtro=$total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM01')->where('realizada','No')->count();
                $filtro[0]=$total_pm01;
                $filtro[1]=$total_pm01_si;
                $filtro[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM02')->count();
                $total_pm02_filtro=$total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM02')->where('realizada','No')->count();
                $filtro[3]=$total_pm02;
                $filtro[4]=$total_pm02_si;
                $filtro[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM03')->count();
                $total_pm03_filtro=$total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM03')->where('realizada','No')->count();
                $filtro[6]=$total_pm03;
                $filtro[7]=$total_pm03_si;
                $filtro[8]=$total_pm03_no;

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',4)->where('tipo','PM04')->where('realizada','No')->count();
                $filtro[9]=$total_pm04;
                $filtro[10]=$total_pm04_si;
                $filtro[11]=$total_pm04_no;*/
            //---------FIN DE FILTRO Y PUERTO------------
            //------------ECT----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM01')->count();
                $total_pm01_ECT=$total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM01')->where('realizada','No')->count();
                $ect[0]=$total_pm01;
                $ect[1]=$total_pm01_si;
                $ect[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM02')->count();
                $total_pm02_ECT=$total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM02')->where('realizada','No')->count();
                $ect[3]=$total_pm02;
                $ect[4]=$total_pm02_si;
                $ect[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM03')->count();
                $total_pm03_ECT=$total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM03')->where('realizada','No')->count();
                $ect[6]=$total_pm03;
                $ect[7]=$total_pm03_si;
                $ect[8]=$total_pm03_no;

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',5)->where('tipo','PM04')->where('realizada','No')->count();
                $ect[9]=$total_pm04;
                $ect[10]=$total_pm04_si;
                $ect[11]=$total_pm04_no;*/
                //---------FIN DE ECT------------
                //------------LOS COLORADOS----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM01')->count();
                $total_pm01_colorados=$total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM01')->where('realizada','No')->count();
                $colorados[0]=$total_pm01;
                $colorados[1]=$total_pm01_si;
                $colorados[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM02')->count();
                $total_pm02_colorados=$total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM02')->where('realizada','No')->count();
                $colorados[3]=$total_pm02;
                $colorados[4]=$total_pm02_si;
                $colorados[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM03')->count();
                $total_pm03_colorados=$total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM03')->where('realizada','No')->count();
                $colorados[6]=$total_pm03;
                $colorados[7]=$total_pm03_si;
                $colorados[8]=$total_pm03_no;

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion2->id)->where('id_area',6)->where('tipo','PM04')->where('realizada','No')->count();
                $colorados[9]=$total_pm04;
                $colorados[10]=$total_pm04_si;
                $colorados[11]=$total_pm04_no;*/
                //---------FIN DE LOS COLORADOS------------
                //----------totales y graficos de CHO
                $pm01_si_g2=$filtro[1]+$ect[1]+$colorados[1];//total de pm01_si en CHO
                $pm01_no_g2=$filtro[2]+$ect[2]+$colorados[2];//total de pm01_no en CHO

                $pm02_si_g2=$filtro[4]+$ect[4]+$colorados[4];//total de pm02_si en CHO
                $pm02_no_g2=$filtro[5]+$ect[5]+$colorados[5];//total de pm02_no en CHO

                $pm03_si_g2=$filtro[7]+$ect[7]+$colorados[7];//total de pm03_si en CHO
                $pm03_no_g2=$filtro[8]+$ect[8]+$colorados[8];//total de pm03_no en CHO

                $pm01_g2=$filtro[0]+$ect[0]+$colorados[0];//total de pm01 en CHO
                $pm02_g2=$filtro[3]+$ect[3]+$colorados[3];//total de pm02 en CHO
                $pm03_g2=$filtro[6]+$ect[6]+$colorados[6];//total de pm03 en CHO
                 //CÓDIGO DE LAS GRÁFICAS//

                $graf_pm02_g2 = app()->chartjs
                ->name('pieChartTest6')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Realizadas: ', 'No Realizadas: '])
                ->datasets([
                    [
                        'backgroundColor' => ['#BDBDBD', '#D7CCC8'],
                        'hoverBackgroundColor' => ['#BDBDBD', '#D7CCC8'],
                        'data' => [$pm02_si_g2, $pm02_no_g2]
                    ]
                ])
                ->options([]);

                $graf_act_pm02_vs_act_pm03_g2 = app()->chartjs
                ->name('graf_act_pm02_vs_act_pm03_g2')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['TOTAL PM02', 'TOTAL PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#48C9A9','#EF5350'],
                        'data' => [$pm02_g2, $pm03_g2]
                    ]
                ])
                ->options([]);

                $graf_total_act_g2 = app()->chartjs
                ->name('graf_total_act_g2')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$pm01_g2,$pm02_g2, $pm03_g2]
                    ]
                ])
                ->options([]);

                $graf_total_filtro= app()->chartjs
                ->name('graf_total_filtro')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_filtro,$total_pm02_filtro, $total_pm03_filtro]
                    ]
                ])
                ->options([]);

                $graf_total_ect= app()->chartjs
                ->name('graf_total_ect')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_ECT,$total_pm02_ECT, $total_pm03_ECT]
                    ]
                ])
                ->options([]);

                $graf_total_colorados= app()->chartjs
                ->name('graf_total_colorados')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_colorados,$total_pm02_colorados, $total_pm03_colorados]
                    ]
                ])
                ->options([]);

                return view('estadisticas.show', compact('request','planificacion2','pm02_g2','pm03_g2','pm01_si_g2','pm01_no_g2','pm02_si_g2','pm02_no_g2','pm03_si_g2','pm03_no_g2','filtro','ect','colorados','graf_pm02_g2','graf_act_pm02_vs_act_pm03_g2','graf_total_act_g2','graf_total_filtro','graf_total_ect','graf_total_colorados'));
            } else {
                //dd('Gerencia CHO área Filtro-Puerto');
                //dd('Gerencia NPI área XXX');
                $area=Areas::where('area',$request->areas)->first();
                $gerencias=Gerencias::where('gerencia',$request->gerencias)->first();
                //dd($gerencias->id);
                $planificacion_form=Planificacion::where('id_gerencia',$gerencias->id)->where('semana',$request->planificacion)->first();
                //dd($planificacion_form->id);
                $count_area[] = array();
                //--------------------------------------
                //------------ÁREA----------------
                $total_pm01=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM01')->count();
                $total_pm01_area= $total_pm01;
                $total_pm01_si=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM01')->where('realizada','Si')->count();
                $total_pm01_no=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM01')->where('realizada','No')->count();
                $count_area[0]=$total_pm01;
                $count_area[1]=$total_pm01_si;
                $count_area[2]=$total_pm01_no;

                $total_pm02=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM02')->count();
                $total_pm02_area= $total_pm02;
                $total_pm02_si=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM02')->where('realizada','Si')->count();
                $total_pm02_no=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM02')->where('realizada','No')->count();
                $count_area[3]=$total_pm02;
                $count_area[4]=$total_pm02_si;
                $count_area[5]=$total_pm02_no;

                $total_pm03=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM03')->count();
                $total_pm03_area= $total_pm03;
                $total_pm03_si=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM03')->where('realizada','Si')->count();
                $total_pm03_no=Actividades::where('id_planificacion',$planificacion_form->id)->where('id_area',$area->id)->where('tipo','PM03')->where('realizada','No')->count();
                $count_area[6]=$total_pm03;
                $count_area[7]=$total_pm03_si;
                $count_area[8]=$total_pm03_no;

                //dd($total_pm01,$total_pm02,$total_pm03);

                /*$total_pm04=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',$request->area)->where('tipo','PM04')->count();
                $total_pm04_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',$request->area)->where('tipo','PM04')->where('realizada','Si')->count();
                $total_pm04_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',$request->area)->where('tipo','PM04')->where('realizada','No')->count();
                $count_area[9]=$total_pm04;
                $count_area[10]=$total_pm04_si;
                $count_area[11]=$total_pm04_no;*/
            //---------FIN DE ÁREA------------
                $pm02_g1=$count_area[3];//total de pm02 en NPI
                $pm03_g1=$count_area[6];//total de pm03 en NPI

                //dd($count_area[0],$count_area[1],$count_area[2],$count_area[3],$count_area[4],$count_area[5],$count_area[6],$count_area[7],$count_area[8]);

                //CÓDIGO DE LAS GRÁFICAS//
                $graf_act_pm02_vs_act_pm03_g1 = app()->chartjs
                ->name('graf_act_pm02_vs_act_pm03_g1')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['TOTAL PM02', 'TOTAL PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#48C9A9','#EF5350'],
                        'data' => [54, 33]
                    ]
                ])
                ->options([]);

                $graf_total_act_g1 = app()->chartjs
                ->name('graf_total_act_g1')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [12,33, 43]
                    ]
                ])
                ->options([]);

                $graf_total= app()->chartjs
                ->name('graf_total')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [$total_pm01_area,$total_pm02_area,$total_pm03_area]
                    ]
                ])
                ->options([]);

                $gerencia = $request->gerencias;
                $area = $request->areas;

                return view('estadisticas.area', compact('gerencia','area','planificacion','count_area','graf_act_pm02_vs_act_pm03_g1','graf_total_act_g1','graf_total','graf_hh_1','graf_hh_2','graf_hh_3'));
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {        
        


       //return view('estadisticas.show');
    }

    public function estadisticasHH() {
        $gerencias = Gerencias::all();
        $planificacion=planificacion::where('id','<>',0)->groupBy('semana')->get();
        return view('estadisticas.filtro_hh', compact('gerencias','planificacion'));
    }

    public function estadisticasHH_show(Request $request) {
        //dd($request->all());
        
        if($request->areas!="todas"){
            $area=Areas::where('area',$request->areas)->first();
        }
        $anios=anios_planificacion();//arreglo de años de registros
        //dd($anios);
        //$gerencias= $request->gerencias;
        //$areas= $request->areas;
        $meses=array('-01-','-02-','-03-','-04-','-05-','-06-','-07-','-08-','-09-','-10-','-11-','-12-');
        if ($request->gerencias=="NPI") {
            # code...
            if ($request->areas=="todas") {
                //GERENCIA NPI
                //buscando HH en ews en el año actual
                
                //dd($meses);
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar_ews=Actividades::where('tipo','PM01')->where('id_area',1)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01_ews[$i]=$buscar_ews;
                     $buscar_ews=Actividades::where('tipo','PM02')->where('id_area',1)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02_ews[$i]=$buscar_ews;
                     $buscar_ews=Actividades::where('tipo','PM03')->where('id_area',1)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03_ews[$i]=$buscar_ews;
                }
                //dd($hh_pm01_ews);
                $graf_hh_ews_1 = app()->chartjs
                ->name('graf_hh_ews_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01_ews[0],$hh_pm01_ews[1],$hh_pm01_ews[2],$hh_pm01_ews[3],$hh_pm01_ews[4],$hh_pm01_ews[5],$hh_pm01_ews[6],$hh_pm01_ews[7],$hh_pm01_ews[8],$hh_pm01_ews[9],$hh_pm01_ews[10],$hh_pm01_ews[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02_ews[0],$hh_pm02_ews[1],$hh_pm02_ews[2],$hh_pm02_ews[3],$hh_pm02_ews[4],$hh_pm02_ews[5],$hh_pm02_ews[6],$hh_pm02_ews[7],$hh_pm02_ews[8],$hh_pm02_ews[9],$hh_pm02_ews[10],$hh_pm02_ews[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03_ews[0],$hh_pm03_ews[1],$hh_pm03_ews[2],$hh_pm03_ews[3],$hh_pm03_ews[4],$hh_pm03_ews[5],$hh_pm03_ews[6],$hh_pm03_ews[7],$hh_pm03_ews[8],$hh_pm03_ews[9],$hh_pm03_ews[10],$hh_pm03_ews[11]],
                    ]
                ])
                ->options([]);
                
                $graf_hh_ews_2 = app()->chartjs
                ->name('graf_hh_ews_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02_ews[0],$hh_pm02_ews[1],$hh_pm02_ews[2],$hh_pm02_ews[3],$hh_pm02_ews[4],$hh_pm02_ews[5],$hh_pm02_ews[6],$hh_pm02_ews[7],$hh_pm02_ews[8],$hh_pm02_ews[9],$hh_pm02_ews[10],$hh_pm02_ews[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03_ews[0],$hh_pm03_ews[1],$hh_pm03_ews[2],$hh_pm03_ews[3],$hh_pm03_ews[4],$hh_pm03_ews[5],$hh_pm03_ews[6],$hh_pm03_ews[7],$hh_pm03_ews[8],$hh_pm03_ews[9],$hh_pm03_ews[10],$hh_pm03_ews[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_ews_3 = app()->chartjs
                ->name('graf_hh_ews_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);
                //-----------planta 0-----------------------
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar_planta=Actividades::where('tipo','PM01')->where('id_area',2)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01_planta[$i]=$buscar_planta;
                     $buscar_planta=Actividades::where('tipo','PM02')->where('id_area',2)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02_planta[$i]=$buscar_planta;
                     $buscar_planta=Actividades::where('tipo','PM03')->where('id_area',2)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03_planta[$i]=$buscar_planta;
                }
                $graf_hh_planta_1 = app()->chartjs
                ->name('graf_hh_planta_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01_planta[0],$hh_pm01_planta[1],$hh_pm01_planta[2],$hh_pm01_planta[3],$hh_pm01_planta[4],$hh_pm01_planta[5],$hh_pm01_planta[6],$hh_pm01_planta[7],$hh_pm01_planta[8],$hh_pm01_planta[9],$hh_pm01_planta[10],$hh_pm01_planta[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02_planta[0],$hh_pm02_planta[1],$hh_pm02_planta[2],$hh_pm02_planta[3],$hh_pm02_planta[4],$hh_pm02_planta[5],$hh_pm02_planta[6],$hh_pm02_planta[7],$hh_pm02_planta[8],$hh_pm02_planta[9],$hh_pm02_planta[10],$hh_pm02_planta[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03_planta[0],$hh_pm03_planta[1],$hh_pm03_planta[2],$hh_pm03_planta[3],$hh_pm03_planta[4],$hh_pm03_planta[5],$hh_pm03_planta[6],$hh_pm03_planta[7],$hh_pm03_planta[8],$hh_pm03_planta[9],$hh_pm03_planta[10],$hh_pm03_planta[11]],
                   ]
               ])
                ->options([]);
                $graf_hh_planta_2 = app()->chartjs
                ->name('graf_hh_planta_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02_planta[0],$hh_pm02_planta[1],$hh_pm02_planta[2],$hh_pm02_planta[3],$hh_pm02_planta[4],$hh_pm02_planta[5],$hh_pm02_planta[6],$hh_pm02_planta[7],$hh_pm02_planta[8],$hh_pm02_planta[9],$hh_pm02_planta[10],$hh_pm02_planta[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03_planta[0],$hh_pm03_planta[1],$hh_pm03_planta[2],$hh_pm03_planta[3],$hh_pm03_planta[4],$hh_pm03_planta[5],$hh_pm03_planta[6],$hh_pm03_planta[7],$hh_pm03_planta[8],$hh_pm03_planta[9],$hh_pm03_planta[10],$hh_pm03_planta[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_planta_3 = app()->chartjs
                ->name('graf_hh_planta_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);
                //----------agua y tranque
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar_agua=Actividades::where('tipo','PM01')->where('id_area',3)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01_agua[$i]=$buscar_agua;
                     $buscar_agua=Actividades::where('tipo','PM02')->where('id_area',3)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02_agua[$i]=$buscar_agua;
                     $buscar_agua=Actividades::where('tipo','PM03')->where('id_area',3)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03_agua[$i]=$buscar_agua;
                }
                $graf_hh_agua_1 = app()->chartjs
                ->name('graf_hh_agua_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01_agua[0], $hh_pm01_agua[1], $hh_pm01_agua[2], $hh_pm01_agua[3], $hh_pm01_agua[4], $hh_pm01_agua[5], $hh_pm01_agua[6], $hh_pm01_agua[7], $hh_pm01_agua[8], $hh_pm01_agua[9], $hh_pm01_agua[10], $hh_pm01_agua[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02_agua[0], $hh_pm02_agua[1], $hh_pm02_agua[2], $hh_pm02_agua[3], $hh_pm02_agua[4], $hh_pm02_agua[5], $hh_pm02_agua[6], $hh_pm02_agua[7], $hh_pm02_agua[8], $hh_pm02_agua[9], $hh_pm02_agua[10], $hh_pm02_agua[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03_agua[0], $hh_pm03_agua[1], $hh_pm03_agua[2], $hh_pm03_agua[3], $hh_pm03_agua[4], $hh_pm03_agua[5], $hh_pm03_agua[6], $hh_pm03_agua[7], $hh_pm03_agua[8], $hh_pm03_agua[9], $hh_pm03_agua[10], $hh_pm03_agua[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_agua_2 = app()->chartjs
                ->name('graf_hh_agua_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02_agua[0], $hh_pm02_agua[1], $hh_pm02_agua[2], $hh_pm02_agua[3], $hh_pm02_agua[4], $hh_pm02_agua[5], $hh_pm02_agua[6], $hh_pm02_agua[7], $hh_pm02_agua[8], $hh_pm02_agua[9], $hh_pm02_agua[10], $hh_pm02_agua[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03_agua[0], $hh_pm03_agua[1], $hh_pm03_agua[2], $hh_pm03_agua[3], $hh_pm03_agua[4], $hh_pm03_agua[5], $hh_pm03_agua[6], $hh_pm03_agua[7], $hh_pm03_agua[8], $hh_pm03_agua[9], $hh_pm03_agua[10], $hh_pm03_agua[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_agua_3 = app()->chartjs
                ->name('graf_hh_agua_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);
                return view('estadisticas.estadisticas_hh', compact('request','graf_hh_ews_1','graf_hh_ews_2','graf_hh_ews_3','graf_hh_planta_1','graf_hh_planta_2','graf_hh_planta_3','graf_hh_agua_1','graf_hh_agua_2','graf_hh_agua_3','hh_pm01_ews','hh_pm02_ews','hh_pm03_ews','hh_pm01_planta','hh_pm02_planta','hh_pm03_planta','hh_pm01_agua','hh_pm02_agua','hh_pm03_agua'));
            } else {
                //npi individual
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar=Actividades::where('tipo','PM01')->where('id_area',$area->id)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM02')->where('id_area',$area->id)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM03')->where('id_area',$area->id)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03[$i]=$buscar;
                }
                 $graf_hh_1 = app()->chartjs
                ->name('graf_hh_filtro_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01[0],$hh_pm01[1],$hh_pm01[2],$hh_pm01[3],$hh_pm01[4],$hh_pm01[5],$hh_pm01[6],$hh_pm01[7],$hh_pm01[8],$hh_pm01[9],$hh_pm01[10],$hh_pm01[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02[0],$hh_pm02[1],$hh_pm02[2],$hh_pm02[3],$hh_pm02[4],$hh_pm02[5],$hh_pm02[6],$hh_pm02[7],$hh_pm02[8],$hh_pm02[9],$hh_pm02[10],$hh_pm02[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03[0],$hh_pm03[1],$hh_pm03[2],$hh_pm03[3],$hh_pm03[4],$hh_pm03[5],$hh_pm03[6],$hh_pm03[7],$hh_pm03[8],$hh_pm03[9],$hh_pm03[10],$hh_pm03[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_area_2 = app()->chartjs
                ->name('graf_hh_area_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02[0],$hh_pm02[1],$hh_pm02[2],$hh_pm02[3],$hh_pm02[4],$hh_pm02[5],$hh_pm02[6],$hh_pm02[7],$hh_pm02[8],$hh_pm02[9],$hh_pm02[10],$hh_pm02[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03[0],$hh_pm03[1],$hh_pm03[2],$hh_pm03[3],$hh_pm03[4],$hh_pm03[5],$hh_pm03[6],$hh_pm03[7],$hh_pm03[8],$hh_pm03[9],$hh_pm03[10],$hh_pm03[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_3 = app()->chartjs
                ->name('graf_hh_filtro_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);

                return view('estadisticas.area_hh', compact('request','graf_hh_1','graf_hh_area_2','graf_hh_3','hh_pm01','hh_pm02','hh_pm03'));
            }
            
        } else if ($request->gerencias=="CHO"){
            # code...
            if ($request->areas=="todas") {
                //GERENCIA CHO
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar=Actividades::where('tipo','PM01')->where('id_area',4)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01_filtro[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM02')->where('id_area',4)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02_filtro[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM03')->where('id_area',4)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03_filtro[$i]=$buscar;
                }
                $graf_hh_filtro_1 = app()->chartjs
                ->name('graf_hh_filtro_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01_filtro[0],$hh_pm01_filtro[1],$hh_pm01_filtro[2],$hh_pm01_filtro[3],$hh_pm01_filtro[4],$hh_pm01_filtro[5],$hh_pm01_filtro[6],$hh_pm01_filtro[7],$hh_pm01_filtro[8],$hh_pm01_filtro[9],$hh_pm01_filtro[10],$hh_pm01_filtro[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02_filtro[0],$hh_pm02_filtro[1],$hh_pm02_filtro[2],$hh_pm02_filtro[3],$hh_pm02_filtro[4],$hh_pm02_filtro[5],$hh_pm02_filtro[6],$hh_pm02_filtro[7],$hh_pm02_filtro[8],$hh_pm02_filtro[9],$hh_pm02_filtro[10],$hh_pm02_filtro[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03_filtro[0],$hh_pm03_filtro[1],$hh_pm03_filtro[2],$hh_pm03_filtro[3],$hh_pm03_filtro[4],$hh_pm03_filtro[5],$hh_pm03_filtro[6],$hh_pm03_filtro[7],$hh_pm03_filtro[8],$hh_pm03_filtro[9],$hh_pm03_filtro[10],$hh_pm03_filtro[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_filtro_2 = app()->chartjs
                ->name('graf_hh_filtro_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02_filtro[0],$hh_pm02_filtro[1],$hh_pm02_filtro[2],$hh_pm02_filtro[3],$hh_pm02_filtro[4],$hh_pm02_filtro[5],$hh_pm02_filtro[6],$hh_pm02_filtro[7],$hh_pm02_filtro[8],$hh_pm02_filtro[9],$hh_pm02_filtro[10],$hh_pm02_filtro[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03_filtro[0],$hh_pm03_filtro[1],$hh_pm03_filtro[2],$hh_pm03_filtro[3],$hh_pm03_filtro[4],$hh_pm03_filtro[5],$hh_pm03_filtro[6],$hh_pm03_filtro[7],$hh_pm03_filtro[8],$hh_pm03_filtro[9],$hh_pm03_filtro[10],$hh_pm03_filtro[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_filtro_3 = app()->chartjs
                ->name('graf_hh_filtro_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);
                //---------------ect
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar=Actividades::where('tipo','PM01')->where('id_area',5)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01_ect[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM02')->where('id_area',5)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02_ect[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM03')->where('id_area',5)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03_ect[$i]=$buscar;
                }
                $graf_hh_ect_1 = app()->chartjs
                ->name('graf_hh_ect_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01_ect[0],$hh_pm01_ect[1],$hh_pm01_ect[2],$hh_pm01_ect[3],$hh_pm01_ect[4],$hh_pm01_ect[5],$hh_pm01_ect[6],$hh_pm01_ect[7],$hh_pm01_ect[8],$hh_pm01_ect[9],$hh_pm01_ect[10],$hh_pm01_ect[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02_ect[0],$hh_pm02_ect[1],$hh_pm02_ect[2],$hh_pm02_ect[3],$hh_pm02_ect[4],$hh_pm02_ect[5],$hh_pm02_ect[6],$hh_pm02_ect[7],$hh_pm02_ect[8],$hh_pm02_ect[9],$hh_pm02_ect[10],$hh_pm02_ect[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03_ect[0],$hh_pm03_ect[1],$hh_pm03_ect[2],$hh_pm03_ect[3],$hh_pm03_ect[4],$hh_pm03_ect[5],$hh_pm03_ect[6],$hh_pm03_ect[7],$hh_pm03_ect[8],$hh_pm03_ect[9],$hh_pm03_ect[10],$hh_pm03_ect[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_ect_2 = app()->chartjs
                ->name('graf_hh_ect_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02_ect[0],$hh_pm02_ect[1],$hh_pm02_ect[2],$hh_pm02_ect[3],$hh_pm02_ect[4],$hh_pm02_ect[5],$hh_pm02_ect[6],$hh_pm02_ect[7],$hh_pm02_ect[8],$hh_pm02_ect[9],$hh_pm02_ect[10],$hh_pm02_ect[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03_ect[0],$hh_pm03_ect[1],$hh_pm03_ect[2],$hh_pm03_ect[3],$hh_pm03_ect[4],$hh_pm03_ect[5],$hh_pm03_ect[6],$hh_pm03_ect[7],$hh_pm03_ect[8],$hh_pm03_ect[9],$hh_pm03_ect[10],$hh_pm03_ect[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_ect_3 = app()->chartjs
                ->name('graf_hh_ect_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);
                //--------------colorados
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar=Actividades::where('tipo','PM01')->where('id_area',6)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01_colorados[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM02')->where('id_area',6)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02_colorados[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM03')->where('id_area',6)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03_colorados[$i]=$buscar;
                }
                $graf_hh_colorados_1 = app()->chartjs
                ->name('graf_hh_colorados_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01_colorados[0],$hh_pm01_colorados[1],$hh_pm01_colorados[2],$hh_pm01_colorados[3],$hh_pm01_colorados[4],$hh_pm01_colorados[5],$hh_pm01_colorados[6],$hh_pm01_colorados[7],$hh_pm01_colorados[8],$hh_pm01_colorados[9],$hh_pm01_colorados[10],$hh_pm01_colorados[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02_colorados[0],$hh_pm02_colorados[1],$hh_pm02_colorados[2],$hh_pm02_colorados[3],$hh_pm02_colorados[4],$hh_pm02_colorados[5],$hh_pm02_colorados[6],$hh_pm02_colorados[7],$hh_pm02_colorados[8],$hh_pm02_colorados[9],$hh_pm02_colorados[10],$hh_pm02_colorados[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03_colorados[0],$hh_pm03_colorados[1],$hh_pm03_colorados[2],$hh_pm03_colorados[3],$hh_pm03_colorados[4],$hh_pm03_colorados[5],$hh_pm03_colorados[6],$hh_pm03_colorados[7],$hh_pm03_colorados[8],$hh_pm03_colorados[9],$hh_pm03_colorados[10],$hh_pm03_colorados[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_colorados_2 = app()->chartjs
                ->name('graf_hh_colorados_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02_colorados[0],$hh_pm02_colorados[1],$hh_pm02_colorados[2],$hh_pm02_colorados[3],$hh_pm02_colorados[4],$hh_pm02_colorados[5],$hh_pm02_colorados[6],$hh_pm02_colorados[7],$hh_pm02_colorados[8],$hh_pm02_colorados[9],$hh_pm02_colorados[10],$hh_pm02_colorados[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03_colorados[0],$hh_pm03_colorados[1],$hh_pm03_colorados[2],$hh_pm03_colorados[3],$hh_pm03_colorados[4],$hh_pm03_colorados[5],$hh_pm03_colorados[6],$hh_pm03_colorados[7],$hh_pm03_colorados[8],$hh_pm03_colorados[9],$hh_pm03_colorados[10],$hh_pm03_colorados[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_colorados_3 = app()->chartjs
                ->name('graf_hh_colorados_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);

                return view('estadisticas.estadisticas_hh', compact('request','graf_hh_filtro_1','graf_hh_filtro_2','graf_hh_filtro_3','graf_hh_ect_1','graf_hh_ect_2','graf_hh_ect_3','graf_hh_colorados_1','graf_hh_colorados_2','graf_hh_colorados_3','hh_pm01_ect','hh_pm02_ect','hh_pm03_ect','hh_pm01_colorados','hh_pm02_colorados','hh_pm03_colorados'));
            } else {
                //cho individual
                for ($i=0; $i < count($meses) ; $i++) { 
                    $buscar=Actividades::where('tipo','PM01')->where('id_area',$area->id)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm01[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM02')->where('id_area',$area->id)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm02[$i]=$buscar;
                     $buscar=Actividades::where('tipo','PM03')->where('id_area',$area->id)->where('fecha_vencimiento','like','%2020%')->where('fecha_vencimiento','like','%'.$meses[$i].'%')->sum('duracion_real');
                     $hh_pm03[$i]=$buscar;
                }
                $graf_hh_1 = app()->chartjs
                ->name('graf_hh_filtro_1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "MPM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [$hh_pm01[0],$hh_pm01[1],$hh_pm01[2],$hh_pm01[3],$hh_pm01[4],$hh_pm01[5],$hh_pm01[6],$hh_pm01[7],$hh_pm01[8],$hh_pm01[9],$hh_pm01[10],$hh_pm01[11]],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [$hh_pm02[0],$hh_pm02[1],$hh_pm02[2],$hh_pm02[3],$hh_pm02[4],$hh_pm02[5],$hh_pm02[6],$hh_pm02[7],$hh_pm02[8],$hh_pm02[9],$hh_pm02[10],$hh_pm02[11]],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [$hh_pm03[0],$hh_pm03[1],$hh_pm03[2],$hh_pm03[3],$hh_pm03[4],$hh_pm03[5],$hh_pm03[6],$hh_pm03[7],$hh_pm03[8],$hh_pm03[9],$hh_pm03[10],$hh_pm03[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_2 = app()->chartjs
                ->name('graf_hh_2')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => "#48C9A9",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm02[0],$hh_pm02[1],$hh_pm02[2],$hh_pm02[3],$hh_pm02[4],$hh_pm02[5],$hh_pm02[6],$hh_pm02[7],$hh_pm02[8],$hh_pm02[9],$hh_pm02[10],$hh_pm02[11]],
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => "#EF5350",
                        'borderColor' => "rgba(38, 185, 154, 0.7)",
                        "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                        "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                        "pointHoverBackgroundColor" => "#fff",
                        "pointHoverBorderColor" => "rgba(220,220,220,1)",
                        'data' => [$hh_pm03[0],$hh_pm03[1],$hh_pm03[2],$hh_pm03[3],$hh_pm03[4],$hh_pm03[5],$hh_pm03[6],$hh_pm03[7],$hh_pm03[8],$hh_pm03[9],$hh_pm03[10],$hh_pm03[11]],
                    ]
                ])
                ->options([]);

                $graf_hh_3 = app()->chartjs
                ->name('graf_hh_filtro_3')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2019-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [22]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [34]
                    ]
                ])
                ->options([]);

                return view('estadisticas.area_hh', compact('request','graf_hh_1','graf_hh_2','graf_hh_3','hh_pm01','hh_pm02','hh_pm03'));
            }
        }
    }

    public function hh()
    {
        # code...
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
