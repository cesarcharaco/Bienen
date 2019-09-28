@extends('layouts.appLayout')

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-3">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Crear actividad</h2>
                                    <p>Pulsa en el boton y completa el formulario para registrar una nueva actividad.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                            <div class="breadcomb-report">
                                @if(buscar_p('Actividades','Registrar')=="Si")
                                <button data-toggle="modal" data-target="#myModalone" class="btn"><i
                                        class="notika-icon notika-edit"></i> Nueva actividad</button>
                                @endif
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

@if(\Auth::User()->tipo_user=="Empleado")
    @include('planificacion.fullcalendar')
@endif
@if(\Auth::User()->tipo_user="Administrador")
<!-- Form Element area Start-->
<div class="form-element-area">
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        <p>Todos los campos (<b style="color: red;">*</b>) son obligatorios</p>
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
                    </div>

                    {!! Form::open(['route' => ['planificacion.buscar'],'method' => 'post']) !!}
                        @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <label for="gerencias"><b style="color: red;">*</b> Planificación:</label>
                                    <select class="form-control" name="id_gerencia" id="id_gerencia">
                                        <option value="#">Seleccione una gerencia<:/option>
                                        @foreach($gerencias as $key)
                                        <option value="{{ $key->id }}">{{ $key->gerencia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <label for="areas"><b style="color: red;">*</b> Áreas:</label>
                                    <select name="id_area" id="id_area" class="form-control">
                                        <option value="">Seleccione una área...</option>
                                        @foreach($areas as $key)
                                            <option value="{{ $key->id }}">{{ $key->area }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <label for="semanas"><b style="color: red;">*</b> Número de Semanas Actual:</label>
                                    <input type="text" name="num_semana_actual" id="num_semana_actual" class="form-control" value="{{ $num_semana_actual }}">
                                </div>
                            </div>
                        </div>  

                    </div>


                    <div class="text-center mt-4 mb-4">
                        <button class="btn btn-lg btn-success">Buscar planificación</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="data-table-list">
                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task</th>
                                            {{-- <th>Descripción</th> --}}
                                            {{-- <th>Turno</th> --}}
                                            <th>Fecha</th>
                                            <th>Duración aproximada</th>
                                            <th>Cantidad de personas</th>
                                            <th>Dureación real</th>
                                            <th>Día</th>
                                            <th>Área</th>
                                            <th>Tipo</th>
                                            <th>Realizada</th>
                                            <th>Avances del turno y pendientes</th>
                                            <th>Observaciones/Comentarios</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            {{-- <td></td>
                                            <td></td> --}}
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
@endif

<!-- Start modal -->
<div class="modal fade" id="myModalone" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h1 class="text-center">Registrar actividad</h1>
                        <div class="text-center">
                            <small class="text-center">Los campos con un (<span style="color:red">*</span>) son
                                obligatorios</small>

                        </div>

                    </div>
                    <div id="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab1" data-toggle="tab">Descripción de Actividad</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Horario</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Características</a></li>
                                        <li><a href="#tab4" data-toggle="tab">Archivos</a></li>
                                        <li><a href="#tab5" data-toggle="tab">Avances</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab1">

                                @include('planificacion.formWizard.descriptionForm')

                            </div>
                            <div class="tab-pane wizard-ctn" id="tab2">

                                @include('planificacion.formWizard.dateTimeForm')

                            </div>
                            <div class="tab-pane wizard-ctn" id="tab3">

                                @include('planificacion.formWizard.caracteristicasForm')

                            </div>
                            <div class="tab-pane wizard-ctn" id="tab4">

                                @include('planificacion.formWizard.filesForm')

                            </div>
                            <div class="tab-pane wizard-ctn" id="tab5">

                                @include('planificacion.formWizard.progressForm')

                            </div>

                            <div class="wizard-action-pro">
                                <ul class="wizard-nav-ac">

                                    <li><a class="button-previous a-prevent" href="#"><i
                                                class="notika-icon notika-back"></i></a></li>
                                    <li><a class="button-next a-prevent" href="#"><i
                                                class="notika-icon notika-next-pro"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection