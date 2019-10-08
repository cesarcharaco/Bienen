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
                                        <li><a href="#tab3" data-toggle="tab">Tipo</a></li>
                                        <li id="des_actividad"><a href="#tab1" data-toggle="tab">Descripción de Actividad</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Horario</a></li>
                                        <li><a href="#tab4" data-toggle="tab">Archivos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {!! Form::open(['route' => 'actividades.store', 'method' => 'post','enctype' => 'Multipart/form-data']) !!}
                            <div class="tab-content">
                                <div class="tab-pane wizard-ctn" id="tab3">

                                    @include('planificacion.formWizard.caracteristicasForm')

                                </div>
                                <div class="tab-pane wizard-ctn" id="tab1">

                                    @include('planificacion.formWizard.descriptionForm')

                                </div>
                                <div class="tab-pane wizard-ctn" id="tab2">

                                    @include('planificacion.formWizard.dateTimeForm')

                                </div>
                                <div class="tab-pane wizard-ctn" id="tab4">

                                    @include('planificacion.formWizard.filesForm')

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
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>