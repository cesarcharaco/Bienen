@extends('layouts.appLayout')

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-3">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                @if(\Auth::User()->tipo_user=="Admin")
                                <div class="breadcomb-ctn">
                                    <h2>Crear actividad</h2>
                                    <p>Pulsa en el boton y completa el formulario para registrar una nueva actividad.</p>
                                </div>
                                @endif
                                @if(\Auth::User()->tipo_user=="Empleado")
                                <div class="breadcomb-ctn">
                                    <h2>Actividades del mes en curso</h2>
                                    <p>podrá ver un calendario con las actividades asignadas.</p>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                            <div class="breadcomb-report">
                                @if(buscar_p('Actividades','Registrar')=="Si" || buscar_p('Actividades','Registro de PM03')=="Si")
                                <button id="actividad" value="0" data-toggle="modal" data-target="#myModalone" class="btn"><i
                                        class="notika-icon notika-edit"></i> Nueva actividad</button>
                                @endif
                            </div>
                        </div>
                        @include('planificacion.modales.crear_actividad')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
@endsection

@section('content')
@if(\Auth::User()->tipo_user=="Empleado")
    @include('planificacion.fullcalendar')
@elseif(\Auth::User()->tipo_user="Admin")
<!-- Form Element area Start-->
<div class="form-element-area modals-single">
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        @if(!empty($planificacion1))
                        <p>Tipos de gerencias - Información detallada de la semana {{ $planificacion1->semana }}</p>
                        @else
                        <p>No existe planificación registrada para la semana actual</p>
                        @endif
                        @if(count($errors))
                        <div class="alert-list m-4">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        @endif
                        @include('flash::message')
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="accordion-stn">
                                <div class="panel-group" data-collapse-color="nk-blue" id="gerencias" role="tablist" aria-multiselectable="false">
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#gerencias" href="#gerencia_npi" aria-expanded="false">{{$gerencias1->gerencia}}</a>
                                            </h4>
                                            
                                        </div>
                                        <div id="gerencia_npi" class="collapse in" role="tabpanel">
                                            <div class="panel-body">
                                                @if(!empty($planificacion1))
                                                <div class="row" style="background: #7dcfee; margin: 5px; padding: 15px;">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">                    
                                                                <div class="nk-int-st">
                                                                <b>Gerencia: {{ $planificacion1->gerencias->gerencia }}</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">                    
                                                                <div class="nk-int-st">
                                                                <b>Elaborado: {{ $planificacion1->elaborado }}</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Aprobado: {{ $planificacion1->aprobado }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Número de contrato: {{ $planificacion1->num_contrato }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Fechas: {{ $planificacion1->fechas }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Semana: {{ $planificacion1->semana }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Revision: {{ $planificacion1->revision }}</b>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                @else
                                                    <p>No existe planificación registrada para ésta gerencia</p>
                                                @endif
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="accordion-stn">
                                                        <div class="panel-group" data-collapse-color="nk-red" id="area1" role="tablist" aria-multiselectable="false">
                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                <div class="panel-heading" role="tab">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#area1" href="#ews" aria-expanded="false">EWS</a>
                                                                    </h4>
                                                                </div>
                                                                <div id="ews" class="collapse in" role="tabpanel">
                                                                    <div class="panel-body">
                                                                        @if(buscar_actividades_area($num_semana_actual,1)=="Si")
                                                                        <p>
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="normal-table-list mg-t-30">
                                                                                        <div class="basic-tb-hd">
                                                                                            <h2>Totales de Duración de Horas semanales</h2>
                                                                                        </div>
                                                                                        <div class="bsc-tbl-bdr">
                                                                                            <table class="table table-bordered" border="2">
                                                                                                <thead>
                                                                                                    <tr class="" style="background: #7dcfee;">
                                                                                                        <th>Duraciones/Días</th>
                                                                                                        <th>Miércoles</th>
                                                                                                        <th>Jueves</th>
                                                                                                        <th>Viernes</th>
                                                                                                        <th>Sábado</th>
                                                                                                        <th>Domingo</th>
                                                                                                        <th>Lunes</th>
                                                                                                        <th>Martes</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @if(!empty(tiempos($planificacion1,1)))
                                                                                                    @php $tiempos=tiempos($planificacion1,1) @endphp
                                                                                                    @for($i=0;$i<2;$i++)

                                                                                                    <tr>
                                                                                                        @for($j=0;$j<8;$j++)
                                                                                                        <td class="" style="background: #7dcfee;" scope="row">{{ $tiempos[$i][$j] }}</td>
                                                                                                        @endfor
                                                                                                    </tr>
                                                                                                    @endfor
                                                                                                    @else
                                                                                                        Sin datos para mostrar
                                                                                                    @endif
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="data-table-list">
                                                                                        <div class="table-responsive">
                                                                                            <table id="data-table-basic" class="table table-striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Task</th>
                                                                                                        <th>Fecha</th>
                                                                                                        <th>Duración aproximada</th>
                                                                                                        <th>Cantidad de personas</th>
                                                                                                        <th>Dureación real</th>
                                                                                                        <th>Día</th>
                                                                                                        <th>Departamento</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Realizada</th>
                                                                                                        <!-- <th>Avances del turno y pendientes</th> -->
                                                                                                        <th>Observaciones/Comentarios</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @php $i=1; @endphp
                                                                                                    @foreach($planificacion1->actividades as $key)
                                                                                                    @if($key->id_area==1)
                                                                                                    <tr>
                                                                                                        <td>{{ $i++ }}</td>
                                                                                                        <td>{{ $key->task }}</td>
                                                                                                        {{-- <td>{{ $key->descripcion }}</td>
                                                                                                        <td>{{ $key->turno }}</td> --}}
                                                                                                        <td>{{ $key->fecha_vencimiento }}</td>
                                                                                                        <td>{{ $key->duracion_pro }}</td>
                                                                                                        <td>{{ $key->cant_personas }}</td>
                                                                                                        <td>{{ $key->duracion_real }}</td>
                                                                                                        <td>{{ $key->dia }}</td>
                                                                                                        <td>{{ $key->areas->area }}</td>
                                                                                                        <td>{{ $key->tipo }}</td>
                                                                                                        <td>{{ $key->realizada }}</td>
                                                                                                        <!-- <td>{{ $key->observacion1 }}</td> -->
                                                                                                        <td>{{ $key->observacion2 }}</td>
                                                                                                        <td align="center">
                                                                                                            @if(buscar_p('Actividades','Modificar')=="Si")
                                                                                                            <button onclick="editar_act({{ $key->id }},'{{$key->dia}}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone"><i class="fa fa-edit"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Eliminar')=="Si")
                                                                                                            <button id="eliminar_actividad" onclick="eliminar({{$key->id}})" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-trash"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Asignar')=="Si")
                                                                                                            <button onclick="asignar({{ $key->id }},{{ $key->id_area }},'{{ $key->task }}')" type="button" class="btn btn-success" data-toggle="modal" data-target="#asignar_tarea"><i class="fa fa-user"></i> </button>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    @endif
                                                                                                    @endforeach    
                                                                                                </tbody>    
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </p>
                                                                    </div>
                                                                    @else
                                                                        <p>No se encontró planificación registrada para ésta área</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                <div class="panel-heading" role="tab">
                                                                    <h4 class="panel-title">
                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#area1" href="#planto_cero" aria-expanded="false">Planto Cero/Desaladora & Acueducto</a>
                                                                    </h4>
                                                                </div>
                                                                <div id="planto_cero" class="collapse" role="tabpanel">
                                                                    <div class="panel-body">
                                                                        @if(buscar_actividades_area($num_semana_actual,2)=="Si")
                                                                        <p>
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="normal-table-list mg-t-30">
                                                                                        <div class="basic-tb-hd">
                                                                                            <h2>Totales de Duración de Horas semanales</h2>
                                                                                        </div>
                                                                                        <div class="bsc-tbl-bdr">
                                                                                            <table class="table table-bordered" border="2">
                                                                                                <thead>
                                                                                                    <tr class="" style="background: #7dcfee;">
                                                                                                        <th>Duraciones/Días</th>
                                                                                                        <th>Miércoles</th>
                                                                                                        <th>Jueves</th>
                                                                                                        <th>Viernes</th>
                                                                                                        <th>Sábado</th>
                                                                                                        <th>Domingo</th>
                                                                                                        <th>Lunes</th>
                                                                                                        <th>Martes</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @if(!empty(tiempos($planificacion1,2)))
                                                                                                    @php $tiempos2=tiempos($planificacion1,2) @endphp
                                                                                                    @for($i=0;$i<2;$i++)

                                                                                                    <tr>
                                                                                                        @for($j=0;$j<8;$j++)
                                                                                                        <td class="" style="background: #7dcfee;" scope="row">{{ $tiempos2[$i][$j] }}</td>
                                                                                                        @endfor
                                                                                                    </tr>
                                                                                                    @endfor
                                                                                                    @else
                                                                                                        Sin datos para mostrar
                                                                                                    @endif
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="data-table-list">
                                                                                        <div class="table-responsive">
                                                                                            <table id="data-table-basic" class="table table-striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Task</th>
                                                                                                        <th>Fecha</th>
                                                                                                        <th>Duración aproximada</th>
                                                                                                        <th>Cantidad de personas</th>
                                                                                                        <th>Dureación real</th>
                                                                                                        <th>Día</th>
                                                                                                        <th>Departamento</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Realizada</th>
                                                                                                        <!-- <th>Avances del turno y pendientes</th> -->
                                                                                                        <th>Observaciones/Comentarios</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @php $i=1; @endphp
                                                                                                    @foreach($planificacion1->actividades as $key)
                                                                                                    @if($key->id_area==2)
                                                                                                    <tr>
                                                                                                        <td>{{ $i++ }}</td>
                                                                                                        <td>{{ $key->task }}</td>
                                                                                                        {{-- <td>{{ $key->descripcion }}</td>
                                                                                                        <td>{{ $key->turno }}</td> --}}
                                                                                                        <td>{{ $key->fecha_vencimiento }}</td>
                                                                                                        <td>{{ $key->duracion_pro }}</td>
                                                                                                        <td>{{ $key->cant_personas }}</td>
                                                                                                        <td>{{ $key->duracion_real }}</td>
                                                                                                        <td>{{ $key->dia }}</td>
                                                                                                        <td>{{ $key->areas->area }}</td>
                                                                                                        <td>{{ $key->tipo }}</td>
                                                                                                        <td>{{ $key->realizada }}</td>
                                                                                                        <!-- <td>{{ $key->observacion1 }}</td> -->
                                                                                                        <td>{{ $key->observacion2 }}</td>
                                                                                                        <td align="center">
                                                                                                            @if(buscar_p('Actividades','Modificar')=="Si")
                                                                                                            <button onclick="editar_act({{ $key->id }},'{{$key->dia}}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone"><i class="fa fa-edit"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Eliminar')=="Si")
                                                                                                            <button id="eliminar_actividad" onclick="eliminar({{$key->id}})" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-trash"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Asignar')=="Si")
                                                                                                            <button onclick="asignar({{ $key->id }},{{ $key->id_area }},'{{ $key->task }}')" type="button" class="btn btn-success" data-toggle="modal" data-target="#asignar_tarea"><i class="fa fa-user"></i> </button>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    @endif
                                                                                                    @endforeach    
                                                                                                </tbody>    
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </p>
                                                                    </div>
                                                                    @else
                                                                        <p>No se encontró planificación registrada para ésta área</p>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                <div class="panel-heading" role="tab">
                                                                    <h4 class="panel-title">
                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#area1" href="#agua_tranque" aria-expanded="false">Agua y Tranque</a>
                                                                    </h4>
                                                                </div>
                                                                <div id="agua_tranque" class="collapse" role="tabpanel">
                                                                    <div class="panel-body">
                                                                        @if(buscar_actividades_area($num_semana_actual,3)=="Si")
                                                                        <p>
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="normal-table-list mg-t-30">
                                                                                        <div class="basic-tb-hd">
                                                                                            <h2>Totales de Duración de Horas semanales</h2>
                                                                                        </div>
                                                                                        <div class="bsc-tbl-bdr">
                                                                                            <table class="table table-bordered" border="2">
                                                                                                <thead>
                                                                                                    <tr class="" style="background: #7dcfee;">
                                                                                                        <th>Duraciones/Días</th>
                                                                                                        <th>Miércoles</th>
                                                                                                        <th>Jueves</th>
                                                                                                        <th>Viernes</th>
                                                                                                        <th>Sábado</th>
                                                                                                        <th>Domingo</th>
                                                                                                        <th>Lunes</th>
                                                                                                        <th>Martes</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @if(!empty(tiempos($planificacion1,3)))
                                                                                                    @php $tiempos3=tiempos($planificacion1,3) @endphp
                                                                                                    @for($i=0;$i<2;$i++)

                                                                                                    <tr>
                                                                                                        @for($j=0;$j<8;$j++)
                                                                                                        <td class="" style="background: #7dcfee;" scope="row">{{ $tiempos3[$i][$j] }}</td>
                                                                                                        @endfor
                                                                                                    </tr>
                                                                                                    @endfor
                                                                                                    @else
                                                                                                        Sin datos para mostrar
                                                                                                    @endif
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="data-table-list">
                                                                                        <div class="table-responsive">
                                                                                            <table id="data-table-basic" class="table table-striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Task</th>
                                                                                                        <th>Fecha</th>
                                                                                                        <th>Duración aproximada</th>
                                                                                                        <th>Cantidad de personas</th>
                                                                                                        <th>Dureación real</th>
                                                                                                        <th>Día</th>
                                                                                                        <th>Departamento</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Realizada</th>
                                                                                                        <!-- <th>Avances del turno y pendientes</th> -->
                                                                                                        <th>Observaciones/Comentarios</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @php $i=1; @endphp
                                                                                                    @foreach($planificacion1->actividades as $key)
                                                                                                    @if($key->id_area==3)
                                                                                                    <tr>
                                                                                                        <td>{{ $i++ }}</td>
                                                                                                        <td>{{ $key->task }}</td>
                                                                                                        {{-- <td>{{ $key->descripcion }}</td>
                                                                                                        <td>{{ $key->turno }}</td> --}}
                                                                                                        <td>{{ $key->fecha_vencimiento }}</td>
                                                                                                        <td>{{ $key->duracion_pro }}</td>
                                                                                                        <td>{{ $key->cant_personas }}</td>
                                                                                                        <td>{{ $key->duracion_real }}</td>
                                                                                                        <td>{{ $key->dia }}</td>
                                                                                                        <td>{{ $key->areas->area }}</td>
                                                                                                        <td>{{ $key->tipo }}</td>
                                                                                                        <td>{{ $key->realizada }}</td>
                                                                                                        <!-- <td>{{ $key->observacion1 }}</td> -->
                                                                                                        <td>{{ $key->observacion2 }}</td>
                                                                                                        <td align="center">
                                                                                                            @if(buscar_p('Actividades','Modificar')=="Si")
                                                                                                            <button onclick="editar_act({{ $key->id }},'{{$key->dia}}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone"><i class="fa fa-edit"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Eliminar')=="Si")
                                                                                                            <button id="eliminar_actividad" onclick="eliminar({{$key->id}})" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-trash"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Asignar')=="Si")
                                                                                                            <button onclick="asignar({{ $key->id }},{{ $key->id_area }},'{{ $key->task }}')" type="button" class="btn btn-success" data-toggle="modal" data-target="#asignar_tarea"><i class="fa fa-user"></i> </button>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    @endif
                                                                                                    @endforeach    
                                                                                                </tbody>    
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </p>
                                                                    </div>
                                                                    @else
                                                                        <p>No se encontró planificación registrada para ésta área</p>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#gerencias" href="#gerencia_cho" aria-expanded="false">{{$gerencias2->gerencia}}</a>
                                            </h4>
                                        </div>
                                        <div id="gerencia_cho" class="collapse" role="tabpanel">
                                            <div class="panel-body">
                                                @if(!empty($planificacion2))
                                                <div class="row" style="background: #7dcfee; margin: 5px; padding: 15px;">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">                    
                                                                <div class="nk-int-st">
                                                                <b>Gerencia: {{ $planificacion2->gerencias->gerencia }}</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">                    
                                                                <div class="nk-int-st">
                                                                <b>Elaborado: {{ $planificacion2->elaborado }}</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Aprobado: {{ $planificacion2->aprobado }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Número de contrato: {{ $planificacion2->num_contrato }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Fechas: {{ $planificacion2->fechas }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Semana: {{ $planificacion2->semana }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 mb-3">
                                                            <div class="form-group ic-cmp-int">
                                                                <b>Revision: {{ $planificacion2->revision }}</b>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                @else
                                                    <p>No existe planificación registrada para ésta gerencia</p>
                                                @endif
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="accordion-stn">
                                                        <div class="panel-group" data-collapse-color="nk-red" id="area2" role="tablist" aria-multiselectable="false">
                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                <div class="panel-heading" role="tab">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#area2" href="#filtro_puerto" aria-expanded="false">Filtro-Puerto</a>
                                                                    </h4>
                                                                </div>
                                                                <div id="filtro_puerto" class="collapse in" role="tabpanel">
                                                                    <div class="panel-body">
                                                                        @if(buscar_actividades_area($num_semana_actual,4)=="Si")
                                                                        <p>
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="normal-table-list mg-t-30">
                                                                                        <div class="basic-tb-hd">
                                                                                            <h2>Totales de Duración de Horas semanales</h2>
                                                                                        </div>
                                                                                        <div class="bsc-tbl-bdr">
                                                                                            <table class="table table-bordered" border="2">
                                                                                                <thead>
                                                                                                    <tr class="" style="background: #7dcfee;">
                                                                                                        <th>Duraciones/Días</th>
                                                                                                        <th>Miércoles</th>
                                                                                                        <th>Jueves</th>
                                                                                                        <th>Viernes</th>
                                                                                                        <th>Sábado</th>
                                                                                                        <th>Domingo</th>
                                                                                                        <th>Lunes</th>
                                                                                                        <th>Martes</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @if(!empty(tiempos($planificacion2,4)))
                                                                                                    @php $tiempos4=tiempos($planificacion2,4) @endphp
                                                                                                    @for($i=0;$i<2;$i++)

                                                                                                    <tr>
                                                                                                        @for($j=0;$j<8;$j++)
                                                                                                        <td class="" style="background: #7dcfee;" scope="row">{{ $tiempos4[$i][$j] }}</td>
                                                                                                        @endfor
                                                                                                    </tr>
                                                                                                    @endfor
                                                                                                    @else
                                                                                                        Sin datos para mostrar
                                                                                                    @endif
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="data-table-list">
                                                                                        <div class="table-responsive">
                                                                                            <table id="data-table-basic" class="table table-striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Task</th>
                                                                                                        <th>Fecha</th>
                                                                                                        <th>Duración aproximada</th>
                                                                                                        <th>Cantidad de personas</th>
                                                                                                        <th>Dureación real</th>
                                                                                                        <th>Día</th>
                                                                                                        <th>Departamento</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Realizada</th>
                                                                                                        <!-- <th>Avances del turno y pendientes</th> -->
                                                                                                        <th>Observaciones/Comentarios</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @php $i=1; @endphp
                                                                                                    @foreach($planificacion2->actividades as $key)
                                                                                                    @if($key->id_area==4)
                                                                                                    <tr>
                                                                                                        <td>{{ $i++ }}</td>
                                                                                                        <td>{{ $key->task }}</td>
                                                                                                        {{-- <td>{{ $key->descripcion }}</td>
                                                                                                        <td>{{ $key->turno }}</td> --}}
                                                                                                        <td>{{ $key->fecha_vencimiento }}</td>
                                                                                                        <td>{{ $key->duracion_pro }}</td>
                                                                                                        <td>{{ $key->cant_personas }}</td>
                                                                                                        <td>{{ $key->duracion_real }}</td>
                                                                                                        <td>{{ $key->dia }}</td>
                                                                                                        <td>{{ $key->areas->area }}</td>
                                                                                                        <td>{{ $key->tipo }}</td>
                                                                                                        <td>{{ $key->realizada }}</td>
                                                                                                        <!-- <td>{{ $key->observacion1 }}</td> -->
                                                                                                        <td>{{ $key->observacion2 }}</td>
                                                                                                        <td align="center">
                                                                                                            @if(buscar_p('Actividades','Modificar')=="Si")
                                                                                                            <button onclick="editar_act({{ $key->id }},'{{$key->dia}}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone"><i class="fa fa-edit"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Eliminar')=="Si")
                                                                                                            <button id="eliminar_actividad" onclick="eliminar({{$key->id}})" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-trash"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Asignar')=="Si")
                                                                                                            <button onclick="asignar({{ $key->id }},{{ $key->id_area }},'{{ $key->task }}')" type="button" class="btn btn-success" data-toggle="modal" data-target="#asignar_tarea"><i class="fa fa-user"></i> </button>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    @endif
                                                                                                    @endforeach    
                                                                                                </tbody>    
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </p>
                                                                    </div>
                                                                    @else
                                                                        <p>No se encontró planificación registrada para ésta área</p>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                <div class="panel-heading" role="tab">
                                                                    <h4 class="panel-title">
                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#area2" href="#ect" aria-expanded="false">ECT</a>
                                                                    </h4>
                                                                </div>
                                                                <div id="ect" class="collapse" role="tabpanel">
                                                                    <div class="panel-body">
                                                                        @if(buscar_actividades_area($num_semana_actual,5)=="Si")
                                                                        <p>
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="normal-table-list mg-t-30">
                                                                                        <div class="basic-tb-hd">
                                                                                            <h2>Totales de Duración de Horas semanales</h2>
                                                                                        </div>
                                                                                        <div class="bsc-tbl-bdr">
                                                                                            <table class="table table-bordered" border="2">
                                                                                                <thead>
                                                                                                    <tr class="" style="background: #7dcfee;">
                                                                                                        <th>Duraciones/Días</th>
                                                                                                        <th>Miércoles</th>
                                                                                                        <th>Jueves</th>
                                                                                                        <th>Viernes</th>
                                                                                                        <th>Sábado</th>
                                                                                                        <th>Domingo</th>
                                                                                                        <th>Lunes</th>
                                                                                                        <th>Martes</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @if(!empty(tiempos($planificacion2,5)))
                                                                                                    @php $tiempos5=tiempos($planificacion2,5) @endphp
                                                                                                    @for($i=0;$i<2;$i++)

                                                                                                    <tr>
                                                                                                        @for($j=0;$j<8;$j++)
                                                                                                        <td class="" style="background: #7dcfee;" scope="row">{{ $tiempos5[$i][$j] }}</td>
                                                                                                        @endfor
                                                                                                    </tr>
                                                                                                    @endfor
                                                                                                    @else
                                                                                                        Sin datos para mostrar
                                                                                                    @endif
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="data-table-list">
                                                                                        <div class="table-responsive">
                                                                                            <table id="data-table-basic" class="table table-striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Task</th>
                                                                                                        <th>Fecha</th>
                                                                                                        <th>Duración aproximada</th>
                                                                                                        <th>Cantidad de personas</th>
                                                                                                        <th>Dureación real</th>
                                                                                                        <th>Día</th>
                                                                                                        <th>Departamento</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Realizada</th>
                                                                                                        <!-- <th>Avances del turno y pendientes</th> -->
                                                                                                        <th>Observaciones/Comentarios</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @php $i=1; @endphp
                                                                                                    @foreach($planificacion2->actividades as $key)
                                                                                                    @if($key->id_area==5)
                                                                                                    <tr>
                                                                                                        <td>{{ $i++ }}</td>
                                                                                                        <td>{{ $key->task }}</td>
                                                                                                        {{-- <td>{{ $key->descripcion }}</td>
                                                                                                        <td>{{ $key->turno }}</td> --}}
                                                                                                        <td>{{ $key->fecha_vencimiento }}</td>
                                                                                                        <td>{{ $key->duracion_pro }}</td>
                                                                                                        <td>{{ $key->cant_personas }}</td>
                                                                                                        <td>{{ $key->duracion_real }}</td>
                                                                                                        <td>{{ $key->dia }}</td>
                                                                                                        <td>{{ $key->areas->area }}</td>
                                                                                                        <td>{{ $key->tipo }}</td>
                                                                                                        <td>{{ $key->realizada }}</td>
                                                                                                        <!-- <td>{{ $key->observacion1 }}</td> -->
                                                                                                        <td>{{ $key->observacion2 }}</td>
                                                                                                        <td align="center">
                                                                                                            @if(buscar_p('Actividades','Modificar')=="Si")
                                                                                                            <button onclick="editar_act({{ $key->id }},'{{$key->dia}}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone"><i class="fa fa-edit"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Eliminar')=="Si")
                                                                                                            <button id="eliminar_actividad" onclick="eliminar({{$key->id}})" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-trash"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Asignar')=="Si")
                                                                                                            <button onclick="asignar({{ $key->id }},{{ $key->id_area }},'{{ $key->task }}')" type="button" class="btn btn-success" data-toggle="modal" data-target="#asignar_tarea"><i class="fa fa-user"></i> </button>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    @endif
                                                                                                    @endforeach    
                                                                                                </tbody>    
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </p>
                                                                    </div>
                                                                    @else
                                                                        <p>No se encontró planificación registrada para ésta área</p>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                <div class="panel-heading" role="tab">
                                                                    <h4 class="panel-title">
                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#area2" href="#colorados" aria-expanded="false">Los Colorados</a>
                                                                    </h4>
                                                                </div>
                                                                <div id="colorados" class="collapse" role="tabpanel">
                                                                    <div class="panel-body">
                                                                        @if(buscar_actividades_area($num_semana_actual,6)=="Si")
                                                                        <p>
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="normal-table-list mg-t-30">
                                                                                        <div class="basic-tb-hd">
                                                                                            <h2>Totales de Duración de Horas semanales</h2>
                                                                                        </div>
                                                                                        <div class="bsc-tbl-bdr">
                                                                                            <table class="table table-bordered" border="2">
                                                                                                <thead>
                                                                                                    <tr class="" style="background: #7dcfee;">
                                                                                                        <th>Duraciones/Días</th>
                                                                                                        <th>Miércoles</th>
                                                                                                        <th>Jueves</th>
                                                                                                        <th>Viernes</th>
                                                                                                        <th>Sábado</th>
                                                                                                        <th>Domingo</th>
                                                                                                        <th>Lunes</th>
                                                                                                        <th>Martes</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @if(!empty(tiempos($planificacion2,6)))
                                                                                                    @php $tiempos6=tiempos($planificacion2,6) @endphp
                                                                                                    @for($i=0;$i<2;$i++)

                                                                                                    <tr>
                                                                                                        @for($j=0;$j<8;$j++)
                                                                                                        <td class="" style="background: #7dcfee;" scope="row">{{ $tiempos6[$i][$j] }}</td>
                                                                                                        @endfor
                                                                                                    </tr>
                                                                                                    @endfor
                                                                                                    @else
                                                                                                        Sin datos para mostrar
                                                                                                    @endif
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="data-table-list">
                                                                                        <div class="table-responsive">
                                                                                            <table id="data-table-basic" class="table table-striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Task</th>
                                                                                                        <th>Fecha</th>
                                                                                                        <th>Duración aproximada</th>
                                                                                                        <th>Cantidad de personas</th>
                                                                                                        <th>Dureación real</th>
                                                                                                        <th>Día</th>
                                                                                                        <th>Departamento</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Realizada</th>
                                                                                                        <!-- <th>Avances del turno y pendientes</th> -->
                                                                                                        <th>Observaciones/Comentarios</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @php $i=1; @endphp
                                                                                                    @foreach($planificacion2->actividades as $key)
                                                                                                    @if($key->id_area==6)
                                                                                                    <tr>
                                                                                                        <td>{{ $i++ }}</td>
                                                                                                        <td>{{ $key->task }}</td>
                                                                                                        {{-- <td>{{ $key->descripcion }}</td>
                                                                                                        <td>{{ $key->turno }}</td> --}}
                                                                                                        <td>{{ $key->fecha_vencimiento }}</td>
                                                                                                        <td>{{ $key->duracion_pro }}</td>
                                                                                                        <td>{{ $key->cant_personas }}</td>
                                                                                                        <td>{{ $key->duracion_real }}</td>
                                                                                                        <td>{{ $key->dia }}</td>
                                                                                                        <td>{{ $key->areas->area }}</td>
                                                                                                        <td>{{ $key->tipo }}</td>
                                                                                                        <td>{{ $key->realizada }}</td>
                                                                                                        <!-- <td>{{ $key->observacion1 }}</td> -->
                                                                                                        <td>{{ $key->observacion2 }}</td>
                                                                                                        <td align="center">
                                                                                                            @if(buscar_p('Actividades','Modificar')=="Si")
                                                                                                            <button onclick="editar_act({{ $key->id }},'{{$key->dia}}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone"><i class="fa fa-edit"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Eliminar')=="Si")
                                                                                                            <button id="eliminar_actividad" onclick="eliminar({{$key->id}})" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-trash"></i> </button>
                                                                                                            @endif
                                                                                                            @if(buscar_p('Actividades','Asignar')=="Si")
                                                                                                            <button onclick="asignar({{ $key->id }},{{ $key->id_area }},'{{ $key->task }}')" type="button" class="btn btn-success" data-toggle="modal" data-target="#asignar_tarea"><i class="fa fa-user"></i> </button>
                                                                                                            @endif
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    @endif
                                                                                                    @endforeach    
                                                                                                </tbody>    
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </p>
                                                                    </div>
                                                                    @else
                                                                        <p>No se encontró planificación registrada para ésta área</p>
                                                                    @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endif

@include('planificacion.modales.eliminar')
@include('planificacion.modales.asignar_tarea')
@include('planificacion.modales.clave_root_eliminar')

@endsection

@section('scripts')
<script type="text/javascript">
    function ModalTwo(){
        $('#myModaltwo').modal('hide');
        $('#myModaltwo').on('hidden', function () {
            $('#claverrot').modal('show')
        });
    }
</script>
<script type="text/javascript">


$(document).ready( function(){
    
    $("#id_planificacion").attr('multiple',true);
    $('#id_planificacion').replaceWith($('#id_planificacion').clone().attr('name', 'id_planificacion[]'));
    $("#tipo").on('change',function (event) {        
        var tipo=event.target.value;        
        if (tipo=="PM02") {
            $("#pm02").removeAttr('style');
            $("#departamentos").css('display','none');
            $("#departamentos option").val(1).attr('selected',true);
                
        }else{
            if (tipo=="PM03") {
                $("#departamentos").css('display','block');
                $("#departamentos option").val(1).attr('selected',true);
            } else{
                $("#departamentos").css('display','none');
                $("#departamentos option").val(1).attr('selected',true);
            }
            $("#pm02").css('display','none');
            $("#des_actividad").removeAttr('style');

            $("#areas").css('display','block');
            $("#tab2").removeAttr('style');           
              
        }

    });

    $("#id_actividad").on('change',function (event) {        
        var id_actividad=event.target.value;
        
        if (id_actividad!=="0") {
            $("#areas").css('display','none');
            $("#des_actividad").css('display','none');
            $("#tab2").css('display','none');


            $("#task").removeAttr('required');
            $("#cant_personas").removeAttr('required');
        }else{
            console.log("entra");
            $("#areas").css('display','block');
            $("#tab2").removeAttr('style');
            $("#des_actividad").removeAttr('style');
        }
    });
    $("#actividad").on('click',function (event) {
        
        var actividad=event.target.value;
        
        if (actividad==0) {
            $("#accion").text('Registrar');
            $("#id_actividad_act").val("");
        }
//------------------------------------------------------------------DISPLAY CHECK AND NONE RADIO
            $("#area_radio").css('display','none');
                $("#miercoles_r").prop('disabled',true);
                $("#jueves_r").prop('disabled',true);
                $("#viernes_r").prop('disabled',true);
                $("#sabado_r").prop('disabled',true);
                $("#domingo_r").prop('disabled',true);
                $("#lunes_r").prop('disabled',true);
                $("#martes_r").prop('disabled',true);
            $("#area_check").css('display','block');
                $("#mie").prop('disabled',false);
                $("#jue").prop('disabled',false);
                $("#vie").prop('disabled',false);
                $("#sab").prop('disabled',false);
                $("#dom").prop('disabled',false);
                $("#lun").prop('disabled',false);
                $("#mar").prop('disabled',false);
//------FINISH
    // $("#mie").replaceWith($('#mie').clone().attr('type', 'checkbox'));
    // $("#jue").replaceWith($('#jue').clone().attr('type', 'checkbox'));
    // $("#vie").replaceWith($('#vie').clone().attr('type', 'checkbox'));
    // $("#sab").replaceWith($('#sab').clone().attr('type', 'checkbox'));
    // $("#dom").replaceWith($('#dom').clone().attr('type', 'checkbox'));
    // $("#lun").replaceWith($('#lun').clone().attr('type', 'checkbox'));
    // $("#mar").replaceWith($('#mar').clone().attr('type', 'checkbox'));
    });
    var id_departamento=1;
    $.get("/actividades/"+id_departamento+"/buscar_departamentos",function (data) {
        
        if (data.length>0) {
            $("#id_departamento").empty();
            for (var i = 0; i < data.length; i++) {
                $("#id_departamento").append("<option value='"+data[i].id+"'>"+data[i].departamento+"</option>");
            }
        }
    });
});
function editar_act(id_actividad,dia) {
        
        $("#accion").text('Actualizar');
        
        $("#id_actividad_act").val(id_actividad);
        $.get("/actividades/"+id_actividad+"/edit",function (data) {
                
                //console.log(data[0].tipo);
                //agregando tipo en select
                $("#tipo").empty();
                switch(data[0].tipo){
                    case 'PM01':
                        $("#tipo").append('<option value="PM01" selected="selected">PM01</option>');
                        $("#tipo").append('<option value="PM02">PM02</option>');
                        $("#tipo").append('<option value="PM03">PM03</option>');
                        $("#tipo").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM02':
                        $("#tipo").append('<option value="PM01">PM01</option>');
                        $("#tipo").append('<option value="PM02" selected="selected">PM02</option>');
                        $("#tipo").append('<option value="PM03">PM03</option>');
                        $("#tipo").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM03':
                        $("#tipo").append('<option value="PM01">PM01</option>');
                        $("#tipo").append('<option value="PM02">PM02</option>');
                        $("#tipo").append('<option value="PM03" selected="selected">PM03</option>');
                        $("#tipo").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM04':
                        $("#tipo").append('<option value="PM01">PM01</option>');
                        $("#tipo").append('<option value="PM02">PM02</option>');
                        $("#tipo").append('<option value="PM03">PM03</option>');
                        $("#tipo").append('<option value="PM04" selected="selected">PM04</option>');
                    break;

                }

                //seleccionando opcion de actividades
            $("#id_actividad option").each(function(){

                if ($(this).text()==data[0].task) {
                
                    $(this).attr("selected",true);
               }
            });
            
                
            $("#observacion1").val(data[0].observacion1);
            $("#observacion2").val(data[0].observacion2);
            $("#id_planificacion").attr('multiple',false);
            $('#id_planificacion').replaceWith($('#id_planificacion').clone().attr('name', 'id_planificacion'));
            
            $("#id_planificacion option").each(function(){

                if ($(this).val()==data[0].id_planificacion) {
                
                    $(this).attr("selected",true);
                }
            });
            $("#id_area option").each(function(){

                if ($(this).val()==data[0].id_area) {
                
                    $(this).attr("selected",true);
                }
            });
            //campos en caracteristicas
            $("#task").val(data[0].task);
            $("#descripcion").val(data[0].descripcion);
            $("#duracion_pro").val(data[0].duracion_pro);
            $("#duracion_real").val(data[0].duracion_real);
            $("#cant_personas").val(data[0].cant_personas);
            // datos en turnos
            if ($("#ts1").text()==data[0].turno) {
                $("#ts1").attr('checked',true);
            } else {
                if ($("#ts2").text()==data[0].turno) {   
                    $("#ts2").attr('checked',true);
                } else {
                    $("#ts3").attr('checked',true);
                }
            }

            
            /*$('input:radio[name=dia]').each(function() { 
                
                
                if($('input:radio[name=dia]').is(':checked')) {  
                    $('input:radio[name=dia]').attr('checked', false);
                } else {  
                    $('input:radio[name=dia]').attr('checked', false);
                }
            });*/
//------------------------------------------------------------------DISPLAY RADIO AND NONE CHECK
            $("#area_radio").css('display','block');
                $("#miercoles_r").prop('disabled',false);
                $("#jueves_r").prop('disabled',false);
                $("#viernes_r").prop('disabled',false);
                $("#sabado_r").prop('disabled',false);
                $("#domingo_r").prop('disabled',false);
                $("#lunes_r").prop('disabled',false);
                $("#martes_r").prop('disabled',false);
            $("#area_check").css('display','none');
                $("#mie").prop('disabled',true);
                $("#jue").prop('disabled',true);
                $("#vie").prop('disabled',true);
                $("#sab").prop('disabled',true);
                $("#dom").prop('disabled',true);
                $("#lun").prop('disabled',true);
                $("#mar").prop('disabled',true);
//------FINISH
            if (dia == "Mié") {
                $("#miercoles_r").prop('checked',true);
            }
            if (dia == "Jue") {
                $("#jueves_r").prop('checked',true);
            }
            if (dia == "Vie") {
                $("#viernes_r").prop('checked',true);
            }
            if (dia == "Sáb") {
                $("#sabado_r").prop('checked',true);
            }
            if (dia == "Dom") {
                $("#domingo_r").prop('checked',true);
            }
            if (dia == "Lun") {
                $("#lunes_r").prop('checked',true);
            }
            if (dia == "Mar") {
                $("#martes_r").prop('checked',true);
            }





            if($("#mie").val()==data[0].dia){
                
                $("#mie").prop('checked',true);
            }
            if($("#jue").val()==data[0].dia){
                
                $("#jue").prop('checked',true);
            }
            if($("#vie").val()==data[0].dia){
                
                $("#vie").prop('checked',true);
            }
            if($("#sab").val()==data[0].dia){
                
                $("#sab").prop('checked',true);
            }
            if($("#dom").val()==data[0].dia){
                
                $("#dom").prop('checked',true);
            }
            if($("#lun").val()==data[0].dia){
                
                $("#lun").prop('checked',true);
            }
            if($("#mar").val()==data[0].dia){
                
                $("#mar").prop('checked',true);
            }
            
            //console.log(data[0].dia);

            
            });
            //mostrando archivos cargadas a la actividad
            $.get("/actividades/"+id_actividad+"/mis_archivos",function (data) {
                //console.log(data.length);
                if (data.length!=0) {
                    $("#archivos_cargados").css('display','block');
                    $("#mis_archivos").empty();
                    for (var i = 0; i < data.length; i++) {
                        $("#mis_archivos").append("<li id='archivo'><div class='alert alert-info' role='alert'>"+data[i].nombre+" <a class='btn btn-danger pull-right' onclick='eliminar_archivo("+data[i].id+",1)'><i class='fa fa-trash' style='color:;'></i> Eliminar</a></div></li>");
                    }
                }
            }); 
            //mostrando imágenes cargadas a la actividad
            $.get("/actividades/"+id_actividad+"/mis_imagenes",function (data) {
                //console.log(data.length);
                if (data.length!=0) {
                    $("#imagenes_cargadas").css('display','block');
                    $("#mis_imagenes").empty();
                    for (var i = 0; i < data.length; i++) {
                        //console.log(data[i].url);

                        $("#mis_imagenes").append("<li id='imagen_eliminar'><div class='alert alert-info' role='alert'><img src='{!! asset('"+ data[i].url +"') !!}' height='100px' width='100px'><a class='btn btn-danger pull-right' onclick='eliminar_archivo("+data[i].id+",2)'><i class='fa fa-trash' style='color:;'></i> Eliminar</a></div></li>");
                        //$("#mis_imagenes").append("<li>"+data[i].url+"</li>");
                    }
                }
            }); 
}
function eliminar_archivo(id_archivo,tipo) {
        var xtipo=tipo;
        console.log(tipo);
    $.get("/actividades/"+id_archivo+"/eliminar_archivos",function (data) {
                if (data.length!=0) {
                    if (xtipo==1) {
                        console.log("cuando es archivo");
                    $("#archivos_cargados").css('display','none');
                    $("#mis_archivos").empty();
                    setTimeout(function() { $("#archivos_cargados").show(); }, 3000);
                    $('.archivos_cargados').show("slow");
                    }else{
                    $("#imagenes_cargados").css('display','none');
                    $("#mis_imagenes").empty();
                    setTimeout(function() { $("#imagenes_cargados").show(); }, 1000);
                    }

                    for (var i = 0; i < data.length; i++) {
                                                   
                    if (data[i].tipo=="file") {
                        $("#mis_archivos").append("<li><div class='alert alert-info' role='alert'>"+data[i].nombre+" <a class='btn btn-danger pull-right'  onclick='eliminar_archivo("+data[i].id+",1)'><i class='fa fa-trash' style='color:;'></i> Eliminar</a></div></li>");
                        $("#archivo").css('display','none');
                    } else {
                        $("#mis_imagenes").append("<li id='imagen_eliminar'><div class='alert alert-info' role='alert'><img src='{!! asset('"+ data[i].url +"') !!}' height='100px' width='100px'><a class='btn btn-danger pull-right'   onclick='eliminar_archivo("+data[i].id+",2)'><i class='fa fa-trash' style='color:;'></i> Eliminar</a></div></li>");
                    }
                    }
                }else{
                        console.log("cuando es 0 data");
                    if (xtipo==1) {
                    $("#archivos_cargados").css('display','none');
                    $("#mis_archivos").empty();
                    
                    }else{
                    $("#imagenes_cargados").css('display','none');
                    $("#mis_imagenes").empty();
                    }

                }
    });

}
function asignar(id_actividad,id_area,tarea) {
    
    $.get("/empleados/"+id_area+"/buscar",function (datos) {
        $("#id_actividad_asig").val(id_actividad);
        $("#tarea").text(tarea);
        if (datos.length>0) {
            
            $("#id_empleado").empty();
            for (var i = 0; i < datos.length; i++) {
                $("#id_empleado").append('<option value="'+datos[i].id+'">'+datos[i].apellidos+', '+datos[i].nombres+' RUT: '+datos[i].rut+'</option>');
            }
        }

    });
}

function eliminar(id_actividad) {
        $("#id_actividad_eliminar").val(id_actividad);
    }
</script>
@endsection