@php
  libxml_use_internal_errors(true);
@endphp
@extends('layouts.appLayout')
@section('css')
<style type="text/css">
    body{
        background-color: #DCDCDC !important;
    }
    .ajl {
        border-radius: 10px !important;
        background: #DCDCDC;
        padding: 10px;
    }
    td,th {
        background: white;
        text-align: center !important;
    }
</style>
@endsection
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
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Estadísticas</h2>
                                    <p>Filtro para mostrar estadísticas específica..</p>
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
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-tabs-int">
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs tab-nav-center">
                            <li class="active"><a class="active" data-toggle="tab" href="#reporte_general">Gerencia {{$request->gerencias}} - Área {{$request->areas}}</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st">
                            <div id="reporte_general" class="tab-pane fade in active">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="add-todo-list notika-shadow ">
                                                <div class="realtime-ctn">
                                                    <div class="realtime-title">
                                                        <h2>Áca encontrará todos los datos del áreas {{$request->areas}}</h2>
                                                    </div>
                                                </div>
                                                <div class="card-box">
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <a href="{{ route('estadisticasHH') }}" class="btn btn-primary"><i class="fa fa-undo"></i> Regresar</a>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h4>Resultado de la búsquedas</h4>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <strong style="float: right;">Semana Número:  - Fecha:</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card-box">
                                                        <div class="row ajl">
                                                        <h4>{{$request->areas}} <span style="float: right;">Total:</span></h4>
                                                        <div class="col-md-4">
                                                            <table class="table table-striped table-bordered" border="2px" style="height: 40px;">
                                                                <tr>
                                                                    <td colspan="2" style=" background: #F7C55F; color: black;">PM01</td>
                                                                    <td>HH Realizadas</td>
                                                                </tr>
                                                                <tr>
                                                                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                                                                </tr>
                                                                @for($i=1; $i<=12; $i++)
                                                                <tr>
                                                                    <td>{{$i}}</td>
                                                                    <td>Datos</td>
                                                                </tr>
                                                                @endfor
                                                            </table>
                                                            <div style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_hh_1->render() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <table class="table table-striped table-bordered" border="2px">
                                                                <tr>
                                                                    <td colspan="2" style=" background: #48C9A9; color: black;">PM02</td>
                                                                    <td>HH Realizadas</td>
                                                                </tr>
                                                                <tr>
                                                                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                                                                </tr>
                                                                @for($i=1; $i<=12; $i++)
                                                                <tr>
                                                                    <td>{{$i}}</td>
                                                                    <td>Datos</td>
                                                                </tr>
                                                                @endfor
                                                            </table>
                                                            <div style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_hh_2->render() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <table class="table table-striped table-bordered" border="2px">
                                                                <tr>
                                                                    <td colspan="2" style=" background: #EF5350; color: black;">PM03</td>
                                                                    <td>HH Realizadas</td>
                                                                </tr>
                                                                <tr>
                                                                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                                                                </tr>
                                                                @for($i=1; $i<=12; $i++)
                                                                <tr>
                                                                    <td>{{$i}}</td>
                                                                    <td>Datos</td>
                                                                </tr>
                                                                @endfor
                                                            </table>
                                                            <div style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_hh_3->render() !!}
                                                                </div>
                                                            </div>
                                                        </div>            
                                                    </div>
                                                    </div>
                                                    <hr>                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" align="center">
                            <a href="{{ route('estadisticas1.index') }}" class="btn btn-primary"><i class="fa fa-undo"></i> Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection