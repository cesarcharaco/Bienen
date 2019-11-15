<?php

namespace App\Exports;

use App\Actividades;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ActividadesExport implements FromView
{
    public function view(): View
    {
        return view('reportes.excel.actividades', [
            'actividades' => Actividades::all()
        ]);
    }
}