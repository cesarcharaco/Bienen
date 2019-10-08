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
        if($request->estadisticas="actividades") {

            if ($request->tipo_estadisticas="Area") {

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

                if ($request->tipo_grafica="Barra") {

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

                } elseif ($request->tipo_grafica="Torta") {
                    # code...
                }
            } elseif ($request->tipo_estadisticas="Tipo") {
                if ($request->tipo_grafica="Barra") {
                    # code...
                } elseif ($request->tipo_grafica="Torta") {
                    # code...
                }
            } elseif ($request->tipo_estadisticas="Turno") {
                if ($request->tipo_grafica="Barra") {
                    # code...
                } elseif ($request->tipo_grafica="Torta") {
                    # code...
                }
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
