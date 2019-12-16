<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examenes extends Model
{
    protected $table='examenes';

    protected $fillable=['examen','observacion'];

    public function empleados()
    {
    	return $this->belongsToMany('App\Empleados','empleados_has_examenes','id_examen','id_empleado')->withPivot('fecha','status');
    }
}
