<!doctype html>
<html class="no-js" lang="">

<head>
    @include('layouts.css')

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
