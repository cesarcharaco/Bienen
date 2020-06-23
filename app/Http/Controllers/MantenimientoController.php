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
		return redirect()->to('home');

    }

    public function index()
    {
    	$archivos=\File::allFiles(public_path().'\backups\Bienen');
    	//dd($archivos[0]);
    	for ($i=0; $i < count($archivos) ; $i++) { 
    		echo $archivos[0]."<br>";
    	}
    	/*foreach ($archivos as $key) {
    		echo $key."<br>";
    	}*/
    	dd('aaaaaaaaaaaaaaa');
    }
}
