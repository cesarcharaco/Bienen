<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividades;

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
        dd($request->fecha_desde, $request->fecha_hasta);

        if ($request->graficas=="Area") {

            $area1 = Actividades::select('actividades.created_at','areas.id')
            ->join('areas', 'areas.id', '=', 'actividades.id_area')
            ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            ->where('areas.id','1')->count();

            $area2 = Actividades::select('actividades.created_at','areas.id')
            ->join('areas', 'areas.id', '=', 'actividades.id_area')
            ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            ->where('areas.id','2')->count();

            $area3 = Actividades::select('actividades.created_at','areas.id')
            ->join('areas', 'areas.id', '=', 'actividades.id_area')
            ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            ->where('areas.id','3')->count();

            $area4 = Actividades::select('actividades.created_at','areas.id')
            ->join('areas', 'areas.id', '=', 'actividades.id_area')
            ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            ->where('areas.id','4')->count();

            $area5 = Actividades::select('actividades.created_at','areas.id')
            ->join('areas', 'areas.id', '=', 'actividades.id_area')
            ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            ->where('areas.id','5')->count();

            $area6 = Actividades::select('actividades.created_at','areas.id')
            ->join('areas', 'areas.id', '=', 'actividades.id_area')
            ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
            ->where('areas.id','6')->count();

            dd($request->all(),$area1,$area2,$area3,$area4,$area5,$area6);
            if ($area1==0 && $area2==0 && $area3==0 && $area4==0 && $area5==0 && $area6==0) {
                flash('No se econtraron datos en la fecha seleccionada!')->error()->important();
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
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.tipo','PM01')->count();
            $pm02 = Actividades::select('actividades.created_at','actividades.tipo')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.tipo','PM02')->count();
            $pm03 = Actividades::select('actividades.created_at','actividades.tipo')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.tipo','PM03')->count();
            $pm04 = Actividades::select('actividades.created_at','actividades.tipo')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.tipo','PM04')->count();

            if ($pm01==0 && $pm02==0 && $pm03==0 && $pm04==0) {
                flash('No se econtraron datos en la fecha seleccionada!')->error()->important();
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

            $semana_si = Actividades::select('actividades.id_planificacion','planificacion.id')
            ->join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$request->semana)
            ->where('actividades.realizada','Si')
            ->groupby('actividades.id_planificacion')->count();

            $semana_no = Actividades::select('actividades.id_planificacion','planificacion.id')
            ->join('planificacion', 'planificacion.id', '=', 'actividades.id_planificacion')
            ->where('planificacion.semana',$request->semana)
            ->where('actividades.realizada','No')
            ->groupby('actividades.id_planificacion')->count();

            if ($semana_si==0 && $semana_no==0) {
                flash('No se econtraron datos en la fecha seleccionada!')->error()->important();
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

            $realizada = Actividades::select('actividades.created_at','actividades.realizada')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.realizada','Si')->count();

            $norealizada = Actividades::select('actividades.created_at','actividades.realizada')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.realizada','No')->count();

            if ($realizada==0 && $norealizada==0) {
                flash('No se econtraron datos en la fecha seleccionada!')->error()->important();
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
}
