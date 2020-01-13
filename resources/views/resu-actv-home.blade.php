<div id="menu1" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="add-todo-list notika-shadow ">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Actividades - Resúmen</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            <div class="todoapp" id="todoapp" class="overflow-auto">
                                                                <div class="scrollbar scrollbar-primary">
                                                                    <?php $i=1; ?>
                                                                    @foreach($actividadesProceso as $key)
                                                                        @foreach($actividades as $key2)
                                                                           @if($key->id_actividad == $key2->id)
                                                                                <div id="contenido{{$i}}">
                                                                                    <input type="hidden" name="contenido{{$i}}" id="contenido" value="contenido{{$i}}" onclick="">
                                                                                    <?php $f=date('Y-m-d');
                                                                                        if($f > $key2->planificacion->fechas){
                                                                                            $estilo="panel panel-danger";
                                                                                        }else{
                                                                                            $estilo="panel panel-primary";
                                                                                        }
                                                                                    ?>
                                                                                    <div class="{{$estilo}}">
                                                                                      <div class="panel-heading"><strong>{{$key2->tipo}}</strong> - {{$key2->task}} 
                                                                                        @if($f > $key2->planificacion->fechas)
                                                                                            <strong>Vencido</strong>
                                                                                        @endif
                                                                                       <a href="#" class="btn btn-danger" id="eliminar_actividad" onclick="eliminar('{{$key->id_actividad}}','{{$key->id_empleado}}','contenido{{$i}}')" value="0" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaltre"><span class="fa fa-trash"></span></a>
                                                                                      </div>
                                                                                        <div class="panel-body">
                                                                                            @if(Auth::user()->tipo_user>= "Admin")
                                                                                                <strong>Empleados:</strong> 
                                                                                                @foreach($empleados as $data)
                                                                                                    @if($data->id == $key->id_empleado)
                                                                                                        {{$data->nombres}} {{$data->apellidos}} - {{$data->rut}}<br>
                                                                                                    @endif
                                                                                                @endforeach()
                                                                                            @endif
                                                                                            <strong>Fecha:</strong> {{$key2->fecha_vencimiento}}<br>
                                                                                            <strong>Planificación:</strong> {{$key2->planificacion->fechas}}<br>
                                                                                            <strong>Día:</strong> {{$key2->dia}}<br>
                                                                                            <strong>Semana:</strong> {{$key2->planificacion->semana}}<br>
                                                                                            <strong>Área:</strong> {{$key2->areas->area}}<br>
                                                                                            <strong>Departamento:</strong> {{$key2->departamentos->departamento}}<br>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php $i++; ?>
                                                                            @endif 
                                                                        @endforeach()
                                                                    @endforeach()
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>