  
@extends('layouts.appLayout')
<head>
    <style type="text/css">
        div.scroll_horizontal {
            overflow: auto;
            white-space: nowrap;
        }
    </style>
</head>

@section('breadcomb')
<!-- Breadcomb area Start-->

{{-- 
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="scroll_horizontal">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Horas realizadas</h2>
                                        <hr>
                                        <h2>0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Áreas</h2>
                                        <hr>
                                        <h2>0</h2>
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


<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="scroll_horizontal">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-up-arrow"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Actividades asignadas</h2>
                                        <hr>
                                        <h2>0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-checked"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Actividades completadas</h2>
                                        <hr>
                                        <h2>0</h2>
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


 --}}

<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Crear actividad</h2>
                                    <p>Ver actividades de la semana actual | registrar actividad.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pull-right">
                                @if(buscar_p('Actividades','Registrar')=="Si" || buscar_p('Actividades','Registro de PM03')=="Si")
                                <button id="actividad" value="0" data-toggle="modal" data-target="#crear_actividad" class="btn btn-default" data-backdrop="static" data-keyboard="false"><i class="notika-icon notika-edit"></i> Nueva actividad</button>
                                @endif
                            </div>
                        </div>
                        @include('planificacion.modales.crear_actividad')
                        @include('planificacion.modales.cerrar_modal')
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
@php $nombres="";$apellidos=""; $id_empleado=""; @endphp
@foreach($empleados as $key)
        @if($key->id_usuario==\Auth::User()->id)
            @php $nombres=$key->nombres; $apellidos=$key->apellidos; $id_empleado=$key->id;@endphp

        @endif
@endforeach
<div class="form-element-area modals-single">
    <div class="container">
        @include('flash::message')
            <div class="alert alert-default" role="alert" id="message_f">
                <center><strong><span id="mensaje_f"></span></strong></center>
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
                <br>
            </div>
        <div class="widget-tabs-int">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row" >
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <input type="hidden" name="nombres_emp" id="nombres_emp" value="{{ $nombres }}">
                            <input type="hidden" name="apellidos_emp" id="apellidos_emp" value="{{ $apellidos }}">
                            <input type="hidden" name="id_empleado" id="id_empleado" value="{{ $id_empleado }}">
                            <label for="busqueda">Seleccione el día</label><br>
                            <div class="form-group">
                               <select name="dia" id="dia_b" class="form-control select2" title="Seleccione el dia a buscar">
                                   <option value="3">Miércoles</option>
                                   <option value="4">Jueves</option>
                                   <option value="5">Viernes</option>
                                   <option value="6">Sábado</option>
                                   <option value="0">Domingo</option>
                                   <option value="1">Lunes</option>
                                   <option value="2">Martes</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <label for="busqueda">Seleccione la planificación</label><br>
                            <div class="form-group">
                               <select class="form-control select2" name="id_planificacion_b" id="id_planificacion_b">
                                <option value="0">Seleccione una planificación</option>
                                @foreach($planificaciones as $item)
                                    <option value="{{$item->id}}">Semana: {{$item->semana}} | {{$item->fechas}} | {{$item->gerencias->gerencia}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <label for="busqueda">Seleccione el área</label><br>
                            <div class="form-group">
                               <select name="id_area_b" id="id_area_b" class="form-control select2" title="Seleccione el área a buscar">
                                    
                               </select>
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="tab-hd">
                        <h2>Actividades</h2>
                        <p>Actividades registradas y asignadas al sistema</p>
                    </div>
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs tab-nav-center">
                            <li class="active"><a data-toggle="tab" href="#home">Actividades</a></li>
                            <!-- <li><a data-toggle="tab" href="#menu1">Actividades asignadas</a></li> -->
                        </ul>
                        <div class="tab-content tab-custom-st">
                            <div id="home" class="tab-pane fade in active">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                <div class="card-box">
                                                    <div class="chat-conversation">
                                                        <div class="chat-widget-input">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="data-table-list">
                                                                            <div class="table-responsive">
                                                                                <div class="data-table-list">
                                                                                    <div class="table-responsive">
                                                                                        <table id="data-table-basic" class="table table-striped">
                                                                                                
                                                                                        </table>
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
                            <div id="menu1" class="tab-pane fade">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="add-todo-list notika-shadow ">
                                                <div class="realtime-ctn">
                                                    <div class="realtime-title">
                                                        <h2>Actividades - Resúmen</h2>
                                                    </div>
                                                </div>
                                                <div class="card-box">
                                                    <div class="todoapp" id="todoapp" class="overflow-auto">
                                                        <div class="scrollbar scrollbar-primary">
                                                            <?php $i=1; ?>
                                                            @foreach($actividadesProceso as $key)
                                                                @foreach($actividades as $key2)
                                                                    @if($key->id_actividad == $key2->id)
                                                                        <div id="contenido{{$i}}">
                                                                            <input type="hidden" name="contenido{{$i}}" id="contenido" value="contenido{{$i}}" onclick="">
                                                                            <?php $f=date('Y-m-d');
                                                                                if($f < $key2->planificacion->fechas){
                                                                                    $estilo="panel panel-danger";
                                                                                }else{
                                                                                    $estilo="panel panel-primary";
                                                                                }
                                                                            ?>
                                                                            <div class="{{$estilo}}">
                                                                              <div class="panel-heading"><strong>{{$key2->tipo}}</strong> - {{$key2->task}} 
                                                                                @if($f < $key2->planificacion->fechas)
                                                                                    <strong>Vencido</strong>
                                                                                @endif
                                                                               <a href="#" class="btn btn-danger" id="eliminar_actividad" onclick="eliminar('{{$key->id_actividad}}','{{$key->id_empleado}}','contenido{{$i}}')" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltre"><span class="fa fa-trash"></span></a>
                                                                              </div>
                                                                                <div class="panel-body">
                                                                                    @if(Auth::user()->tipo_user!= "Empleado")
                                                                                        <strong>Empleados:</strong> 
                                                                                        @foreach($empleados as $data)
                                                                                            @if($data->id == $key->id_empleado)
                                                                                                {{$data->nombres}} {{$data->apellidos}} - {{$data->rut}}<br>
                                                                                            @endif
                                                                                        @endforeach()
                                                                                    @endif
                                                                                    <strong>Fecha:</strong> {{$key2->fecha_vencimiento}}<br>
                                                                                    <strong>Planificación:</strong> {{$key2->planificacion->fechas}}<br>
                                                                                    <strong>Día:</strong> {{$key2->dia}}<br>
                                                                                    <strong>Semana:</strong> {{$key2->planificacion->semana}}<br>
                                                                                    <strong>Área:</strong> {{$key2->areas->area}}<br>
                                                                                    <strong>Departamento:</strong> {{$key2->departamentos->departamento}}<br>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php $i++; ?>
                                                                    @endif
                                                                @endforeach()
                                                            @endforeach()
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

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="basic-tb-hd text-center">
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
                    
                </div>
                
                
            </div>
        </div>
    </div>
</div>


@elseif(\Auth::User()->tipo_user!=="Empleado")
<!-- Form Element area Start-->
<div class="form-element-area modals-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        
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
                            <div class="widget-tabs-int">
                                
                                <div class="tab-hd">
                                    <h2>Actividades</h2>
                                    <p>Actividades registradas y asignadas al sistema</p>
                                </div>
                                <div class="widget-tabs-list">
                                    <ul class="nav nav-tabs tab-nav-center">
                                        <li class="active"><a data-toggle="tab" href="#home">Actividades</a></li>
                                        <!-- <li><a data-toggle="tab" href="#menu1">Actividades asignadas</a></li> -->
                                    </ul>
                                    <div class="tab-content tab-custom-st">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                            <div class="card-box">
                                                                <div class="chat-conversation">
                                                                    <div class="chat-widget-input">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="data-table-list">
                                                                                        <div class="table-responsive">
                                                                                            <table id="data-table-basic2" class="table table-striped">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Task</th>
                                                                                                        <th>Fecha</th>
                                                                                                        <th>Día</th>
                                                                                                        <th>Área</th>
                                                                                                        <th>Departamento</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Realizada</th>
                                                                                                        <th>Acciones</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    
                                                                                                @php $i=1; @endphp
                                                                                                    @foreach($actividades as $key)
                                                                                                            <tr>
                                                                                                                <td>{{ $i++ }}</td>
                                                                                                                <td width="25%">{{ $key->task }}</td>
                                                                                                                {{-- 
                                                                                                                <td>{{ $key->descripcion }}</td>
                                                                                                                <td>{{ $key->duracion_pro }}</td>
                                                                                                                <td>{{ $key->cant_personas }}</td>
                                                                                                                <td>{{ $key->duracion_real }}</td>
                                                                                                                <td>{{ $key->observacion1 }}</td>
                                                                                                                <td>{{ $key->observacion2 }}</td>
                                                                                                                --}}
                                                                                                                <td>{{ $key->fecha_vencimiento }}</td>
                                                                                                                <td>{{ $key->dia }}</td>
                                                                                                                <td>{{ $key->areas->area }}</td>
                                                                                                                <td>{{ $key->departamentos->departamento }}</td>
                                                                                                                <td>{{ $key->tipo }}</td>
                                                                                                                <td>{{ $key->realizada }}</td>
                                                                                                                <td width="500">
                                                                                                                    @if(buscar_p('Actividades','Ver')=="Si")
                                                                                                                    <button onclick="ver_actividad('{{ $key->id }}','{{ $key->task }}','{{ $key->fecha_vencimiento }}','{{ $key->descripcion }}','{{ $key->duracion_pro }}','{{ $key->cant_personas }}','{{ $key->duracion_real }}','{{ $key->dia }}','{{ $key->tipo }}','{{ $key->realizada }}','{{ $key->areas->area }}','{{ $key->observacion2 }}','{{ $key->departamentos->departamento }}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#ver_actividad"><i class="fa fa-search"></i> </button>
                                                                                                                    @endif
                                                                                                                    @if(buscar_p('Actividades','Modificar')=="Si")
                                                                                                                    <button onclick="editar_act({{ $key->id }},'{{$key->dia}}')" type="button" class="btn btn-info" data-toggle="modal" data-target="#crear_actividad"><i class="fa fa-edit"></i> </button>
                                                                                                                    @endif
                                                                                                                    @if(buscar_p('Actividades','Eliminar')=="Si")
                                                                                                                    <button id="eliminar_actividad" onclick="eliminar({{$key->id }} )" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-trash"></i> </button>
                                                                                                                    @endif
                                                                                                                    @if(buscar_p('Actividades','Asignar')=="Si")
                                                                                                                    <button onclick="asignar({{ $key->id }},{{ $key->id_area }},'{{ $key->task }}')" type="button" class="btn btn-success" data-toggle="modal" data-target="#asignar_tarea"><i class="fa fa-user"></i> </button>
                                                                                                                    @endif
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                    @endforeach
                                                                                                </tbody>    
                                                                                            </table>
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
                                        {{-- 
                                            <div id="menu1" class="tab-pane fade">
                                                <div class="tab-ctn">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="add-todo-list notika-shadow ">
                                                                <div class="realtime-ctn">
                                                                    <div class="realtime-title">
                                                                        <h2>Actividades - Resúmen</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="card-box">
                                                                    <hr>
                                                                    <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                              <div class="row" >
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                      
                                                                                      <label for="busqueda">Seleccione el día</label><br>
                                                                                      <div class="form-group">
                                                                                         <select name="dia" id="dia_b" class="form-control select2" title="Seleccione el dia a buscar">
                                                                                             <option value="3">Miércoles</option>
                                                                                             <option value="4">Jueves</option>
                                                                                             <option value="5">Viernes</option>
                                                                                             <option value="6">Sábado</option>
                                                                                             <option value="0">Domingo</option>
                                                                                             <option value="1">Lunes</option>
                                                                                             <option value="2">Martes</option>
                                                                                         </select>
                                                                                      </div>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                      <label for="busqueda">Seleccione el área</label><br>
                                                                                      <div class="form-group">
                                                                                         <select class="form-control select2" name="id_planificacion_b" id="id_planificacion_b">
                                                                                          <option value="0">Seleccione una planificación</option>
                                                                                          @foreach($planificaciones as $item)
                                                                                              <option value="{{$item->id}}">Semana: {{$item->semana}} | {{$item->fechas}} | {{$item->gerencias->gerencia}}</option>
                                                                                          @endforeach
                                                                                          </select>
                                                                                      </div>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                    <label for="busqueda">Seleccione el área</label><br>
                                                                                    <div class="form-group">
                                                                                        <select name="id_area_b" id="id_area_b" class="form-control select2" title="Seleccione el área a buscar">
                                                                                              
                                                                                        </select>
                                                                                </div>
                                                                            </div>
                                                                                
                                                                        </div>
                                                                        <hr>
                                                                    <div class="todoapp" id="todoapp" class="overflow-auto">
                                                                        <div class="scrollbar scrollbar-primary">
                                                                            
                                                                            <div class="data-table-list">
                                                                                <div class="table-responsive">
                                                                                    <table id="data-table-basic" class="table table-striped">
                                                                                    </table>
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
                                        --}}
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
@include('planificacion.modales.ver_actividad')
@include('planificacion.modales.cambiar_status_actividad')
@include('partials.modalActividades')
@endsection

@section('scripts')
<script type="text/javascript">
    //console.log("+++++++++++++++++++++++++");
    function ModalTwo(){
        $('#myModaltwo').modal('hide');
        $('#myModaltwo').on('hidden', function () {
            $('#claverrot').modal('show')
        });
    }
</script>
<script type="text/javascript">
    //console.log("------------------------------");
$(document).ready( function(){
    
    
    $("#cambiar_s").on("change",function (event) {
        var status=event.target.value;
        if (status == 1) {
            $('#duracion_real_f').prop('disabled',true).prop('required', false);
            $('#comentario_f').prop('disabled',true).prop('required', false);
        } else {
            $('#duracion_real_f').prop('disabled',false).prop('required', true);
            $('#comentario_f').prop('disabled',false).prop('required', true);
        }

    });
    //console.log("obj");
    //------ realizando busqueda de las actividades deacuerdo al filtro
        //select dinámico
        $("#id_gerencia_search").on("change",function (event) {
            //console.log("select dinámico");
            var id_gerencia=event.target.value;
            
            $.get("/planificacion/"+id_gerencia+"/buscar",function (data) {
                
                $("#id_area_search").empty();
            
            if(data.length > 0){
                for (var i = 0; i < data.length ; i++) 
                {  
                    $("#id_area_search").removeAttr('disabled');
                    $("#id_area_search").append('<option value="'+ data[i].id + '">' + data[i].area +'</option>');
                }
            }else{
                
                $("#id_area_search").attr('disabled', false);
            }
            });
        });
        
    //-----------------------------------------
    
    $("#id_planificacion").attr('multiple',true);
    $('#id_planificacion').replaceWith($('#id_planificacion').clone().attr('name', 'id_planificacion[]'));
    
    $("#tipo1").on('change',function (event) { 
   // console.log("entro");
        var tipo1=event.target.value;        
        if (tipo1=="PM02") {
            $("#pm02").removeAttr('style');
            $("#departamentos").css('display','none');
            $("#departamentos option").val(1).attr('selected',true);
                
        }else{
            if (tipo1=="PM03") {
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
        //console.log("act");     
        var id_actividad=event.target.value;
        
        if (id_actividad!=="0") {
            $("#areas").css('display','none');
            $("#des_actividad").css('display','none');
            //$("#des_actividad").empty();
            //$("#des_actividad").detach();
            $("#tab2").css('display','none');
            $("#task1").removeAttr('required');
            $("#cant_personas1").removeAttr('required');
        }else{
            //console.log("entra");
            $("#areas").css('display','block');
            $("#tab2").removeAttr('style');
            $("#des_actividad").removeAttr('style');
            //$("#des_actividad").css('display','block');
        }
    });

    $("#actividad").on('click',function (event) {
        
        var actividad=event.target.value;
        //console.log("index");
        if (actividad==0) {
            $("#accion").text('Registrar');
            $("#accion2").text('registro');
            $("#accion3").text('registro');
            $("#accion4").text('registro');
            $("#id_actividad_act").val("");
        }
//---------------------------------------------DISPLAY CHECK AND NONE RADIO
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
        $("#accion2").text('edición');
        $("#accion3").text('edición');
        $("#accion4").text('edición');
        
        $("#id_actividad_act").val(id_actividad);
        $.get("/actividades/"+id_actividad+"/edit",function (data) {
                
                //console.log(data[0].tipo);
                //agregando tipo en select
                $("#tipo1").empty();
                switch(data[0].tipo){
                    case 'PM01':
                        $("#tipo1").append('<option value="PM01" selected="selected">PM01</option>');
                        $("#tipo1").append('<option value="PM02">PM02</option>');
                        $("#tipo1").append('<option value="PM03">PM03</option>');
                        $("#tipo1").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM02':
                        $("#tipo1").append('<option value="PM01">PM01</option>');
                        $("#tipo1").append('<option value="PM02" selected="selected">PM02</option>');
                        $("#tipo1").append('<option value="PM03">PM03</option>');
                        $("#tipo1").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM03':
                        $("#tipo1").append('<option value="PM01">PM01</option>');
                        $("#tipo1").append('<option value="PM02">PM02</option>');
                        $("#tipo1").append('<option value="PM03" selected="selected">PM03</option>');
                        $("#tipo1").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM04':
                        $("#tipo1").append('<option value="PM01">PM01</option>');
                        $("#tipo1").append('<option value="PM02">PM02</option>');
                        $("#tipo1").append('<option value="PM03">PM03</option>');
                        $("#tipo1").append('<option value="PM04" selected="selected">PM04</option>');
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
            $("#task1").val(data[0].task);
            $("#descripcion").val(data[0].descripcion);
            $("#duracion_pro").val(data[0].duracion_pro);
            $("#duracion_real").val(data[0].duracion_real);
            $("#cant_personas1").val(data[0].cant_personas);
            
            
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
        //console.log(tipo);
    $.get("/actividades/"+id_archivo+"/eliminar_archivos",function (data) {
                if (data.length!=0) {
                    if (xtipo==1) {
                        //console.log("cuando es archivo");
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
                        //console.log("cuando es 0 data");
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
function ver_actividad(id_actividad,task_ver,fecha_vencimiento_ver,descripcion_ver,duracion_pro_ver,cant_personas_ver,duracion_real_ver,dia_ver,tipo_ver,realizada_ver,area1_ver,observacion2_ver, departamento_ver) {
    $("#task_ver").text(task_ver);
    $("#fecha_vencimiento_ver").text(fecha_vencimiento_ver);
    $("#descripcion_ver").text(descripcion_ver);
    $("#duracion_pro_ver").text(duracion_pro_ver);
    $("#cant_personas_ver").text(cant_personas_ver);
    $("#duracion_real_ver").text(duracion_real_ver);
    $("#dia_ver").text(dia_ver);
    $("#tipo_ver").text(tipo_ver);
    $("#realizada_ver").text(realizada_ver);
    $("#area1_ver").text(area1_ver);
    $("#observacion2_ver").text(observacion2_ver);
    $("#departamento_ver").text(departamento_ver);
}
</script>
<script>
$(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});
</script>
<script type="text/javascript">
    function status(id_usuario) {
        //console.log(id_usuario+"----");
        $("#id_empleado").val(id_usuario);
    }


    $("#id_planificacion_b").on("change",function (event) {

        // window.location.reload(true);
        // location.reload(true);
        var id_planificacion=event.target.value;
        $.get("/asignaciones/"+id_planificacion+"/buscar",function (data) {
            
            $("#id_area_b").empty();
            $("#id_area_b").append('<option value="">Seleccione un área</option>');
        
        if(data.length > 0){

            for (var i = 0; i < data.length ; i++) 
            {  
                    
                
                $("#id_area_b").append('<option value="'+ data[i].id + '">' + data[i].area +'</option>');
            }

        }else{
            $("#id_area_b").attr('disabled', false);

        }

        });

        // window.location.reload(true);
    });

    $("#id_area_b").on("change",function (event) {

        var dia=$("#dia_b").val();
        var id_planificacion=$("#id_planificacion_b").val();
        var id_area=event.target.value;
        //console.log(dia+"--"+id_planificacion+"--"+id_area);

        $.get("/mis_actividades/"+dia+"/"+id_planificacion+"/"+id_area+"/buscar",function (data) {
            //console.log(data.length);
            $("#data-table-basic").empty();
            
        
        if(data.length > 0){
            $("#data-table-basic").append('<thead><tr><th>#</th><th>Task</th><th>Fecha</th><th>Día</th><th>Área</th><th>Departamento</th><th>Tipo</th><th>Realizada</th><th>Acciones</th></tr></thead><tbody>');
            var nombres=$("#nombres_emp").val();
            var apellidos=$("#apellidos_emp").val();
            var id_empleado=$("#id_empleado").val();

            for (var i = 0; i < data.length ; i++) 
            {  
                    j=i+1;
                
                 
                $("#data-table-basic").append('<tr><td>'+j+'</td><td>' + data[i].task +'</td><td>' + data[i].fecha_vencimiento +'</td><td>' + data[i].dia +'</td><td>' + data[i].area +'</td><td>' + data[i].departamento +'</td><td>' + data[i].tipo +'</td><td>' + data[i].realizada +'</td><td><button data-target="#myModaltwoFinal" onclick="enviar_id('+data[i].id+','+data[i].duracion_pro+')" data-toggle="modal">Finalizar</button></td>');
                /*$("#data-table-basic").append('<tr><td>'+j+'</td><td>' + data[i].task +'</td><td>' + data[i].fecha_vencimiento +'</td><td>' + data[i].dia +'</td><td>' + data[i].area +'</td><td>' + data[i].departamento +'</td><td>' + data[i].tipo +'</td><td>' + data[i].realizada +'</td><td><button data-target="#modalActividad" data-toggle="modal" onclick="modal_actividad('+data[i].id+','+data[i].task+','+data[i].fecha_vencimiento+','+nombres+','+apellidos+','+data[i].descripcion+','+data[i].duracion_pro+','+data[i].cant_personas+','+data[i].duracion_real+','+data[i].dia+','+data[i].tipo+','+data[i].realizada+','+data[i].elaborado+','+data[i].aprobado+','+data[i].num_contrato+','+data[i].fechas+','+data[i].semana+','+data[i].revision+','+data[i].gerencia+','+data[i].id_area+','+data[i].area+','+data[i].observacion1+','+data[i].observacion2+','+id_empleado+')">Finalizar</button></td>');*/

                
            }
            $("#data-table-basic").append('</tbody>');
        }

        });
    });

    function enviar_id(id_actividad, duracion_pro) {
        $("#id_actividad_f").val(id_actividad);

        var duracion;
        if (duracion_pro == null) {
            duracion='No especificada';
        } else {
            duracion=duracion_pro;
        }
        $("#duracion_promedio").text(duracion);
    }
    function finalizar() {
        //console.log("ghlasasas");
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        var opcion=$("#cambiar_s").val();
        var id_actividad=$("#id_actividad_f").val();
        var duracion_real=$("#duracion_real_f").val();
        var comentario=$("#comentario_f").val();
        //console.log(id_actividad+"-"+duracion_real+'-'+comentario+'-'+opcion);
        $("#mensaje_f").empty();
        if (opcion==0) {
            var estado="FINALIZADA";
        }else{
            var estado="NO FINALIZADA";
        }
        //e.preventDefault();
                if (comentario=="" && opcion==0) {
                    $("#message_f").show();
                    $("#mensaje_f").append('<strong style="color:red; backgroundColor:white; align: center;">El comentario no debe estar vacío</strong>');
                } else {
                    if (duracion_real=="" && opcion==0) {
                
                        $("#mensaje_f").append('<strong style="color:red; backgroundColor:white; align: center;">Debe ingresar la duración real</strong>');
                    } else {
                            $.ajax({
                            type: "post",
                            url: "actividades_proceso/finalizar",
                            data: {
                                opcion:opcion,
                                id_actividad:id_actividad,
                                duracion_real:duracion_real,
                                comentario:comentario
                            }, success: function (data) {
                                $("#mensaje_f").append('<strong style="color:green; backgroundColor:white; align: center;">Se ha cambiado el status de la actividad a '+estado+' exitosamente</strong>');
                            }
                                });      
                    }
                }
        $('#myModaltwoFinal').modal('hide');
        // location.reload(true);
            
    }
//creando evento para el modal de actividades para traer las planificaciones del area seleccionada
        $("#id_area").on('change',function (event) {
            var id_area=event.target.value;
            //console.log("evento realizado"+id_area);
            $.get('planificaciones/'+id_area+'/buscar',function(data){
                //console.log(data.length);
                $("#id_planificacion").empty();
                if (data.length>0) {
                    for(i=0; i < data.length; i++){
                        $("#id_planificacion").append('<option value="'+data[i].id+'">Semana:'+data[i].semana+' - ('+data[i].fechas+') - Gerencia: '+data[i].gerencia+'</option>');
                    }
                }

            });
        });
</script>

@endsection