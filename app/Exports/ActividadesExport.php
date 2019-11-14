<?php

namespace App\Exports;

use App\Actividades;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;

class ActividadesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $actividades=Actividades::all();
    }
}
