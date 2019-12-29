<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="es"> <!--<![endif]-->
<html>
  <head>
    <title>Bienen! | @yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-logo{
    position: relative;
    margin-left: -41.5%;
}
.login-logo img{
    position: absolute;
    width: 20%;
    margin-top: 19%;
    background: #282726;
    border-radius: 4.5rem;
    padding: 5%;
}
.login-form-1{
    padding: 9%;
    background:#282726;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    margin-bottom:12%;
    color:#fff;
}
.login-form-2{
    padding: 9%;
    background: rgb(27,88,171);
    background: linear-gradient(90deg, rgba(27,88,171,1) 0%, rgba(29,52,86,1) 100%);
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    margin-bottom:12%;
    color: #fff;
}
.btnSubmit{
    font-weight: 600;
    width: 50%;
    color: #282726;
    background-color: #fff;
    border: none;
    border-radius: 1.5rem;
    padding:2%;
}
.btnForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.btnForgetPwd:hover{
    text-decoration:none;
    color:#fff;
}
/*----------------------------------------*/
/*  11.  Footer CSS
/*----------------------------------------*/
.footer-copyright-area {
    margin-top:40px;
}
.footer-copyright-area p {
    margin: 0;
    font-size: 14px;
    color: #fff;
    padding: 15px 0px;
    text-align: center;
}
.footer-copyright-area a{
    color:#fff;
  transition:all .4s ease 0s;
}
.footer-copyright-area a:hover{
    color:#333;
  transition:all .4s ease 0s;
}
.footer-copyright-area{
  /*background:#00c292;*/
    background: rgb(27,88,171);
    background: linear-gradient(90deg, rgba(27,88,171,1) 0%, rgba(29,52,86,1) 100%);
    width: 100%;
}
    </style>
  </head>
  <body>
    @yield('content')
  </body>
<!-- Start Footer area-->
<div class="footer-copyright-area" style="position: fixed !important; bottom: 0 !important; width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p style="color: white;">Un proyecto desarrollado por <a href="https://eiche.cl/" target="_blank" id="eiche">EICHE</a>.</p>
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
</html>