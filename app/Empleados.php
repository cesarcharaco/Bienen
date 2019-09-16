<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table='empleados';

    protected $fillable=['nombres','apellidos','rut','edad','genero','turno','status','id_area'];

    public function areas()
    {
    	return $this->belongsTo('App\Areas','id_area');
    }
}
