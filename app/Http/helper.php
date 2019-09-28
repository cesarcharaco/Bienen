<?php
date_default_timezone_set('UTC');
function active($path){
   // dd(request()->is($path));
    return request()->is($path) ? "active" : " ";
}

function total_empleados()
{

	$total=App\Empleados::count();
	return $total;
}

function dia($fecha)
{
	$dia="";
	$var=date("D",strtotime($fecha));
	switch ($var) {
		case 'Wed':
			$dia="Mié";
			break;
		case 'Thu':
			$dia="Jue";
			break;
		case 'Fri':
			$dia="Vie";
			break;
		case 'Sat':
			$dia="Sáb";
			break;
		case 'Sun':
			$dia="Dom";
			break;
		case 'Mon':
			$dia="Lun";
			break;
		case 'Tue':
			$dia="Mar";
			break;/*
		default:
			$dia=$var;
			break;*/
	}

	return $dia;
}
function buscar_p($modulo,$privilegio)
{
	$hallado="No";
	$privilegio=App\Privilegios::where('privilegio',$privilegio)->where('modulo',$modulo)->first();
	foreach ($privilegio->usuarios as $key) {
		
		if ($key->pivot->id_usuario==\Auth::user()->id) {
			$hallado=$key->pivot->status;
		}
	}
	return $hallado;
}