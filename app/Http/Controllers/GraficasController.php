<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividades;
use App\Planificacion;
use App\Gerencias;
use App\Areas;

class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('graficas.index');
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
        // dd($request->all());
        $gerencia=Gerencias::where('gerencia',$request->gerencias)->first();
        $planificacion=Planificacion::where('id_gerencia',$gerencia->id )->where('semana',$request->planificacion)->first();
        // $area=Areas::find($request->areas);
        // dd($area);


        if ($request->graficas=="Area") {

            $area1=Actividades::where('id_planificacion',$planificacion->id)->where('id_area','1')->count();
            $area2=Actividades::where('id_planificacion',$planificacion->id)->where('id_area','2')->count();
            $area3=Actividades::where('id_planificacion',$planificacion->id)->where('id_area','3')->count();
            $area4=Actividades::where('id_planificacion',$planificacion->id)->where('id_area','4')->count();
            $area5=Actividades::where('id_planificacion',$planificacion->id)->where('id_area','5')->count();
            $area6=Actividades::where('id_planificacion',$planificacion->id)->where('id_area','6')->count();
            

            // dd($request->all(),$area1,$area2,$area3,$area4,$area5,$area6);
            if ($area1==0 && $area2==0 && $area3==0 && $area4==0 && $area5==0 && $area6==0) {
                flash('No se econtraron datos con los campos especificados!')->error()->important();
                return redirect()->back();
            }


            if ($request->tipo_grafica=="Barra") {

                $chartjs = app()->chartjs
                ->name('barChartTest')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Estadísticas por área de actividades'])
                ->datasets([
                    [
                        "label" => "EWS",
                        'backgroundColor' => ['rgba(54, 162, 235, 0.2)'],
                        'data' => [$area1]
                    ],
                    [
                        "label" => "Planto Cero/Desaladora & Acueducto",
                        'backgroundColor' => ['rgba(255, 99, 132, 0.3)'],
                        'data' => [$area2]
                    ],
                    [
                        "label" => "Agua y Tranque",
                        'backgroundColor' => ['#CDDC39'],
                        'data' => [$area3]
                    ],
                    [
                        "label" => "Filtro-Puerto",
                        'backgroundColor' => ['#967ADC'],
                        'data' => [$area4]
                    ],
                    [
                        "label" => "ECT",
                        'backgroundColor' => ['#37BC9B'],
                        'data' => [$area5]
                    ],
                    [
                        "label" => "Los Colorados",
                        'backgroundColor' => ['#006064'],
                        'data' => [$area6]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));

            } elseif ($request->tipo_grafica=="Torta") {

                $chartjs = app()->chartjs
                ->name('pieChartTest')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['EWS', 'Planto Cero/Desaladora & Acueducto', 'Agua y Tranque','Filtro-Puerto','ECT','Los Colorados'])
                ->datasets([
                    [
                        'backgroundColor' => ['#FF6384', '#36A2EB','#CDDC39','#967ADC','#37BC9B','#006064'],
                        'hoverBackgroundColor' => ['#FF6384', '#36A2EB','#CDDC39','#967ADC','#37BC9B','#006064'],
                        'data' => [$area1, $area2, $area3, $area4, $area5, $area6]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));

            }
        } elseif ($request->graficas=="Tipo") {

            $pm01 = Actividades::select('actividades.created_at','actividades.tipo')
                ->where('id_planificacion',$planificacion->id)
                ->where('actividades.tipo','PM01')->count();
            $pm02 = Actividades::select('actividades.created_at','actividades.tipo')
                ->where('id_planificacion',$planificacion->id)
                ->where('actividades.tipo','PM02')->count();
            $pm03 = Actividades::select('actividades.created_at','actividades.tipo')
                ->where('id_planificacion',$planificacion->id)
                ->where('actividades.tipo','PM03')->count();
            $pm04 = Actividades::select('actividades.created_at','actividades.tipo')
                ->where('id_planificacion',$planificacion->id)
                ->where('actividades.tipo','PM04')->count();

            // dd($request->all(),$pm01,$pm02,$pm03,$pm04);
            if ($pm01==0 && $pm02==0 && $pm03==0 && $pm04==0) {
                flash('No se econtraron datos con los campos especificados!')->error()->important();
                return redirect()->back();
            }


            if ($request->tipo_grafica=="Barra") {
                
                $chartjs = app()->chartjs
                ->name('barChartTest')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Estadísticas por Tipo de actividades'])
                ->datasets([
                    [
                        "label" => "PM01",
                        'backgroundColor' => ['rgba(54, 162, 235, 0.2)'],
                        'data' => [$pm01]
                    ],
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['rgba(255, 99, 132, 0.3)'],
                        'data' => [$pm02]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#CDDC39'],
                        'data' => [$pm03]
                    ],
                    [
                        "label" => "PM04",
                        'backgroundColor' => ['#967ADC'],
                        'data' => [$pm04]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));

            } elseif ($request->tipo_grafica=="Torta") {
                $chartjs = app()->chartjs
                ->name('pieChartTest')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['PM01', 'PM02', 'PM03','PM04'])
                ->datasets([
                    [
                        'backgroundColor' => ['#FF6384', '#36A2EB','#CDDC39','#967ADC'],
                        'hoverBackgroundColor' => ['#FF6384', '#36A2EB','#CDDC39','#967ADC'],
                        'data' => [$pm01, $pm02, $pm03, $pm04]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));
            }
        } elseif ($request->graficas=="Semanas") {


            $semana_si=Actividades::where('id_planificacion',$planificacion->id)->where('realizada','Si')->groupby('id_planificacion')->count();
            $semana_no=Actividades::where('id_planificacion',$planificacion->id)->where('realizada','No')->groupby('id_planificacion')->count();

            // $semana_si = Actividades::select('actividades.id_planificacion','planificacion.id')
            // ->join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            // ->where('planificacion.id',$planificacion->id)
            // ->where('actividades.realizada','Si')
            // ->groupby('actividades.id_planificacion')->count();

            // $semana_no = Actividades::select('actividades.id_planificacion','planificacion.id')
            // ->join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            // ->where('planificacion.id',$planificacion->id)
            // ->where('actividades.realizada','No')
            // ->groupby('actividades.id_planificacion')->count();

            // dd($semana_si,$semana_no);
            if ($semana_si==0 && $semana_no==0) {
                flash('No se econtraron datos con los campos especificados!')->error()->important();
                return redirect()->back();
            }

            if ($request->tipo_grafica=="Barra") {
                $chartjs = app()->chartjs
                ->name('barChartTest')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Estadísticas por Semana de actividades Realizadas (Si/No)'])
                ->datasets([
                    [
                        "label" => "Si",
                        'backgroundColor' => ['rgba(54, 162, 235, 0.2)'],
                        'data' => [$semana_si]
                    ],
                    [
                        "label" => "No",
                        'backgroundColor' => ['rgba(255, 99, 132, 0.3)'],
                        'data' => [$semana_no]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));
            } elseif ($request->tipo_grafica=="Torta") {

                $chartjs = app()->chartjs
                ->name('pieChartTest')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Si', 'No'])
                ->datasets([
                    [
                        'backgroundColor' => ['#FF6384', '#36A2EB'],
                        'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                        'data' => [$semana_si, $semana_no]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));

            }
        } elseif ($request->graficas=="Realizadas") {

            $realizada=Actividades::where('id_planificacion',$planificacion->id)->where('realizada','Si')->count();
            $norealizada=Actividades::where('id_planificacion',$planificacion->id)->where('realizada','No')->count();

            // $realizada = Actividades::select('actividades.created_at','actividades.realizada')
            //     ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            //     ->where('actividades.realizada','Si')->count();

            // $norealizada = Actividades::select('actividades.created_at','actividades.realizada')
            //     ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            //     ->where('actividades.realizada','No')->count();
            // dd($realizada,$norealizada);
            if ($realizada==0 && $norealizada==0) {
                flash('No se econtraron datos con los campos especificados!')->error()->important();
                return redirect()->back();
            }

            if ($request->tipo_grafica=="Barra") {

                $chartjs = app()->chartjs
                ->name('barChartTest')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Estadísticas de actividades Realizadas (Si/No)'])
                ->datasets([
                    [
                        "label" => "Si",
                        'backgroundColor' => ['rgba(54, 162, 235, 0.2)'],
                        'data' => [$realizada]
                    ],
                    [
                        "label" => "No",
                        'backgroundColor' => ['rgba(255, 99, 132, 0.3)'],
                        'data' => [$norealizada]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));

            } elseif ($request->tipo_grafica=="Torta") {

                $chartjs = app()->chartjs
                ->name('pieChartTest')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Si', 'No'])
                ->datasets([
                    [
                        'backgroundColor' => ['#FF6384', '#36A2EB'],
                        'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                        'data' => [$realizada, $norealizada]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));
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

    public function status_general()
    {
        //---- obteniendo la semana actual-------
        $fechaHoy = date('Y-m-d');
        $num_dia=num_dia($fechaHoy);
        $num_semana_actual=date('W', strtotime($fechaHoy));
        if ($num_dia==1 || $num_dia==2) {
            $num_semana_actual--;
        }
        //--------------------------------------
        //------- obteniendo para la gerencia 1---------------
        $planificacion=Planificacion::where('id_gerencia',1)->where('semana',$num_semana_actual)->first();
        //dd($planificacion);
        $area1_si=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',1)->where('realizada','Si')->count();
        $area1_no=Actividades::where('id_planificacion',$planificacion->id)->where('id_area',2)->where('realizada','No')->count();
        //dd('aaaaaaaaaaaaa');
        //dd($area1_no);
        $chartjs_a1 = app()->chartjs
                ->name('pieChartTest')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['No', 'Si'])
                ->datasets([
                    [
                        'backgroundColor' => ['#FF6384', '#36A2EB'],
                        'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                        'data' => [$area1_no, $area1_si]
                    ]
                ])
                ->options([]);

            //dd($chartjs_a1);
        return view('graficas.status_general',compact('chartjs_a1'));
    }
}
