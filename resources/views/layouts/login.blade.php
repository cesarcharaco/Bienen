<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="es"> <!--<![endif]-->
<html>
  <head>
    <title>Bienen! | @yield('title')</title>

  </head>
  <body>
    @yield('content')
  </body>

<!-- jquery
    ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</html>