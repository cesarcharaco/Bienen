<!doctype html>
<html class="no-js" lang="">

<head>
    @include('layouts.css')
    <style type="text/css">
         .callout{border-radius:3px;margin:0 0 20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee}.callout a{color:#fff;text-decoration:underline}.callout a:hover{color:#eee}.callout h4{margin-top:0;font-weight:600}.callout p:last-child{margin-bottom:0}.callout code,.callout .highlight{background-color:#fff}.callout.callout-danger{border-color:#c23321}.callout.callout-warning{border-color:#c87f0a}.callout.callout-info{border-color:#0097bc}.callout.callout-success{border-color:#00733e}

        .callout.callout-danger,.callout.callout-warning,.callout.callout-info,.callout.callout-success,.alert-success,.alert-danger,.alert-error,.alert-warning,.alert-info,.label-danger,.label-info,.label-warning,.label-primary,.label-success,.modal-primary .modal-body,.modal-primary .modal-header,.modal-primary .modal-footer,.modal-warning .modal-body,.modal-warning .modal-header,.modal-warning .modal-footer,.modal-info .modal-body,.modal-info .modal-header,.modal-info .modal-footer,.modal-success .modal-body,.modal-success .modal-header,.modal-success .modal-footer,.modal-danger .modal-body,.modal-danger .modal-header,.modal-danger .modal-footer{color:#fff !important}.bg-gray{color:#000;background-color:#d2d6de !important}.bg-gray-light{background-color:#f7f7f7}.bg-black{background-color:#111 !important}.bg-red,.callout.callout-danger,.alert-danger,.alert-error,.label-danger,.modal-danger .modal-body{background-color:#dd4b39 !important}.bg-yellow,.callout.callout-warning,.alert-warning,.label-warning,.modal-warning .modal-body{background-color:#f39c12 !important}.bg-aqua,.callout.callout-info,.alert-info,.label-info,.modal-info .modal-body{background-color:#00c0ef !important}.bg-blue{background-color:#0073b7 !important}.bg-light-blue,.label-primary,.modal-primary .modal-body{background-color:#3c8dbc !important}.bg-green,.callout.callout-success,.alert-success,.label-success,.modal-success .modal-body{background-color:#00a65a !important}
        .scrollbar {
            height: 500px;
            width: 100%;
            background: #fff;
            overflow-y: scroll;
            margin-bottom: 25px;
            }
            .force-overflow {
            min-height: 450px;
            }

            .scrollbar-primary::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5; }

            .scrollbar-primary::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #4285F4; 
        }
    </style>

</head>

<body>
    <div class="" style="min-height: 100% !important; position: relative !important;">
        
    <!-- Start header Top -->

    @include("layouts.admin.header")

    <!-- End Header Top Area -->

    <!-- Mobile Menu start -->

    @include("layouts.admin.mobileMenu")

    <!-- Mobile Menu end -->

    <!-- Main Menu area start-->

    @include("layouts.admin.mainMenu")

    <!-- Main Menu area End-->

    <div class="content" style="padding-bottom: 100px !important;">
        @yield('breadcomb')
        @yield('content')
    </div>


    @include('layouts.footer')
    @include('layouts.scripts')
    </div>
</body>

</html>
