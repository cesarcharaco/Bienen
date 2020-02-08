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
										<i class="fa fa-envelope-o"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Avisos</h2>
										<p>Lista de todos los avisos del sistema</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="#" data-toggle="tooltip" data-placement="left" title="Registrar un nuevo empleado" class="btn"><i class="lni-user"></i> Nuevo aviso</a>
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
                        
                        <div class="widget-tabs-list">
                                <ul class="nav nav-tabs tab-nav-left" style="align-content: center;">
                                    <li class="active"><a class="active" data-toggle="tab" href="#novedades">Avisos</a></li>
                                    <li><a data-toggle="tab" href="#muro">Avisos enviados</a></li>
                                    <li><a data-toggle="tab" href="#pizarra">Redactar avisos</a></li>
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

                                    <div id="pizarra" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="add-todo-list notika-shadow ">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Avisos recibidos</h2>
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



@endsection

@section('scripts')

@endsection