{!! Form::open(['route' => ['planificaciones.update',1], 'method' => 'PUT', 'name' => 'editar_planificacion', 'id' => 'editar_planificacion', 'data-parsley-validate']) !!}
	<div class="modal fade" id="editarPlanificacion" role="dialog">
	    <div class="modal-dialog modal-sm">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h2>Editar Planificación</h2>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                <hr>
	            </div>
	            <div class="modal-body">
	            	<div class="form-group">
	            		<label id="curso">Elaborado por: <b style="color: red;">*</b></label>
	            		<select name="elaborado" id="elaborado_edit" class="form-control select2" required style="width: 100% !important;">
	            			@foreach($usuarios as $key)
	            				<option value="{{$key->name}}">{{$key->name}}</option>
	            			@endforeach()
	            		</select>
	            	</div>
	            	<div class="form-group">
	            		<label id="curso">Aprobado por: <b style="color: red;">*</b></label>
	            		<select name="aprobado" id="aprobado_edit" class="form-control select2" required style="width: 100% !important;">
	            			@foreach($usuarios as $key)
	            				<option value="{{$key->name}}">{{$key->name}}</option>
	            			@endforeach()
	            		</select>
	            	</div>
	            	<div class="form-group">
	            		<label id="curso">Num. de contrato <b style="color: red;">*</b></label>
	            		<input type="number" name="num_contrato" id="num_contrato_edit" required="required" class="form-control" placeholder="Número de contrato">
	            	</div>
	            	<hr>
	            	<label id="curso">Fechas <b style="color: red;">*</b></label>
	            	<div id="fechas_edit"></div>
	            	<div class="row">
	            		<div class="col-md-12">
	            			<label id="desde">Desde <b style="color: red;">*</b></label>
	            			<input type="date" name="desde" required="required" class="form-control">
	            		</div>
	            		<div class="col-md-12">
	            			<label id="hasta">Hasta <b style="color: red;">*</b></label>
	            			<input type="date" name="hasta" required="required" class="form-control">
	            		</div>
	            	</div>
	            	<hr>
	            	<div class="form-group">
	            		<label id="semana">Semana <b style="color: red;">*</b></label>
	            		<input type="text" name="semana" id="semana_edit" required="required" class="form-control" placeholder="Semana de la planificación">
	            	</div>
	            	<div class="form-group">
	            		<label id="revision">Revisión <b style="color: red;">*</b></label>
	            		<select name="revision" class="form-control select2" id="revision_edit" style="width: 100% !important;" required>
	            			<option value="A">A</option>
	            			<option value="B">B</option>
	            			<option value="C">C</option>
	            			<option value="D">D</option>
	            		</select>
	            	</div>
	            	<div class="form-group">
	            		<label id="curso">Gerencia <b style="color: red;">*</b></label>
	            		<select name="id_gerencia" class="form-control select2" required style="width: 100% !important;" id="gerencia_edit">
	            			@foreach($gerencias as $key)
	            				<option value="{{$key->gerencia}}" id="gerencia{{$key->id}}">{{$key->gerencia}}</option>
	            			@endforeach()
	            		</select>
	            	</div>
	            </div>
	            <div class="modal-footer">
	            	<input type="hidden" name="id" id="id_planificacion_edit">
	            	<button type="submit" class="btn btn-warning">Modificar</button>
	            </div>
	        </div>
	    </div>
	</div>
{!! Form::close() !!}