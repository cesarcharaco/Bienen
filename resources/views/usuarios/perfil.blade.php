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
                                    <h2>Perfil de usuario</h2>
                                    <p>Edite sus datos</p>
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
                        <p>Todos los campos (<b style="color: red;">*</b>) son obligatorios</p>
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

                    <form action="{{route('usuarios.update',$empleado->id)}}" method="POST" name="cambiar_perfil">
                    @csrf
                        <h4>Datos de Usuarios</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="email">Correo electrónico: <b style="color: red;">*</b></label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->usuario->email}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="password">Contraseña: <b style="color: red;">*</b></label>
                                    <input class="i-checks" type="checkbox" name="cambiar_password" id="cambiar_password" value="cambiar_password">
                                    <small>Cambiar contraseña</small>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Ingrese contraseña" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="confirmar_password">Repita contraseña: <b style="color: red;">*</b></label>
                                    <input type="text" name="confirmar_password" id="confirmar_password" class="form-control" placeholder="Repita contraseña" disabled="disabled">
                                </div>
                            </div>
                        </div>
                        <h4>Datos personales</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="nombres">Nombres: <b style="color: red;">*</b></label>
                                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->nombres}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos: <b style="color: red;">*</b></label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->apellidos}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="rut">Rut: <b style="color: red;">*</b></label>
                                    <input type="text" name="rut" id="rut" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->rut}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="rut">Género: <b style="color: red;">*</b></label>
                                    <div class="fm-checkbox form-elet-mg">
                                        <div class="i-checks">
                                            <label>
                                                <label><input type="radio" id="genero" name="genero" class="i-checks" value="Masculino" @if($empleado->genero=="Masculino") checked="checked" @endif> <i></i>  Masculino</label>
                                            </label>
                                            <label>
                                                <label><input type="radio" id="genero" name="genero" class="i-checks" value="Femenino" @if($empleado->genero=="Femenino") checked="checked" @endif> <i></i>  Femenino</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="edad">Edad: <b style="color: red;">*</b></label>
                                    <input type="number" name="edad" id="edad" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->edad}}" min="1">
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
                                            <option value="{{ $key->id }}" @if($empleado->id_area=="{{ $key->id }}") selected="selected" @endif>{{ $key->area }}</option>
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
                                            <input type="radio" id="turno" name="turno" value="Mañana" @if($empleado->turno=="Mañana") checked="checked" @endif id="ts7">
                                            <label for="ts7" class="ts-helper"></label>
                                        </div>
                                        <div class="nk-toggle-switch" data-ts-color="green">
                                            <label for="ts4" class="ts-label">Tarde</label>
                                            <input type="radio" id="turno" name="turno" value="Tarde" @if($empleado->turno=="Tarde") checked="checked" @endif id="ts4">
                                            <label for="ts4" class="ts-helper"></label>
                                        </div>
                                        <div class="nk-toggle-switch" data-ts-color="blue">
                                            <label for="ts3" class="ts-label">Noche</label>
                                            <input type="radio" id="turno" name="turno" value="Noche" @if($empleado->turno=="Noche") checked="checked" @endif id="ts3">
                                            <label for="ts3" class="ts-helper"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="status">Status: <b style="color: red;">*</b></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Activo" @if($empleado->status=="Activo") selected="selected" @endif>Activo</option>
                                        <option value="Reposo" @if($empleado->status=="Reposo") selected="selected" @endif>Reposo</option>
                                        <option value="Retirado" @if($empleado->status=="Retirado") selected="selected" @endif>Retirado</option>
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

@section('scripts')
<script type="text/javascript">
$('#cambiar_password').on('change',function () {
    if ($('#cambiar_password').prop('checked')) {
      $('#password').attr('disabled',false);
      $("#password").prop('required', true);
      $('#confirmar_password').attr('disabled',false);
      $("#confirmar_password").prop('required', true);
    }else{
      $('#password').attr('disabled',true);
      $("#password").removeAttr('required');
      $('#confirmar_password').attr('disabled',true);
      $("#confirmar_password").removeAttr('required');
      password.value="";
      confirmar_password.value="";
    }
  });
</script>
@endsection