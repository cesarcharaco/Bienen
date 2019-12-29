@extends('layouts.login')
@section('title') Inicio de sesión @endsection

@section('content')
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Tips de seguridad</h3>
            
                
            
        </div>
        <div class="col-md-6 login-form-2">
            <div class="login-logo">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            </div>
            <h3>Inicio de sesión</h3>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingrese email *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Ingrese contraseña *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Iniciar sesión" />
                </div>
                <div class="form-group">

                    <a href="#" class="btnForgetPwd" value="Login">¿Olvido su contraseña?</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
