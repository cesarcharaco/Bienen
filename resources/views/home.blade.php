@extends('layouts.appLayout')
@section('css')
<style>
    .lista {
        list-style-image: url("../../assets/images/check2.png");
        list-style-position: inside;
        margin-bottom: 5px;
        font-size: 14px;
    }
    .lista li {

    }
</style>
@endsection
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
                                    <i class="notika-icon notika-house"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Dashboard</h2>
                                    <p>Bienvenido a Bienen System</p>
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
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        @if(\Auth::User()->tipo_user=="Admin")<p>Todos los campos (<b style="color: red;">*</b></label>) son obligatorios</p>
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
                    @if(\Auth::User()->tipo_user=="Admin")
                    {!! Form::open(['route' => 'home.buscar', 'method' => 'get']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-wrap mg-t-5">
                                    <div class="cmp-tb-hd cmp-int-hd">
                                        <h2>Filtros:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-example-int form-example-st">
                                                <div class="form-group">
                                                    <label for="">Tipo de búsquedad: <b style="color: red;">*</b></label></label>
                                                    <select name="tipo_busqueda" id="tipo_busqueda" class="form-control" required="required">
                                                        <option value="">Seleccione...</option>
                                                        <option value="empleado">Empleado</option>
                                                        <option value="area">Área</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="mostrar_empleado" style="display: none;">
                                            <div class="form-example-int form-example-st">
                                                <div class="form-group">
                                                    <label for="">Empleados: <b style="color: red;">*</b></label></label>
                                                    <select name="empleado" id="empleado" class="form-control" disabled="disabled">
                                                        <option value="">Seleccione empleado...</option>
                                                        @foreach($lista_empleado as $key)
                                                        <option value="{{$key->id}}">{{$key->nombres}} {{$key->apellidos}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="mostrar_area" style="display: none;">
                                            <div class="form-example-int form-example-st">
                                                <div class="form-group">
                                                    <label for="">Área: <b style="color: red;">*</b></label></label>
                                                    <select name="area" id="area" class="form-control" disabled="disabled">
                                                        <option value="">Seleccione área...</option>
                                                        @foreach($areas as $key)
                                                        <option value="{{$key->id}}">{{$key->area}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-example-int">
                                                <br>
                                                <button class="btn btn-success notika-btn-success" type="submit">Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @if(\Auth::User()->tipo_user=="Admin")
                @if($hallado==0)
                @foreach($empleados as $key)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="padding-top: 15px;">
                    <div class="contact-list sm-res-mg-t-30">
                        <div class="contact-win">
                            <div class="contact-img ml-auto">
                                <!-- <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" /> -->
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact-ctn" style="margin-top: -40px">
                            <div class="contact-ad-hd">
                                <h2>{{$key->nombres}} {{$key->apellidos}}</h2>
                                <p class="ctn-ads">Área de {{$key->areas->area}}</p>
                            </div>
                            <h2>Actividades:</h2>
                        </div>
                        <div class="accordion-stn">
                            <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist"
                                aria-multiselectable="true">
                                @foreach($key->actividades as $key1)
                                @if($key1->id_planificacion==$id_planificacion1 || $key1->id_planificacion==$id_planificacion2)

                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                        <h4 class="panel-title">
                                            <a data-toggle="modal" data-target="#modalActividades"
                                                href="#accordionGreen-one" aria-expanded="true" onclick="modal_actividad('{{ $key1->id }}','{{ $key1->task }}','{{ $key1->fecha_vencimiento }}','{{ $key->nombres }}','{{ $key->apellidos }}','{{ $key1->descripcion }}','{{ $key1->turno }}','{{ $key1->duracion_pro }}','{{ $key1->cant_personas }}','{{ $key1->duracion_real }}','{{ $key1->dia }}','{{ $key1->tipo }}','{{ $key1->realizada }}','{{ $key1->planificacion->elaborado }}','{{ $key1->planificacion->aprobado }}','{{ $key1->planificacion->num_contrato }}','{{ $key1->planificacion->fechas }}','{{ $key1->planificacion->semana }}','{{ $key1->planificacion->revision }}','{{ $key1->planificacion->gerencias->gerencia }}','{{ $key1->areas->area }}','{{ $key1->areas->descripcion }}','{{ $key1->areas->ubicacion }}','{{ $key1->observacion1 }}','{{ $key1->observacion2 }}','{{ $key1->comentario }}','{{ $key->id }}')">{{$key1->task}}</a>
                                        </h4>
                                        <div class="mt-2">
                                            <span @if($key1->fecha_vencimiento==$hoy) class="label label-warning p-1" @elseif($key1->fecha_vencimiento<$hoy) class="label label-danger p-1" @endif data-toggle="tooltip"
                                                data-placement="bottom" title="Fecha de vencimiento"><i
                                                    class="lni-alarm-clock"></i> {{ date('d-m-Y', strtotime($key1->fecha_vencimiento)) }}.</span>
                                            <!-- TOOLTIPS CON ICONOS START -->
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Comentarios"
                                                class="ml-2">
                                                2 <i class="lni-bubble"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                title="Archivos adjuntos" class="ml-2">
                                                4 <i class="lni-paperclip"></i>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Imagenes adjuntadas"
                                                class="ml-2">
                                                1 <i class="lni-check-mark-circle"></i>
                                            </a>
                                            <!-- TOOLTIPS CON ICONOS END -->

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                <div class="panel panel-collapse notika-accrodion-cus text-center">
                                    <div class="panel-heading" role="tab">
                                        <span id="agregarActividad" style="cursor:pointer">Agregar otra actividad <i class="lni-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @foreach($empleados as $key)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="padding-top: 15px;">
                    <div class="contact-list sm-res-mg-t-30">
                        <div class="contact-win">
                            <div class="contact-img ml-auto">
                                <!-- <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" /> -->
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact-ctn" style="margin-top: -40px">
                            <div class="contact-ad-hd">
                                <h2>{{$key->nombres}} {{$key->apellidos}}</h2>
                                <p class="ctn-ads">Área de {{$key->areas->area}}</p>
                            </div>
                            <h2>Actividades:</h2>
                        </div>
                        @foreach($key->actividades as $key1)
                        <div class="accordion-stn">
                            <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist"
                                aria-multiselectable="true">
                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                        <h4 class="panel-title">
                                            <a data-toggle="modal" data-target="#modalActividades"
                                                href="#accordionGreen-one" aria-expanded="true" onclick="modal_actividad('{{ $key1->id }}','{{ $key1->task }}','{{ $key1->fecha_vencimiento }}','{{ $key->nombres }}','{{ $key->apellidos }}','{{ $key1->descripcion }}','{{ $key1->turno }}','{{ $key1->duracion_pro }}','{{ $key1->cant_personas }}','{{ $key1->duracion_real }}','{{ $key1->dia }}','{{ $key1->tipo }}','{{ $key1->realizada }}','{{ $key1->planificacion->elaborado }}','{{ $key1->planificacion->aprobado }}','{{ $key1->planificacion->num_contrato }}','{{ $key1->planificacion->fechas }}','{{ $key1->planificacion->semana }}','{{ $key1->planificacion->revision }}','{{ $key1->planificacion->gerencias->gerencia }}','{{ $key1->areas->area }}','{{ $key1->areas->descripcion }}','{{ $key1->areas->ubicacion }}','{{ $key1->observacion1 }}','{{ $key1->observacion2 }}','{{ $key->id }}')">{{$key1->task}}</a>
                                        </h4>
                                        <div class="mt-2">
                                            <span @if($key1->fecha_vencimiento==$hoy) class="label label-warning p-1" @elseif($key1->fecha_vencimiento<$hoy) class="label label-danger p-1" @endif data-toggle="tooltip"
                                                data-placement="bottom" title="Fecha de vencimiento"><i
                                                    class="lni-alarm-clock"></i> {{ date('d-m-Y', strtotime($key1->fecha_vencimiento)) }}.</span>
                                            <!-- TOOLTIPS CON ICONOS START -->
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Comentarios"
                                                class="ml-2">
                                                2 <i class="lni-bubble"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                                                title="Archivos adjuntos" class="ml-2">
                                                4 <i class="lni-paperclip"></i>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Imagenes adjuntadas"
                                                class="ml-2">
                                                1 <i class="lni-check-mark-circle"></i>
                                            </a>
                                            <!-- TOOLTIPS CON ICONOS END -->

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-collapse notika-accrodion-cus text-center">
                                    <div class="panel-heading" role="tab">
                                        <span id="agregarActividad" style="cursor:pointer">Agregar otra actividad <i class="lni-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
                @endif
            @elseif(\Auth::User()->tipo_user=="Empleado")
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
                                    <th>Área</th>
                                    <th>Gerencia</th>
                                    <th>Tipo</th>
                                    <th>Realizada</th>
                                    <th>Avances del turno y pendientes</th>
                                    <th>Observaciones/Comentarios</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @foreach($empleados as $key)
                                @foreach($key->actividades as $key1)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $key->id }}---{{ $key1->task }}</td>
                                    <td>{{ $key1->fecha_vencimiento }}</td>
                                    <td>{{ $key1->duracion_pro }}</td>
                                    <td>{{ $key1->cant_personas }}</td>
                                    <td>{{ $key1->duracion_real }}</td>
                                    <td>{{ $key1->dia }}</td>
                                    <td>{{ $key1->areas->area }}</td>
                                    <td>{{ $key1->planificacion->gerencias->gerencia }}</td>
                                    <td>{{ $key1->tipo }}</td>
                                    <td>{{ $key1->realizada }}</td>
                                    <td>{{ $key1->observacion1 }}</td>
                                    <td>{{ $key1->observacion2 }}</td>
                                    <td>
                                        {{-- ,,,,,,,,,,,,,,,,,,,,,,,,,comentario,id_empleado,descripcion1 --}}
                                        <a data-toggle="modal" data-target="#modalActividades"
                                                href="#accordionGreen-one" aria-expanded="true" onclick="modal_actividad('{{ $key1->id }}','{{ $key1->task }}','{{ $key1->fecha_vencimiento }}','{{ $key->nombres }}','{{ $key->apellidos }}','{{ $key1->descripcion }}','{{ $key1->turno }}','{{ $key1->duracion_pro }}','{{ $key1->cant_personas }}','{{ $key1->duracion_real }}','{{ $key1->dia }}','{{ $key1->tipo }}','{{ $key1->realizada }}','{{ $key1->planificacion->elaborado }}','{{ $key1->planificacion->aprobado }}','{{ $key1->planificacion->num_contrato }}','{{ $key1->planificacion->fechas }}','{{ $key1->planificacion->semana }}','{{ $key1->planificacion->revision }}','{{ $key1->planificacion->gerencias->gerencia }}','{{ $key1->areas->area }}','{{ $key1->areas->descripcion }}','{{ $key1->areas->ubicacion }}','{{ $key1->observacion1 }}','{{ $key1->observacion2 }}','{{ $key->id }}')"><i class="fa fa-search"></i></a>
                                        {{-- <a data-toggle="modal" data-target="#modalActividades"
                                                href="#accordionGreen-one" aria-expanded="true" onclick="modal_actividad('{{ $key->id }}','{{ $key->task }}','{{ $key->fecha_vencimiento }}','{{ $empleado->nombres }}','{{ $empleado->apellidos }}','{{ $key->descripcion }}','{{ $key->turno }}','{{ $key->duracion_pro }}','{{ $key->cant_personas }}','{{ $key->duracion_real }}','{{ $key->dia }}','{{ $key->tipo }}','{{ $key->realizada }}','{{ $key->planificacion->elaborado }}','{{ $key->planificacion->aprobado }}','{{ $key->planificacion->num_contrato }}','{{ $key->planificacion->fechas }}','{{ $key->planificacion->semana }}','{{ $key->planificacion->revision }}','{{ $key->planificacion->gerencias->gerencia }}','{{ $key->areas->area }}','{{ $key->areas->descripcion }}','{{ $key->areas->ubicacion }}','{{ $key->observacion1 }}','{{ $key->observacion2 }}','{{ $empleado->id }}')"><i class="fa fa-search"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>    
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>


@if(\Auth::User()->tipo_user=="Admin" || \Auth::User()->tipo_user=="Empleado")
    @include('partials.modalActividades')
@endif


<!-- Start Modales -->
<div class="modal animated bounce" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h1>Agregar actividad</h1>


                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10 mt-4">
                    <h2>Seleccione la actividad para agregar</h2>
                </div>
                <div class="bootstrap-select fm-cmp-mg">
                    <select name="actividad" class="selectpicker" data-live-search="true">
                        <option>Limpiar los baños - 28/08/2019 - Área administrativa - Departamento General</option>
                        <option>Reparar iluminación - 25/08/2019 - Área contaduria - Departamento Ténico</option>

                    </select>
                </div>


            </div>
            <div class="modal-footer mt-4">
                <button type="button" class="btn btn-default" data-dismiss="modal">Registrar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- End modales -->
@endsection
@section('scripts')
<script>
$( function() {
$("#tipo_busqueda").change( function() {
    if ($(this).val() === "empleado") {
        empleado.value="";
        area.value="";
        $("#mostrar_empleado").removeAttr('style');
        $("#mostrar_area").css('display','none');
        $("#empleado").prop("disabled", false);
        $("#empleado").prop('required', true);
    } else if ($(this).val() === "area"){
        empleado.value="";
        area.value="";
        $("#mostrar_area").removeAttr('style');
        $("#mostrar_empleado").css('display','none');
        $("#empleado").prop("disabled", true);
        $("#area").prop("disabled", false);
        $("#area").prop('required', true);
    } else if ($(this).val() === ""){
        empleado.value="";
        area.value="";
        $("#mostrar_empleado").css('display','none');
        $("#mostrar_area").css('display','none');
    }
});
});
</script>
<script type="text/javascript">
    
    function modal_actividad(id_actividad,task,fecha_vencimiento,nombres,apellidos,descripcion,turno,duracion_pro,cant_personas,duracion_real,dia,tipo,realizada,elaborado,aprobado,num_contrato,fechas,semana,revision,gerencia,area1,descripcion_area,ubicacion,observacion1,observacion2,id_empleado) {
        
        $("#task").text(task);
        $("#nombres").text(nombres);
        $("#apellidos").text(apellidos);
        $("#fecha_vencimiento").text(fecha_vencimiento);
        $("#descripcion").text(descripcion);
        $("#turno").text(turno);
        $("#duracion_pro").text(duracion_pro);
        $("#cant_personas").text(cant_personas);
        $("#duracion_real").text(duracion_real);
        $("#dia").text(dia);
        $("#tipo").text(tipo);
        $("#realizada").text(realizada);
        $("#elaborado").text(elaborado);
        $("#aprobado").text(aprobado);
        $("#num_contrato").text(num_contrato);
        $("#fechas").text(fechas);
        $("#semana").text(semana);
        $("#revision").text(revision);
        $("#gerencia").text(gerencia);
        $("#area1").text(area1);
        $("#descripcion_area").text(descripcion_area);
        $("#ubicacion").text(ubicacion);
        $("#observacion1").text(observacion1);
        $("#observacion2").text(observacion2);
        //$("#comentarios").text(comentario);
          var fecha = new Date(); //Fecha actual
          var mes = fecha.getMonth()+1; //obteniendo mes
          var dia = fecha.getDate(); //obteniendo dia
          var ano = fecha.getFullYear(); //obteniendo año
          if(dia<10)
            dia='0'+dia; //agrega cero si el menor de 10
          if(mes<10)
            mes='0'+mes //agrega cero si el menor de 10
        var hoy=ano+"-"+mes+"-"+dia;
        if (fecha_vencimiento==hoy) {
            $("#vencimiento").empty();
            $("#vencimiento").append('<span class="label label-warning p-1" data-toggle="tooltip"'+ 
                'data-placement="bottom"'+
                'title="Feha de vencimiento"><i class="lni-alarm-clock"></i>'+
                '<b>'+fecha_vencimiento+'</b></span>');
        } else {
            if (fecha_vencimiento<hoy) {
                $("#vencimiento").empty();
            $("#vencimiento").append('<span class="label label-danger p-1" data-toggle="tooltip"'+ 
                'data-placement="bottom"'+
                'title="Feha de vencimiento"><i class="lni-alarm-clock"></i>'+
                '<b>'+fecha_vencimiento+'</b></span>');
            }
        }
        if (realizada=="Si") {
            $("#boton").empty();
            $("#boton").append('<button type="button" onclick="finalizar(1,'+id_actividad+')" class="btn btn-info">CAMBIAR A NO FINALIZADA</button>');
        } else {
            $("#boton").empty();
            $("#boton").append('<button type="button" onclick="finalizar(0,'+id_actividad+')" class="btn btn-info">FINALIZAR </button>');
        }
        
        if (descripcion=="") {
            $("#descripcion1").empty();
        }
        //buscando mensajes registrados
        $.get("/actividades/"+id_actividad+"/comentarios",function(data){
            //console.log(data.length);

            if (data.length>0) {
                $("#comentarios").empty();
                for(i=0;i<data.length;i++){
                    $("#comentarios").append('<tr style="border: 0px;">'+
                                            '<td>'+                                    
                                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px; height: 15px;">'+
                                            '<td>'+
                                                '<span id="comentario">'+data[i].comentario+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px;">'+
                                            '<td>'+
                                                '<button class="btn btn-danger btn-xs" '+
                                                ' onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                                            '</td>'+
                                        '</tr>');
                }
            }
        });
    $("#enviar_comentario").on('click',function(e){
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        e.preventDefault();
          var comentario = $('textarea#comentario').val();
          var id_usuario = $('#id_usuario').val();
          if (comentario=="") {
            $("#error").text("El comentario no puede estar vacio");
          } else {
          $.ajax({
            type: "post",
            url: "actividades/registrar_comentario",
            data: {
                comentario: comentario,
                id_actividad: id_actividad,
                id_usuario: id_usuario,
                id_empleado: id_empleado
            }, success: function (data) {
                    if (data.length>0) {
                $("#comentarios").empty();
                for(i=0;i<data.length;i++){
                    $('textarea#comentario').val("");
                    $("#comentarios").append('<tr style="border: 0px;">'+
                                            '<td>'+                                    
                                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px; height: 15px;">'+
                                            '<td>'+
                                                '<span id="comentario">'+data[i].comentario+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px;">'+
                                            '<td>'+
                                                '<button class="btn btn-danger btn-xs"'+
                                                ' onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                                            '</td>'+
                                        '</tr>');
                }
            }         
            }
          });
        }
    });
    
    //archivos guardados al registrar una actividad
    $.get('actividades/'+id_actividad+'/buscar_archivos',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_archivos").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_archivos").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> <button class="btn btn-danger btn-xs" '+
                    ' onclick="eliminar_archivo('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
            }
        }else{
            $("#mis_archivos").empty();
        }
    });
    //-------------------------------------------------
    //archivos guardados desde el modal
    $.get('actividades_proceso/'+id_actividad+'/buscar_archivos_adjuntos',function(data){
        
        if (data.length>0) {
            $("#mis_archivos_cargados").empty();
            for(var k = 0; k < data.length; k++){
                if(data[k].tipo=="file"){
                $("#mis_archivos_cargados").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_archivos_adjuntos('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }
        }else{
            $("#mis_archivos_cargados").empty();
        }
    });
    //-------------------------------------------------
    //imagenes guardadas al registrar una actividad
    $.get('actividades/'+id_actividad+'/buscar_imagenes',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_imagenes").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_imagenes").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs"'+
                    ' onclick="eliminar_imagen('+data[k].id+')" ><i class="fa fa-trash"></i></button></li></li>');
            }
        }else{
            $("#mis_imagenes").empty();
        }
    });
    //---------------------------------------------
    //imagenes guardadas desde el modal
    $.get('actividades_proceso/'+id_actividad+'/buscar_imagenes_adjuntas',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_imagenes_cargadas").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> <button class="btn btn-danger btn-xs"'+
                    ' onclick="eliminar_imagenes_adjuntas('+data[k].id+')" ><i class="fa fa-trash"></i></button></li></li>');
            }
        }else{
            $("#mis_imagenes_cargadas").empty();
            }
    });
    //---------------------------------------------

    $("#enviar_archivo").on('click',function(e){

        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        e.preventDefault();
          var archivos= $("#archivos").val();
          var id_usuario = $('#id_usuario').val();
          var formulario = new FormData($("#frmB")[0]);
          
          formulario.append('id_empleado', id_empleado);
          formulario.append('id_actividad', id_actividad);
          formulario.append('id_usuario',id_usuario);
          
          //console.log(formulario);
          if (archivos=="") {
            $("#error2").text("El comentario no puede estar vacio");
          } else {
            
          $.ajax({
            type: "post",
            url: "actividades/registrar_archivos",
            data:formulario,
            dataType: 'json',
            processData: false,
            contentType: false ,
            success: function (datos) {
                
            if (datos.length>0) {
                $("#mis_archivos_cargados").empty();
                for(i=0;i<datos.length;i++){
                    $('file#archivos').val("");
                    if(datos[i].tipo=="file"){
                    $("#mis_archivos_cargados").append('<li><a href="{!! asset('"+ datos[i].url +"') !!}">'+datos[i].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_archivos_adjuntos('+datos[i].id+')"><i class="fa fa-trash"></i></button></li>');
                    }
                }
            }else{
                $("#error2").text("No se pudo traer nada");  
            }         
            }
          });
        }
    });
    $("#enviar_imagen").on('click',function(e){

        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        e.preventDefault();
          var imagenes= $("#imagenes").val();
          var id_usuario = $('#id_usuario').val();
          var formulario = new FormData($("#frmC")[0]);
          
          formulario.append('id_empleado', id_empleado);
          formulario.append('id_actividad', id_actividad);
          formulario.append('id_usuario',id_usuario);
          
          
          if (imagenes=="") {
            $("#error3").text("El comentario no puede estar vacio");
          } else {
            
          $.ajax({
            type: "post",
            url: "actividades/registrar_imagenes",
            data:formulario,
            dataType: 'json',
            processData: false,
            contentType: false ,
            success: function (datos) {
                
            if (datos.length>0) {
                $("#mis_imagenes_cargadas").empty();
                for(i=0;i<datos.length;i++){
                    $('file#imagenes').val("");
                    if(datos[i].tipo=="img"){
                    $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ datos[i].url +"') !!}">'+datos[i].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_imagenes_adjuntas('+datos[i].id+')"><i class="fa fa-trash"></i></button></li>');
                    }
                }
            }else{
                $("#error3").text("No se pudo traer nada");  
            }         
            }
          });
        }
    });
    }

    function eliminar_comentario(id_comentario,id_actv_proceso) {
        

        $.get('actividades/'+id_actv_proceso+'/'+id_comentario+'/eliminar_comentario',function(data){
            if (data.length>0) {
                $("#comentarios").empty();
                for(i=0;i<data.length;i++){
                    $("#comentarios").append('<tr style="border: 0px;">'+
                            '<td>'+                                    
                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                            '</td>'+
                        '</tr>'+
                        '<tr style="border: 0px; height: 15px;">'+
                            '<td>'+
                                '<span id="comentario">'+data[i].comentario+'</span>'+
                            '</td>'+
                        '</tr>'+
                        '<tr style="border: 0px;">'+
                            '<td>'+
                                '<button class="btn btn-danger btn-xs" '+
                                'onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                            '</td>'+
                        '</tr>');
                }
            }else{
                $("#comentarios").empty();
            }
        });
    }
    function eliminar_archivo(id_archivo) {
        $.get('actividades/'+id_archivo+'/eliminar_archivos',function(data){
            
            if (data.length>0) {
            $("#mis_archivos").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_archivos").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_archivo('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_archivos").empty();
            }
        });
    }

    function eliminar_imagen(id_archivo) {
        $.get('actividades/'+id_archivo+'/eliminar_archivos',function(data){
            
            if (data.length>0) {
            $("#mis_imagenes").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_imagenes").append('<li><a href="{!! asset('"+ data[k].url +"') !!}" >'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_imagen('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_imagenes").empty();
            }
        });
    }
    function eliminar_archivos_adjuntos(id_archivo) {
        $.get('actividades_proceso/'+id_archivo+'/eliminar_archivos_adjuntos',function(data){
            
            if (data.length>0) {
            $("#mis_archivos_cargados").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_archivos_cargados").append('<li><a'+
                    ' href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+
                    ' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_archivos_adjuntos('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_archivos_cargados").empty();
            }
        });
    }

    function eliminar_imagenes_adjuntas(id_archivo) {
        $.get('actividades_proceso/'+id_archivo+'/eliminar_archivos_adjuntos',function(data){
            
            if (data.length>0) {
            $("#mis_imagenes_cargadas").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_imagenes_adjuntas('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_imagenes_cargadas").empty();
            }
        });
    }
    function finalizar(opcion,id_actividad) {
        $.get('actividades_proceso/'+opcion+'/'+id_actividad+'/finalizar',function(data){

            if (opcion==0) {
                $("#boton").empty();
                $("#boton").append('<button type="button" onclick="finalizar(1,'+id_actividad+')" class="btn btn-info">CAMBIAR A NO FINALIZADA</button>');
            } else {
                $("#boton").empty();
                $("#boton").append('<button type="button" onclick="finalizar(0,'+id_actividad+')" class="btn btn-info">FINALIZAR </button>');
            }
        });
    }

</script>
@endsection