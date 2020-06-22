<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Backup\Tasks\Backup\BackupJobFactory;

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
    	
    }
}
