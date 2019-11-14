<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ActividadesExport;
use App\Actividades;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ReportesExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //return Excel::download(new ActividadesExport, 'actividades.xlsx');
        Excel::create('reportes/excel/actividades', function($excel) {
            $excel->sheet('Excel sheet', function($sheet) {

                $actividades=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area]])->get();
                
                $sheet->fromArray($actividades);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }
    public function buscar()
    {
        //dd($request->all());
        return Excel::view(new ActividadesExport, 'actividades.xlsx');
        /*Excel::download('reportes/excel/actividades', function($excel) {
            $excel->sheet('Excel sheet', function($sheet) {

                $actividades=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area]])->get();
                
                $sheet->fromArray($actividades);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');*/
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
