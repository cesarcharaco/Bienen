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
<!-- <script src="{{ asset('assets/fullcalendar/list/main.js') }}"></script> -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('myCalendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid', 'bootstrap', 'list'],
            themeSystem: 'bootstrap',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            editable: true,
            events: [

                {
                    title: 'Limpieza de baños',
                    start: '2019-08-06',
                    extraParams: {
                        descripcion: 'Limpieza de los baños del piso 2',
                        turno: 'Noche',
                    },
                },
                {
                    title: 'Comprar materiales de limpieza',
                    start: '2019-08-17',
                    extraParams: {
                        descripcion: 'Adquirir nuevos materiales de limpieza',
                        turno: 'Tarde',
                    },

                },
                {
                    title: 'Revisar farjos eléctricos',
                    start: '2019-08-20',
                    extraParams: {
                        descripcion: 'Revisión de los farjos eléctricos en las afueras',
                        turno: 'Mañana'
                    },

                },
                {
                    title: 'Mantenimiento de computadoras',
                    start: '2019-08-22',
                    extraParams: {
                        descripcion: 'Mantenimiento preventivo a las computadoras de planta baja',
                        turno: 'Tarde'
                    },

                }
            ],
            eventClick: function (info) {
                document.getElementById('tituloEvento').innerHTML = info.event.title;
                document.getElementById('descripcionEvento').innerHTML = info.event.extendedProps
                    .extraParams.descripcion;
                //document.getElementById('turnoEvento').innerHTML = info.event.extendedProps.extraParams.turno;

                $("#myModalfour").modal();
                // if (info.event.url) {
                // window.open(info.event.url);
                // }
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




<!-- Start modal view -->



<div class="modal animated bounce" id="myModalfour" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning text-center" role="alert">
                    <i class="lni-sun" style="font-size:30px"></i>
                    <h2 style="color: white">Turno mañana</h2>
                </div>

                <h1 id="tituloEvento"></h1>
                <small>En la lista de: John Doe</small>
                <div class="row">
                    <div class="col-md-6">
                        <b>
                            <p>Vencimiento:
                                <span class="label label-success p-1" data-toggle="tooltip" data-placement="bottom"
                                    title="Feha de vencimiento"><i class="lni-alarm-clock"></i> 19 Agos.</span>
                            </p>
                        </b>

                        <b>
                            <p>Descripción:
                        </b><br>
                        <span id="descripcionEvento"></span></p>
                    </div>


                    <div class="col-md-6" style="margin-top: -20px">


                        <div class="accordion-stn col-6">
                            <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist"
                                aria-multiselectable="true">
                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">

                                            Añadir a la actividad

                                        </h4>

                                    </div>

                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                        <p class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                                href="#accordionGreen-two" aria-expanded="false">
                                                <i class="lni-users"></i> Miembros
                                            </a>

                                        </p>

                                    </div>

                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                        <p class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                                href="#accordionGreen-three" aria-expanded="false">
                                                <i class="lni-calendar"></i> Fecha de vencimiento
                                            </a>

                                        </p>
                                    </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                        <p class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                                href="#accordionGreen-three" aria-expanded="false">
                                                <i class="lni-paperclip"></i> Adjuntos
                                            </a>

                                        </p>
                                    </div>
                                </div>



                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            Acciones
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                        <p class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                                href="#accordionGreen-three" aria-expanded="false">
                                                <i class="lni-pencil-alt"></i> Editar
                                            </a>

                                        </p>
                                    </div>
                                </div>
                                <div class="panel panel-collapse notika-accrodion-cus">
                                    <div class="panel-heading" style="background: #FE2E2E" role="tab">
                                        <p class="panel-title">
                                            <a class="collapsed" style="color: white" data-toggle="collapse"
                                                data-parent="#accordionGreen" href="#accordionGreen-three"
                                                aria-expanded="false">
                                                <i class="lni-trash"></i> Eliminar
                                            </a>

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <!-- <br><span>Turno: <p id="turnoEvento"></p></span> -->
            </div>
            <div class="modal-footer mt-4">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- End modal view -->
