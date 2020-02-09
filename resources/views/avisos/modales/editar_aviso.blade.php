<div class="form-group">
	<label>¿Cuáles son los empleados a quiénes se le enviará el aviso?</label>
	<select class="form-control" multiple="" required="" name="id_empleado">
		@foreach($empleados as $key)
			@foreach($users as $key2)
				@if($key->id_usuario == $key2->id)
					<option value="{{$key->id}}">{{$key->nombres}} {{$key->apellidos}} .- {{$key->rut}}</option>
				@endif()
			@endforeach()
		@endforeach()
	</select>
</div>
<hr>
<div class="form-group">
	<input type="text" class="form-control" name="motivo" placeholder="Motivo del aviso">
</div>
<hr>
<div class="form-group">
	<textarea name="mensaje" class="form-control" placeholder="Mensaje"></textarea>
</div>
<hr>
<div class="form-group">
	<input type="number" class="form-control" name="dias_previos" placeholder="Días del aviso">
</div>
<div class="form-group">
	<input type="number" class="form-control" name="dias_post" placeholder="Día del aviso">
</div>
<div class="form-group">
	<select class="form-control" name="modalidad">
		<option value="Automático">Automático</option>
		<option value="Manual">Manual</option>
		<option value="Ambos">Ambos</option>
	</select>
</div>
