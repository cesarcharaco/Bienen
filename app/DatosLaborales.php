<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosLaborales extends Model
{
    protected $table='datos_laborales';

    protected $fillable=['id_empleado','fechae_licn','fechav_licn','fechai_vac','fechaf_vac','status_vac'];

    public function empleados()
    {
    	return $this->belongsTo('App\Empleados','id_empleado');
    }
}
