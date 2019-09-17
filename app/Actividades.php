<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $table='actividades';

    protected $fillable=['task','descripcion','turno','fecha_vencimiento','duracion_pro','cant_personas','duracion_real','dia','tipo','realizada','observacion1','observacion2','id_planificacion','id_area'];

    public function planificacion()
    {
    	return $this->belongsTo('App\Planificacion','id_planificacion');
    }

    public function areas()
    {
    	return $this->belongsTo('App\Areas','id_area');
    }
}
