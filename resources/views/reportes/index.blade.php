@php
  libxml_use_internal_errors(true);
@endphp
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
                    {!! Form::open(['route' => 'reportes.store', 'method' => 'post', 'data-parsley-validate']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Planificaciones: <b style="color: red;">*</b></label></label>
                                    <select name="planificacion" id="planificacion" class="form-control" required="required">
                                        <option value="0">Todas...</option>
                                        @for($i=1; $i<=52; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Gerencias: <b style="color: red;">*</b></label></label>
                                    <select name="gerencias" id="gerencias" class="form-control" required="required">
                                        <option value="0">Todas...</option>
                                        <option value="NPI">NPI</option>
                                        <option value="CHO">CHO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Áreas: <b style="color: red;">*</b></label></label>
                                    <select name="areas" id="areas" class="form-control" required="required">
                                        <option value="0">Todas...</option>
                                        <option value="1">EWS</option>
                                        <option value="2">Planta Cero/Desaladora & Acueducto</option>
                                        <option value="3">Agua y Tranque</option>
                                        <option value="4">Filtro-Puerto</option>
                                        <option value="5">ECT</option>
                                        <option value="6">Los Colorados</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Realizadas: <b style="color: red;">*</b></label></label>
                                    <select name="realizadas" id="realizadas" class="form-control" required="required">
                                        <option value="0">Todas...</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Tipo: <b style="color: red;">*</b></label></label>
                                    <select name="tipo" id="tipo" class="form-control" required="required">
                                        <option value="0">Todos...</option>
                                        <option value="PM01">PM01</option>
                                        <option value="PM02">PM02</option>
                                        <option value="PM03">PM03</option>
                                        <option value="PM04">PM04</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Días: <b style="color: red;">*</b></label></label>
                                    <select name="dias" id="dias" class="form-control" required="required">
                                        <option value="0">Todos...</option>
                                        <option value="Mié">Mié</option>
                                        <option value="Jue">Jue</option>
                                        <option value="Vie">Vie</option>
                                        <option value="Sáb">Sab</option>
                                        <option value="Dom">Dom</option>
                                        <option value="Lun">Lun</option>
                                        <option value="Mar">Mar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Tipo de reporte: <b style="color: red;">*</b></label></label>
                                    <select name="tipo_reporte" id="tipo_reporte" class="form-control">
                                        <option value="PDF">PDF</option>
                                        <option value="Excel">Excel</option>
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
        $("#gerencias").on("change",function (event) {
            var gerencias=event.target.value;
            console.log(gerencias); // true
            $("#areas").empty();
            if(gerencias == 0){
                $("#areas").removeAttr('disabled');
                $("#areas").append('<option value="0">Todas...</option>');
                $("#areas").append('<option value="1">EWS</option>');
                $("#areas").append('<option value="2">Planta Cero/Desaladora & Acueducto</option>');
                $("#areas").append('<option value="3">Agua y Tranque</option>');
                $("#areas").append('<option value="4">Filtro-Puerto</option>');
                $("#areas").append('<option value="5">ECT</option>');
                $("#areas").append('<option value="6">Los Colorados</option>');

            } else if(gerencias == "NPI"){
                $("#areas").removeAttr('disabled');
                $("#areas").append('<option value="0">Todas...</option>');
                $("#areas").append('<option value="1">EWS</option>');
                $("#areas").append('<option value="2">Planta Cero/Desaladora & Acueducto</option>');
                $("#areas").append('<option value="3">Agua y Tranque</option>');

            } else if(gerencias == "CHO"){
                $("#tipo_filtro").removeAttr('disabled');
                $("#areas").append('<option value="0">Todas...</option>');
                $("#areas").append('<option value="4">Filtro-Puerto</option>');
                $("#areas").append('<option value="5">ECT</option>');
                $("#areas").append('<option value="6">Los Colorados</option>');

            } else if(gerencias == ""){
                $("#tipo_filtro").append('<option value="">Seleccione un filtro...</option>');
                $("#tipo_filtro").attr('disabled', true);

            }
        });
    });
</script>
@endsection