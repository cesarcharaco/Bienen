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
										<i class="notika-icon notika-support"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Ver empleados</h2>
										<p>Lista de todos los empleados registrados en el sistema</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="{{ route('empleados.create') }}" data-toggle="tooltip" data-placement="left" title="Registrar un nuevo empleado" class="btn"><i class="lni-user"></i> Registrar empleado</a>
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
                                            <a href="{{ route('empleados.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Editar datos del empleado">
                                                <i class="fa fa-pencil pr-3" style="font-size:20px"></i>
                                            </a>
                                            @if($item->id!=1)
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Suspender empleado"  onclick="status('{{ $item->id }}')" id="cambiar_status">
                                                <i class="fa fa-trash" style="font-size:20px" data-toggle="modal" data-target="#myModaltwo"></i>
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

@endsection

@section('scripts')

<script type="text/javascript">
    function status(id_usuario) {
        //console.log(id_usuario+"----");
        $("#id_empleado").val(id_usuario);
    }
</script>
@endsection