<!-- Start modal actividades -->
<div class="modal fade" id="modalActividades" role="dialog">
    <div class="modal-dialog modal-large">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <h1 id="task"></h1>
                    <small>En la lista de: <b id="nombres"></b> <b id="apellidos"></b></small>
                    <div class="row">
                        <div class="col-md-7">
                            <b>
                                <p>Vencimiento:
                                    @if($key1->fecha_vencimiento==$hoy)
                                    <span class="label label-warning p-1" data-toggle="tooltip" data-placement="bottom"
                                        title="Feha de vencimiento"><i class="lni-alarm-clock"></i> <b id="fecha_vencimiento"></b></span>
                                    @elseif($key1->fecha_vencimiento<$hoy)
                                    <span class="label label-danger p-1" data-toggle="tooltip" data-placement="bottom"
                                        title="Feha de vencimiento"><i class="lni-alarm-clock"></i> <b id="fecha_vencimiento"></b></span>
                                    @endif
                                </p>
                            </b>
                            <b>
                                <p>Descripción: <!-- <button class="btn btn-sm">Editar</button> -->
                            </b><br>
                            <span id="descripcion"> </span></p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Turno:</b> <span id="turno"></span> <br>
                                    <b>Duración aproximada:</b> <span id="duracion_pro"></span> <br>
                                    <b>Cantidad de persona:</b> <span id="cant_personas"></span> <br>
                                    <b>Duración real:</b> <span id="duracion_real"></span> <br>

                                </div>
                                <div class="col-md-6">
                                    <b>Día:</b> <span id="dia"></span> <br>
                                    <b>Tipo:</b> <span id="tipo"></span> <br>
                                    <b>Realizada:</b> <span id="realizada"></span> <br>
                                </div>
                            </div>
                            <hr>
                            <b>
                                <p>Planificación</p>
                            </b>                
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Elaborado por:</b> <span id="elaborado"></span> <br>
                                    <b>Aprobado por:</b> <span id="aprobado"></span> <br>
                                    <b>Número de contrato:</b> <span id="num_contrato"></span> <br>
                                    <b>Fechas:</b> <span id="fechas"></span> <br>

                                </div>
                                <div class="col-md-6">
                                    <b>Semana:</b> <span id="semana"></span> <br>
                                    <b>Revisión:</b> <span id="revision"></span> <br>
                                    <b>Gerencia:</b> <span id="gerencia"></span> <br>
                                </div>
                            </div>
                            <hr>
                            <b>
                                <p>Área</p>
                            </b>                
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Nombre del área:</b> <span id="area"></span> <br>
                                    <b>Descripción:</b> <span id="descripcion_area"></span> <br>
                                    <b>Ubicación:</b> <span id="ubicacion"></span> <br>
                                </div>
                            </div>
                            <hr>
                            <!-- <b>
                                <p>Adjuntos</p>
                            </b>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="" />
                            
                                </div>
                                <div class="col-md-8">
                            
                                    <div class="text-left">
                                        <p><b>Misión y visión.pdf </b><br><small>Añadido: hace 9 horas</small></p>
                                    </div>
                                    <div class="vw-ml-action-ls text-left mg-t-20" style="margin-top: -15px">
                                        <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                            <button class="btn btn-default btn-sm waves-effect"><i
                                                    class="lni-bubble"></i> Comentar</button>
                                            <button class="btn btn-default btn-sm waves-effect"><i
                                                    class="lni-pencil"></i> Editar</button>
                                            <button class="btn btn-default btn-sm waves-effect"><i
                                                    class="notika-icon notika-trash"></i> Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm ml-3">Añada un adjunto</button>
                            </div><hr> -->
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <b>
                                        <p>Comentario</p>
                                    </b>
                                </div>
                                <div class="col-md-6">
                                    <b>
                                        <p>Status de la actividad</p>
                                    </b>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ic-cmp-int mt-4">
                                        <textarea name="comentario" id="comentario" class="form-control" cols="30" rows="2" placeholder="Ingrese comentario..." style="resize: none;"></textarea>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mt-4">
                                        <select name="status" id="status" class="form-control">
                                            <option value="">..</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <!-- <div class="col-md-12 text-right">
                                    <button class="btn btn-sm">Guardar comentario</button>
                                </div> -->
                            </div><hr>
                        </div>
                        <div class="col-md-5" style="margin-top: -20px">
                            <div class="accordion-stn col-5">
                                <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                    role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title"> Archivos adjuntos:</h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-two"
                                                    aria-expanded="false">
                                                    <i class="lni-users"></i> Archivos
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title"> Imagenes adjuntos:</h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-two"
                                                    aria-expanded="false">
                                                    <i class="lni-users"></i> Imagenes
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title"> Avances del turno y pendientes:</h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-two"
                                                    aria-expanded="false">
                                                    <i class="lni-users"></i> <span id="observacion1"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title">
                                                Observaciones/comentarios
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-move"></i> <span id="observacion2"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer mt-4">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Guardar cambios</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End modal view -->
