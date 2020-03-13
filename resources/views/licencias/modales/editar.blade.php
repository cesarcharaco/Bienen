<div class="modal fade" id="editarLicencia" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Editar Licencia</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <hr>
            </div>
            <div class="modal-body">
            	<div class="form-group">
            		<label id="e_licencia">Licencia <b style="color: red;">*</b></label>
            		<input type="text" id="e_licencia" name="e_licencia" required="required" class="form-control" placeholder="Nombre de la licencia">
            	</div>
                <div class="form-group">
                    <label id="e_status">Status <b style="color: red;">*</b></label>
                    <input type="checkbox" id="e_status" name="e_status" required="required" title="Status de la licencia" placeholder="Status de la licencia">
                </div>
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn btn-danger">Editar</button>
            </div>
        </div>
    </div>
</div>