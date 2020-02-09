<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table='empleados';

    protected $fillable=['nombres','apellidos','email','rut','edad','genero','turno','status'];

    public function areas()
    {
    	return $this->belongsToMany('App\Areas','empleados_has_areas','id_empleado','id_area');
    }

    public function actividades()
    {
    	return $this->belongsToMany('App\Actividades','actividades_proceso','id_empleado','id_actividad')->withPivot('hora_inicio','hora_finalizada','status');
    }
    public function usuario()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

    public function departamentos()
    {
        return $this->belongsToMany('App\Departamentos','empleados_has_departamentos','id_empleado','id_departamento');   
    }
    public function examenes()
    {
        return $this->belongsToMany('App\Examenes','empleados_has_examenes','id_empleado','id_examen')->withPivot('fecha','status');
    }

    public function cursonodanio()
    {
        return $this->hasMany('App\CursoNoDanio','id_empleado','id');
    }

    public function datoslaborales()
    {
        return $this->hasOne('App\DatosLaborales','id_empleado','id');
    }
    public function notas()
    {
        return $this->hasMany('App\Notas','id_empleado','id');
    }
    public function muro()
    {
        return $this->hasMany('App\Muro','id_empleado','id');
    }

    public function novedades()
    {
        return $this->hasMany('App\Novedades','id_empleado','id');
    }

    public function avisos()
    {
        return $this->belongsToMany('App\Avisos','avisos_enviados','id_empleado','id_aviso')->withPivot('status','created_at');
    }
}
