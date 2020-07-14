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
        $prueba = app()->chartjs
            ->name('pieChartTest7')
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

        $prueba1 = app()->chartjs
            ->name('pieChartTest8')
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

            $prueba2= app()->chartjs
                ->name('pieChartTest13')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
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
                    'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                    'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
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
                    'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                    'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                    'data' => [11,5, 55]
                ]
            ])
            ->options([]);

            $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'])
            ->datasets([
                [
                    "label" => "MPM01",
                    'borderColor' => "#F7C55F",
                    "pointBorderColor" => "#F7C55F",
                    "pointBackgroundColor" => "#F7C55F",
                    'data' => [65, 59, 80, 81, 4, 55, 40],
                ],
                [
                    "label" => "PM02",
                    'borderColor' => "#48C9A9",
                    "pointBorderColor" => "#48C9A9",
                    "pointBackgroundColor" => "#48C9A9",
                    'data' => [5, 44, 21, 18, 12, 50, 11],
                ],
                [
                    "label" => "PM03",
                    'borderColor' => "#EF5350",
                    "pointBorderColor" => "#EF5350",
                    "pointBackgroundColor" => "#EF5350",
                    'data' => [12, 33, 13, 44, 55, 23, 40],
                ]
            ])
            ->options([]);
            $prueba5 = app()->chartjs
                ->name('barChartTest')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2018-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [45]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [28]
                    ]
                ])
                ->options([]);
                $prueba6 = app()->chartjs
                ->name('barChartTest1')
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

                $chartjs1 = app()->chartjs
                ->name('lineChartTest1')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'])
                ->datasets([
                    [
                        "label" => "MPM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [65, 59, 80, 81, 4, 55, 40],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [5, 44, 21, 18, 12, 50, 11],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [12, 33, 13, 44, 55, 23, 40],
                    ]
                ])
                ->options([]);
                $prueba7 = app()->chartjs
                    ->name('barChartTest2')
                    ->type('bar')
                    ->size(['width' => 800, 'height' => 400])
                    ->labels(['HH 2018-2020'])
                    ->datasets([
                        [
                            "label" => "PM02",
                            'backgroundColor' => ['#48C9A9'],
                            'data' => [45]
                        ],
                        [
                            "label" => "PM03",
                            'backgroundColor' => ['#EF5350'],
                            'data' => [28]
                        ]
                    ])
                    ->options([]);
                $prueba8 = app()->chartjs
                ->name('barChartTest3')
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

                $chartjs2 = app()->chartjs
                ->name('lineChartTest3')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'])
                ->datasets([
                    [
                        "label" => "MPM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [65, 59, 80, 81, 4, 55, 40],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [5, 44, 21, 18, 12, 50, 11],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [12, 33, 13, 44, 55, 23, 40],
                    ]
                ])
                ->options([]);
                $prueba9 = app()->chartjs
                    ->name('barChartTest4')
                    ->type('bar')
                    ->size(['width' => 800, 'height' => 400])
                    ->labels(['HH 2018-2020'])
                    ->datasets([
                        [
                            "label" => "PM02",
                            'backgroundColor' => ['#48C9A9'],
                            'data' => [45]
                        ],
                        [
                            "label" => "PM03",
                            'backgroundColor' => ['#EF5350'],
                            'data' => [28]
                        ]
                    ])
                    ->options([]);
                $prueba10 = app()->chartjs
                ->name('barChartTest5')
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

                //Gerencia CHO

                //dd($request->all());
        $prueba11 = app()->chartjs
            ->name('pieChartTest11')
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

        $prueba12 = app()->chartjs
            ->name('pieChartTest12')
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

            $prueba13= app()->chartjs
                ->name('pieChartTest133')
                ->type('pie')
                ->size(['width' => 200, 'height' => 120])
                ->labels(['PM01','PM02', 'PM03'])
                ->datasets([
                    [
                        'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                        'data' => [11,5, 55]
                    ]
                ])
                ->options([]);
            $prueba14= app()->chartjs
            ->name('pieChartTest144')
            ->type('pie')
            ->size(['width' => 200, 'height' => 120])
            ->labels(['PM01','PM02', 'PM03'])
            ->datasets([
                [
                    'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                    'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                    'data' => [11,5, 55]
                ]
            ])
            ->options([]);
            $prueba15= app()->chartjs
            ->name('pieChartTest155')
            ->type('pie')
            ->size(['width' => 200, 'height' => 120])
            ->labels(['PM01','PM02', 'PM03'])
            ->datasets([
                [
                    'backgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                    'hoverBackgroundColor' => ['#F7C55F', '#48C9A9','#EF5350'],
                    'data' => [11,5, 55]
                ]
            ])
            ->options([]);

            $chartjs3 = app()->chartjs
            ->name('lineChartTest31')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'])
            ->datasets([
                [
                    "label" => "MPM01",
                    'borderColor' => "#F7C55F",
                    "pointBorderColor" => "#F7C55F",
                    "pointBackgroundColor" => "#F7C55F",
                    'data' => [65, 59, 80, 81, 4, 55, 40],
                ],
                [
                    "label" => "PM02",
                    'borderColor' => "#48C9A9",
                    "pointBorderColor" => "#48C9A9",
                    "pointBackgroundColor" => "#48C9A9",
                    'data' => [5, 44, 21, 18, 12, 50, 11],
                ],
                [
                    "label" => "PM03",
                    'borderColor' => "#EF5350",
                    "pointBorderColor" => "#EF5350",
                    "pointBackgroundColor" => "#EF5350",
                    'data' => [12, 33, 13, 44, 55, 23, 40],
                ]
            ])
            ->options([]);
            $prueba16 = app()->chartjs
                ->name('barChartTest16')
                ->type('bar')
                ->size(['width' => 800, 'height' => 400])
                ->labels(['HH 2018-2020'])
                ->datasets([
                    [
                        "label" => "PM02",
                        'backgroundColor' => ['#48C9A9'],
                        'data' => [45]
                    ],
                    [
                        "label" => "PM03",
                        'backgroundColor' => ['#EF5350'],
                        'data' => [28]
                    ]
                ])
                ->options([]);
                $prueba17 = app()->chartjs
                ->name('barChartTest17')
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

                $chartjs4 = app()->chartjs
                ->name('lineChartTest4')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'])
                ->datasets([
                    [
                        "label" => "MPM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [65, 59, 80, 81, 4, 55, 40],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [5, 44, 21, 18, 12, 50, 11],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [12, 33, 13, 44, 55, 23, 40],
                    ]
                ])
                ->options([]);
                $prueba18 = app()->chartjs
                    ->name('barChartTest18')
                    ->type('bar')
                    ->size(['width' => 800, 'height' => 400])
                    ->labels(['HH 2018-2020'])
                    ->datasets([
                        [
                            "label" => "PM02",
                            'backgroundColor' => ['#48C9A9'],
                            'data' => [45]
                        ],
                        [
                            "label" => "PM03",
                            'backgroundColor' => ['#EF5350'],
                            'data' => [28]
                        ]
                    ])
                    ->options([]);
                $prueba19 = app()->chartjs
                ->name('barChartTest19')
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

                $chartjs5 = app()->chartjs
                ->name('lineChartTest5')
                ->type('line')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'])
                ->datasets([
                    [
                        "label" => "MPM01",
                        'borderColor' => "#F7C55F",
                        "pointBorderColor" => "#F7C55F",
                        "pointBackgroundColor" => "#F7C55F",
                        'data' => [65, 59, 80, 81, 4, 55, 40],
                    ],
                    [
                        "label" => "PM02",
                        'borderColor' => "#48C9A9",
                        "pointBorderColor" => "#48C9A9",
                        "pointBackgroundColor" => "#48C9A9",
                        'data' => [5, 44, 21, 18, 12, 50, 11],
                    ],
                    [
                        "label" => "PM03",
                        'borderColor' => "#EF5350",
                        "pointBorderColor" => "#EF5350",
                        "pointBackgroundColor" => "#EF5350",
                        'data' => [12, 33, 13, 44, 55, 23, 40],
                    ]
                ])
                ->options([]);
                $prueba20 = app()->chartjs
                    ->name('barChartTest20')
                    ->type('bar')
                    ->size(['width' => 800, 'height' => 400])
                    ->labels(['HH 2018-2020'])
                    ->datasets([
                        [
                            "label" => "PM02",
                            'backgroundColor' => ['#48C9A9'],
                            'data' => [45]
                        ],
                        [
                            "label" => "PM03",
                            'backgroundColor' => ['#EF5350'],
                            'data' => [28]
                        ]
                    ])
                    ->options([]);
                $prueba21 = app()->chartjs
                ->name('barChartTest21')
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


        return view('estadisticas.show', compact('chartjs','prueba','prueba1','prueba2','prueba3','prueba4','prueba5','prueba6','chartjs1','prueba7','prueba8','chartjs2','prueba9','prueba10','chartjs3','chartjs4','chartjs5','prueba11','prueba12','prueba13','prueba14','prueba15','prueba16','prueba17','prueba18','prueba19','prueba20','prueba21'));
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
