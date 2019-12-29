<!doctype html>
<html class="no-js" lang="">

<head>
    @include('layouts.css')

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


    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>
