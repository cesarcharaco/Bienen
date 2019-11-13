<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosVistos extends Model
{
    protected $table='comentarios_vistos';

    protected $fillable=['id_comentario','status'];

    public function comentarios()
    {
    	return $this->belongsTo('App\Comentarios','id_comentario');
    }
}
