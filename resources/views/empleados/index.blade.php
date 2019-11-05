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
                                        <td>{{ $item->areas->area }}</td>
                                        <td>
                                            <a href="{{ route('empleados.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Editar datos del empleado">
                                                <i class="lni-pencil-alt pr-3" style="font-size:20px"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Suspender empleado">
                                                <i class="lni-trash" style="font-size:20px"></i>
                                            </a>
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

@endsection