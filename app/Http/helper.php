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
function num_dia($fecha)
{
    $dia=0;
    $var=date("D",strtotime($fecha));
    switch ($var) {
        case 'Wed':
            $dia=3;
            break;
        case 'Thu':
            $dia=4;
            break;
        case 'Fri':
            $dia=5;
            break;
        case 'Sat':
            $dia=6;
            break;
        case 'Sun':
            $dia=7;
            break;
        case 'Mon':
            $dia=1;
            break;
        case 'Tue':
            $dia=2;
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

function buscar_actividades_area($semana,$id_area)
{
	$hallado="No";
	$planificacion=App\Planificacion::where('semana',$semana)->first();
	if (!empty($planificacion)) {
		foreach ($planificacion->actividades as $key) {
		if ($key->id_area==$id_area) {
			$hallado="Si";
		}
		}	
	} else {
		$hallado="No";
	}
	
	
	return $hallado;
}
function tiempos($planificacion,$id_area)
{
	if(empty($planificacion)){
            $encontrado=0;
        }else{
            $encontrado=1;
            //contando actividades por dia
        $mie=0;$jue=0;$vie=0;$sab=0;$dom=0;$lun=0;$mar=0;
        //variables para sumar totales de duracion
        $tiempos = array();
        //inicializando
        $tiempos[0][0]="Duración Proyectada";
        $tiempos[1][0]="Duración Real";
        for ($i=0; $i < 2; $i++) { 
            for ($j=1; $j < 8; $j++) { 
                $tiempos[$i][$j]=0;
            }
        }
        //miercoles
        $t1mie=0;$t2mie=0;
        //jueves
        $t1jue=0;$t2jue=0;
        //viernes
        $t1vie=0;$t2vie=0;
        //sabado
        $t1sab=0;$t2sab=0;
        //domingo
        $t1dom=0;$t2dom=0;
        //lunes
        $t1lun=0;$t2lun=0;
        //martes
        $t1mar=0;$t2mar=0;
        foreach ($planificacion->actividades as $key) {
            if ($id_area==$id_area) {
                $dia=dia($key->fecha_vencimiento);
                switch ($dia) {
                    case 'Mié':
                        $mie++;
                        $t1mie+=$key->duracion_pro;
                        $t2mie+=$key->duracion_real;
                        $tiempos[0][1]+=$key->duracion_pro;
                        $tiempos[1][1]+=$key->duracion_real;
                        break;
                    case 'Jue':
                        $jue++;
                        $t1jue+=$key->duracion_pro;
                        $t2jue+=$key->duracion_real;
                        $tiempos[0][2]+=$key->duracion_pro;
                        $tiempos[1][2]+=$key->duracion_real;
                        break;
                    case 'Vie':
                        $vie++;
                        $t1vie+=$key->duracion_pro;
                        $t2vie+=$key->duracion_real;
                        $tiempos[0][3]+=$key->duracion_pro;
                        $tiempos[1][3]+=$key->duracion_real;
                        break;
                    case 'Sáb':
                        $sab++;
                        $t1sab+=$key->duracion_pro;
                        $t2sab+=$key->duracion_real;
                        $tiempos[0][4]+=$key->duracion_pro;
                        $tiempos[1][4]+=$key->duracion_real;
                        break;
                    case 'Dom':
                        $dom++;
                        $t1dom+=$key->duracion_pro;
                        $t2dom+=$key->duracion_real;
                        $tiempos[0][5]+=$key->duracion_pro;
                        $tiempos[1][5]+=$key->duracion_real;
                        break;
                    case 'Lun':
                        $lun++;
                        $t1lun+=$key->duracion_pro;
                        $t2lun+=$key->duracion_real;
                        $tiempos[0][6]+=$key->duracion_pro;
                        $tiempos[1][6]+=$key->duracion_real;
                        break;
                    case 'Mar':
                        $mar++;
                        $t1mar+=$key->duracion_pro;
                        $t2mar+=$key->duracion_real;
                        $tiempos[0][7]+=$key->duracion_pro;
                        $tiempos[1][7]+=$key->duracion_real;
                        break;
                }//cierre del switch
            }//fin del if
        }//fin del foreach
        }//fin del else

        if ($encontrado==1) {
        	return $tiempos;
        } else {
        	return "";
        }
        
}

function tareas($id_area)
{
    $hallado=0;
    $fecha_vencimiento=date('Y-m-d');
    //total de actividades del area para hoy
    $buscar1=App\Actividades::where('id_area',$id_area)->where('fecha_vencimiento',$fecha_vencimiento)->get();
    $total=count($buscar1);
    if ($total==0) {
        $porcentaje=0;
    } else {
    //realizadas para hoy del area 
    $buscar=App\Actividades::where('id_area',$id_area)->where('fecha_vencimiento',$fecha_vencimiento)->where('realizada','Si')->get();
    $realizadas=count($buscar);
    //porcentaje de realizadas
    $porcentaje=($realizadas*100)/$total;
    $porcentaje=bcdiv($porcentaje,'1',2);
    }
    

    return $porcentaje;
}

function tarea_terminada()
{
    
    $fecha_vencimiento=date('Y-m-d');
    //realizadas para hoy del area 
    $buscar=App\Actividades::where('fecha_vencimiento',$fecha_vencimiento)->where('realizada','Si')->get();
    

    return $buscar;   
}

function total_tarea_terminada()
{
    
    $fecha_vencimiento=date('Y-m-d');
    //realizadas para hoy del area 
    $buscar=App\Actividades::where('fecha_vencimiento',$fecha_vencimiento)->where('realizada','Si')->get();
    

    return count($buscar);   
}

function total_mensajes()
{
    $fecha_vencimiento=date('Y-m-d');
    $buscar=App\Actividades::where('fecha_vencimiento',$fecha_vencimiento)->where('realizada','Si')->get();
    $cont=0;
    foreach ($buscar as $key) {
        $actividad=App\ActividadesProceso::where('id_actividad',$key->id)->get();
        foreach ($actividad as $key2) {
            foreach ($key2->comentarios as $key3) {
                $cont++;
            }
        }
    }

    return $cont;
}

function mensajes()
{
    $fecha_vencimiento=date('Y-m-d');
    $comentarios= array();
    $buscar=App\Actividades::where('fecha_vencimiento',$fecha_vencimiento)->where('realizada','Si')->get();
    $cont=0;
    $i=0;
    foreach ($buscar as $key) {
        $actividad=App\ActividadesProceso::where('id_actividad',$key->id)->get();
        foreach ($actividad as $key2) {
            foreach ($key2->comentarios as $key3) {
                $comentarios[$i][0]=$key3->usuarios->name;
                $comentarios[$i][1]=$key3->comentario;
            }
        }
    }

    return $comentarios;
}