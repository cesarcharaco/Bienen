@extends('layouts.appLayout')
@section('css')

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
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Usuarios</h2>
                                        <p>Lista de todos los usuarios del sistema.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <strong style="float: right; margin-top: 10px; margin-bottom: 5px;">Año laboral actual: {{-- {{ config('session.fecha_actual') }} --}} 
                                @if(session('fecha_actual'))
                                    @php $anio=session('fecha_actual'); @endphp
                                @else
                                    @php $anio=date('Y');
                                        session('fecha_actual',$anio);
                                     @endphp
                                    
                                @endif
                                {{ $anio }}
                            </strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="pull-right">
                                <button id="actividad" value="0" data-toggle="modal" data-target="#nuevo_empleado" class="btn btn-default" data-backdrop="static" data-keyboard="false"><i class="notika-icon notika-support"></i> Nuevo usuario</button>
                            </div>
                        </div>
                    </div>
                    @include('empleados.modales.registrar_empleado')
                    @include('empleados.modales.editar_empleado')
                    @include('empleados.modales.cerrar_modal')
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Breadcomb area End-->
    
@endsection


@section('content')
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="basic-tb-hd text-center">
                    @if(count($errors))
                    <div class="alert-list m-4">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
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
                <div class="data-table-list">                        
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Estado</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>RUT</th>
                                    <th>Género</th>
                                    <th>Áreas</th>
                                    <th>Departamentos</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            @foreach($empleados as $item )
                            <tr>
                                <td>{{ $contador++ }}</td>
                                <td>
                                    @if($item->status == "Activo")
                                    <span class="label label-success">{{ $item->status }}</span>
                                    @elseif($item->status == "Reposo")
                                    <span class="label label-default">{{ $item->status }}</span>
                                    @else
                                    <span class="label label-danger">{{ $item->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $item->nombres }}</td>
                                <td>{{ $item->apellidos }}</td>
                                <td>{{ $item->rut }}</td>
                                <td>{{ $item->genero }}</td>
                                <td>
                                    <ul>
                                    @foreach($item->areas as $key2)
                                        <li>{{ $key2->area }}</li>
                                    @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                    @foreach($item->departamentos as $key2)
                                        <li>{{ $key2->departamento }}</li>
                                    @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ route('empleados.show', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Ver datos del usuario terreno">
                                        <i class="fa fa-eye pr-3" style="font-size:20px"></i>
                                    </a>
                                    
                                    @if(buscar_p('Usuarios','Modificar')=="Si")
                                    <a href="{{ route('empleados.edit', $item->id) }}" title="Editar datos del usuario terreno">
                                        <i class="fa fa-pencil pr-3" style="font-size:20px"></i>
                                    </a>

                                    @endif
                                    @if($item->id!=1)
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Suspender usuario terreno" onclick="status('{{ $item->id }}')" id="cambiar_status">
                                        <i class="fa fa-lock" style="font-size:20px" data-toggle="modal" data-target="#myModaltwo"></i>
                                    </a>
                                    @endif
                                    <br>
                                    @if(buscar_p('Usuarios','Eliminar')=="Si")
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar usuario terreno" onclick="eliminar('{{ $item->id }}')" id="eliminar_empleado">
                                        <i class="fa fa-trash" style="font-size:20px" data-toggle="modal" data-target="#myModaltre"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Data Table area End-->

<div class="modal fade" id="myModaltwo" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            {!! Form::open(['route' => ['empleados.cambiar_status'], 'method' => 'POST', 'name' => 'cambiar_status', 'id' => 'cambiar_status', 'data-parsley-validate']) !!}
            @csrf
            <div class="modal-body">
                <h2>Cambiar de status al usuario terreno</h2>
                <p>¿Estas seguro que desea cambiar de status a este usuario terreno?.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="status"><b>Status</b> <b style="color: red;">*</b></label>
                            <input type="hidden" id="id_empleado" name="id_usuario">
                            <select name="status" id="status" class="form-control" required="required">
                                <option >Seleccione status...</option>
                                <option value="Activo">Activo</option>
                                <option value="Reposo">Reposo</option>
                                <option value="Retirado">Retirado</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Cambiar status</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="modal fade" id="myModaltre" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            {!! Form::open(['route' => ['empleados.eliminar'], 'method' => 'POST', 'name' => 'cambiar_status', 'id' => 'cambiar_status', 'data-parsley-validate']) !!}
            @csrf
            <div class="modal-body">
                <h2>¡ATENCIÓN!</h2>
                <p>Está a punto de eliminar a un usuario terreno, al igual que sus asignaciones, registros y acceso al sistema. ¿Desea continuar? Esta acción no se podrá deshacer</p>

                <input type="hidden" id="id_user" name="id_empleado">
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Eliminar usuario terreno</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

    function status(id_usuario) {
        //console.log(id_usuario+"----");
        $("#id_empleado").val(id_usuario);
    }

    function eliminar(id_usuario) {
        //console.log(id_usuario+"----");
        $("#id_user").val(id_usuario);
    }


    function licencias(numero) {

        if ($('#lic_fecha_emision'+numero).prop('disabled') == false) {
            $('#lic_fecha_emision'+numero).prop('disabled',true).prop('required', false);
            $('#lic_fecha_vencimiento'+numero).prop('disabled',true).prop('required', false);
        } else {
            $('#lic_fecha_emision'+numero).prop('disabled',false).prop('required', true);
            $('#lic_fecha_vencimiento'+numero).prop('disabled',false).prop('required', true);
        }
    }


    function examenes(numero){
        
        if ($('#examenes_fecha_realizado'+numero).prop('disabled') == false) {
            $('#examenes_fecha_realizado'+numero).prop('disabled',true).prop('required', false);
            $('#examenes_fecha_vencimiento'+numero).prop('disabled',true).prop('required', false);
        } else {
            $('#examenes_fecha_realizado'+numero).prop('disabled',false).prop('required', true);
            $('#examenes_fecha_vencimiento'+numero).prop('disabled',false).prop('required', true);
        }


    }

    function cursos(numero){
        
        if ($('#curso_fecha_realizado'+numero).prop('disabled') == false) {
            $('#curso_fecha_realizado'+numero).prop('disabled',true).prop('required', false);
            $('#curso_fecha_vencimiento'+numero).prop('disabled',true).prop('required', false);
        } else {
            $('#curso_fecha_realizado'+numero).prop('disabled',false).prop('required', true);
            $('#curso_fecha_vencimiento'+numero).prop('disabled',false).prop('required', true);
        }


    }

    function editar(id,email,tipo_user,nombres,segundo_nombre,apellidos,segundo_apellido,rut,genero,fecha_nac)
    {
        $('#id_empleado_e').val(id);
        $('#email_e').val(email);
        $('#tipo_user_e').val(tipo_user);
        $('#nombres_e').val(nombres);
        $('#segundo_nombre_e').val(segundo_nombre);
        $('#apellidos_e').val(apellidos);
        $('#segundo_apellido_e').val(segundo_apellido);
        $('#rut_e').val(rut);
        $('#genero_e').val(genero);
        $('#fecha_nac_e').val(fecha_nac);

        //Datos laborales
        $('#status_e').val(status);
        $('#id_area_e').val(id_area);
        $('#id_departamento_e').val(id_departamento);
        $('#cargo_e').val(cargo);
        $('#id_faena_e').val(id_faena);
        $('#id_area_e_e').val(id_area);

        //AFP
        $('#id_afp_e').val();

        //Licencias
        $('#id_licencia_e').val();
        $('#lic_fecha_emision_e').val();
        $('#lic_fecha_vencimiento_e').val();

        //Cursos
        $('#id_curso_e').val();
        $('#curso_fecha_realizado_e').val();
        $('#curso_fecha_vencimiento_e').val();

        //Medicos
        id_examen_e
        $('#examenes_fecha_realizado_e').val();
        $('#examenes_fecha_vencimiento_e').val();

        //Contacto
        nombre_contacto_e
        $('#apellido_contacto_e').val();
        $('#telefono_contacto_e').val();
        $('#email_contacto_e').val();
        $('#direccion_contacto_e').val();

    }



    $("#crearUsuario2").click(function() {
        var pestana1 = 0;
        var pestana2 = 0;
        var pestana3 = 0;
        var pestana4 = 0;
        var pestana5 = 0;
        var pestana6 = 0;

        //------------------------------------------Pestana1

        if($('#email').val().length == 0 ){
            $('#email').css('border','1px solid red');
            pestana1++;
        }else{
            $('#email').removeAttr('style');
        }
        if($('#primer_nombre').val().length == 0 ){
            $('#primer_nombre').css('border','1px solid red');
            pestana1++;
        }else{
            $('#primer_nombre').removeAttr('style');
        }
        // if($('#segundo_nombre').val().length == 0 ){
        //     $('#segundo_nombre').css('border','1px solid red');
        //     pestana1++;
        // }else{
        //     $('#segundo_nombre').removeAttr('style');
        // }
        if($('#primer_apellido').val().length == 0 ){
            $('#primer_apellido').css('border','1px solid red');
            pestana1++;
        }else{
            $('#primer_apellido').removeAttr('style');
        }
        // if($('#segundo_apellido').val().length == 0 ){
        //     $('#segundo_apellido').css('border','1px solid red');
        //     pestana1++;
        // }else{
        //     $('#segundo_apellido').removeAttr('style');
        // }
        if($('#rut').val().length == 0 ){
            $('#rut').css('border','1px solid red');
            pestana1++;
        }else{
            $('#rut').removeAttr('style');
        }
        if($('#fecha_nac').val().length == 0 ){
            $('#fecha_nac').css('border','1px solid red');
            pestana1++;
        }else{
            $('#fecha_nac').removeAttr('style');
        }

        if(pestana1>0){
            $('.pestanaUsuario1').css('color','red');
        }else{
            $('.pestanaUsuario1').removeAttr('style');
        }

        //---------------------------------------Pestana2


        if($('#id_area').val() == null ){
            $('#id_areaM').show();
            pestana2++;
        }else{
            $('#id_areaM').hide();
        }

        if($('#id_faena').val() == null ){
            $('#id_faenaM').show();
            pestana2++;
        }else{
            $('#id_faenaM').hide();
        }
        if($('#id_area_e').val() == null ){
            $('#id_area_eM').show();
            pestana2++;
        }else{
            $('#id_area_eM').hide();
        }

        if(pestana2>0){
            $('.pestanaUsuario2').css('color','red');
        }else{
            $('.pestanaUsuario2').removeAttr('style');
        }

        //------------------------------PESTANA6

        if($('#nombre_contacto').val().length == 0){
            $('#nombre_contacto').css('border','1px solid red');
            pestana6++;
        }else{
            $('#nombre_contacto').removeAttr('style');
        }
        if($('#apellido_contacto').val().length == 0){
            $('#apellido_contacto').css('border','1px solid red');
            pestana6++;
        }else{
            $('#apellido_contacto').removeAttr('style');
        }
        if($('#telefono_contacto').val().length == 0){
            $('#telefono_contacto').css('border','1px solid red');
            pestana6++;
        }else{
            $('#telefono_contacto').removeAttr('style');
        }
        if($('#email_contacto').val().length == 0){
            $('#email_contacto').css('border','1px solid red');
            pestana6++;
        }else{
            $('#email_contacto').removeAttr('style');
        }
        if($('#direccion_contacto').val().length == 0){
            $('#direccion_contacto').css('border','1px solid red');
            pestana6++;
        }else{
            $('#direccion_contacto').removeAttr('style');
        }

        if(pestana6>0){
            $('.pestanaUsuario6').css('color','red');
        }else{
            $('.pestanaUsuario6').removeAttr('style');
        }

        if(pestana1 == 0 && pestana2 == 0 && pestana3 == 0 && pestana4 == 0 && pestana5 == 0 && pestana6 == 0 ){
            $('#completeUsuario').hide();
            $( "#registrar_usuario" ).trigger( "submit" );
            
        }else{
            $('#completeUsuario').show();
            
            
        }
        

    });







</script>
<script>
$(function () {
  $('.select').each(function () {
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