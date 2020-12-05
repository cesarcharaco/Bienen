{!! Form::open(['route' => ['planificaciones.store'],'method' => 'post']) !!}
	<div class="modal fade" id="nuevaPlanificacion" role="dialog">
	    <div class="modal-dialog modal-sm">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h2>Nueva Planificación</h2><br>
	                <small>Todos los campos <b style="color: red;">*</b> son requeridos.</small>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                <hr>
	            </div>
	            <div class="modal-body">
	            	<div class="form-group">
	            		<label id="curso">Elaborado por: <b style="color: red;">*</b></label>
	            		<select name="elaborado" class="form-control select2" required style="width: 100% !important;">
	            			@foreach($usuarios as $key)
	            				<option value="{{$key->name}}">{{$key->name}}</option>
	            			@endforeach()
	            		</select>
	            	</div>
	            	<div class="form-group">
	            		<label id="curso">Aprobado por: <b style="color: red;">*</b></label>
	            		<select name="aprobado" class="form-control select2" required style="width: 100% !important;">
	            			@foreach($usuarios as $key)
	            				<option value="{{$key->name}}">{{$key->name}}</option>
	            			@endforeach()
	            		</select>
	            	</div>
	            	<div class="form-group">
	            		<label id="curso">Num. de contrato <b style="color: red;">*</b></label>
	            		<input type="number" name="num_contrato" required="required" class="form-control" placeholder="Número de contrato">
	            	</div>
	            	<hr>
	            	<label id="curso">Fechas <b style="color: red;">*</b></label>
	            	<div id="fechas_edit"></div>
	            	<div class="row">
	            		<div class="col-md-12">
	            			<label id="desde">Desde <b style="color: red;">*</b></label>
	            			<input type="text" id="datepicker" name="desde" required="" class="form-control desde" keyup="calcularFecha()" autocomplete="off">
	            			<input type="hidden" value="{{ $anio }}" name="anio" id="anio">
	            		</div>
	            		<div class="col-md-12">
	            			<label id="hasta">Hasta <b style="color: red;">*</b></label>
	            			<input type="text" name="hasta" required="required" class="form-control hasta" id="datepicker" disabled>
	            			<input type="hidden" name="hasta1" required="required" class="form-control hasta1" id="datepicker" readonly="readonly">
	            		</div>
	            	</div>
	            	<hr>
	            	<!-- <div class="form-group">
	            		<label id="semana">Semana <b style="color: red;">*</b></label>
	            		<input type="text" name="semana" id="" required="required" class="form-control" placeholder="Semana de la planificación">
	            	</div> -->
	            	<div class="form-group">
	            		<label id="revision">Revisión <b style="color: red;">*</b></label>
	            		<select name="revision" class="form-control select2" style="width: 100% !important;" required>
	            			<option value="A">A</option>
	            			<option value="B">B</option>
	            			<option value="C">C</option>
	            			<option value="D">D</option>
	            		</select>
	            	</div>
	            	<div class="form-group">
	            		<label id="curso">Gerencia <b style="color: red;">*</b></label>
	            		<select name="id_gerencia" class="form-control select2" required style="width: 100% !important;">
	            			@foreach($gerencias as $key)
	            				<option value="{{$key->id}}">{{$key->gerencia}}</option>
	            			@endforeach()
	            		</select>
	            	</div>
	            </div>
	            <div class="modal-footer">
	            	<button type="submit" class="btn btn-danger">Registrar</button>
	            </div>
	        </div>
	    </div>
	</div>
{!! Form::close() !!}