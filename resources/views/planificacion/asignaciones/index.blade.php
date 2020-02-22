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
                                    <h2>Asignación de Actividades</h2>
                                    <p>Asignar actividades de la planificación por semana</p>
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
                <div class="callout callout-success" style="height: -5px;">
                    <h4>Recordatorio!</h4>
                    Hay dos tipos de asignación:<br>
                    <ul>
                        <li><strong>Asignación global</strong> 
                            <ul>
                                <li>Asigna todas las actividades en la planificación y área, al empleado seleccionado</li>
                            </ul>
                        </li>
                        <li><strong>Asignación específica</strong> 
                            <ul>
                                <li>Asigna las actividades seleccionadas en la tabla, de la planificación y área al empleado seleccionado</li>
                            </ul>
                        </li>
                    </ul>
                    
                    
                </div>
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        
                        <h3><strong style="align-content: center;">Asignar actividades de forma global</strong></h3>                
                        @include('flash::message')
                        <hr>
                    </div>
                   <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->
                    {!! Form::open(['route' => ['asignacion_multiple'],'method' => 'post']) !!}

                        @csrf 
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
                                    <label for="id_empleados_search"><b style="color: red;">*</b> Empleados:</label>
                                    <select name="id_empleados_search" id="id_empleados_search" class="form-control">
                                        <option value="" disabled="">Seleccione un área</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group ic-cmpint">
                        <div class="nk-int-st">
                            <div class="row">
                                <div class="col-md-6">
                                    <button style="width: 100%;" disabled="" class="btn btn-md btn-default" id="buscar_actividades">Asignación global</button>
                                </div>
                                <div class="col-md-6">
                                    <input style="width: 100%;" type="button"  class="btn btn-md btn-danger" id="eliminar_asignaciones" value="Eliminar Asignación global" onclick="eliminar_g()" />
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
                            <h3><strong style="align-content: center;">Asignar actividades de forma Específica</strong></h3>
                        </div>
                       <!-- {!! Form::open(['route' => ['actividades.buscar_actividades_semana_actual'],'method' => 'post']) !!} -->
                        <hr>
                            @csrf 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                <div class="form-group ic-cmpint">
                                    <div class="nk-int-st">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-6">
                                                <div><button style="width: 100%;" disabled="" class="btn btn-md btn-success" id="buscar_actividades2">Asignación Específica</button> </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-6">
                                                <input style="width: 100%;" type="button" data-target="#myModaltre" data-toggle="modal" class="btn btn-md btn-danger" name="eliminar_especifica" id="eliminar_especifica" value="Eliminar Asignaciones Específicas">
                                            </div>
                                        </div>
                                        <span id="mensaje_error2" style="color: red;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <input type="hidden" name="global" id="global" value="0">
                        <input type="hidden" name="id_empleados_search" id="id_empleado">
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
@include('planificacion.modales.eliminar_asignacion')
@include('planificacion.modales.eliminar_asignacion_g')
@endsection

@section('scripts')
<script>
	function eliminar_g() {
    	//console.log("entro");

    	var id_planificacion=   $('#id_gerencia_search').val();
        var id_empleado=    $('#id_empleados_search').val();
        var id_area =     $('#id_area_search').val();
        if (id_planificacion==0 || id_empleado=="" || id_area=="") {
        	$("#mensaje_error").text("Algunos elementos no han sido seleccionados");
        }else{
        $("#id_planificacion_g").val(id_planificacion);
        $("#id_empleado_g").val(id_empleado);
        $("#id_area_g").val(id_area);
        $("#myModaltre2").modal();
        $("#mensaje_error").text("");
        $("#mensaje_error2").text("");
    	}
    }
    function eliminar_asignaciones_g() {
    	var id_planificacion=   $('#id_planificacion_g').val();
        var id_empleado=    $('#id_empleado_g').val();
        var id_area =     $('#id_area_g').val();
        var contenido =     $('#contenido').val();
        //console.log(id_planificacion+"-"+id_empleado+""+id_area);
        $.get('asignaciones_g/'+id_planificacion+'/'+id_empleado+'/'+id_area+'/eliminar_asignacion_g',function(data){
                    //console.log(data.length);
                $("#"+contenido).empty();
                $('#myModaltre2').modal('hide');
                $('#ModalMensaje').modal();
        });
    }
    
    function eliminar() {

        $('#myModaltre').modal('hide');
        var id_empleado=$('#id_empleados_search').val();
        console.log("id_empleado="+id_empleado);
        if (id_empleado!=="") {
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        var selected = [];
    	$(":checkbox[name=id_actividad]").each(function() {
      	if (this.checked) {
        // agregas cada elemento.
        selected.push($(this).val());
      	}
    	});
    
    	if (selected.length) {

      	$.ajax({
        cache: false,
        type: 'post',
        dataType: 'json', // importante para que 
        data: {selected:selected,id_empleado:id_empleado}, // jQuery convierta el array a JSON
        url: 'asignaciones/eliminar',
        success: function(data) {
    		if(data > 0){
    			$('#ModalMensaje').modal();
    			$("#mensaje_error2").text("");
    		}else{
    			$("#mensaje_error2").text("No se pudo realizar la eliminación de la asignación de forma específica");
    		}
        }
      });

      // esto es solo para demostrar el json,
      // con fines didacticos
      //alert(JSON.stringify(selected));

	    } else{
	    	$("#mensaje_error2").text("Debe seleccionar al menos una actividad para realizar la operación");  
	    	
	    }
	}else{
		$("#mensaje_error2").text("No seleccionó el empleado para eliminarle las actividades asignadas");
	}
    }

</script>
<script>
$(document).ready( function(){
    // $('#tabla').hide();

    
    var respuesta=0;

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
        $("#id_empleados_search").empty();
        $("#id_empleados_search").append('<option value="">Seleccione un empleado</option>');
        
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

                $("#mensaje_activi").append('Hay '+data.length+' actividades que serán asignadas al empleado seleccionado<hr>');
                $("#tabla_muestra").append('<thead><tr><th>Selección</th><th>#</th><th>Asignada</th><th>Actividad</th><th>Día</th><th>Tipo</th><th>Duración</th><th>Cant. Pers.</th><th>Fecha de vencimiento</th></tr></thead>');
                var id_actividad;
                
                for (var i = 0; i < data.length ; i++) 
                {
                    v=i+1;
                    asignadas(data[i].id);

                    $("#tabla_muestra").append('<tbody><tr><td><input type="checkbox" name="id_actividad[]" id="id_actividad" value="'+data[i].id+'"></td><td>'+v+'</td><td aligne="center"><input type="text" id="estado'+data[i].id+'" size="5px" readonly="readonly" ></td><td>'+ data[i].task +'</td><td>'+data[i].dia+'</td><td>'+ data[i].tipo +'</td><td>'+ data[i].duracion_pro +'</td><td>'+data[i].cant_personas+'</td><td>'+ data[i].fecha_vencimiento +'</td></tr></tbody');
                    $("#buscar_actividades").removeAttr('disabled');
                    $('#buscar_actividades2').removeAttr('disabled'); 
                    // $("#mensaje_activi").removeAttr('disabled');
                    // $("#id_empleados_search").append('<option value="'+ data[i].id + '">' + data[i].nombres +' '+ data[i].apellidos +' - '+ data[i].rut +'</option>');
                }

            }else{
                // $('#tabla').hide();
                $('#data-table-basic').append('No se encuentran actividades con la planificacion y areas seleccionados!');
                $("#buscar_actividades").attr('disabled',true);
                $('#buscar_actividades2').attr('disabled',true);
                $("#mensaje_activi").append('No se encuentran actividades con la planificacion y areas seleccionados!');
                // $("#mensaje_activi").append('No se encuentran actividades con la planificacion y areas seleccionados!');

            }

        });


    });

    $("#id_empleados_search").on("change",function (event) {

        // $('#tabla').show();
        // $("#tabla_muestra").empty();
        var empleado=$('#id_empleados_search').val();
        $('#id_empleado').val(empleado);

    });

});

function asignadas(id_actividad){
    $.get('/actividades/'+id_actividad+'/asignada',function (data){
        var j=id_actividad;
        var estado="#estado";
        var est="";
        var js="";
        js=j.toString();
        est=estado.concat(js);
        
        $(""+est+"").val(data+" UT");            
        

    });
    
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
@endsection