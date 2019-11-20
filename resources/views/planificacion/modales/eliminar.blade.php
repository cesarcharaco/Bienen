<div class="modal fade" id="myModaltwo" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>¿Esta seguro que desea eliminar esta actividad?</h2>
                <p>Esta acción no se podra deshacer en el futuro.</p>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#claveroot">Eliminar</button> -->
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#claverrot" onclick="ModalTwo()">Eliminar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="claverrot" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['actividades.destroy',1033], 'method' => 'DELETE']) !!}
                            <input type="hidden" name="id_producto" id="id_producto" >
                            <div class="row form-group">
                                <div class="col col-md-1">
                                    
                                </div>
                                
                                <div class="col-12 col-md-9">
                                    <label for="text-input" class=" form-control-label"> <b style="color:red;">*</b> Contraseña de Administrador</label>
                                   <input type="password" id="clave" name="clave" class="form-control" required="required">
                                    <small class="form-text text-muted">Escribe la contraseña e administrador para validar la eliminación</small>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="text" name="id_actividad_eliminar" id="id_actividad_eliminar">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                        {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default">Eliminar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>