@php
  libxml_use_internal_errors(true);
@endphp
@extends('layouts.appLayout')

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <a href="{{ route('home') }}" data-toggle="tooltip"
                                        data-placement="bottom" title="Volver" class="btn">
                                        <i class="fa fa-file-archive-o"></i>
                                    </a>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Reportes en PDF y Excel</h2>
                                    <p>Filtro para descargar reportes de la semana actual  ({{ semana_actual() }}).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->

@endsection

@section('content')
<!-- Form Element area Start-->
<div class="form-element-area">
    <div class="container">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-tabs-int">
                    <!-- <div class="tab-hd">
                        <h2>Reportes</h2>
                    </div> -->
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs tab-nav-center">
                            <li class="active"><a class="active" data-toggle="tab" href="#reporte_general">Reporte General</a></li>
                            @if(\Auth::user()->tipo_user!="Empleado")
                                <li><a data-toggle="tab" href="#reporte_cronologico">Reporte Cronológico</a></li>
                            @endif
                        </ul>
                        <div class="tab-content tab-custom-st">
                            <div id="reporte_general" class="tab-pane fade in active">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="add-todo-list notika-shadow ">
                                                <div class="realtime-ctn">
                                                    <div class="realtime-title">
                                                        <h2>Reporte general</h2>

                                                    </div>
                                                </div>
                                                <div class="card-box">
                                                   

                                                    {!! Form::open(['route' => 'reportes.store', 'method' => 'post', 'data-parsley-validate',  'target' => '_blank']) !!}
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Semana: <b style="color: red;">*</b></label></label>
                                                                    <select name="planificacion" id="planificacion" class="form-control select2" required="required" style="width: 100% !important;">
                                                                        @foreach($planificacion as $key)
                                                                            <option value="{{$key->semana}}">Semana: {{$key->semana}} ({{ $key->fechas }})</option>
                                                                        @endforeach                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Gerencias: <b style="color: red;">*</b></label></label>
                                                                    <select name="gerencias" id="gerencias" class="form-control" required="required">
                                                                        <option value="">Seleccione la gerencia</option>
                                                                        @if($nulo==0)
                                                                            @for($i=0;$i< count($gerencias);$i++)
                                                                                <option value="{{ $gerencias[$i] }}">{{ $gerencias[$i] }}</option>
                                                                            @endfor
                                                                        @else
                                                                            @foreach($gerencias as $key)
                                                                                <option value="{{ $key->gerencia }}">{{ $key->gerencia }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Áreas: <b style="color: red;">*</b></label></label>
                                                                    <select name="areas" id="areas" class="form-control" required="required" disabled>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Departamentos: <b style="color: red;">*</b></label></label>
                                                                    <select name="departamentos" id="departamentos" class="form-control">
                                                                        <option value="">Todos...</option>
                                                                        @foreach($departamentos as $key)
                                                                            <option value="{{ $key->departamento }}">{{ $key->departamento }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Realizadas: <b style="color: red;">*</b></label></label>
                                                                    <select name="realizadas" id="realizadas" class="form-control" required="required">
                                                                        <option value="0">Todas...</option>
                                                                        <option value="Si">Si</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Tipo: <b style="color: red;">*</b></label></label>
                                                                    <select name="tipo" id="tipo" class="form-control" required="required">
                                                                        <option value="0">Todos...</option>
                                                                        @foreach($tipo as $key)
                                                                            <option value="{{$key->tipo}}">{{$key->tipo}}</option>
                                                                        @endforeach()
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Días: <b style="color: red;">*</b></label></label>
                                                                    <select name="dias" id="dias" class="form-control" required="required">
                                                                        @foreach($dias as $key)
                                                                            <option value="{{$key->dia}}">{{$key->dia}}</option>
                                                                        @endforeach()
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                <div class="form-group">
                                                                    <label for="">Tipo de reporte: <b style="color: red;">*</b></label></label>
                                                                    <select name="tipo_reporte" id="tipo_reporte" class="form-control" required="required">
                                                                        @if(buscar_p('Reportes','PDF')=="Si")
                                                                        <option value="PDF">PDF</option>
                                                                        @endif
                                                                        <option value="Excel">Excel</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center mt-4">
                                                            <button class="btn btn-md btn-info">Buscar</button>
                                                        </div>

                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if(\Auth::user()->tipo_user!="Empleado")

                                <div id="reporte_cronologico" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                    <div class="realtime-ctn">
                                                        <div class="realtime-title">
                                                            <h2>Reporte cronológico</h2>
                                                        </div>
                                                    </div>
                                                    <div class="card-box">
                                                       

                                                        {!! Form::open(['route' => 'reportes.store', 'method' => 'post', 'data-parsley-validate',  'target' => '_blank']) !!}
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="">Semana: <b style="color: red;">*</b></label></label>
                                                                        <select name="planificacion" id="planificacion" class="form-control select3" required="required" style="width: 100% !important;">
                                                                            @foreach($planificacion as $key)
                                                                                <option value="{{$key->semana}}">Semana: {{$key->semana}} - ({{$key->fechas}})</option>
                                                                            @endforeach()                                      
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="">Gerencias: <b style="color: red;">*</b></label></label>
                                                                        <select name="gerencias" id="gerencias2" class="form-control" required="required">
                                                                            <option value="">Seleccione la gerencia</option>
                                                                            @if($nulo==0)
                                                                            @for($i=0;$i<count($gerencias);$i++)
                                                                            <option value="{{ $gerencias[$i] }}">{{ $gerencias[$i] }}</option>
                                                                            @endfor
                                                                            @else
                                                                            @foreach($gerencias as $key)
                                                                            <option value="{{ $key->gerencia }}">{{ $key->gerencia }}</option>
                                                                            @endforeach
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="">Áreas: <b style="color: red;">*</b></label></label>
                                                                        <select name="areas" id="areas2" class="form-control" required="required" disabled>
                                                                            
                                                                            <option value="1">EWS</option>
                                                                            <option value="2">Planta Cero/Desaladora & Acueducto</option>
                                                                            <option value="3">Agua y Tranque</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="">Tipo de reporte: <b style="color: red;">*</b></label></label>
                                                                        <select name="tipo_reporte" id="tipo_reporte" class="form-control" required="required">
                                                                            @if(buscar_p('Reportes','PDF')=="Si")
                                                                            <option value="PDF">PDF</option>
                                                                            @endif
                                                                            @if(buscar_p('Reportes','Excel')=="Si")
                                                                            <option value="Excel">Excel</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <input type="hidden" name="crono" value="crono">

                                                            <div class="text-center mt-4">
                                                                <button class="btn btn-md btn-info">Buscar</button>
                                                            </div>

                                                        {!! Form::close() !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready( function(){
        $("#gerencias2").on("change",function (event) {
            var gerencias=event.target.value;
            //console.log(gerencias); // true
            $("#areas2").empty();
            buscar_areas(2,gerencias);
            
        });


        $("#gerencias").on("change",function (event) {
            var gerencias=event.target.value;
            //console.log(gerencias); // true
            $("#areas").empty();
             buscar_areas(1,gerencias);
        });


        function buscar_areas(opcion,id_gerencia) {

            if (id_gerencia) {
                $.get('areas/'+id_gerencia+'/buscar', function (data) {
                })
                .done(function(data) {
                    if(data.length>0){
                        if (opcion == 1) {
                            $("#areas").removeAttr('disabled',false);
                            $("#areas").append('<option value="">Seleccione un área</option>');
                            for (var i = 0; i < data.length; i++) {
                                $('#areas').append('<option value="'+data[i].id+'">'+data[i].area+'</option>');
                            }
                        }else{
                            $("#areas2").removeAttr('disabled',false);
                            $("#areas2").append('<option value="">Seleccione un área</option>');
                            for (var i = 0; i < data.length; i++) {
                                $('#areas2').append('<option value="'+data[i].id+'">'+data[i].area+'</option>');
                            }
                        }
                    }else{
                        $("#areas").attr('disabled',true);
                        $("#areas2").attr('disabled',true);
                    }
                });
            }
        }
        //------ realizando busqueda de las actividades deacuerdo al filtro
        //select dinámico
        /*$("#gerencias").on("change",function (event) {
            //console.log("select dinámico");
            var id_gerencia=event.target.value;
            
            $.get("/planificacion/"+id_gerencia+"/buscar",function (data) {
                
            
            if(data.length > 0){
                $("#areas").empty();
                $("#areas").append('<option value="0">Todas</option>');
                for (var i = 0; i < data.length ; i++) 
                {  
                    $("#areas").removeAttr('disabled');
                    $("#areas").append('<option value="'+ data[i].id + '">' + data[i].area +'</option>');
                }
            }else{
                
                $("#areas").attr('disabled', false);
            }
            });
        });
        
    //-----------------------------------------
    //------ realizando busqueda de las actividades deacuerdo al filtro
        //select dinámico
        $("#gerencias2").on("change",function (event) {
            var id_gerencia=event.target.value;
            console.log(id_gerencia+'---------------');
            $.get("/planificacion/"+id_gerencia+"/buscar",function (data) {
                
            console.log(data.length);
            
            if(data.length > 0){
                $("#areas2").empty();
                $("#areas2").append('<option value="0">Todas</option>');
                for (var i = 0; i < data.length ; i++) 
                {  
                    $("#areas2").removeAttr('disabled');
                    $("#areas2").append('<option value="'+ data[i].id + '">' + data[i].area +'</option>');
                }
            }else{
                
                $("#areas2").attr('disabled', false);
            }
            });
        });*/
        
    //-----------------------------------------
    });
</script>
@endsection