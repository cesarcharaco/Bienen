<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosPlan extends Model
{
    protected $table='planificacion_has_archivos';

    protected $fillable=['id_planificacion','nombre','url','tipo'];

    public function planificacion()
    {
    	return $this->belongsTo('App\Planificacion','id_planificacion');
    }
}
