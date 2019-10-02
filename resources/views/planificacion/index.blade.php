@extends('layouts.appLayout')

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-3">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-house"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Planificación</h2>
                                    <p>Bienvenido a Bienen System</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                            <div class="breadcomb-report">
                                <button data-toggle="modal" data-target="#planificacion" class="btn"><i
                                        class="notika-icon notika-edit"></i> Crear planificación</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Breadcomb area End-->
@endsection

@section('content')
<!-- Form Element area Start-->
<div class="form-element-area">
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        <p>Todos los campos (<b style="color: red;">*</b>) son obligatorios</p>
                        @if(count($errors))
                        <div class="alert-list m-4">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>

                    {!! Form::open(['route' => ['planificacion.buscar'],'method' => 'post']) !!}
                        @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <label for="gerencias"><b style="color: red;">*</b> Gerencias:</label>
                                    <select class="form-control" name="id_gerencia" id="id_gerencia">
                                        <option value="#">Seleccione una gerencia</option>
                                        @foreach($gerencias as $key)
                                        <option value="{{ $key->id }}">{{ $key->gerencia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <label for="areas"><b style="color: red;">*</b> Areas:</label>
                                    <select name="id_area" id="id_area" class="form-control">
                                       {{--  @foreach($areas as $key)
                                            <option value="{{ $key->id }}">{{ $key->area }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <label for="semanas"><b style="color: red;">*</b> Semanas:</label>
                                    <select name="semanas" id="semanas" class="form-control">
                                        @for ($i = 1; $i <=52; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>  

                    </div>


                    <div class="text-center mt-4 mb-4">
                        <button class="btn btn-md btn-info">Buscar planificación</button>
                    </div>
                    {!! Form::close() !!}
                    @if($encontrado!==0)
                    <div class="row" style="background: #7dcfee; margin: 5px; padding: 15px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group ic-cmp-int">                    
                                    <div class="nk-int-st">
                                    <b>Gerencia: {{ $planificaciones->gerencias->gerencia }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group ic-cmp-int">                    
                                    <div class="nk-int-st">
                                    <b>Elaborado: {{ $planificaciones->elaborado }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group ic-cmp-int">
                                    <b>Aprobado: {{ $planificaciones->aprobado }}</b>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group ic-cmp-int">
                                    <b>Número de contrato: {{ $planificaciones->num_contrato }}</b>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group ic-cmp-int">
                                    <b>Fechas: {{ $planificaciones->fechas }}</b>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group ic-cmp-int">
                                    <b>Semana: {{ $planificaciones->semana }}</b>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group ic-cmp-int">
                                    <b>Revision: {{ $planificaciones->revision }} </b>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="normal-table-list mg-t-30">
                            <div class="basic-tb-hd">
                                <h2>Totales de Duración de Horas semanales</h2>
                            </div>
                            <div class="bsc-tbl-bdr">
                                <table class="table table-bordered" border="2">
                                    <thead>
                                        <tr style="background: #7dcfee;">
                                            <th>Duraciones/Días</th>
                                            <th>Miércoles</th>
                                            <th>Jueves</th>
                                            <th>Viernes</th>
                                            <th>Sábado</th>
                                            <th>Domingo</th>
                                            <th>Lunes</th>
                                            <th>Martes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<2;$i++)

                                        <tr>
                                            @for($j=0;$j<8;$j++)
                                            <td style="background: #7dcfee;" scope="row">{{ $tiempos[$i][$j] }}</td>
                                            @endfor
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="data-table-list">
                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task</th>
                                            {{-- <th>Descripción</th> --}}
                                            {{-- <th>Turno</th> --}}
                                            <th>Fecha</th>
                                            <th>Duración aproximada</th>
                                            <th>Cantidad de personas</th>
                                            <th>Dureación real</th>
                                            <th>Día</th>
                                            <th>Área</th>
                                            <th>Tipo</th>
                                            <th>Realizada</th>
                                            <th>Avances del turno y pendientes</th>
                                            <th>Observaciones/Comentarios</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($planificaciones->actividades as $key)
                                        @if($key->id_area==$id_area)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $key->task }}</td>
                                            {{-- <td>{{ $key->descripcion }}</td>
                                            <td>{{ $key->turno }}</td> --}}
                                            <td>{{ $key->fecha_vencimiento }}</td>
                                            <td>{{ $key->duracion_pro }}</td>
                                            <td>{{ $key->cant_personas }}</td>
                                            <td>{{ $key->duracion_real }}</td>
                                            <td>{{ $key->dia }}</td>
                                            <td>{{ $key->areas->area }}</td>
                                            <td>{{ $key->tipo }}</td>
                                            <td>{{ $key->realizada }}</td>
                                            <td>{{ $key->observacion1 }}</td>
                                            <td>{{ $key->observacion2 }}</td>
                                        </tr>
                                        
                                        @endif
                                        @endforeach    
                                    </tbody>    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</div>

<!-- Start modal -->
<div class="modal fade" id="planificacion" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="wizard-wrap-int">
                    <div class="wizard-hd">
                        <h1 class="text-center">Crear planificación</h1>
                        <div class="text-center">
                            <small class="text-center">Los campos con un (<span style="color:red">*</span>) son
                                obligatorios</small>

                        </div>

                    </div>
                    <div id="rootwizard">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container-pro wizard-cts-st">
                                    <ul>
                                        <li><a href="#tab1" data-toggle="tab">Descripción de planificación</a></li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('planificacion.store') }}" method="post">
                        @csrf
                        <div class="tab-content">
                            <div class="tab-pane wizard-ctn" id="tab1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <label>Elaborado porasas: <span style="color:red">*</span></label>
                                            <input type="text" name="elaborado" id="elaborado" class="form-control" placeholder="Elaborado">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <label>Aprobado por: <span style="color:red">*</span></label>
                                            <input type="text" name="aprobado" id="aprobado" class="form-control" placeholder="Aprobado">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <label>Núm. de contrato <span style="color:red">*</span></label>
                                            <input type="text" name="num_contrato" class="form-control" placeholder="Núm de contrato" id="num_contrato">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <label>Fechas: <span style="color:red">*</span></label>
                                            <input type="text" name="fechas" id="fechas" class="form-control" placeholder="Rango de fecha" readonly="readonly">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <label>Semana: <span style="color:red">*</span></label>
                                        
                                            <select class="form-control" data-live-search="true" name="semana" id="num_semana">
                                                <option value="#">Seleccione una semana</option>
                                                @for($i=1; $i<=52; $i++)
                                                    @if($i>=$num_semana_actual)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endif
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                            <label>Revision: <span style="color:red">*</span></label>
                                            <select class="form-control" data-live-search="true">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-4">
                                        <div class="form-example-int">
                                            <div class="form-group">
                                                <label for="gerencias"> <b> Gerencias</b><span style="color:red">*</span></label>
                                                <div class="nk-int-st">
                                                    <select name="id_gerencia" id="id_gerencia" class="form-control">
                                                        <option value="#">Seleccione</option>
                                                        @foreach($gerencias as $key)
                                                        <option value="{{ $key->id }}">{{ $key->gerencia }}</option>
                                                        @endforeach 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" >Guardar</button>
                <button type="reset" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
                        </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready( function(){
        $("#id_gerencia").on("change",function (event) {
            var id_gerencia=event.target.value;
            
            $.get("/planificacion/"+id_gerencia+"/buscar",function (data) {
                
                $("#id_area").empty();
            
            if(data.length > 0){

                for (var i = 0; i < data.length ; i++) 
                {  
                    $("#id_area").removeAttr('disabled');
                    $("#id_area").append('<option value="'+ data[i].id + '">' + data[i].area +'</option>');
                }

            }else{
                
                $("#id_area").attr('disabled', false);

            }

            });
        });
        // calculando fechas de la semana
        $("#num_semana").on("change",function (event) {
            var num_semana=event.target.value;
            
            $.get("/planificacion/"+num_semana+"/calcular_fechas",function (data) {
                
                //console.log(data);
                $("#fechas").val(data);
            });
        });

        
    });
</script>
@endsection