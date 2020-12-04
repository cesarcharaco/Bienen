{!! Form::open(['route' => ['planificaciones.update',1], 'method' => 'PUT', 'name' => 'editar_planificacion', 'id' => 'editar_planificacion', 'data-parsley-validate']) !!}
	<div class="modal fade" id="editarPlanificacion" role="dialog">
	    <div class="modal-dialog modal-default">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h2>Editar Planificación</h2>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
	            		<div class="col-md-6">
			            	<div class="form-group">
			            		<label id="curso">Elaborado por: <b style="color: red;">*</b></label>
			            		<select name="elaborado" id="elaborado_edit" class="form-control select2" required style="width: 100% !important;">
			            			@foreach($usuarios as $key)
			            				<option value="{{$key->name}}">{{$key->name}}</option>
			            			@endforeach()
			            		</select>
			            	</div>	            			
	            		</div>
	            		<div class="col-md-6">
			            	<div class="form-group">
			            		<label id="curso">Aprobado por: <b style="color: red;">*</b></label>
			            		<select name="aprobado" id="aprobado_edit" class="form-control select2" required style="width: 100% !important;">
			            			@foreach($usuarios as $key)
			            				<option value="{{$key->name}}">{{$key->name}}</option>
			            			@endforeach()
			            		</select>
			            	</div>	            			
	            		</div>
	            	</div>
	            	<div class="form-group">
	            		<label id="curso">Num. de contrato <b style="color: red;">*</b></label>
	            		<input type="number" name="num_contrato" id="num_contrato_edit" required="required" class="form-control" placeholder="Número de contrato">
	            	</div>
	            	<hr>
	            	<div class="row">
	            		<div class="col-md-6">
			            	<label id="curso">Fechas <b style="color: red;">*</b></label>
			            	<div id="fechas_edit"></div>	            			
	            		</div>
	            		<div class="col-md-6">
	            			<label id="curso">.</label>
	            			<div class="form-group">
	            				<input type="checkbox" name="cambiar_fechas" id="cambiar_fechas" value="1">
                                <label for="cambiar_fechas">Cambiar fechas</label>
	            			</div>
	            		</div>
	            	</div>
	            	<div class="row">
	            		<div class="col-md-6">
	            			<label id="desde_edit">Desde <b style="color: red;">*</b></label>
	            			<input type="text" id="desde_edit" name="desde" class="form-control desde_edit" autocomplete="off">
	            		</div>
	            		<div class="col-md-6">
	            			<label id="hasta_edit">Hasta <b style="color: red;">*</b></label>
	            			<input type="text" name="hasta" class="form-control hasta_edit" disabled>
	            			<input type="hidden" name="hasta1" class="form-control hasta1_edit" readonly="readonly">
	            		</div>
	            	</div>
	            	<hr>
	            	<!-- <div class="form-group">
	            		<label id="semana">Semana <b style="color: red;">*</b></label>
	            		<input type="text" name="semana" id="semana_edit" required="required" class="form-control" placeholder="Semana de la planificación">
	            	</div> -->
	            	<div class="row">
	            		<div class="col-md-6">
			            	<div class="form-group">
			            		<label id="revision">Revisión <b style="color: red;">*</b></label>
			            		<select name="revision" class="form-control select2" id="revision_edit" style="width: 100% !important;" required>
			            			<option value="A">A</option>
			            			<option value="B">B</option>
			            			<option value="C">C</option>
			            			<option value="D">D</option>
			            		</select>
			            	</div>	            			
	            		</div>
	            		<div class="col-md-6">
			            	<div class="form-group">
			            		<label id="curso">Gerencia <b style="color: red;">*</b></label>
			            		<select name="id_gerencia" class="form-control select2" required style="width: 100% !important;" id="gerencia_edit">
			            			@foreach($gerencias as $key)
			            				<option value="{{$key->gerencia}}" id="gerencia{{$key->id}}">{{$key->gerencia}}</option>
			            			@endforeach()
			            		</select>
			            	</div>	            			
	            		</div>
	            	</div>
	            </div>
	            <div class="modal-footer">
	            	<input type="hidden" name="id" id="id_planificacion_edit">
	            	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	            	<button type="submit" class="btn btn-warning">Modificar</button>
	            </div>
	        </div>
	    </div>
	</div>
{!! Form::close() !!}