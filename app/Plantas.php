<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantas extends Model
{
    protected $table='plantas';

    protected $fillable=['id_area','planta'];

    public function areas()
    {
    	return $this->belongsTo('App\Areas','id_area');
    }
}
