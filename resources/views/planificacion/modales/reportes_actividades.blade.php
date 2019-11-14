<div class="modal fade" id="excel_actividades" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Descargar reporte excel:</h2><br>
                <b><span id="tarea"></span></b>
                <br>
                {!! Form::open(['route' => 'excel.actividades','method' => 'post']) !!}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                            <h2>Área:</h2>
                            
                        </div>
                        <div class="form-group">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                <select class="form-control" id="id_area" name="id_area">
                                    @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{$area->area}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                            <h2>Número de semana:</h2>
                            
                        </div>
                        <div class="form-group">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                <select class="form-control" id="semana" name="semana">
                                    @for($i=1; $i<=52; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Buscar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
<div class="modal fade" id="pdf_actividades" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Descargar reporte PDF:</h2><br>
                <b><span id="tarea"></span></b>
                <br>
                {!! Form::open(['route' => 'pdf.actividades','method' => 'POST']) !!}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                            <h2>Área:</h2>
                            
                        </div>
                        <div class="form-group">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                <select class="form-control" id="id_area" name="id_area">
                                    @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{$area->area}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                            <h2>Número de semana:</h2>
                            
                        </div>
                        <div class="form-group">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                <select class="form-control" id="semana" name="semana">
                                    @for($i=1; $i<=52; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Buscar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>