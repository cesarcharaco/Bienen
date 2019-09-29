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
    <div class="container" style="width: ;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        <p>Tipos de gerencias</p>
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
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="accordion-stn">
                                    <div class="panel-group" data-collapse-color="nk-blue" id="gerencias" role="tablist" aria-multiselectable="false">
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#gerencias" href="#gerencia_npi" aria-expanded="false">{{$gerencias1->gerencia}}</a>
                                                </h4>
                                            </div>
                                            <div id="gerencia_npi" class="collapse in" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Tipo de área de la gerencia NPI</p>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="accordion-stn">
                                                            <div class="panel-group" data-collapse-color="nk-green" id="area1" role="tablist" aria-multiselectable="false">
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#area1" href="#ews" aria-expanded="false">EWS</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="ews" class="collapse in" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#area1" href="#planto_cero" aria-expanded="false">Planto Cero/Desaladora & Acueducto</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="planto_cero" class="collapse" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#area1" href="#agua_tranque" aria-expanded="false">Agua y Tranque</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="agua_tranque" class="collapse" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#gerencias" href="#gerencia_cho" aria-expanded="false">{{$gerencias2->gerencia}}</a>
                                                </h4>
                                            </div>
                                            <div id="gerencia_cho" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Tipo de área de la gerencia CHO</p>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="accordion-stn">
                                                            <div class="panel-group" data-collapse-color="nk-green" id="area2" role="tablist" aria-multiselectable="false">
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#area2" href="#filtro_puerto" aria-expanded="false">Filtro-Puerto</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="filtro_puerto" class="collapse in" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            <p><b></b></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#area2" href="#ect" aria-expanded="false">ECT</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="ect" class="collapse" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-collapse notika-accrodion-cus">
                                                                    <div class="panel-heading" role="tab">
                                                                        <h4 class="panel-title">
                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#area2" href="#colorados" aria-expanded="false">Los Colorados</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="colorados" class="collapse" role="tabpanel">
                                                                        <div class="panel-body">
                                                                            <p></p>
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