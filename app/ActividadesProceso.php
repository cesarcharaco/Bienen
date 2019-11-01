<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadesProceso extends Model
{
    protected $table='actividades_proceso';

    protected $fillable=['id_actividad','id_empleado','hora_inicio','hora_finalizada','status'];

    public function comentarios()
    {
    	return $this->hasMany('App\Comentarios','id_actv_proceso','id');
    }
}
