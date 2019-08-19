<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $table='areas';

    protected $fillable=['area'];


    public function departamentos()
    {
    	return $this->hasMany('App\Departamentos','id_area','id');
    }
}
