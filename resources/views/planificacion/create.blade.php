@extends('layouts.appLayout')

@section('content')
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
                                    <h2>Crear planificación</h2>
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
                                <small class="text-center">Los campos con un (<span style="color:red">*</span>) son obligatorios</small>

                            </div>
                            
                        </div>
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container-pro wizard-cts-st">
                                        <ul>
                                            <li><a href="#tab1" data-toggle="tab">Descripción de Actividad</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Horario</a></li>
                                            <li><a href="#tab3" data-toggle="tab">Archivos</a></li>
                                            <li><a href="#tab4" data-toggle="tab">Avances</a></li>
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

                                    @include('planificacion.formWizard.filesForm')

                                </div>
                                <div class="tab-pane wizard-ctn" id="tab4">
                                
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





<div class="modal fade" id="myModalones" role="dialog">
    <div class="modal-dialog modal-large">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wizard-wrap-int">
                        <div class="wizard-hd">
                            <h1 class="text-center">Registrar actividad</h1>
                            <div class="text-center">
                                <small class="text-center">Los campos con un (<span style="color:red">*</span>) son obligatorios</small>

                            </div>
                            
                        </div>
                        <div id="rootwizard">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container-pro wizard-cts-st">
                                        <ul>
                                            <li><a href="#tab1" data-toggle="tab">Descripción de Actividad</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Horario</a></li>
                                            <li><a href="#tab3" data-toggle="tab">Archivos</a></li>
                                            <li><a href="#tab4" data-toggle="tab">Avances</a></li>
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

                                    @include('planificacion.formWizard.filesForm')

                                </div>
                                <div class="tab-pane wizard-ctn" id="tab4">
                                
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

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- End modal -->


<!-- Start Full Calendar area -->

<link href="{{ asset('assets/fullcalendar/core/main.min.css') }}" rel='stylesheet' />
<link href="{{ asset('assets/fullcalendar/daygrid/main.min.css') }}" rel='stylesheet' />
<link href="{{ asset('assets/fullcalendar/timegrid/main.min.css') }}" rel='stylesheet' />
<script src="{{ asset('assets/fullcalendar/core/main.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/interaction/main.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/daygrid/main.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/timegrid/main.min.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/core/es.js') }}"></script>
<script src="{{ asset('assets/fullcalendar/bootstrap/main.min.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('myCalendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid', 'bootstrap'],
            themeSystem: 'bootstrap',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            }
            // dateClick: function (info) {
            //     $("#myModalone").modal();
            // }

        });

        calendar.setOption('locale', 'es');
        calendar.render();
    });

</script>


<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="calendar-wrap">
                <div id="myCalendar"></div>
            </div>

        </div>

    </div>
</div>
<!-- End Full Calendar area -->


@endsection
