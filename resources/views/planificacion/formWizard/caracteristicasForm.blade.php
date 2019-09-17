<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                <label> <b> Tipo: </b></label>
                <select name="tipo" id="tipo" class="form-control" required="required">
                    <option value="PM01">PM01</option>
                    <option value="PM02">PM02</option>
                    <option value="PM03">PM03</option>
                    <option value="PM04">PM04</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                <label> <b> Realizada: </b></label>
                <select name="realizada" id="realizada" class="form-control" required="required">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                <label> <b> Avances del turno y pendientes: </b></label>
                <input type="text" name="observacion1" id="observacion1" class="form-control" placeholder="Avances del turno y pendientes">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                <label> <b> Observaciones/Comentarios: </b></label>
                <input type="text" name="observacion2" id="observacion2" class="form-control" placeholder="Avances del turno y pendientes">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                <label> <b> Planificación: </b></label>
                <select name="id_planificacion" id="id_planificacion" class="form-control" required="required">
                    @foreach($planificacion as $key)
                    <option value="{{ $key->id }}">Semana: {{ $key->semana }} - ({{ $key->fechas }})</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                <label> <b> Áreas: </b></label>
                <select name="id_area" id="id_area" class="form-control" required="required">
                    @foreach($areas as $key)
                    <option value="{{ $key->id }}">{{ $key->area }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
