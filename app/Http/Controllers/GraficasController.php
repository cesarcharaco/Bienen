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
        //dd($request->all());

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
        } elseif ($request->graficas=="Turno") {

            $manana = Actividades::select('actividades.created_at','actividades.turno')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.turno','Mañana')->count();
            $tarde = Actividades::select('actividades.created_at','actividades.turno')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.turno','Tarde')->count();
            $noche = Actividades::select('actividades.created_at','actividades.turno')
                ->whereBetween('actividades.created_at', [$request->fecha_desde, $request->fecha_hasta])
                ->where('actividades.turno','Noche')->count();

            if ($request->tipo_grafica=="Barra") {

                $chartjs = app()->chartjs
                ->name('barChartTest')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['Estadísticas por Tipo de actividades'])
                ->datasets([
                    [
                        "label" => "Mañana",
                        'backgroundColor' => ['rgba(54, 162, 235, 0.2)'],
                        'data' => [$manana]
                    ],
                    [
                        "label" => "Tarde",
                        'backgroundColor' => ['rgba(255, 99, 132, 0.3)'],
                        'data' => [$tarde]
                    ],
                    [
                        "label" => "Noche",
                        'backgroundColor' => ['#CDDC39'],
                        'data' => [$noche]
                    ]
                ])
                ->options([]);
                return view('graficas.show', compact('chartjs'));

            } elseif ($request->tipo_grafica=="Torta") {

                $chartjs = app()->chartjs
                ->name('pieChartTest')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Mañana', 'Tarde', 'Noche'])
                ->datasets([
                    [
                        'backgroundColor' => ['#FF6384', '#36A2EB','#CDDC39'],
                        'hoverBackgroundColor' => ['#FF6384', '#36A2EB','#CDDC39'],
                        'data' => [$manana, $tarde, $noche]
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
