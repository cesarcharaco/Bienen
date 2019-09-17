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
                                <button data-toggle="modal" data-target="#myModalone" class="btn"><i
                                        class="notika-icon notika-edit"></i> Nueva actividad</button>
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



@include('planificacion.fullcalendar')




@endsection