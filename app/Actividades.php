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

    public function empleados()
    {
        return $this->belongsToMany('App\Empleados','actividades_proceso','id_actividad','id_empleado')->withPivot('hora_inicio','hora_finalizada','status');
    }
}