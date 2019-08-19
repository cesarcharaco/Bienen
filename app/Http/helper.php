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