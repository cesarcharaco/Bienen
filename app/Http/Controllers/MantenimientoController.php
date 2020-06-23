<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Backup\Tasks\Backup\BackupJobFactory;
use Illuminate\Support\Facades\Storage;
class MantenimientoController extends Controller
{
    public function backup()
    {
    	\Artisan::call('backup:run --only-db');
		//BackupJobFactory::createFromArray(config('laravel-backup'))->run();
    	//dd('asas');
    	flash('<i class="icon-circle-check"></i> Respaldo realiado con éxito!')->success()->important();
            return redirect()->back();
		//return redirect()->to('home');

    }

    public function index()
    {
    	$archivos=\File::allFiles(public_path().'/backups/Bienen');
    	$quitar=public_path().'/backups/Bienen';
    	//dd($archivos[0]);
    	$nombres[]=array();//es un arreglo que solo contiene los nombres de los archivos

    	for ($i=0; $i < count($archivos) ; $i++) { 
    		$ruta=$archivos[0];
    		$nombre=str_replace($quitar, '', $ruta);
    		$nombres[$i]=substr($nombre,1);
    	}
    	/*foreach ($nombres as $key) { asi los vas a mostrar..... solo muestra el nombre....
    		echo $key."<br>";
    	}
    	dd('aaaaaaaaaaaaaaa');*/

    	return view('backups.index',compact('nombres'));
    }

    public function eliminar(Request $request)
    {
    	unlink(public_path().'/backups/Bienen/'.$request->nombre_backup);

    	flash('<i class="icon-circle-check"></i> Respaldo eliminado!')->success()->important();
            return redirect()->back();
    }
}
