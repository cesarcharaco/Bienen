<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function backup()
    {
    	//Introduzca aquí la información de su base de datos y el nombre del archivo de copia de seguridad.
$mysqlDatabaseName ='parrocet_bienen';
$mysqlUserName ='parrocet_bienen';
$mysqlPassword ='TA3010_e';
$mysqlHostName ='http://www.bienen.eiche.cl';
$mysqlExportPath ='bienen_bdd.sql';
//dd('nnnnnnnnn');
//Por favor, no haga ningún cambio en los siguientes puntos
//Exportación de la base de datos y salida del status
$command='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' --password="' .$mysqlPassword .'" ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
//dd(exec($command));
//dd(\Artisan::call('config:cache'));
/*
		switch($worked){
		case 0:
		echo 'La base de datos <b>' .$mysqlDatabaseName .'</b> se ha almacenado correctamente en la siguiente ruta '.getcwd().'/' .$mysqlExportPath .'</b>';
		break;
		case 1:
		echo 'Se ha producido un error al exportar <b>' .$mysqlDatabaseName .'</b> a '.getcwd().'/' .$mysqlExportPath .'</b>';
		break;
		case 2:
		echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b>NOTSHOWN</b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
		break;
		}
*/

    }
}
