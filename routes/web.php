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
Route::get('/recuperar_clave',function(){
	return view('auth/passwords/reset');
});
Route::get('/inicio', function () {
    return view('auth/inicio');
});
Route::post('recuperando_clave','Auth\ResetPasswordController@recuperando_clave')->name('recuperando_clave');
Auth::routes(["verify" => true]);


/* Para verificar que el usuario que accede está verificado se le añade 
    a la ruta el middleware "verified" */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home_buscar', 'HomeController@buscar')->name('home.buscar');
Route::get('/estadisticas', 'HomeController@dashboardStadistic')->name('estadisticas');

Route::get('getData', 'PlanificacionController@getData');
Route::get('/planificacion', 'PlanificacionController@create')->name('planificacion.create');
//Route::get('view', 'PlanificacionController@view')->name('view');
Route::resource('planificacion','PlanificacionController');
Route::resource('asignaciones','AsignacionesController');
Route::get('asignacion/{id_empleado}/buscar','AsignacionesController@buscar_empleado');
Route::get('{id_empleado}/buscarpermisos','PrivilegiosController@buscar_privilegios');

Route::get('asignacion2/{activi}/buscar','AsignacionesController@buscar_empleado2');



Route::get('planificacion/{id_gerencia}/buscar','PlanificacionController@buscar_areas');
Route::get('planificacion/{num_semana}/calcular_fechas','PlanificacionController@calcular_fechas');
Route::post('planificacion/buscar','PlanificacionController@buscar')->name('planificacion.buscar');
Route::resource('empleados','EmpleadosController');
Route::post('empleados/cambiar_status','EmpleadosController@cambiar_status')->name('empleados.cambiar_status');
Route::resource('usuarios','UsuariosController',['except' => ['update']]);
Route::post('usuarios/update/{id}','UsuariosController@update')->name('usuarios.update');
Route::post('usuarios/update_privilegios/{id}','UsuariosController@update_privilegios')->name('usuarios.update_privilegios');
Route::resource('actividades','ActividadesController');
Route::get('actividades/buscar','ActividadesController@buscar')->name('actividades.buscar');
Route::get('actividades/{id_actividad}/mis_archivos','ActividadesController@mis_archivos');
Route::get('actividades/{id_actividad}/mis_imagenes','ActividadesController@mis_imagenes');
Route::get('actividades/{id_actividad}/eliminar_archivos','ActividadesController@eliminar_archivos');
Route::get('empleados/{id_area}/buscar','ActividadesController@buscar_empleados');
Route::post('actividades/asignar','ActividadesController@asignar_actividad')->name('actividades.asignar');

Route::get('actividades/{id_actividad}/comentarios','ActividadesController@buscar_comentarios');
Route::post('actividades/registrar_comentario','ActividadesController@registrar_comentario');
Route::get('actividades/{id_actv_proceso}/{id_comentario}/eliminar_comentario','ActividadesController@eliminar_comentario');
Route::get('actividades/{id_actividad}/buscar_archivos','ActividadesController@buscar_archivos');
Route::get('actividades/{id_actividad}/buscar_imagenes','ActividadesController@buscar_imagenes');
Route::post('actividades/registrar_archivos','ActividadesController@registrar_archivos');
Route::post('actividades/registrar_imagenes','ActividadesController@registrar_imagenes');
Route::get('actividades_proceso/{id_actividad}/buscar_archivos_adjuntos','ActividadesController@buscar_archivos_adjuntos');
Route::get('actividades_proceso/{id_actividad}/buscar_imagenes_adjuntas','ActividadesController@buscar_imagenes_adjuntas');
Route::get('actividades_proceso/{id_actividad}/eliminar_archivos_adjuntos','ActividadesController@eliminar_archivos_adjuntos');
Route::get('actividades/{id_actividad}/vistas','ActividadesController@actividad_vista');
Route::get('actividades/{id_comentario}/vistos','ActividadesController@comentario_visto');
Route::get('actividades_proceso/{opcion}/{id_actividad}/{duracion_real}/finalizar','ActividadesController@finalizar');
Route::resource('graficas','GraficasController');

/*Route::post('excel/actividades','ReportesExcelController@store')->name('excel.actividades');*/
/*Route::post('pdf/actividades','ReportesPDFController@actividades')->name('pdf.actividades');*/
Route::post('/bladeToExcel','ExcelController@bladeToExcel')->name('bladeToExcel');
Route::get('users/export/', 'ExcelController@actividades');
Route::get('users_view', 'ExcelController@users_view');
Route::get('act/excel', 'ExcelController@act_excel');
//REPORTES -- EXCEL Y PDF ------/////
Route::resource('reportes','ReportesController');

Route::get('api_fc','PlanificacionController@api_fc'); //ruta que nos devuelve los eventos en formato json
Route::get('api_buscar','PlanificacionController@api_buscar')->name('api_buscar');

Route::resource('gerencias','GerenciasController');
Route::resource('areas','AreasController');
Route::resource('departamentos','DepartamentosController');
Route::resource('privilegios','PrivilegiosController');

Route::get('actividades/{id_departamento}/buscar_departamentos','ActividadesController@buscar_departamentos');
Route::get('actividad/buscar_actividades_semana_actual','ActividadesController@buscar_actividades_semana_actual')->name('actividades.buscar_actividades_semana_actual');
Route::get('actividades/{id_actividad}/mover_admin','ActividadesController@moviendo_actividad_admin');
Route::post('actividades/asignar_otra','ActividadesController@asignar_otra_actividad')->name('actividades.asignar_otra');
Route::get('actividades/{id_empleado}/sin_realizar','ActividadesController@actividades_sin_realizar');
Route::post('actividades/mover_a_empleado','ActividadesController@mover_actividad_empleado');
Route::post('actividades/asignacion_multiple','ActividadesController@asignacion_multiple')->name('asignacion_multiple');
Route::get('actividades/{id_area}/{id_planificacion}/buscar','ActividadesController@buscar_actividad');
Route::get('eliminacion/actividades','ActividadesController@buscar_actividades_eliminar')->name('eliminacion.actividades');

Route::get('actividades/{id_area}/buscar_tipo','AsignacionesController@buscar_tipo');
Route::post('actividades/eliminar_actividades_multiple','ActividadesController@eliminar_actividades_multiple')->name('eliminar_actividades_multiple');


Route::get('asignaciones/{id_actividad}/{id_empleado}/eliminar_asignacion','AsignacionesController@eliminar_asignacion');
Route::post('asignaciones/eliminar','AsignacionesController@asignaciones_eliminar');
Route::get('asignaciones/{id_planificacion}/buscar','AsignacionesController@buscar_areas');
Route::get('asignaciones_g/{id_planificacion}/{id_empleado}/{id_area}/eliminar_asignacion_g','AsignacionesController@eliminar_asignacion_g');

Route::resource('notas','NotasController');
Route::resource('muro','MuroController');
Route::post('notas/eliminar','NotasController@eliminar')->name('notas.eliminar');

Route::post('editP','PrivilegiosController@editarPrivilegio')->name('editP');