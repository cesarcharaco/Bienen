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
                        <span style="margin: 10px;">
                            <h6>
                                <b>Turno:</b> <span id="turno"></span>
                                <b>Día:</b> <span id="dia"></span>
                                <b>Realizada:</b> <span id="realizada"></span>
                                <b>Cant. de persona:</b> <span id="cant_personas"></span>
                            </h6>
                        </span>
                    </div>

                    <div style="background: #B3E5FC;">
                        <span style="margin: 10px;">
                            <h6>
                                <b>Semana:</b> <span id="semana"></span>
                                <b>Realizada:</b> <span id="revision"></span>
                                <b>Gerencia:</b> <span id="gerencia"></span>
                                <b>Fechas:</b> <span id="fechas"></span>
                                <b>Área:</b> <span id="area1"></span>
                            </h6>
                        </span>
                    </div>
                    <small>En la lista de: <b id="nombres"></b> <b id="apellidos"></b></small>
                    <div class="row">
                        <div class="col-md-7">
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Vencimiento:</b> <span id="vencimiento"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span id="descripcion1"><b>Descripción:</b></span> <span id="descripcion"> </span> <br>
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
                        
                        <div class="col-md-5" style="margin-top: -20px">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-heading" style="background: #F6F8FA;" role="tab">
                                        <p class="panel-title" id="boton"></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title"> Archivos adjuntos:</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-heading" style="background: #F6F8FA;" role="tab">
                                        <span class="panel-title">
                                            <ol id="mis_archivos" class="lista">
                                                {{-- <li>No hay Archivos</li> --}}
                                            </ol>
                                            <ul class="lista" id="mis_archivos_cargados">
                                                {{-- <li>1 <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></li> --}}
                                            </ul>
                                            {!! Form::open(array('url'=>'actividades/registrar_archivos','method'=>'POST', 'id'=>'frmB','enctype' => 'Multipart/form-data')) !!}
                                            <meta name="_token" content="{!! csrf_token() !!}"/>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-example-int form-example-st">
                                                    <input type="file" class="form-control" multiple="multiple" name="archivos[]" id="archivos" style="color: transparent;">
                                                    <small id="error2"></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="form-example-int">
                                                    <button class="btn btn-info" id="enviar_archivo"><i class="fa fa-save"></i></button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title"> Imagenes adjuntos:</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-heading" style="background: #F6F8FA;" role="tab">
                                        <span class="panel-title">
                                            <ol id="mis_imagenes" class="lista">
                                                {{-- <li>No hay imagenes</li> --}}
                                            </ol>
                                            <ul class="lista" id="mis_imagenes_cargadas">
                                                {{-- <li>1 <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></li> --}}
                                            </ul>
                                            {!! Form::open(array('url'=>'actividades/registrar_imagenes','method'=>'POST', 'id'=>'frmC','enctype' => 'Multipart/form-data')) !!}
                                            <meta name="_token" content="{!! csrf_token() !!}"/>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-example-int form-example-st">
                                                    <input type="file" class="form-control" multiple="multiple" name="imagenes[]" id="imagenes" style="color: transparent;">
                                                    <small id="error3"></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="form-example-int">
                                                    <button class="btn btn-info" id="enviar_imagen"><i class="fa fa-save"></i></button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-stn col-5">
                                <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                    role="tablist" aria-multiselectable="true">
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End modal view -->
