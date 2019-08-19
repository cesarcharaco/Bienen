<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planificacion extends Model
{
    protected $table='planificacion';

    protected $fillable=['titulo','descripcion','id_departamento','turno','fecha_vencimiento'];

    public function departamentos()
    {
    	return $this->belongsTo('App\Departamentos','id_departamento');
    }

    public function archivos()
    {
    	return $this->hasMany('App\ArchivosPlan','id_planificacion','id');
    }

    public function avances()
    {
    	return $this->hasMany('App\Avances','id_planificacion','id');
    }
}
