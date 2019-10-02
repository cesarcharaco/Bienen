<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bienen System - Administración</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- FontAwesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- lineIcons CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons/lineIcons.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/notika-custom-icon.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/wave/button.css') }}">
    
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!-- Data Table CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">

    <!--============================================
     ************** Formularios *******************
    ============================================ -->
    
      <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select/bootstrap-select.css') }}">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/datapicker/datepicker3.css') }}">
    <!-- Color Picker CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/color-picker/farbtastic.css') }}">
    <!-- Chosen CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/chosen/chosen.css') }}">
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/notification/notification.css') }}">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/dropzone/dropzone.css') }}">




</head>

<body>
    <!-- Start header Top -->

    @include("layouts.admin.header")

    <!-- End Header Top Area -->

    <!-- Mobile Menu start -->

    @include("layouts.admin.mobileMenu")

    <!-- Mobile Menu end -->

    <!-- Main Menu area start-->

    @include("layouts.admin.mainMenu")

    <!-- Main Menu area End-->

    @yield('breadcomb')

    @yield('content')



    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Derechos reservados © EICHE.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('assets/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('assets/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- jvectormap JS
		============================================ -->
    <!-- <script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap/jvectormap-active.js') }}"></script> -->
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('assets/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/js/flot/flot-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('assets/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/js/knob/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/knob/knob-active.js') }}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{ asset('assets/js/wave/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/wave/wave-active.js') }}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('assets/js/todo/jquery.todo.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{ asset('assets/js/chat/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/chat/jquery.chat.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="{{ asset('assets/js/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/data-table-act.js') }}"></script>
    <script>
    $('#data-table-basic').DataTable({
    language: {
    "decimal": "",
    "emptyTable": "No hay información",
    "info": "Mostrando la página _PAGE_ de _PAGES_",
    "infoEmpty": "Mostrando 0 de 0 Entradas",
    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Mostrar _MENU_ Entradas",
    "loadingRecords": "Cargando...",
    "processing": "Procesando...",
    "search": "Buscar:",
    "zeroRecords": "Sin resultados encontrados",
    "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }

});
    
    </script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('assets/js/tawk-chat.js') }}"></script>



    <!--============================================
     ************** Formularios *******************
    ============================================ -->
        <!--  wizard JS
		============================================ -->
    <script src="{{ asset('assets/js/wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/wizard/wizard-active.js') }}"></script>
    <!-- Input Mask JS
    ============================================ -->
    <script src="{{ asset('assets/js/mask/mask.min.js') }}"></script>
    <script>
       $('.time').mask('00:00:00');
    </script>
    
    <script src="{{ asset('assets/js/jasny-bootstrap.min.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/js/icheck/icheck-active.js') }}"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{{ asset('assets/js/rangle-slider/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangle-slider/jquery-ui-touch-punch.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangle-slider/rangle-active.js') }}"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{ asset('assets/js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datapicker/datepicker-active.js') }}"></script>
    <!-- bootstrap select JS
		============================================ -->
    <script src="{{ asset('assets/js/bootstrap-select/bootstrap-select.js') }}"></script>
    <!--  color-picker JS
		============================================ -->
    <script src="{{ asset('assets/js/color-picker/farbtastic.min.js') }}"></script>
    <script src="{{ asset('assets/js/color-picker/color-picker.js') }}"></script>
    <!--  notification JS
		============================================ -->
    <script src="{{ asset('assets/js/notification/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('assets/js/notification/notification-active.js') }}"></script>
    <!--  summernote JS
		============================================ -->
    <script src="{{ asset('assets/js/summernote/summernote-updated.min.js') }}"></script>
    <script src="{{ asset('assets/js/summernote/summernote-active.js') }}"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
   
    <!--  chosen JS
		============================================ -->
    <script src="{{ asset('assets/js/chosen/chosen.jquery.js') }}"></script>

    <script>
    $("#adicional").on('click', function () {
        var nuevaFecha = `
        <div class="form-group nk-datapk-ctm form-elet-mg mb-4">
                <label>Fecha</label>
                <div class="input-group date nk-int-st">
                    <span class="input-group-addon"></span>
                    <input type="date" class="form-control">
                </div>
            </div>
        `;

        $("#fechas").append(nuevaFecha);

    });

    $("document").ready(function () {
        $("#agregarActividad").on('click', function () {
            $("#myModal").modal();
        })

        $("#verActividad").on('click', function () {
            $("#modalActividades").modal();
        })
    })
    
</script>
@yield('scripts')
</body>

</html>
