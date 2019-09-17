<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avances extends Model
{
    protected $table='avances';

    protected $fillable=['id_actividad','fecha','status'];

    public function actividades()
    {
    	return $this->belongsTo('App\Actividades','id_actividad');
    }
}
