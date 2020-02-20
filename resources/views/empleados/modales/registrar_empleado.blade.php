<!-- Start modal -->

<div class="modal fade" id="nuevo_empleado" role="dialog">
    <div class="modal-dialog modal-lg">
    <!-- <div class="modal-dialog modals-default"> -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-toggle="modal" data-target="#cerrar_modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="wizard-wrap-int" style="width:100%;">
                    <div class="wizard-hd">
                        <h1 class="text-center"> Nuevo usuario</h1>
                        <div class="text-center">
                            <small class="text-center">Los campos con un (<span style="color:red">*</span>) son
                                obligatorios</small>

                        </div>

                    </div>
                    <div id="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab1" data-toggle="tab">Datos básicos</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Laboral</a></li>
                                        <li><a href="#tab4" data-toggle="tab">Cursos</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Isapre</a></li>
                                        <li><a href="#tab5" data-toggle="tab">Médicos</a></li>
                                        <li><a href="#tab6" data-toggle="tab">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('empleados.store')}}" method="POST" name="registrar_usuario" data-parsley-validate>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab1">
                                <h4>Datos de Usuarios</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-6">
                                        <div class="form-group">
                                            <label for="email">Correo electrónico: <b style="color: red;">*</b></label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese correo electrónico" required="required" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-6">
                                        <div class="form-group">
                                            <label for="email">Tipo de usuario<b style="color: red;">*</b></label>
                                            <select class="form-control select2" id="tipo_user" placeholder="Especifique el tipo de usuario que será el nuevo usuario terreno" name="tipo_user" required="required">
                                                <option value="Empleado">Empleado</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Planificacion">Planificacion</option>
                                                <option value="Recursos humanos">Recursos humanos</option>
                                                @if(\Auth::User()->tipo_user=="Admin")
                                                    <option value="Admin">Admin</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h4>Datos personales</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="nombres">Primer nombre: <b style="color: red;">*</b></label>
                                            <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Ingrese primer nombre" required="required" value="{{ old('nombres') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="segundo_nombre">Segundo nombre: <b style="color: red;">*</b></label>
                                            <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control" placeholder="Ingrese segundo nombre" required="required" value="{{ old('segundo_nombre') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="apellidos">Primer apellido: <b style="color: red;">*</b></label>
                                            <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese primer apellido" required="required" value="{{ old('apellidos') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="segundo_apellido">Segundo apellido: <b style="color: red;">*</b></label>
                                            <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control" placeholder="Ingres segundo apellido" required="required" value="{{ old('segundo_apellido') }}">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="rut">Rut: <b style="color: red;">*</b></label>
                                            <input type="text" name="rut" id="rut" class="form-control" placeholder="Ingrese rut" required="required" value="{{ old('rut') }}" data-parsley-type="number" data-parsley-length="[8, 9]" maxlength="9">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="fecha_nac">Fecha de nacimiento: <b style="color: red;">*</b></label>
                                            <input type="date" class="form-control" max="<?php echo date('Y-m-d'); ?>" name="fecha_nac" required="required" >
                                        </div>
                                    </div>

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

                                </div>
                                <hr>
                                <h4>AFP</h4>
                                <br>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="align-content: center;">
                                            <select name="id_afp[]" id="id_afp" class="form-control select2" title="Seleccione los AFP del usuario terreno">
                                                
                                                @foreach($afp as $key)
                                                    <option value="{{$key->id}}">{{$key->afp}}</option>
                                                @endforeach()
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- DATOS LABORALES-->
                            <div class="tab-pane wizard-ctn" id="tab2">

                                <h4>Datos laborales</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                        <div class="form-group">
                                            <label for="status">Status: <b style="color: red;">*</b></label>
                                            <select name="status" id="status" class="form-control" required="required">
                                                <option value="Activo">Activo</option>
                                                <option value="Reposo">Reposo</option>
                                                <option value="Retirado">Retirado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                        <div class="form-group">
                                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                <label for="rut">Áreas: <b style="color: red;">*</b></label>
                                                <select name="id_area[]" id="id_area" class="form-control" multiple="multiple" required="required" placeholder="Seleccione...">
                                                    @foreach($areas as $key)
                                                        <option value="{{ $key->id }}">{{ $key->area }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12" style="display: none;">
                                        <div class="form-group">
                                            <label for="rut">Departamentos: <b style="color: red;">*</b></label>
                                            <select name="id_departamento[]" id="id_departamento" class="form-control" multiple="multiple" placeholder="Seleccione...">                  
                                                @foreach($departamentos as $key)
                                                    <option value="{{ $key->id }}">{{ $key->departamento }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                        <div class="form-group">
                                            <label>Cargo: <b style="color: red;">*</b></label>
                                            <select class="form-control select2" name="cargo" id="cargo" placeholder="Seleccione el cargo del usuario terreno" required="required">
                                                <option value="Gerente">Gerente</option>
                                                <option value="Jefe de Operaciones">Jefe de Operaciones</option>
                                                <option value="Ingeniero de Servicios">Ingeniero de Servicios</option>
                                                <option value="Jefe de Administración">Jefe de Administración</option>
                                                <option value="Técnico de Servicios">Técnico de Servicios</option>
                                                <option value="Ingeniero en Entrenamiento">Ingeniero en Entrenamiento</option>
                                                <option value="Maestro Mayor">Maestro Mayor</option>
                                                <option value="Jefe de Terreno">Jefe de Terreno</option>
                                                <option value="Supervisor de Terreno">Supervisor de Terreno</option>
                                                <option value="Técnico de Montaje">Técnico de Montaje</option>
                                                <option value="Jefe de Coordinación y Gestión">Jefe de Coordinación y Gestión</option>
                                                <option value="Planificador">Planificador</option>
                                                <option value="Prevención de Riesgos"></option>
                                                <option value="Asistente Administrativo">Asistente Administrativo</option>
                                                <option value="Chofer">Chofer</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                        <div class="form-group">
                                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                <label for="rut">Faenas: <b style="color: red;">*</b></label>
                                                <select name="id_faena[]" id="id_faena" class="form-control" required="required" multiple="multiple" placeholder="Seleccione...">
                                                    @foreach($faenas as $key)
                                                        <option value="{{ $key->id }}">{{ $key->faena }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                        <div class="form-group">
                                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                <label for="rut">Áreas empresas: <b style="color: red;">*</b></label>
                                                <select name="id_area_e[]" id="id_area_e" class="form-control" multiple="multiple" placeholder="Seleccione..." required="required">
                                                    @foreach($areasEmpresa as $key)
                                                        <option value="{{ $key->id }}">{{ $key->area_e }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h4>Licencia de conducir</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="licencia_conducir">Fecha de emisión <b style="color: red;">*</b></label>
                                            <input type="date" class="form-control" max="<?php echo date('Y-m-d'); ?>" id="lic_fecha_emision" name="fechae_licn" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="licencia_conducir">Fecha de vencimiento <b style="color: red;">*</b></label>
                                            <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" id="lic_fecha_vencimiento" name="fechav_licn" required="required">
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                
                            </div>

                            <div class="tab-pane wizard-ctn" id="tab4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-element-list">
                                            @csrf
                                                <h4>Cursos realizados</h4>
                                                <div class="scrollbar">
                                                    @php $num=1; @endphp
                                                    @foreach($cursos as $key)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                                    <input type="checkbox" onclick="cursos('{{$num}}')" name="id_curso[]" id="id_curso{{$num}}" value="{{ $key->id }}">
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                    <label>{{$key->curso}}</label>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Fecha de culminación del curso</label>
                                                                        <input type="date" max="<?php echo date('Y-m-d'); ?>" name="curso_fecha_realizado[]" class="form-control" id="curso_fecha_realizado{{$num}}" disabled="disabled">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Fecha de vencimiento del curso</label>
                                                                        <input type="date" min="<?php echo date('Y-m-d'); ?>" name="curso_fecha_vencimiento[]" class="form-control" id="curso_fecha_vencimiento{{$num}}" disabled="disabled">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        @php $num++; @endphp
                                                    @endforeach()
                                                </div>
                                        </div>

                                    </div>
                                </div>


                            </div>


                            <div class="tab-pane wizard-ctn" id="tab3">
                                <h4>Isapre</h4>
                            </div>
                            <div class="tab-pane wizard-ctn" id="tab5">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-element-list">
                                            @csrf
                                                <h4>Exámenes</h4>
                                                <br>
                                                <div class="scrollbar">
                                                    @php $num=1; @endphp
                                                    @foreach($examenes as $key)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                                    <input type="checkbox" onclick="examenes('{{$num}}')" name="id_examen[]" id="id_examen{{$num}}" value="{{ $key->id }}">
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                    <label>{{$key->examen}}</label>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Fecha en que se realizó el examen</label>
                                                                        <input type="date" max="<?php echo date('Y-m-d'); ?>" name="examenes_fecha_realizado[]" class="form-control" id="examenes_fecha_realizado{{$num}}" disabled="disabled">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
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

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane wizard-ctn" id="tab6">
                                <h4>ContactO opcional en caso de una emergencia</h4>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Nombre del contacto</label>
                                            <input type="text" name="nombre" class="form-control" id="nombre_contacto" placeholder="Ingrese el nombre del contacto provisonal">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Apellido del contacto</label>
                                            <input type="text" name="apellido" class="form-control" id="apellido_contacto" placeholder="Ingrese el apellido del contacto provisonal">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Teléfono del contacto</label>
                                            <input type="number" name="telefono" class="form-control" id="telefono_contacto" placeholder="Ingrese el rut del contacto provisonal">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Email del contacto</label>
                                            <input type="email" name="email" class="form-control" id="email_contacto" placeholder="Ingrese el email del contacto provisonal">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Dirección del contacto</label>
                                            <textarea class="form-control" name="direccion" id="direccion_contacto" placeholder="Ingrese la dirección del contacto provisonal"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-action-pro">
                                <ul class="wizard-nav-ac">
                                    <li>
                                        <a class="button-previous a-prevent" href="#">
                                            <i class="notika-icon notika-back"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="button-next a-prevent" href="#">
                                            <i class="notika-icon notika-next-pro"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="modal-footer mt-3">
                                <input type="hidden" name="id_actividad_act" id="id_actividad_act">
                                <button type="submit" class="btn btn-default">Guardar</button>
                                <a type="button" class="btn btn-default" data-toggle="modal" data-target="#cerrar_modal">Cerrar</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>