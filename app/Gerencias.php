<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gerencias extends Model
{
    protected $table='gerencias';

    protected $fillable=['gerencia'];


    public function areas()
    {
    	return $this->hasMany('App\Areas','id_gerencia','id');
    }

}
