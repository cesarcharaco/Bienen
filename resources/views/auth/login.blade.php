@extends('layouts.loginLayout')

@section('title', 'Bienen System')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="nk-block toggled" id="l-login">
        <div class="nk-form">
            <h2>Inicio de Sesión</h2>

            @if(count($errors))
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="input-group">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                <div class="nk-int-st">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Correo Electrónico">
                </div>
            </div>
            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                <div class="nk-int-st">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Contraseña">
                </div>
            </div>
            <div class="fm-checkbox">
                <label>
                    <input class="i-checks" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <i></i>Recuerdame</label>
            </div>
            <button type="submit"
                class="btn btn-login btn-success btn-float"><i
                    class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
        </div>

        <div class="nk-navigation nk-lg-ic">
            <a href="{{ route('register') }}" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i
                    class="notika-icon notika-plus-symbol"></i> <span>Registrate</span></a>
            <a href="{{ route('password.request') }}" data-ma-action="nk-login-switch"
                data-ma-block="#l-forget-password"><i>?</i> <span>Recuperar contraseña
                </span></a>
        </div>
    </div>
</form>

@include('auth.register') 
@include('auth.passwords.email') 

@endsection
