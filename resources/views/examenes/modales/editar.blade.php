<div class="modal fade" id="editarExamen" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Editar Exámen</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <hr>
            </div>
            <div class="modal-body">
            	<div class="form-group">
            		<label id="examen">Exámen <b style="color: red;">*</b></label>
            		<input type="text" id="examen_e" name="examen" required="required" class="form-control" placeholder="Nombre del exámen">
            	</div>
            	<div class="form-group">
            		<label id="descripcion">Descripción</label>
            		<input type="text" id="descripcion_e" name="descripcion" required="required" class="form-control" placeholder="Descripción del exámen">
            	</div>
            	<div class="form-group">
                    <label id="e_status">Status <b style="color: red;">*</b></label>
                    <select id="e_status" name="e_status" class="form-control" required="required" title="Status del exámen" placeholder="Status del exámen">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn btn-danger">Editar</button>
            </div>
        </div>
    </div>
</div>