<!-- Start modal actividades -->

<div class="modal fade" id="modalActividades" role="dialog">
    <div class="modal-dialog modal-large">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-body">


                    <h1>Título de la actividad</h1>
                    <small>En la lista de: John Doe</small>
                    <div class="row">
                        <div class="col-md-8">
                            <b>
                                <p>Vencimiento:
                                    <span class="label label-success p-1" data-toggle="tooltip" data-placement="bottom"
                                        title="Feha de vencimiento"><i class="lni-alarm-clock"></i> 19 Agos.</span>
                                </p>
                            </b>

                            <b>
                                <p>Descripción <button class="btn btn-sm">Editar</button>
                            </b><br>
                            <span> Aquí va la descripción de la actividad que estamos realizando</span></p>


<hr>
                            <b>
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
                            </div>
<hr>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <b>
                                        <p>Actividad</p>
                                    </b>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-sm">Mostrar detalles</button>
                                </div>
                            </div>
<hr>
                            <div class="form-group ic-cmp-int mt-4">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-chat"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Escriba un comentario">
                                </div>
                            </div>




                        </div>


                        <div class="col-md-4" style="margin-top: -20px">


                            <div class="accordion-stn col-5">
                                <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                    role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title">

                                                Añadir a la actividad

                                            </h4>

                                        </div>

                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-two"
                                                    aria-expanded="false">
                                                    <i class="lni-users"></i> Miembros
                                                </a>

                                            </p>

                                        </div>

                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-tag"></i> Etiquetas
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-list"></i> Checklist
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-calendar"></i> Vencimiento
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-paperclip"></i> Adjunto
                                                </a>

                                            </p>
                                        </div>
                                    </div>



                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" role="tab">
                                            <h4 class="panel-title">
                                                Acciones
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-move"></i> Mover
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-bookmark"></i> Copiar
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-forward"></i> Seguir
                                                </a>

                                            </p>
                                        </div>
                                    </div>

                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-archive"></i> Archivar
                                                </a>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-collapse notika-accrodion-cus">
                                        <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                            <p class="panel-title">
                                                <a class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionGreen" href="#accordionGreen-three"
                                                    aria-expanded="false">
                                                    <i class="lni-slideshare"></i> Compartir
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
