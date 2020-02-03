@extends('layouts.appLayout')
<head>
    <style type="text/css">
        .callout{border-radius:3px;margin:0 0 20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee}.callout a{color:#fff;text-decoration:underline}.callout a:hover{color:#eee}.callout h4{margin-top:0;font-weight:600}.callout p:last-child{margin-bottom:0}.callout code,.callout .highlight{background-color:#fff}.callout.callout-danger{border-color:#c23321}.callout.callout-warning{border-color:#c87f0a}.callout.callout-info{border-color:#0097bc}.callout.callout-success{border-color:#00733e}

        .callout.callout-danger,.callout.callout-warning,.callout.callout-info,.callout.callout-success,.alert-success,.alert-danger,.alert-error,.alert-warning,.alert-info,.label-danger,.label-info,.label-warning,.label-primary,.label-success,.modal-primary .modal-body,.modal-primary .modal-header,.modal-primary .modal-footer,.modal-warning .modal-body,.modal-warning .modal-header,.modal-warning .modal-footer,.modal-info .modal-body,.modal-info .modal-header,.modal-info .modal-footer,.modal-success .modal-body,.modal-success .modal-header,.modal-success .modal-footer,.modal-danger .modal-body,.modal-danger .modal-header,.modal-danger .modal-footer{color:#fff !important}.bg-gray{color:#000;background-color:#d2d6de !important}.bg-gray-light{background-color:#f7f7f7}.bg-black{background-color:#111 !important}.bg-red,.callout.callout-danger,.alert-danger,.alert-error,.label-danger,.modal-danger .modal-body{background-color:#dd4b39 !important}.bg-yellow,.callout.callout-warning,.alert-warning,.label-warning,.modal-warning .modal-body{background-color:#f39c12 !important}.bg-aqua,.callout.callout-info,.alert-info,.label-info,.modal-info .modal-body{background-color:#00c0ef !important}.bg-blue{background-color:#0073b7 !important}.bg-light-blue,.label-primary,.modal-primary .modal-body{background-color:#3c8dbc !important}.bg-green,.callout.callout-success,.alert-success,.label-success,.modal-success .modal-body{background-color:#00a65a !important}
    </style>
</head>

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Eliminación de Actividades</h2>
                                    <p>Buscar actividades de la planificación de la semana para eliminar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="breadcomb-report">
                                
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
<div class="form-element-area modals-single">
    <div class="container" style="width: ;">
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="callout callout-danger" style="height: -5px;">
                    <h4>Recordatorio!</h4>
                    Hay dos tipos de eliminación:<br>
                    <ul>
                        <li><strong>Eliminación global</strong> 
                            <ul>
                                <li>Elimina todas las actividades en la planificación, área y el tipo seleccionado</li>
                            </ul>
                        </li>
                        <li><strong>Eliminación específica</strong> 
                            <ul>
                                <li>Elimina las actividades seleccionadas en la tabla</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                   <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->
                 <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        
                        <h3><strong style="align-content: center;">Eliminar actividades de forma global</strong></h3>                
                        @include('flash::message')
                    </div>
                        @csrf
                    <hr> 
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <label for="gerencias"><b style="color: red;">*</b> Planificaciones:</label>
                                    <select class="form-control" name="id_gerencia_search" id="id_gerencia_search">
                                        <option value="0">Seleccione una planificación</option>
                                        @foreach($planificaciones as $item)
                                            <option value="{{$item->id}}">Semana: {{$item->semana}} | {{$item->fechas}} | {{$item->gerencias->gerencia}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_planificacion" id="id_planificacion">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <label for="id_area_search"><b style="color: red;">*</b> Areas:</label>
                                    <select placeholder="Seleccione un área" name="id_area_search" id="id_area_search" class="form-control">
                                        <option value="" disabled="">Seleccione un área</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <label for="tipo_actividad"><b style="color: red;">*</b> Tipo:</label>
                                    <select name="tipo_actividad" id="tipo_actividad" placeholder="Seleccione un tipo" disabled="" class="form-control">
                                        <option value="" disabled="">Seleccione un Tipo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <button style="width: 100%" disabled="" class="btn btn-md btn-danger" id="buscar_actividades" value="0" data-toggle="modal" data-target="#ModalGlobal" data-backdrop="static" data-keyboard="false">Eliminación global</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

{!! Form::open(['route' => ['eliminar_actividades_multiple'],'method' => 'post']) !!}
    <div class="form-element-area modals-single">
        <div class="container" style="width: ;">
            <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd text-center">
                            <h3><strong style="align-content: center;">Asignar actividades de forma Específica</strong></h3>
                        </div>
                       <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->

                            @csrf 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                <div class="form-group ic-cmpint">
                                    <div class="nk-int-st">
                                        <hr>
                                        <div class="basic-tb-hd text-center">
                                            <a style="width: 100%;" s href="#" disabled="" class="btn btn-md btn-success" id="buscar_actividades2" value="0" data-toggle="modal" data-target="#ModalGlobal" data-backdrop="static" data-keyboard="false">Eliminación específica</a>
                                            <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        

                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                        <div class="card-box">
                            <div class="chat-conversation">
                                <div class="chat-widget-input">
                                    <div id="tabla">
                                        
                                    
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div id="mensaje_activi"></div>
                                                <div class="data-table-list">
                                                    <div class="table-responsive">
                                                        <table id="tabla_muestra" class="table table-striped">
                                                           
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
    {!! Form::open(['route' => ['eliminar_actividades_multiple'],'method' => 'post']) !!}
    @include('planificacion.modales.eliminar_actividades_global')

    <input type="hidden" name="global" id="global" value="0">
    <input type="hidden" name="id_gerencia_search" id="id_planifi">
    <input type="hidden" name="id_area_search" id="id_area">
    <input type="hidden" name="tipo_actividad" id="id_empleado">

{!! Form::close() !!}


<div class="modal fade" id="ModalMensaje" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Registro eliminado con éxito!</h2>

            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>

{!! Form::open(['route' => ['eliminar_actividades_multiple'],'method' => 'post']) !!}
    @include('planificacion.modales.eliminar_actividades_global')

    <input type="hidden" name="global" id="global" value="1">
    <input type="hidden" name="id_gerencia_search" id="id_planifi">
    <input type="hidden" name="id_area_search" id="id_area">
    <input type="hidden" name="tipo_actividad" id="id_empleado">

{!! Form::close() !!}
@endsection

@section('scripts')
<script>
$(document).ready( function(){
    // $('#tabla').hide();

    
    function eliminar_asignacion(contenido) {

                var id_actividad=   $('#id_actividad_eliminar').val();
                var id_empleado=    $('#id_empleado_act_eliminar').val();
                var contenido =     $('#contenido').val();
                console.log(id_actividad, id_empleado, contenido);



                $.get('asignaciones/'+id_actividad+'/'+id_empleado+'/eliminar_asignacion',function(data){
                    // console.log(data.length);
                    
                        $("#"+contenido).empty();
                        $('#myModaltre').modal('hide');
                        $('#ModalMensaje').modal();
                    
                });
            }
    function eliminar(id_actividad, id_empleado, contenido) {
        $("#id_actividad_eliminar").val(id_actividad);
        $('#id_empleado_act_eliminar').val(id_empleado);
        $('#contenido').val(contenido);
    }



    //------ realizando busqueda de las actividades deacuerdo al filtro
        //select dinámico
    $("#id_gerencia_search").on("change",function (event) {

        var id_planificacion=event.target.value;

        id_gerencia=$('#id_gerencia_search').val();
        $('#id_planifi').val(id_gerencia);

        $.get("/asignaciones/"+id_planificacion+"/buscar",function (data) {
            
            $("#id_area_search").empty();
            $("#id_area_search").append('<option value="">Seleccione un área</option>');
        
        if(data.length > 0){

            for (var i = 0; i < data.length ; i++) 
            {  
                    
                
                $("#id_area_search").append('<option value="'+ data[i].id + '">' + data[i].area +'</option>');
            }

        }else{
            $("#id_area_search").attr('disabled', false);

        }

        });
    });

    $("#id_area_search").on("change",function (event) {

        area        =$('#id_area_search').val();
        $('#id_area').val(area);


        var id_planificacion= $("#id_gerencia_search").val();
        var id_area=event.target.value;
        // alert(id_planificacion+' '+id_area);
        $("#tipo_actividad").empty();
        $("#tipo_actividad").append('<option value="">Seleccione un tipo de actividad</option>');
        
        $.get("/actividades/"+id_area+"/buscar_tipo",function (data) {
            
            // $("#tipo_actividad").empty();
        
            if(data.length > 0){

                $('#tipo_actividad').removeAttr('disabled',false);
                $("#buscar_actividades2").removeAttr('disabled', false);
                

                for (var i = 0; i < data.length ; i++) 
                { 
                    // $("#buscar_actividades").removeAttr('disabled'); 
                    // $("#tipo_actividad").removeAttr('disabled');
                    $("#tipo_actividad").append('<option value="'+ data[i].tipo + '">' + data[i].tipo +'</option>');
                }

            }else{
                $("#tipo_actividad").attr('disabled',true);
                $("#buscar_actividades").attr('disabled');
                $('#buscar_actividades2').attr('disabled');

            }

        });


        $.get("/actividades/"+id_area+"/"+id_planificacion+"/buscar",function (data) {
            
            $("#actividades_muestra").empty();
            $('#tabla_muestra').empty()
            $("#mensaje_activi").empty();
            // alert('asdasd');

            $('#data-table-basic').empty();

            if(data.length > 0){

                $('#buscar_tipo').removeAttr('disabled',false);
                $("#mensaje_activi").append('Hay '+data.length+' actividades que serán asignadas al empleado seleccionado<hr>');
                $("#tabla_muestra").append('<thead><tr><th>Selección</th><th>#</th><th>Actividad</th><th>Tipo</th><th>Duración</th><th>Fecha de vencimiento</th></tr></thead>');

                for (var i = 0; i < data.length ; i++) 
                {
                    v=i+1;
                    $("#tabla_muestra").append('<tbody><tr><td><input type="checkbox" name="id_actividad[]" id="id_actividad_espe[]" value="'+data[i].id+'"></td><td>'+v+'</td><td>'+ data[i].task +'</td><td>'+ data[i].tipo +'</td><td>'+ data[i].duracion_pro +'</td><td>'+ data[i].fecha_vencimiento +'</td></tr></tbody');
                    // $("#buscar_actividades").removeAttr('disabled');
                    $('#buscar_actividades2').removeAttr('disabled'); 
                    // $("#mensaje_activi").removeAttr('disabled');
                    // $("#tipo_actividad").append('<option value="'+ data[i].id + '">' + data[i].nombres +' '+ data[i].apellidos +' - '+ data[i].rut +'</option>');
                }

            }else{
                // $('#tabla').hide();
                $('#buscar_tipo').attr('disabled', true);
                $('#data-table-basic').append('No se encuentran actividades con la planificacion y areas seleccionados!');
                $("#buscar_actividades").attr('disabled',true);
                $('#buscar_actividades2').attr('disabled',true);
                $("#mensaje_activi").append('No se encuentran actividades con la planificacion y areas seleccionados!');
                // $("#mensaje_activi").append('No se encuentran actividades con la planificacion y areas seleccionados!');

            }

        });


    });

    $("#tipo_actividad").on("change",function (event) {

        // $('#tabla').show();

        $("#buscar_actividades").removeAttr('disabled',false);
        // $("#tabla_muestra").empty();
        var empleado=$('#tipo_actividad').val();
        $('#id_empleado').val(empleado);
        // $('#tabla').hide();

    });

});
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
@endsection