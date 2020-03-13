<div class="modal fade" id="editarCurso" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Editar Curso</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <hr>
            </div>
            <div class="modal-body">
            	<div class="form-group">
            		<label id="e_curso">Curso <b style="color: red;">*</b></label>
            		<input type="text" id="e_curso" name="e_curso" required="required" class="form-control" placeholder="Nombre del curso">
            	</div>
                <div class="form-group">
                    <label id="e_status">Status <b style="color: red;">*</b></label>
                    <select id="e_status" name="e_status" class="form-control" required="required" title="Status del curso" placeholder="Status del curso">
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