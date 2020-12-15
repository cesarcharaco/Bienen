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
                        <div>
                            <strong style="float: right; margin-top: 10px; margin-bottom: 5px;">Año laboral actual: {{-- {{ config('session.fecha_actual') }} --}} 
                                @if(session('fecha_actual'))
                                    @php $anio=session('fecha_actual'); @endphp
                                @else
                                    @php $anio=date('Y');
                                        session('fecha_actual',$anio);
                                     @endphp
                                    
                                @endif
                                {{ $anio }}
                            </strong>
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
                        <p>Todos los campos <b style="color: red;">*</b> son obligatorios</p>

                        @if(count($errors))
                        <div class="alert-list m-4">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        @endif
                        @include('flash::message')
                    </div>
                    <div class="widget-tabs-int">
                        <div class="widget-tabs-list">
                            <ul class="nav nav-tabs tab-nav-center">
                                <li class="active"><a class="active" data-toggle="tab" href="#datos_personales">Datos personales</a></li>
                                <li><a data-toggle="tab" href="#datos_laboral">Datos laboral</a></li>
                                <li><a data-toggle="tab" href="#licencias">Licencias</a></li>
                                <li><a data-toggle="tab" href="#cursos">Cursos</a></li>
                                <li><a data-toggle="tab" href="#medicos">Médicos</a></li>
                                <li><a data-toggle="tab" href="#contacto">Contacto</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st">
                                <div id="datos_personales" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                        <div class="row">
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
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="nombres">Primer nombre: <b style="color: red;">*</b></label>
                                                            <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese nombres" required="required" value="{{$empleado->nombres}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="segundo_nombre">Segundo nombre: <b style="color: red;">*</b></label>
                                                            <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control" placeholder="Ingrese segundo nombre" required="required" value="{{$empleado->datosvarios->segundo_nombre}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="apellidos">Apellidos: <b style="color: red;">*</b></label>
                                                            <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese apellidos" required="required" value="{{$empleado->apellidos}}" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="segundo_apellido">Segundo apellido: <b style="color: red;">*</b></label>
                                                            <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control" placeholder="Ingrese segundo apellido" required="required" value="{{$empleado->datosvarios->segundo_apellido}}" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="rut">Rut: <b style="color: red;">*</b></label>
                                                            <input type="text" name="rut" id="rut" class="form-control" placeholder="Ingrese RUT" required="required" value="{{$empleado->rut}}" data-parsley-length="[8, 9]" maxlength="9" data-parsley-type="number" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="rut">Género: <b style="color: red;">*</b></label>
                                                            <div class="fm-checkbox form-elet-mg">
                                                                <div class="i-checks">
                                                                    <label>
                                                                        <label>
                                                                            <input type="radio" id="genero" name="genero" class="i-checks" value="Masculino" @if($empleado->genero=="Masculino") checked="checked" @endif> Masculino
                                                                        </label>
                                                                    </label>
                                                                    <label>
                                                                        <label>
                                                                            <input type="radio" id="genero" name="genero" class="i-checks" value="Femenino" @if($empleado->genero=="Femenino") checked="checked" @endif> Femenino
                                                                        </label>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="edad">Edad: <b style="color: red;">*</b></label>
                                                            <input type="text" name="edad" id="edad" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{$empleado->edad}}" maxlength="2" data-parsley-length="[1, 2]">
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="cargo">Cargo: <b style="color: red;">*</b></label>
                                                            <select class="form-control" name="cargo" id="cargo" placeholder="Seleccione el cargo del usuario terreno" required="required">
                                                                <option value="Jefe de Operaciones" @if($empleado->cargo=="Jefe de Operaciones") selected="" @endif>Jefe de Operaciones</option>
                                                                <option value="Gerente" @if($empleado->cargo=="Gerente") selected="" @endif>Gerente</option>
                                                                <option value="Ingeniero de Servicios" @if($empleado->cargo=="Ingeniero de Servicios") selected="" @endif>Ingeniero de Servicios</option>
                                                                <option value="Jefe de Administración" @if($empleado->cargo=="Jefe de Administración") selected="" @endif>Jefe de Administración</option>
                                                                <option value="Técnico de Servicios" @if($empleado->cargo=="Técnico de Servicios") selected="" @endif>Técnico de Servicios</option>
                                                                <option value="Ingeniero en Entrenamiento" @if($empleado->cargo=="Ingeniero en Entrenamiento") selected="" @endif>Ingeniero en Entrenamiento</option>
                                                                <option value="Maestro Mayor" @if($empleado->cargo=="Maestro Mayor") selected="" @endif>Maestro Mayor</option>
                                                                <option value="Jefe de Terreno" @if($empleado->cargo=="Jefe de Terreno") selected="" @endif>Jefe de Terreno</option>
                                                                <option value="Supervisor de Terreno" @if($empleado->cargo=="Supervisor de Terreno") selected="" @endif>Supervisor de Terreno</option>
                                                                <option value="Técnico de Montaje" @if($empleado->cargo=="Técnico de Montaje") selected="" @endif>Técnico de Montaje</option>
                                                                <option value="Jefe de Coordinación y Gestión" @if($empleado->cargo=="Jefe de Coordinación y Gestión") selected="" @endif>Jefe de Coordinación y Gestión</option>
                                                                <option value="Planificador" @if($empleado->cargo=="Planificador") selected="" @endif>Planificador</option>
                                                                <option value="Asistente Administrativo" @if($empleado->cargo=="Asistente Administrativo") selected="" @endif>Asistente Administrativo</option>
                                                                <option value="Chofer" @if($empleado->cargo=="Chofer") selected="" @endif>Chofer</option>
                                                            </select>
                                                        </div>
                                                    </div>                            
                                                </div>
                                                <hr>
                                                <div class="text-center mt-4">
                                                    <button class="btn btn-lg btn-success btn-sm" type="submit">Modificar datos personal</button>
                                                </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                <div id="datos_laboral" class="tab-pane fade in">
                                    <div class="tab-ctn">
                                        <div class="row">
                                            <h4>Datos laborales</h4>
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
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
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
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
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
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                                <div class="form-group">
                                                    <label for="id_afp">AFP: <b style="color: red;">*</b></label>
                                                    <select name="id_afp[]" id="id_afp" class="form-control" multiple placeholder="Seleccione...">                  
                                                        @foreach($afp as $key)
                                                                @php $hallado2=0; $afp=afp_empleado($empleado->id); @endphp
                                                            @foreach($afp as $k)
                                                                @if($k->id==$key->id)
                                                                    @php $hallado2++; @endphp
                                                                @endif
                                                            @endforeach
                                                            <option value="{{ $key->id }}"  @if($hallado2>0) selected="selected" @endif >{{ $key->afp }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-12">
                                                <div class="form-group">
                                                    <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                        <label for="rut">Áreas empresas: <b style="color: red;">*</b></label>
                                                        <select name="id_area_e[]" id="id_area_e" class="select2" multiple="multiple" placeholder="Seleccione..." required="required">
                                                            @foreach($areasEmpresa as $key)
                                                                @php $hallado2=0; $areasEmpresa=areasEmpresa_empleado($empleado->id); @endphp
                                                                @foreach($areasEmpresa as $k)
                                                                    @if($k->id==$key->id)
                                                                        @php $hallado2++; @endphp
                                                                    @endif
                                                                @endforeach
                                                                <option value="{{ $key->id }}"  @if($hallado2>0) selected="selected" @endif >{{ $key->area_e }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-12">
                                                <div class="form-group">
                                                    <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                        <label for="rut">Faenas: <b style="color: red;">*</b></label>
                                                        <select name="id_faena[]" id="id_faena" class="select2" required="required" multiple="multiple" placeholder="Seleccione...">
                                                            @foreach($faenas as $key)
                                                                @php $hallado2=0; $faenas=faenas_empleado($empleado->id); @endphp
                                                                @foreach($faenas as $k)
                                                                    @if($k->id==$key->id)
                                                                        @php $hallado2++; @endphp
                                                                    @endif
                                                                @endforeach
                                                                <option value="{{ $key->id }}"  @if($hallado2>0) selected="selected" @endif >{{ $key->faena }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn btn-lg btn-success btn-sm" type="submit">Modificar datos laboral</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="licencias" class="tab-pane fade in">
                                    <div class="tab-ctn">
                                        <div class="row">
                                            <h4>Licencias</h4>
                                            @if($contar_licencias > 0)
                                                @foreach($empleado->licencias as $key)
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Licencia:</b> {{ $key->licencia }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Fecha de emisión:</b> {{ $key->pivot->fecha }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Fecha de vencimiento:</b> {{ $key->pivot->fecha_vence }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Status:</b> {{ $key->pivot->status }}</span>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-12 text-center">
                                                    <strong>No posee licencias registradas</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="row mt-4">
                                            @php $num=1; @endphp
                                            @foreach($licencias as $key)
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <label for="id_licencia{{$num}}">Cambiar</label>
                                                        <input type="checkbox" onclick="licencias('{{$num}}')" name="id_licencia[]" id="id_licencia{{$num}}" value="{{ $key->id }}">
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <label>Licencia {{$key->licencia}}</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="licencia_conducir">Fecha de emisión <b style="color: red;">*</b></label>
                                                            <input type="date" class="form-control" max="<?php echo date('Y-m-d'); ?>" id="lic_fecha_emision{{$num}}" name="fechae_licn[]" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="licencia_conducir">Fecha de vencimiento <b style="color: red;">*</b></label>
                                                            <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" id="lic_fecha_vencimiento{{$num}}" name="fechav_licn[]" disabled="disabled">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                @php $num++; @endphp
                                            @endforeach()
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn btn-lg btn-success btn-sm" type="submit">Modificar datos de licencias</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="cursos" class="tab-pane fade in">
                                    <div class="tab-ctn">
                                        <div class="row">
                                            <h4>Cursos</h4>
                                            @if($contar_cursos > 0)
                                                @foreach($empleado->cursos as $key)
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Curso:</b> {{ $key->curso }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Fecha de culminación:</b> {{ $key->pivot->fecha }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Fecha de vencimiento:</b> {{ $key->pivot->fecha_vence }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Status:</b> {{ $key->pivot->status }}</span>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-12 text-center">
                                                    <strong>No posee cursos registrados</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="row mt-4">
                                            @php $num=1; @endphp
                                            @foreach($cursos as $key)
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <label for="id_curso{{$num}}">Cambiar</label>
                                                        <input type="checkbox" onclick="cursos('{{$num}}')" name="id_curso[]" id="id_curso{{$num}}" value="{{ $key->id }}">
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <label>Licencia {{$key->curso}}</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Fecha de culminación del curso</label>
                                                            <input type="date" max="<?php echo date('Y-m-d'); ?>" name="curso_fecha_realizado[]" class="form-control" id="curso_fecha_realizado{{$num}}" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Fecha de vencimiento del curso</label>
                                                            <input type="date" min="<?php echo date('Y-m-d'); ?>" name="curso_fecha_vencimiento[]" class="form-control" id="curso_fecha_vencimiento{{$num}}" disabled="disabled">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                @php $num++; @endphp
                                            @endforeach()
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn btn-lg btn-success btn-sm" type="submit">Modificar datos de cursos</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="medicos" class="tab-pane fade in">
                                    <div class="tab-ctn">
                                        <div class="row">
                                            <h4>Examenes</h4>
                                            @if($contar_examenes > 0)
                                                @foreach($empleado->examenes as $key)
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Examen:</b> {{ $key->examen }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Fecha de emisión:</b> {{ $key->pivot->fecha }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Fecha de vencimiento:</b> {{ $key->pivot->fecha_vence }}</span>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                        <span><b>Status:</b> {{ $key->pivot->status }}</span>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-12 text-center">
                                                    <strong>No posee examenes registrados</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="row">
                                            @php $num=1; @endphp
                                            @foreach($examenes as $key)
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            <label for="id_examen{{$num}}">Cambiar</label>
                                                            <input type="checkbox" onclick="examenes('{{$num}}')" name="id_examen[]" id="id_examen{{$num}}" value="{{ $key->id }}">
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                            <label>{{$key->examen}}</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Fecha en que se realizó el examen</label>
                                                                <input type="date" max="<?php echo date('Y-m-d'); ?>" name="examenes_fecha_realizado[]" class="form-control" id="examenes_fecha_realizado{{$num}}" disabled="disabled">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Fecha de vencimiento</label>
                                                                <input type="date" min="<?php echo date('Y-m-d'); ?>" name="examenes_fecha_vencimiento[]" class="form-control" id="examenes_fecha_vencimiento{{$num}}" disabled="disabled">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            @php $num++; @endphp
                                            @endforeach()
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn btn-lg btn-success btn-sm" type="submit">Modificar datos de examenes</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="contacto" class="tab-pane fade in">
                                    <div class="tab-ctn">
                                        <h4>Contacto opcional en caso de una emergencia</h4>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Nombre del contacto <b style="color: red;">*</b></label>
                                                    <input type="text" name="nombre" class="form-control" id="nombre_contacto" placeholder="Ingrese el nombre del contacto provisonal" required="required" value="{{$empleado->contacto->nombre}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Apellido del contacto <b style="color: red;">*</b></label>
                                                    <input type="text" name="apellido" class="form-control" id="apellido_contacto" placeholder="Ingrese el apellido del contacto provisonal" required="required" value="{{$empleado->contacto->apellido}}">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Teléfono del contacto <b style="color: red;">*</b></label>
                                                    <input type="number" name="telefono" class="form-control" id="telefono_contacto" placeholder="Ingrese el rut del contacto provisonal" required="required" value="{{$empleado->contacto->telefono}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Email del contacto <b style="color: red;">*</b></label>
                                                    <input type="email" name="email_contacto" class="form-control" id="email_contacto" placeholder="Ingrese el email del contacto provisonal" required="required" value="{{$empleado->contacto->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Dirección del contacto <b style="color: red;">*</b></label>
                                                    <textarea class="form-control" name="direccion" id="direccion_contacto" placeholder="Ingrese la dirección del contacto provisonal" required="required">{{$empleado->contacto->direccion}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn btn-lg btn-success btn-sm" type="submit">Modificar datos de contacto</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

function licencias(numero) {

    if ($('#lic_fecha_emision'+numero).prop('disabled') == false) {
        $('#lic_fecha_emision'+numero).prop('disabled',true).prop('required', false);
        $('#lic_fecha_vencimiento'+numero).prop('disabled',true).prop('required', false);
    } else {
        $('#lic_fecha_emision'+numero).prop('disabled',false).prop('required', true);
        $('#lic_fecha_vencimiento'+numero).prop('disabled',false).prop('required', true);
    }
}


function examenes(numero){
    
    if ($('#examenes_fecha_realizado'+numero).prop('disabled') == false) {
        $('#examenes_fecha_realizado'+numero).prop('disabled',true).prop('required', false);
        $('#examenes_fecha_vencimiento'+numero).prop('disabled',true).prop('required', false);
    } else {
        $('#examenes_fecha_realizado'+numero).prop('disabled',false).prop('required', true);
        $('#examenes_fecha_vencimiento'+numero).prop('disabled',false).prop('required', true);
    }
}

function cursos(numero){
    
    if ($('#curso_fecha_realizado'+numero).prop('disabled') == false) {
        $('#curso_fecha_realizado'+numero).prop('disabled',true).prop('required', false);
        $('#curso_fecha_vencimiento'+numero).prop('disabled',true).prop('required', false);
    } else {
        $('#curso_fecha_realizado'+numero).prop('disabled',false).prop('required', true);
        $('#curso_fecha_vencimiento'+numero).prop('disabled',false).prop('required', true);
    }
}
</script>
@endsection