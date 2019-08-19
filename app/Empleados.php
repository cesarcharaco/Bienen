<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table='empleados';

    protected $fillable=['nombres','apellidos','rut','edad','genero','turno','status','id_departamento'];

    public function departamentos()
    {
    	return $this->belongsTo('App\Departamentos','id_departamento');
    }
}
