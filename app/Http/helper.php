<?php

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