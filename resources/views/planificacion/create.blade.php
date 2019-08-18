@extends('layouts.appLayout')

@section('content')
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
                                    <i class="notika-icon notika-calendar"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Crear planificación</h2>
                                    <p>Selecciona el día el cuál deseas registrar una actividad, se desplegara un modal
                                        con los datos que deberás llenar para su posterior registro.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->

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
            },
            dateClick: function (info) {
                $("#myModalone").modal();
            }

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



<!-- Start modal -->
<div class="modal fade" id="myModalone" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Modal title</h2>
                <p>Curabitur blandit mollis lacus. Nulla sit amet est. Suspendisse nisl elit, rhoncus eget, elementum
                    ac, condimentum eget, diam. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Cras
                    sagittis.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection
