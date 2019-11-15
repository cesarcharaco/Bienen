@extends('layouts.appLayout')

@section('breadcomb')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <a href="{{ route('home') }}" data-toggle="tooltip"
                                        data-placement="bottom" title="Volver" class="btn">
                                        <i class="fa fa-file-archive-o"></i>
                                    </a>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Reportes en PDF y Excel</h2>
                                    <p>Filtro para descargar reportes de la semana actual  ({{ semana_actual() }}).</p>
                                </div>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd text-center">
                        <p>Todos los campos (<b style="color: red;">*</b></label>) son obligatorios</p>
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
                        @include('flash::message')
                    </div>
                    {!! Form::open(['route' => 'reportes.store', 'method' => 'post']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Filtro: <b style="color: red;">*</b></label></label>
                                    <select name="filtro" id="filtro" class="form-control" required="required">
                                        <option value="">Seleccione filtro...</option>
                                        <option value="Planificaciones">Planificaciones</option>
                                        <option value="Gerencias">Gerencias</option>
                                        <option value="Area">Área</option>
                                        <option value="Tipo">Tipo</option>
                                        <!-- <option value="Semanas">Semanas</option> -->
                                        <option value="Realizadas">Realizadas</option>
                                        <option value="Dias">Días</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Tipo de filtro: <b style="color: red;">*</b></label></label>
                                    <select name="tipo_filtro" id="tipo_filtro" class="form-control" disabled="disabled" required="required">
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3" style="display: none;" id="semana">
                                <div class="form-group">
                                    <label for="">Nro de semana: <b style="color: red;">*</b></label></label>
                                    <select name="semana" id="semana" class="form-control">
                                        @for($i=1; $i<=52; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Tipo de reporte: <b style="color: red;">*</b></label></label>
                                    <select name="tipo_grafica" id="tipo_grafica" class="form-control">
                                        <option value="Excel">Excel</option>
                                        <option value="PDF">PDF</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                    <div class="text-center mt-4">
                        <button class="btn btn-md btn-info">Buscar</button>
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
</div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready( function(){
        $("#filtro").on("change",function (event) {
            var filtro=event.target.value;
            console.log(filtro); // true
            $("#tipo_filtro").empty();
            if(filtro == "Planificaciones"){
                $("#tipo_filtro").removeAttr('disabled');
                $("#tipo_filtro").append('<option value="Todas">Todas</option>');
                $("#tipo_filtro").append('<option value=""></option>');

            } else if(filtro == "Gerencias"){
                $("#tipo_filtro").removeAttr('disabled');
                $("#tipo_filtro").append('<option value="Todas">Todas</option>');
                $("#tipo_filtro").append('<option value="NPI">NPI</option>');
                $("#tipo_filtro").append('<option value="CHO">CHO</option>');

            } else if(filtro == "Area"){
                $("#tipo_filtro").removeAttr('disabled');
                $("#tipo_filtro").append('<option value="Todas">Todas</option>');
                $("#tipo_filtro").append('<option value="1">EWS</option>');
                $("#tipo_filtro").append('<option value="2">Planta Cero/Desaladora & Acueducto</option>');
                $("#tipo_filtro").append('<option value="3">Agua y Tranque</option>');
                $("#tipo_filtro").append('<option value="4">Filtro-Puerto</option>');
                $("#tipo_filtro").append('<option value="5">ECT</option>');
                $("#tipo_filtro").append('<option value="6">Los Colorados</option>');

            } else if(filtro == "Tipo"){
                $("#tipo_filtro").removeAttr('disabled');
                $("#tipo_filtro").append('<option value="Todas">Todas</option>');
                $("#tipo_filtro").append('<option value="PM01">PM01</option>');
                $("#tipo_filtro").append('<option value="PM02">PM02</option>');
                $("#tipo_filtro").append('<option value="PM03">PM03</option>');
                $("#tipo_filtro").append('<option value="PM04">PM04</option>');

            } else if(filtro == "Realizadas"){
                $("#tipo_filtro").removeAttr('disabled');
                $("#tipo_filtro").append('<option value="Todas">Todas</option>');
                $("#tipo_filtro").append('<option value="Si">Si</option>');
                $("#tipo_filtro").append('<option value="No">No</option>');

            } else if(filtro == "Dias"){
                $("#tipo_filtro").removeAttr('disabled');
                $("#tipo_filtro").append('<option value="Todas">Todas</option>');
                $("#tipo_filtro").append('<option value="1">Mié</option>');
                $("#tipo_filtro").append('<option value="2">Jue</option>');
                $("#tipo_filtro").append('<option value="3">Vie</option>');
                $("#tipo_filtro").append('<option value="4">Sab</option>');
                $("#tipo_filtro").append('<option value="5">Dom</option>');
                $("#tipo_filtro").append('<option value="6">Lun</option>');
                $("#tipo_filtro").append('<option value="7">Mar</option>');

            } else if(filtro == ""){
                $("#tipo_filtro").append('<option value="">Seleccione un filtro...</option>');
                $("#tipo_filtro").attr('disabled', true);

            }
        });
    });
</script>
@endsection