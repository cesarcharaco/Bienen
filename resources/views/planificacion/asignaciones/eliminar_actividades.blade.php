@extends('layouts.appLayout')

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
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <p>Actividades - Eliminar actividades de forma global</p>
                            </div>
                        </div>
                         
                        
                        @include('flash::message')
                    </div>
                   <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->
                    {!! Form::open(['route' => ['eliminar_actividades_multiple'],'method' => 'post']) !!}

                        @csrf 
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
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
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <label for="id_area_search"><b style="color: red;">*</b> Areas:</label>
                                    <select placeholder="Seleccione un área" name="id_area_search" id="id_area_search" class="form-control">
                                        <option value="" disabled="">Seleccione un área</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <label for="tipo_actividad"><b style="color: red;">*</b> Tipo:</label>
                                    <select name="tipo_actividad" id="tipo_actividad" placeholder="Seleccione un tipo" disabled="" class="form-control">
                                        <option value="" disabled="">Seleccione un Tipo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <br>
                                    <button disabled="" class="btn btn-md btn-default" id="buscar_actividades">Eliminación global</button>
                                    <span id="mensaje_error" style="color: red;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="global" id="global" value="1">
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
<br>

{!! Form::open(['route' => ['asignacion_multiple'],'method' => 'post']) !!}
    <div class="form-element-area modals-single">
        <div class="container" style="width: ;">
            <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd text-center">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <p>Actividades - Eliminar actividades de forma específica</p>
                                </div>
                            </div>
                        </div>
                       <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->

                            @csrf 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                <div class="form-group ic-cmpint">
                                    <div class="nk-int-st">
                                        <br>
                                
                                        <div><button disabled="" class="btn btn-md btn-success" id="buscar_actividades2">Eliminación específica</button> </div>
                                        <span id="mensaje_error" style="color: red;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <input type="hidden" name="global" id="global" value="0">
                        <input type="hidden" name="tipo_actividad" id="id_empleado">
                        <input type="hidden" name="id_area_search" id="id_area">

                        
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
@include('planificacion.modales.eliminar_actividades_globales')
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
                $("#buscar_actividades").removeAttr('disabled', false);
                $('#buscar_actividades2').removeAttr('disabled', false);

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
                    $("#tabla_muestra").append('<tbody><tr><td><input type="checkbox" name="id_actividad[]" id="id_actividad[]" value="'+data[i].id+'"></td><td>'+v+'</td><td>'+ data[i].task +'</td><td>'+ data[i].tipo +'</td><td>'+ data[i].duracion_pro +'</td><td>'+ data[i].fecha_vencimiento +'</td></tr></tbody');
                    $("#buscar_actividades").removeAttr('disabled');
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
        // $("#tabla_muestra").empty();
        var empleado=$('#tipo_actividad').val();
        $('#id_empleado').val(empleado);
        $('#tabla').hide();

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