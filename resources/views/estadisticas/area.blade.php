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
                            <li class="active"><a class="active" data-toggle="tab" href="#reporte_general">Gerencia {{$gerencia}} - Área {{$area}}</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st">
                            <div id="reporte_general" class="tab-pane fade in active">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="add-todo-list notika-shadow ">
                                                <div class="realtime-ctn">
                                                    <div class="realtime-title">
                                                        <h2>Áca encontrará todos los datos del áreas {{$area}}</h2>
                                                    </div>
                                                </div>
                                                <div class="card-box">
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Resultado de la búsquedas</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong style="float: right;">Semana Número: {{$planificacion->semana}} - Fecha:{{$planificacion->fechas}}</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    {{--
                                                    <div class="card-box">
                                                        <div class="row ajl">
                                                            <div class="col-md-8">                                            
                                                                <h4 align="center">Actividades PM02 VS Actividades PM03</h4>
                                                                <div class="bsc-tbl-st">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="50%" style="background: #48C9A9; color: black;">PM02</th>
                                                                                <th width="50%" style="background: #EF5350; color: black;">PM03</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="50%" style="">1</td>
                                                                                <td width="50%" style="">Alexandra</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_act_pm02_vs_act_pm03_g1->render() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="card-box">
                                                        <div class="row ajl">
                                                            <div class="col-md-8">
                                                                <h4>Total de Actividades</h4>
                                                                <div class="bsc-tbl-st">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="2" style="background: #F7C55F">PM01</th>
                                                                                <th colspan="2" style="background: #48C9A9">PM02</th>
                                                                                <th colspan="2" style="background: #EF5350">PM03</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th style="background: #D7CCC8; color: black;">R</th>
                                                                                <th style="background: #BDBDBD; color: black;">NR</th>
                                                                                <th style="background: #D7CCC8; color: black;">R</th>
                                                                                <th style="background: #BDBDBD; color: black;">NR</th>
                                                                                <th style="background: #D7CCC8; color: black;">R</th>
                                                                                <th style="background: #BDBDBD; color: black;">NR</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td bgcolor="white">{!! $count_area[1] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[2] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[4] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[5] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[7] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[8] !!}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_total_act_g1->render() !!}
                                                                </div>
                                                            </div>           
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    --}}
                                                    <div class="card-box">
                                                        <div class="row ajl">
                                                            <div class="col-md-8">
                                                                <h4>EWS <span style="float: right;">Total:</span></h4>
                                                                <div class="bsc-tbl-st">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="2" style="background: #F7C55F;">PM01</th>
                                                                                <th colspan="2" style="background: #48C9A9;">PM02</th>
                                                                                <th colspan="2" style="background: #EF5350;">PM03</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th style="background: #D7CCC8; color: black;">R</th>
                                                                                <th style="background: #BDBDBD; color: black;">NR</th>
                                                                                <th style="background: #D7CCC8; color: black;">R</th>
                                                                                <th style="background: #BDBDBD; color: black;">NR</th>
                                                                                <th style="background: #D7CCC8; color: black;">R</th>
                                                                                <th style="background: #BDBDBD; color: black;">NR</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td bgcolor="white">{!! $count_area[1] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[2] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[4] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[5] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[7] !!}</td>
                                                                                <td bgcolor="white">{!! $count_area[8] !!}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                                                                                <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3">{!! $count_area[3] !!}</td>
                                                                                <td colspan="3">{!! $count_area[6] !!}</td>                                                        
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_total->render() !!}
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="row ajl">
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
                                                            </div>            
                                                        </div>
                                                        <div class="row ajl">
                                                            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_hh_1->render() !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_hh_2->render() !!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                                                                <h4 style="text-align: center;">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                    {!! $graf_hh_3->render() !!}
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