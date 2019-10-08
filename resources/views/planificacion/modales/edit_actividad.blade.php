<!-- Start modal -->
<div class="modal fade" id="myModaloneEdit" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h1 class="text-center">Editando Actividad</h1>
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
                                        <li><a href="#tab3" data-toggle="tab">Tipo</a></li>
                                        <li id="des_actividad"><a href="#tab1" data-toggle="tab">Descripción de Actividad</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Horario</a></li>
                                        <li><a href="#tab4" data-toggle="tab">Archivos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {!! Form::open(['route' => 'actividades.store', 'method' => 'post','enctype' => 'Multipart/form-data']) !!}
                            <div class="tab-content">
                                <div class="tab-pane wizard-ctn" id="tab3">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Tipo: </b></label>
                                                    <select name="tipo" id="tipo" class="form-control" required="required">
                                                        <option value="PM01">PM01</option>
                                                        <option value="PM02">PM02</option>
                                                        <option value="PM03">PM03</option>
                                                        <option value="PM04">PM04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pm01" style="display: block">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                        <label> <b> Actividades: </b></label>
                                                        <select name="id_actividad" id="id_actividad" class="form-control" required="required">
                                                            <option value="0">Registrar nueva</option>
                                                            @foreach($actividades as $key)
                                                            <option value="{{$key->id}}">{{$key->task}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display: block;" id="otros">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Realizada: </b></label>
                                                    <select name="realizada" id="realizada" class="form-control" required="required">
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Avances del turno y pendientes: </b></label>
                                                    <input type="text" name="observacion1" id="observacion1" class="form-control" placeholder="Avances del turno y pendientes">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Observaciones/Comentarios: </b></label>
                                                    <input type="text" name="observacion2" id="observacion2" class="form-control" placeholder="Avances del turno y pendientes">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Planificación: </b></label>
                                                    <select name="id_planificacion" id="id_planificacion" class="form-control" required="required">
                                                        @foreach($planificacion as $key)
                                                        <option value="{{ $key->id }}">Semana: {{ $key->semana }} - ({{ $key->fechas }})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6" id="areas">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Áreas: </b></label>
                                                    <select name="id_area" id="id_area" class="form-control" required="required">
                                                        @foreach($areas as $key)
                                                        <option value="{{ $key->id }}">{{ $key->area }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane wizard-ctn" id="tab1">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                <label>Task: <span style="color:red">*</span></label>
                                                <input type="text" name="task" id="task" class="form-control" placeholder="Task" required="required">
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                <label>Descripción: <span style="color:red">*</span></label>
                                                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion" required="required">
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Duración proyectada: </b>
                                                    </label>
                                                    <input type="number" class="form-control" name="duracion_pro" id="duracion_pro" placeholder="Duración proyectada">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Cantidad de personas: </b><span style="color:red">*</span>
                                                    </label>
                                                    <input type="number" name="cant_personas" id="cant_personas" class="form-control" placeholder="Cantidad de personas" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <label> <b> Duración real: </b></label>
                                                    <input type="number" name="duracion_real" id="duracion_real" class="form-control" placeholder="Duración real">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane wizard-ctn" id="tab2">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4 mb-4">
                                            <h2>Turno <span style="color:red">*</span></h2>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="toggle-select-act fm-cmp-mg">
                                                    <div class="nk-toggle-switch">
                                                        <label for="ts1" class="ts-label">Mañana</label>
                                                        <input id="ts1" type="radio" name="turno" hidden="hidden" value="Mañana" checked="checked">
                                                        <label for="ts1" class="ts-helper"></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="toggle-select-act fm-cmp-mg">
                                                    <div class="nk-toggle-switch">
                                                        <label for="ts2" class="ts-label">Tarde</label>
                                                        <input id="ts2" type="radio" name="turno" hidden="hidden" value="Tarde">
                                                        <label for="ts2" class="ts-helper"></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="toggle-select-act fm-cmp-mg">
                                                    <div class="nk-toggle-switch">
                                                        <label for="ts3" class="ts-label">Noche</label>
                                                        <input id="ts3" type="radio" name="turno" hidden="hidden" value="Noche">
                                                        <label for="ts3" class="ts-helper"></label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="data_1">
                                            <div class="form-group">
                                                <label>Día de la actividad</label>
                                                <div class="fm-checkbox form-elet-mg">
                                                    <label><input type="radio" name="dia" class="i-checks" value="Mié" checked="checked"> <i></i>  Miércoles</label>
                                                    <label><input type="radio" name="dia" class="i-checks" value="Jue"> <i></i>  Jueves</label>
                                                    <label><input type="radio" name="dia" class="i-checks" value="Vie"> <i></i>  Viernes</label>
                                                    <label><input type="radio" name="dia" class="i-checks" value="Sáb"> <i></i>  Sábado</label>
                                                    <label><input type="radio" name="dia" class="i-checks" value="Dom"> <i></i>  Domingo</label>
                                                    <label><input type="radio" name="dia" class="i-checks" value="Lun"> <i></i>  Lunes</label>
                                                    <label><input type="radio" name="dia" class="i-checks" value="Mar"> <i></i>  Martes</label>
                                                 </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <div class="tab-pane wizard-ctn" id="tab4">

                                    <!-- Dropzone area Start-->
                                    <div class="dropzone-area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <div class="dropdone-nk mg-t-30">
                                                        <div class="cmp-tb-hd">
                                                            <h2>Cargar archivos</h2>
                                                            <!-- <p>Realiza la carga de tantos archivos como quieras.</p> -->
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <input type="file" class="form-control" multiple="multiple" name="archivos[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <div class="dropdone-nk mg-t-30">
                                                        <div class="cmp-tb-hd">
                                                            <h2>Cargar imagenes</h2>
                                                            <!-- <p>Realiza la carga de varias imagenes a la vez.</p> -->
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <input type="file" class="form-control" multiple="multiple" name="imagenes[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dropzone area End-->


                                </div>
                                <div class="wizard-action-pro">
                                    <ul class="wizard-nav-ac">

                                        <li><a class="button-previous a-prevent" href="#"><i
                                                    class="notika-icon notika-back"></i></a></li>
                                        <li><a class="button-next a-prevent" href="#"><i
                                                    class="notika-icon notika-next-pro"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>