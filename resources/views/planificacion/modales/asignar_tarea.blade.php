<div class="modal fade" id="asignar_tarea" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Asignar tarea:</h2><br>
                <b><span id="tarea"></span></b>
                <br>
                {!! Form::open(['route' => 'actividades.asignar','method' => 'post','enctype' => 'Multipart/form-data']) !!}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                            <h2>Empleados:</h2>
                            
                        </div>
                        <div class="form-group">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                <select class="form-control" id="id_empleado" name="id_empleado">
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="id_actividad_asig" id="id_actividad_asig">
                    </div>
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