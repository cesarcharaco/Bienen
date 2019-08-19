<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avances extends Model
{
    protected $table='avances';

    protected $fillable=['id_planificacion','fecha','status'];

    public function planificacion()
    {
    	return $this->belongsTo('App\Planificacion','id_planificacion');
    }
}
