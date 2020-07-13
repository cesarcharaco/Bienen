<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gerencias;
use App\Planificacion;

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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //dd($request->all());
        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'])
        ->datasets([
            [
                "label" => "MPM01",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                'data' => [65, 59, 80, 81, 4, 55, 40],
            ],
            [
                "label" => "PM02",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                'data' => [12, 33, 21, 44, 55, 23, 40],
            ],
            [
                "label" => "PM03",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                'data' => [12, 33, 13, 44, 55, 23, 40],
            ]
        ])
        ->options([]);
        $prueba = app()->chartjs
            ->name('pieChartTest7')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['TOTAL PM02', 'TOTAL PM03'])
            ->datasets([
                [
                    'backgroundColor' => ['green','orange'],
                    'hoverBackgroundColor' => ['green','orange'],
                    'data' => [54, 33]
                ]
            ])
            ->options([]);

        $prueba1 = app()->chartjs
            ->name('pieChartTest8')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['PM01','PM02', 'PM03'])
            ->datasets([
                [
                    'backgroundColor' => ['orange', 'green','red'],
                    'hoverBackgroundColor' => ['orange', 'green','red'],
                    'data' => [12,33, 43]
                ]
            ])
            ->options([]);

            $prueba2= app()->chartjs
                ->name('pieChartTest13')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['orange', 'green','red'],
                        'hoverBackgroundColor' => ['orange', 'green','red'],
                        'data' => [11,5, 55]
                    ]
                ])
                ->options([]);
            $prueba3= app()->chartjs
            ->name('pieChartTest14')
            ->type('pie')
            ->size(['width' => 200, 'height' => 120])
            ->labels(['PM01','PM02', 'PM03'])
            ->datasets([
                [
                    'backgroundColor' => ['orange', 'green','red'],
                    'hoverBackgroundColor' => ['orange', 'green','red'],
                    'data' => [11,5, 55]
                ]
            ])
            ->options([]);
            $prueba4= app()->chartjs
            ->name('pieChartTest15')
            ->type('pie')
            ->size(['width' => 200, 'height' => 120])
            ->labels(['PM01','PM02', 'PM03'])
            ->datasets([
                [
                    'backgroundColor' => ['orange', 'green','red'],
                    'hoverBackgroundColor' => ['orange', 'green','red'],
                    'data' => [11,5, 55]
                ]
            ])
            ->options([]);
            $prueba5= app()->chartjs
            ->name('pieChartTest16')
            ->type('pie')
            ->size(['width' => 200, 'height' => 120])
            ->labels(['PM01','PM02', 'PM03'])
            ->datasets([
                [
                    'backgroundColor' => ['orange', 'green','red'],
                    'hoverBackgroundColor' => ['orange', 'green','red'],
                    'data' => [11,5, 55]
                ]
            ])
            ->options([]);

        return view('estadisticas.show', compact('chartjs','prueba','prueba1','prueba2','prueba3','prueba4','prueba5'));
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
