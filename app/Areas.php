<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $table='areas';

    protected $fillable=['id_gerencia','area','descripcion','ubicacion'];


    public function gerencias()
    {
    	return $this->belongsTo('App\Gerencias','id_area','id');
    }

    
}
