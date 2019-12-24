<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $table='notas';

    protected $fillable=['id_empleado','nota','fecha'];

    public function empleado()
	{
		return $this->belongsTo('App\Empleado','id_empleado');
	}
}
