@extends('layouts.appLayout')

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Correos</h2>
                                        <p>Lista de todos los avisos por correo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pull-right">
                                <button id="actividad" value="0" data-toggle="modal" data-target="#nuevo_empleado" class="btn btn-default" data-backdrop="static" data-keyboard="false"><i class="notika-icon notika-support"></i> Nuevo empleado</button>
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
                                <tbody>
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
                                            <a href="{{ route('empleados.show', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Ver datos del empleado">
                                                <i class="fa fa-eye pr-3" style="font-size:20px"></i>
                                            </a>
                                            <a href="#"  data-toggle="modal" data-target="#nuevo_empleado" data-placement="top" title="Editar datos del empleado">
                                                <i class="fa fa-pencil pr-3" style="font-size:20px"></i>
                                            </a>
                                            @if($item->id!=1)
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Suspender empleado"  onclick="status('{{ $item->id }}')" id="cambiar_status">
                                                <i class="fa fa-lock" style="font-size:20px" data-toggle="modal" data-target="#myModaltwo"></i>
                                            </a>
                                            @endif
                                            <br>
                                            @if(buscar_p('Usuarios','Eliminar')=="Si")
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar empleado" onclick="eliminar('{{ $item->id }}')" id="eliminar_empleado">
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
                <h2>Cambiar de status a empleado</h2>
                <p>¿Estas seguro que desea cambiar de status a este empleado?.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="status"><b>Status</b> <b style="color: red;">*</b></label>
                            <input type="hidden" id="id_empleado" name="id_usuario">
                            <select name="status" id="status" class="form-control" required="required">
                                <option value="">Seleccione status...</option>
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
                <p>Está a punto de eliminar a un empleado, al igual que sus asignaciones, registros y acceso al sistema. ¿Desea continuar? Esta acción no se podrá deshacer</p>

                <input type="text" id="id_user" name="id_empleado">
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Eliminar empleado</button>
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


    function examenes(numero){
        
        if ($('#examenes_fecha_realizado'+numero).prop('disabled') == false) {
            $('#examenes_fecha_realizado'+numero).prop('disabled',true);
            $('#examenes_fecha_vencimiento'+numero).prop('disabled',true);
        } else {
            $('#examenes_fecha_realizado'+numero).prop('disabled',false);
            $('#examenes_fecha_vencimiento'+numero).prop('disabled',false);
        }


    }

    function cursos(numero){
        
        if ($('#curso_fecha_realizado'+numero).prop('disabled') == false) {
            $('#curso_fecha_realizado'+numero).prop('disabled',true);
            $('#curso_fecha_vencimiento'+numero).prop('disabled',true);
        } else {
            $('#curso_fecha_realizado'+numero).prop('disabled',false);
            $('#curso_fecha_vencimiento'+numero).prop('disabled',false);
        }


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