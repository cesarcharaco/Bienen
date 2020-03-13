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
									<h2>Cursos</h2>
									<p>Lista de todos los cursos registradas en el sistema</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<button id="curso" value="0" data-toggle="modal" data-target="#nuevoCurso" class="btn btn-default" data-backdrop="static" data-keyboard="false">Nuevo curso</button>
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
                                    <th>Cursos</th>
                                    <th>Status</th>
                                    <th style="text-align: center;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $num=0;?>
                            	@foreach($cursos as $item)
                            		<tr>
                            			
		                           		<td>{{$num=$num+1}}</td>
		                           		<td>{{$item->curso}}</td>
		                           		<td>
		                           			@if($item->status == "Activo")
		                           				<a href="#" style="color: green;"><strong>Activo</strong></a>
		                           			@else
		                           				<a href="#" style="color: red;"><strong>Inactivo</strong></a>
		                           			@endif
		                           		</td>
		                           		<td>
		                           			<button id="EditarCurso" data-toggle="modal" data-target="#editarCurso" class="btn btn-warning" data-backdrop="static" data-keyboard="false"> Editar</button>

		                           			<button id="EliminarCurso" data-toggle="modal" data-target="#eliminarCurso" class="btn btn-danger" data-backdrop="static" data-keyboard="false"> Eliminar</button>
		                           		</td>
                            		</tr>
                            	@endforeach()
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->
@endsection

@include('cursos.modales.eliminar')
@include('cursos.modales.crear')
@include('cursos.modales.editar')

@section('scripts')

@endsection