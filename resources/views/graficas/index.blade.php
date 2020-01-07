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
                                    <a href="{{ route('empleados.index') }}" data-toggle="tooltip"
                                        data-placement="bottom" title="Volver" class="btn">
                                        <i class="notika-icon notika-star"></i>
                                    </a>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Gráficas</h2>
                                    <p>Filtro para consultar gráficas</p>
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
                    {!! Form::open(['route' => 'graficas.store', 'method' => 'post']) !!}
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="">Gráficas: <b style="color: red;">*</b></label></label>
                                    <select name="graficas" id="graficas" class="form-control">
                                        <option value="Area">Área</option>
                                        <option value="Tipo">Tipo</option>
                                        <option value="Turno">Turno</option>
                                        <option value="Semanas">Semanas</option>
                                        <option value="Realizadas">Realizadas</option>
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
                                    <label for="">Tipo de gráfica: <b style="color: red;">*</b></label></label>
                                    <select name="tipo_grafica" id="tipo_grafica" class="form-control">
                                        <option value="Barra">Barra</option>
                                        <option value="Torta">Torta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="fecha_desde">Fecha desde: <b style="color: red;">*</b></label>
                                    <input type="date" name="fecha_desde" id="fecha_desde" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-group">
                                    <label for="fecha_hasta ">Fecha hasta: <b style="color: red;">*</b></label>
                                    <input type="date" name="fecha_hasta" id="fecha_hasta" required="required" class="form-control">
                                </div>
                            </div>

                        </div>


                    <div class="text-center mt-4">
                        <button class="btn btn-md btn-primary">Buscar</button>
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
<script>
$( function() {
$("#graficas").change( function() {
    if ($(this).val() === "Semanas") {
        semana.value="";
        fecha_desde.value="";
        fecha_hasta.value="";
        $("#semana").removeAttr('style');
        $("#fecha_desde").prop("disabled", true);
        $("#fecha_hasta").prop("disabled", true);
    } else {
        $("#semana").css('display','none');
        $("#fecha_desde").prop("disabled", false);
        $("#fecha_hasta").prop("disabled", false);
    }
});
});
</script>
@endsection