<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function bladeToExcel(Request $request)
    {
    	dd($request->all(),'En construcción');
        /** Creamos un archivo llamado fromBlade.xlsx */
        Excel::download('fromBlade', function ($excel) {

            /** La hoja se llamará Usuarios */
            $excel->sheet('Usuarios', function ($sheet) {
            	$actividades=Actividades::join('planificacion','planificacion.id','actividades.id_planificacion')
                ->where([['planificacion.semana',$request->semana],['actividades.id_area',$request->id_area]])->get();
                /** El método loadView nos carga la vista blade a utilizar */
                $sheet->fromArray($actividades);
                $sheet->setOrientation('landscape');
                $sheet->loadView('reportes/excel/actividades');
            });

            /** Agregará una segunda hoja y se llamará Productos */
            $excel->sheet('Productos', function ($sheet) {
                $sheet->loadView('productos');
            });
        })->download('xlsx');
    }
}
