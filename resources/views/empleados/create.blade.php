@extends('layouts.appLayout')

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <a href="{{ route('empleados.index') }}" data-toggle="tooltip"
                                        data-placement="bottom" title="Volver" class="btn">
                                        <i class="notika-icon notika-left-arrow"></i>
                                    </a>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Registrar empleados</h2>
                                    <p>Registra nuevos empleados en el sistema</p>
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

@endsection

@section('content')
<!-- Form Element area Start-->
<div class="form-element-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        <p>Todos los campos son obligatorios</p>
                        @if(count($errors))
                        <div class="alert-list m-4">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        @endif
                        @include('flash::message')
                    </div>

                    <form action="{{route('empleados.store')}}" method="POST" name="registrar_usuario" data-parsley-validate>
                    @csrf
                        <h4>Datos de Usuarios</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="email">Correo electrónico: <b style="color: red;">*</b></label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <h4>Datos personales</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="nombres">Nombres: <b style="color: red;">*</b></label>
                                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese nombres" required="required" value="{{ old('nombres') }}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos: <b style="color: red;">*</b></label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese apellido" required="required" value="{{ old('apellidos') }}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="rut">Rut: <b style="color: red;">*</b></label>
                                    <input type="text" name="rut" id="rut" class="form-control" placeholder="Ingrese rut" required="required" value="{{ old('rut') }}" data-parsley-type="number" data-parsley-length="[8, 9]" maxlength="9">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="rut">Género: <b style="color: red;">*</b></label>
                                    <div class="fm-checkbox form-elet-mg">
                                        <div class="i-checks">
                                            <label>
                                                <label><input type="radio" id="genero" name="genero" class="i-checks" value="Masculino" checked="checked"> <i></i>  Masculino</label>
                                            </label>
                                            <label>
                                                <label><input type="radio" id="genero" name="genero" class="i-checks" value="Femenino" > <i></i>  Femenino</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="edad">Edad: <b style="color: red;">*</b></label>
                                    <input type="text" name="edad" id="edad" class="form-control" placeholder="Ingrese edad" required="required" value="{{ old('edad') }}" maxlength="2" data-parsley-length="[1, 2]" data-parsley-type="number">
                                </div>
                            </div>
                        </div>
                        @if(\Auth::User()->tipo_user=="Admin")
                        <h4>Datos laborales</h4>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="rut">Área: <b style="color: red;">*</b></label>
                                    <select name="id_area" id="id_area" class="form-control">                  
                                        @foreach($areas as $key)
                                            <option value="{{ $key->id }}">{{ $key->area }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="rut">Turno: <b style="color: red;">*</b></label>
                                    <div class="toggle-select-act form-elet-mg mg-t-10">
                                        <div class="nk-toggle-switch" data-ts-color="amber">
                                            <label for="ts7" class="ts-label">Mañana</label>
                                            <input type="radio" id="turno" name="turno" value="Mañana" id="ts7" checked="checked">
                                            <label for="ts7" class="ts-helper"></label>
                                        </div>
                                        <div class="nk-toggle-switch" data-ts-color="green">
                                            <label for="ts4" class="ts-label">Tarde</label>
                                            <input type="radio" id="turno" name="turno" value="Tarde" id="ts4">
                                            <label for="ts4" class="ts-helper"></label>
                                        </div>
                                        <div class="nk-toggle-switch" data-ts-color="blue">
                                            <label for="ts3" class="ts-label">Noche</label>
                                            <input type="radio" id="turno" name="turno" value="Noche"  id="ts3">
                                            <label for="ts3" class="ts-helper"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="status">Status: <b style="color: red;">*</b></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Activo">Activo</option>
                                        <option value="Reposo">Reposo</option>
                                        <option value="Retirado">Retirado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="text-center mt-4">
                            <a href="{{route('empleados.index')}}" class="btn btn-info btn-sm">Regresar</a>
                            <button class="btn btn-lg btn-success btn-sm" type="submit">Guardar perfil</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
</div>


@endsection
