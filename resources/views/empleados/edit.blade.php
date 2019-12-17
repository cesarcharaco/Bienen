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
                                    <h2>Editar datos del empleado</h2>
                                    <p>Edita los datos de los empleados que han sido registrados previamente en el
                                    sistema</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="#" title="Ver privilegios" class="btn" data-toggle="modal" data-target="#privilegios"><i class="lni-key"></i> Ver privilegios</a>
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

                    {!! Form::open(['route' => ['empleados.update',$empleado->id], 'method' => 'PUT', 'name' => 'editar_usuario', 'id' => 'editar_usuario', 'data-parsley-validate']) !!}
                    @csrf
                        <h4>Datos de Usuarios</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="email">Correo electrónico: <b style="color: red;">*</b></label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->usuario->email}}" >
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="password">Contraseña: <b style="color: red;">*</b></label>
                                    
                                    <input type="checkbox" name="cambiar_password" id="cambiar_password" value="cambiar_password">
                                    
                                    <small>Cambiar contraseña</small>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese contraseña" disabled="disabled" data-parsley-length="[8, 16]">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="confirmar_password">Repita contraseña: <b style="color: red;">*</b></label>
                                    <input type="password" name="confirmar_password" id="confirmar_password" class="form-control" placeholder="Repita contraseña" disabled="disabled" data-parsley-length="[8, 16]" data-parsley-equalto='#password' >
                                </div>
                            </div>
                        </div>
                        <h4>Datos personales</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="nombres">Nombres: <b style="color: red;">*</b></label>
                                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese nombres" required="required" value="{{$empleado->nombres}}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos: <b style="color: red;">*</b></label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese apellidos" required="required" value="{{$empleado->apellidos}}" >
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="rut">Rut: <b style="color: red;">*</b></label>
                                    <input type="text" name="rut" id="rut" class="form-control" placeholder="Ingrese RUT" required="required" value="{{$empleado->rut}}" data-parsley-length="[8, 9]" maxlength="9" data-parsley-type="number" >
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
                                    <input type="text" name="edad" id="edad" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->edad}}" maxlength="2" data-parsley-length="[1, 2]">
                                </div>
                            </div>                            
                        </div>
                        <hr>
                        <h4>Datos laborales</h4>
                        <div class="row">
                            @if($empleado->id!=1)
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="status">Status: <b style="color: red;">*</b></label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Activo" @if($empleado->status=="Activo") selected="selected" @endif>Activo</option>
                                        <option value="Reposo" @if($empleado->status=="Reposo") selected="selected" @endif>Reposo</option>
                                        <option value="Retirado" @if($empleado->status=="Retirado") selected="selected" @endif>Retirado</option>
                                    </select>
                                </div>
                            </div>
                            @endif
                            @if($empleado->id!=1)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                            @else
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                            @endif
                                <div class="form-group">
                                    <label for="area">Área: <b style="color: red;">*</b></label>
                                    <select name="id_area[]" multiple placeholder="Seleccione...">
                                        @foreach($areas as $key)
                                            @php $hallado=0; $areas=areas_empleado($empleado->id); @endphp
                                            @foreach($areas as $k)
                                                @if($k->id==$key->id)
                                                    @php $hallado++; @endphp
                                                @endif
                                            @endforeach
                                            <option value="{{ $key->id }}" @if($hallado>0) selected="selected" @endif >{{ $key->area }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if($empleado->id!=1)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                            @else
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                            @endif
                                <div class="form-group">
                                    <label for="departamento">Departamentos: <b style="color: red;">*</b></label>
                                    <select name="id_departamento[]" id="id_departamento" class="form-control" multiple placeholder="Seleccione...">                  
                                        @foreach($departamentos as $key)
                                            @php $hallado2=0; $departamentos=departamentos_empleado($empleado->id); @endphp
                                            @foreach($areas as $k)
                                                @if($k->id==$key->id)
                                                    @php $hallado2++; @endphp
                                                @endif
                                            @endforeach
                                            <option value="{{ $key->id }}"  @if($hallado2>0) selected="selected" @endif >{{ $key->departamento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @if(buscar_p('Usuarios','Ver datos laborales')=="Si")
                        <h4>Licencia de conducir</h4>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="licencia_conducir">Fecha de emisión <b style="color: red;">*</b></label>
                                    <input type="date" class="form-control" id="lic_fecha_emision" value="{{$empleado->datoslaborales->fechae_licn}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="licencia_conducir">Fecha de vencimiento <b style="color: red;">*</b></label>
                                    <input type="date" class="form-control" id="lic_fecha_vencimiento" value="{{$empleado->datoslaborales->fechav_licn}}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endif

                        <div class="text-center mt-4">
                            <a href="{{route('empleados.index')}}" class="btn btn-info btn-sm">Regresar</a>
                            <button class="btn btn-lg btn-success btn-sm" type="submit">Guardar perfil</button>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="privilegios" role="dialog">
    <div class="modal-dialog modal-large">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Privilegios de usuario</h2>
                <form action="{{route('usuarios.update_privilegios',[$empleado->id])}}" method="POST" name="update_privilegios">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group">
                                <h5 class="header-title"><i class="fa fa-edit"></i> Módulo de actividades</h5>
                                <label><b>Acciones:</b></label>
                                @foreach($user->privilegios as $key)
                                  @if($key->modulo=="Actividades")
                                    <input type="checkbox" name="id_privilegio[]" id="{{ $key->pivot->id_privilegio }}" value="{{ $key->pivot->id_privilegio }}" title="{{$key->descripcion}}" @if($key->pivot->status=='Si') checked="checked" @endif class="i-checks">
                                    <label for="{{ $key->pivot->id_privilegio }}">{{$key->privilegio}}</label>
                                  @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group">
                                <h5 class="header-title"><i class="fa fa-edit"></i> Módulo de planificación</h5>
                                <label><b>Acciones:</b></label>
                                @foreach($user->privilegios as $key)
                                  @if($key->modulo=="Planificación")
                                    <input type="checkbox" name="id_privilegio[]" id="{{ $key->pivot->id_privilegio }}" value="{{ $key->pivot->id_privilegio }}" title="{{$key->descripcion}}" @if($key->pivot->status=='Si') checked="checked" @endif class="i-checks">
                                    <label for="{{ $key->pivot->id_privilegio }}">{{$key->privilegio}}</label>
                                  @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group">
                                <h5 class="header-title"><i class="fa fa-edit"></i> Módulo de usuarios</h5>
                                <label><b>Acciones:</b></label>
                                @foreach($user->privilegios as $key)
                                  @if($key->modulo=="Usuarios")
                                    <input type="checkbox" name="id_privilegio[]" id="{{ $key->pivot->id_privilegio }}" value="{{ $key->pivot->id_privilegio }}" title="{{$key->descripcion}}" @if($key->pivot->status=='Si') checked="checked" @endif class="i-checks">
                                    <label for="{{ $key->pivot->id_privilegio }}">{{$key->privilegio}}</label>
                                  @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group">
                                <h5 class="header-title"><i class="fa fa-edit"></i> Módulo de gráficas</h5>
                                <label><b>Acciones:</b></label>
                                @foreach($user->privilegios as $key)
                                  @if($key->modulo=="Graficas")
                                    <input type="checkbox" name="id_privilegio[]" id="{{ $key->pivot->id_privilegio }}" value="{{ $key->pivot->id_privilegio }}" title="{{$key->descripcion}}" @if($key->pivot->status=='Si') checked="checked" @endif class="i-checks">
                                    <label for="{{ $key->pivot->id_privilegio }}">{{$key->privilegio}}</label>
                                  @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group">
                                <h5 class="header-title"><i class="fa fa-edit"></i> Módulo de gráficas</h5>
                                <label><b>Acciones:</b></label>
                                @foreach($user->privilegios as $key)
                                  @if($key->modulo=="Reportes")
                                    <input type="checkbox" name="id_privilegio[]" id="{{ $key->pivot->id_privilegio }}" value="{{ $key->pivot->id_privilegio }}" title="{{$key->descripcion}}" @if($key->pivot->status=='Si') checked="checked" @endif class="i-checks">
                                    <label for="{{ $key->pivot->id_privilegio }}">{{$key->privilegio}}</label>
                                  @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Guardar Privilegios</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
                </form>
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


$(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});

</script>
@endsection