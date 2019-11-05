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
Route::get('/home_buscar', 'HomeController@buscar')->name('home.buscar');
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
Route::get('actividades/{id_actividad}/mis_archivos','ActividadesController@mis_archivos');
Route::get('actividades/{id_actividad}/mis_imagenes','ActividadesController@mis_imagenes');
Route::get('actividades/{id_actividad}/eliminar_archivos','ActividadesController@eliminar_archivos');
Route::get('empleados/{id_area}/buscar','ActividadesController@buscar_empleados');
Route::post('actividades/asignar','ActividadesController@asignar_actividad')->name('actividades.asignar');

Route::get('actividades/{id_actividad}/{id_empleado}/comentarios','ActividadesController@buscar_comentarios');
Route::post('actividades/registrar_comentario','ActividadesController@registrar_comentario');
Route::get('actividades/{id_actv_proceso}/{id_comentario}/eliminar_comentario','ActividadesController@eliminar_comentario');
Route::get('actividades/{id_actividad}/buscar_archivos','ActividadesController@buscar_archivos');
Route::get('actividades/{id_actividad}/buscar_imagenes','ActividadesController@buscar_imagenes');
Route::post('actividades/registrar_archivos','ActividadesController@registrar_archivos');

Route::resource('graficas','GraficasController');