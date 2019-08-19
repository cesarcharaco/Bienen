<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table='departamentos';

    protected $fillable=['departamento','id_area'];

    public function areas()
    {
    	return $this->belongsTo('App\Areas','id_area');
    }

    public function empleados()
    {
    	return $this->hasMany('App\Empleados','id_departamento','id');
    }
}
