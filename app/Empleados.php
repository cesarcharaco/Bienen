<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table='empleados';

    protected $fillable=['nombres','apellidos','email','rut','edad','genero','turno','status'];

    public function areas()
    {
    	return $this->belongsToMany('App\Areas','empleados_has_areas','id_empleado','id_area');
    }

    public function actividades()
    {
    	return $this->belongsToMany('App\Actividades','actividades_proceso','id_empleado','id_actividad')->withPivot('hora_inicio','hora_finalizada','status');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

}
