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
                                    <h2>Asignación de actividades</h2>
                                    <p>Asignar actividades de la planificación de la semana actual</p>
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
                                <p>Actividades - Información detallada por semana</p>
                            </div>
                            <div><a href="{{ route('actividades.buscar_actividades_semana_actual') }}" class="btn btn-success">Asignación específica</a></div>
                        </div>
                         
                        
                        @include('flash::message')
                    </div>
                   <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->
                    {!! Form::open(['route' => ['asignacion_multiple'],'method' => 'post']) !!}

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
                                    <label for="id_empleados_search"><b style="color: red;">*</b> Empleados:</label>
                                    <select name="id_empleados_search" id="id_empleados_search" class="form-control">
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mb-2">
                            <div class="form-group ic-cmpint">
                                <div class="nk-int-st">
                                    <br>
                                    <button disabled="" class="btn btn-md btn-default" id="buscar_actividades">Asignar Actividades</button>
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
<div class="form-element-area modals-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        <div id="mensaje_activi"></div>
                    </div>
                   <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->
                    
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="actividades_muestra"></div>
            </div>
        </div>
    </div>
</div>


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
@include('planificacion.modales.eliminar_asignacion')
@endsection

@section('scripts')
<script>
$(document).ready( function(){
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

            // console.log("select dinámico");
            var id_planificacion= $("#id_gerencia_search").val();
            var id_area=event.target.value;
            // alert(id_planificacion+' '+id_area);
            $("#id_empleados_search").empty();
            
            $.get("/empleados/"+id_area+"/buscar",function (data) {
                
                // $("#id_empleados_search").empty();
            
                if(data.length > 0){

                    for (var i = 0; i < data.length ; i++) 
                    { 
                        // $("#buscar_actividades").removeAttr('disabled'); 
                        // $("#id_empleados_search").removeAttr('disabled');
                        $("#id_empleados_search").append('<option value="'+ data[i].id + '">' + data[i].nombres +' '+ data[i].apellidos +' - '+ data[i].rut +'</option>');
                    }

                }else{
                    $("#id_empleados_search").attr('disabled');
                    $("#buscar_actividades").attr('disabled');

                }

            });


            $.get("/actividades/"+id_area+"/"+id_planificacion+"/buscar",function (data) {
                
                $("#actividades_muestra").empty();
                $("#mensaje_activi").empty();
                // alert('asdasd');
                if(data.length > 0){

                    $("#actividades_muestra").append('Hay '+data.length+' actividades que serán asignadas al empleado seleccionado');
                    $("#mensaje_activi").append('Hay '+data.length+' actividades que serán asignadas al empleado seleccionado');

                    for (var i = 0; i < data.length ; i++) 
                    { 
                        $("#buscar_actividades").removeAttr('disabled');
                        $("#id_empleados_search").append('<option value="'+ data[i].id + '">' + data[i].nombres +' '+ data[i].apellidos +' - '+ data[i].rut +'</option>');
                    }

                }else{

                    $("#buscar_actividades").attr('disabled');
                    $("#actividades_muestra").append('No se encuentran actividades con la planificacion y areas seleccionados!');
                    $("#mensaje_activi").append('No se encuentran actividades con la planificacion y areas seleccionados!');

                }

            });


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