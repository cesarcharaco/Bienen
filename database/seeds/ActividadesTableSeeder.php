<?php

use Illuminate\Database\Seeder;

class ActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//-- actividades miercoles planta 0
        \DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Servicios del Sistema Sin Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Hardware del Sistema Sin Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 60,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Revisión RNRP Network, Redes Primaria y Secundaria Activas',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 10,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'OPC DA en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'OPC AE en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Revisión de Listado de Alarmas y Eventos de Sistema e Informar Anomalías',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 20,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Revisión Listado de Alarmas de Hardware como Canales(Overflow, Underflow, Error)',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 30,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Revisión Estadísticas de las Cargas de los Controladores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Revisión de FFUpload',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Estados de los Nodos',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Coordinar con Manuel Butron que realizará parchado de los servidores de Planta Cero',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM01',
            'id_planificacion' => 1,
            'observacion1' => 'TAREA PROGRAMADA PARA CORTE DE ENERGIA',
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

     //actividades miercoles ews

		\DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Servicios del Sistema Sin Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-05-10'
        ]);

        \DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Hardware del Sistema Son Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 60,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-05-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Revisión RNRP Network, Redes Primaria y Secundaria Activas',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 10,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-05-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Revisión HIVision, Switch Hirschmann Sin Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-05-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'OPC DA en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-05-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'OPC AE en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-07-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Revisión de Listado de Alarmas y Eventos de Sistema e Informar Anomalías',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 20,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-07-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Revisión Estadísticas de las Cargas de los Controladores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-07-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Revisión de FFUpload',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-07-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Estados de los Nodos',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-09-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Nivel de Alarma conductivimetros EWS',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM01',
            'id_planificacion' => 1,
            'observacion1' => 'TAREA PROGRAMADA PARA CORTE DE ENERGIA',
            'id_area' => 1,
            'created_at' => '2019-09-10'
        ]);
        
		\DB::table('actividades')->insert([
        	'task' => 'Cambio de mascara subred de las tarjetas relacionadas IEC61850, para posterior habilitacion cortafuegos',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-09',
        	'cant_personas' => 1,
            'dia' => 'Mié',
        	'tipo' => 'PM01',
            'id_planificacion' => 1,
            'observacion1' => 'TAREA PROGRAMADA PARA CORTE DE ENERGIA',
            'id_area' => 1,
            'created_at' => '2019-09-10'
        ]);
    //dia jueves para planta 0

		\DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Servicios del Sistema Sin Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Hardware del Sistema Son Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 60,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión RNRP Network, Redes Primaria y Secundaria Activas',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 10,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'OPC DA en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'OPC AE en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión de Listado de Alarmas y Eventos de Sistema e Informar Anomalías',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 20,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión Listado de Alarmas de Hardware como Canales(Overflow, Underflow, Error)',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 30,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión Estadísticas de las Cargas de los Controladores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2
            ,
            'created_at' => '2019-04-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión de FFUpload',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Estados de los Nodos',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 2,
            'created_at' => '2019-09-10'
        ]);
		// jueves para ews
		\DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Servicios del Sistema Sin Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-09-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión System Status Viewer de Hardware del Sistema Son Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 60,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-09-10'
        ]);


		\DB::table('actividades')->insert([
        	'task' => 'Revisión RNRP Network, Redes Primaria y Secundaria Activas',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 10,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-09-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión HIVision, Switch Hirschmann Sin Errores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-09-10'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'OPC DA en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-10-02'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'OPC AE en Servidores de Conectividad AC800 Con Todos Sus Nodos Conectados',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-10-02'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión de Listado de Alarmas y Eventos de Sistema e Informar Anomalías',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 20,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-10-02'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión Estadísticas de las Cargas de los Controladores',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-10-02'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Revisión de FFUpload',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-10-02'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Estados de los Nodos',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'duracion_pro' => 15,
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM02',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-10-02'
        ]);

		\DB::table('actividades')->insert([
        	'task' => 'Habilitar las consola OW de OGP1, se debe coordinar con personal C/PSS el requerimiento es REQ0336929',
        	'turno' => 'Mañana',
        	'fecha_vencimiento' => '2019-10-10',
        	'cant_personas' => 1,
            'dia' => 'Jue',
        	'tipo' => 'PM01',
            'id_planificacion' => 1,
            'id_area' => 1,
            'created_at' => '2019-10-02'
        ]);

    }
}
