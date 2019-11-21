<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table='departamentos';

    protected $fillable=['departamento'];

    public function actividades()
    {
    	return $this->hasMany('App\Actividades','id_departamento','id');
    }
}
