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
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="fa fa-envelope-o"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Avisos</h2>
										<p>Lista de todos los avisos del sistema</p>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<a style="width: 100%;" href="#" class="btn btn-primary" data-toggle="modal" data-target="#NuevoAviso">Nuevo aviso Manual</a>
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

<div class="form-element-area modals-single">
    <div class="container" style="width: ;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="callout callout-success" style="height: -5px;">
                    <h4>Envío de avisos!</h4>

                    <ul>
                        <li><strong>Automático</strong> 
                            <!-- <ul>
                                <li>Asigna todas las actividades en la planificación y área, al empleado seleccionado</li>
                            </ul> -->
                        </li>
                        <li><strong>Manual</strong> 
                            <!-- <ul>
                                <li>Asigna las actividades seleccionadas en la tabla, de la planificación y área al empleado seleccionado</li>
                            </ul> -->
                        </li>
                        <li><strong>Ambos</strong> 

                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
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
                        
                        <div class="widget-tabs-list">
                                <ul class="nav nav-tabs tab-nav-left" style="align-content: center;">
                                    <li class="active"><a class="active" data-toggle="tab" href="#novedades">Avisos</a></li>
                                    <li><a data-toggle="tab" href="#muro">Avisos enviados</a></li>
                                    <!-- <li><a data-toggle="tab" href="#actividades">Resumen de actividades</a></li> -->
                                </ul>
                                <div class="tab-content tab-custom-st">
                                    <div id="novedades" class="tab-pane fade in active">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="add-todo-list notika-shadow ">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Avisos</h2>

                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="data-table-list">
                                                                        <div class="table-responsive">
                                                                            <table id="data-table-basic2" class="table table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Nro.</th>
                                                                                        <th>Motivo</th>
                                                                                        <th>Mensaje</th>
                                                                                        <th>Dias previos</th>
                                                                                        <th>Días del aviso</th>
                                                                                        <th>Modalidad</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    
                                                                                	@php $i=1; @endphp
                                                                                	@foreach($avisos as $key)
	                                                                                    <tr>
	                                                                                    	<td>@php $i=$i+1; @endphp</td>
	                                                                                    	<td>{{$key->motivo}}</td>
	                                                                                    	<td>{{$key->mensaje}}</td>
	                                                                                    	<td>{{$key->dias_previos}}</td>
	                                                                                    	<td>{{$key->dias_post}}</td>
	                                                                                    	<td>{{$key->modalidad}}</td>
	                                                                                    </tr>
	                                                                                @endforeach()
	                                                                                <tr>
	                                                                                    	<td>1</td>
	                                                                                    	<td>Asignación de actividades</td>
	                                                                                    	<td>Por motivo de mantenimiento de las nuevas áreas, la actividad en la que fué asignado ha sido modificado con los nuevos <a href="#" data-toggle="modal" data-target="#verMas"><small class="label bg-blue">Ver mas</small></a></td>
	                                                                                    	<td><span class="label label-success pull-center">6 dias</span></td>
	                                                                                    	<td><span class="label label-warning pull-center">1 dias</span></td>
	                                                                                    	<td>Ambas</td>
	                                                                                    </tr>
                                                                                </tbody>    
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

                                    <div id="muro" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Avisos enviados</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div id="actividades" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="add-todo-list notika-shadow ">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Actividades - Resúmen</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            <div class="todoapp" id="todoapp" class="overflow-auto">
                                                                <div class="scrollbar scrollbar-primary">
                                                                    
                                                                    
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
        </div>
    </div>
    <!-- Data Table area End-->

<div class="modal fade" id="NuevoAviso" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Nuevo aviso</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <hr>
            </div>
            <div class="modal-body">
            	@include('avisos.modales.nuevo_aviso')
            </div>
            <div class="modal-footer">
            	<hr>
                <button type="submit" class="btn btn-primary" name="Enviar" value="Enviar">Enviar aviso</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="verMas" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Asignación de actividades</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <hr>
            </div>
            <div class="modal-body">
            	<p><strong>Por motivo de mantenimiento de las nuevas áreas, la actividad en la que fué asignado ha sido modificado con los nuevos parámetros a cumplir en la nueva actividad</strong></p>
            	<hr>
            	<div class="row">
            		
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Días previos
            			<span class="label label-success pull-center">6 dias</span>
            		</div>
            		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Días del post
            			<span class="label label-warning pull-center">1 dias</span>
            		</div>
            	</div>
            </div>
            <div class="modal-footer">
            	
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection