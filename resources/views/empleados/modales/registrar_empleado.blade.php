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
                        <h1 class="text-center"> Nuevo empleado</h1>
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
                                        <li><a href="#tab3" data-toggle="tab">Afp</a></li>
                                        <li><a href="#tab4" data-toggle="tab">Cursos</a></li>
                                        <li><a href="#tab5" data-toggle="tab">Médicos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('empleados.store')}}" method="POST" name="registrar_usuario" data-parsley-validate>
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab1">
                                <h4>Datos de Usuarios</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
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
                            </div>


                            <!-- DATOS LABORALES-->
                            <div class="tab-pane wizard-ctn" id="tab2">

                                <h4>Datos laborales</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
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
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12">
                                        <div class="form-group">
                                            <label for="rut">Área: <b style="color: red;">*</b></label>
                                            <select name="id_area[]" id="id_area" class="form-control" multiple="multiple" placeholder="Seleccione...">
                                                @foreach($areas as $key)
                                                    <option value="{{ $key->id }}">{{ $key->area }}</option>
                                                @endforeach
                                            </select>
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
                                            <label>Cargo</label>
                                            <select class="form-control select2" name="cargo" id="cargo" placeholder="Seleccione el curso del empleado">
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
                                <hr>
                                <h4>Licencia de conducir</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="licencia_conducir">Fecha de emisión <b style="color: red;">*</b></label>
                                            <input type="date" class="form-control" id="lic_fecha_emision">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                        <div class="form-group">
                                            <label for="licencia_conducir">Fecha de vencimiento <b style="color: red;">*</b></label>
                                            <input type="date" class="form-control" id="lic_fecha_vencimiento">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane wizard-ctn" id="tab3">
                                <h4>AFP</h4>
                                <br>
                                @foreach($afp as $key)
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="align-content: center;">
                                                <input type="checkbox" name="id_afp[]" id="id_afp" value="Si">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                <label>{{$key->afp}}</label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach()
                            </div>


                            <div class="tab-pane wizard-ctn" id="tab4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-element-list">
                                            @csrf
                                                <h4>Cursos realizados</h4>
                                                <div class="scrollbar">
                                                    @foreach($cursos as $key)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                                    <input type="checkbox" name="id_curso[]" value="Si">
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                    <label>{{$key->curso}}</label>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Fecha de culminación del curso</label>
                                                                        <input type="date" name="curso_fecha_realizado[]" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Fecha de vencimiento del curso</label>
                                                                        <input type="date" name="curso_fecha_vencimiento[]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endforeach()
                                                </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane wizard-ctn" id="tab5">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-element-list">
                                            @csrf
                                                <h4>Exámenes</h4>
                                                <br>
                                                <div class="scrollbar">
                                                    @foreach($examenes as $key)
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                                    <input type="checkbox" name="id_examen[]" value="Si">
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                    <label>{{$key->examen}}</label>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Fecha en que se realizó el examen</label>
                                                                        <input type="date" name="examenes_fecha_realizado[]" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Fecha de vencimiento</label>
                                                                        <input type="date" name="examenes_fecha_vencimiento[]" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endforeach()
                                                </div>

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