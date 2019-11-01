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
                    <div style="background: #B3E5FC;">
                        <span>
                            <small><b>Turno:</b></small> <small id="turno"></small>
                            <small><b>Día:</b></small> <small id="dia"></small>
                            <small><b>Realizada:</b></small> <small id="realizada"></small>
                            <small><b>Cant. de persona:</b></small> <small id="cant_persona"></small>
                        </span>
                    </div>
                    <div style="background: #B3E5FC;">
                        <span>
                            <small><b>Semana:</b></small> <small id="semana"></small>
                            <small><b>Revisión:</b></small> <small id="revision"></small>
                            <small><b>Gerencia:</b></small> <small id="gerencia"></small>
                            <small><b>Fechas:</b></small> <small id="fechas"></small>
                            <small><b>Área:</b></small> <small id="area"></small>
                        </span>
                    </div>
                    <small>En la lista de: <b id="nombres"></b> <b id="apellidos"></b></small>
                    <div class="row">
                        <div class="col-md-7">
                            <b>
                                <p>Vencimiento:
                                    <p id="vecimiento"></p>
                                    {{-- @if($key1->fecha_vencimiento==$hoy)
                                    <span class="label label-warning p-1" data-toggle="tooltip" data-placement="bottom"
                                        title="Feha de vencimiento"><i class="lni-alarm-clock"></i> <b id="fecha_vencimiento"></b></span>
                                    @elseif($key1->fecha_vencimiento<$hoy)
                                    <span class="label label-danger p-1" data-toggle="tooltip" data-placement="bottom"
                                        title="Feha de vencimiento"><i class="lni-alarm-clock"></i> <b id="fecha_vencimiento"></b></span>
                                    @endif --}}
                                </p>
                            </b>
                            <b>
                                <p>Descripción: <!-- <button class="btn btn-sm">Editar</button> -->
                            </b><br>
                            <span id="descripcion"> </span></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Duración aproximada:</b> <span id="duracion_pro"></span> <br>
                                    <b>Duración real:</b> <span id="duracion_real"></span> <br>
                                    <b>Tipo:</b> <span id="tipo"></span> <br>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <b>
                                        <p>Comentarios realizados:</p>
                                    </b>
                                </div>
                                <div class="col-md-12">
                                    <table border="0px" width="100%" style="background: #F6F8FA;" id="comentarios">
                                        
                                    </table>
                                </div>
                                <!-- <div class="col-md-12 text-right">
                                    <button class="btn btn-sm">Guardar comentario</button>
                                </div> -->
                            </div><hr>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <b>
                                        <p>Comentario</p>
                                    </b>
                                </div>
                                {!! Form::open(array('url'=>'actividades/registrar_comentario','method'=>'POST', 'id'=>'frmA')) !!}
                                <meta name="_token" content="{!! csrf_token() !!}"/>
                                <div class="col-md-12">
                                    <div class="form-group mt-0">
                                        <textarea name="comentario" id="comentario" class="form-control" cols="30" rows="2" placeholder="Ingrese comentario..." style="resize: none;"></textarea>
                                        <small id="error"></small>
                                        <input type="hidden" name="id_usuario" id="id_usuario" value="{{ \Auth::User()->id }}">
                                    </div>                                    
                                </div>
                                <div class="col-md-12" style="text-align: right;">
                                    <button class="btn btn-info" id="enviar_comentario">Guardar comentario</button>
                                </div>
                                {!! Form::close() !!}
                                
                            </div><hr>
                        </div>
                        {!! Form::open(['method' => 'post','enctype' => 'Multipart/form-data']) !!}
                        <div class="col-md-5" style="margin-top: -20px">
                            <div class="accordion-stn col-5">
                                <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                    role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA;" role="tab">
                                            <p class="panel-title" id="boton"></p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title"> Archivos adjuntos:</h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <ul id="mis_archivos">
                                                    <li>No hay Archivos</li>
                                                </ul>
                                            </p>
                                            <p>
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-3 col-xs-12">
                                                        <div class="form-example-int form-example-st">
                                                            <input type="file" class="form-control" multiple="multiple" name="archivos[]" style="color: transparent;">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                        <div class="form-example-int">
                                                            <button class="btn btn-info"><i class="fa fa-save"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                <ul id="mis_imagenes">
                                                    <li>No hay imagenes</li>
                                                </ul>
                                            </p>
                                            <p>
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-3 col-xs-12">
                                                        <div class="form-example-int form-example-st">
                                                            <input type="file" class="form-control" multiple="multiple" name="imagenes[]" style="color: transparent;">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                        <div class="form-example-int">
                                                            <button class="btn btn-info"><i class="fa fa-save"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
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
                        {!! Form::close() !!}
                    </div>

                </div>
                <div class="modal-footer mt-4">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End modal view -->
