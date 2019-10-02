<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes(["verify" => true]);


/* Para verificar que el usuario que accede está verificado se le añade 
    a la ruta el middleware "verified" */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/estadisticas', 'HomeController@dashboardStadistic')->name('estadisticas');

Route::get('getData', 'PlanificacionController@getData');
Route::get('/planificacion', 'PlanificacionController@create')->name('planificacion.create');
Route::resource('planificacion','PlanificacionController');

Route::get('planificacion/{id_gerencia}/buscar','PlanificacionController@buscar_areas');
Route::get('planificacion/{num_semana}/calcular_fechas','PlanificacionController@calcular_fechas');
Route::post('planificacion/buscar','PlanificacionController@buscar')->name('planificacion.buscar');
Route::resource('empleados','EmpleadosController');
Route::resource('actividades','ActividadesController');
Route::get('actividades/buscar','ActividadesController@buscar')->name('actividades.buscar');

Route::get('actividades/pm01/buscar','ActividadesController@buscar_pm01')->name('buscar.pm01');