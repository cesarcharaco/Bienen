@php
  libxml_use_internal_errors(true);
@endphp
@extends('layouts.appLayout')
@section('css')
<style type="text/css">
    body{
        background-color: #DCDCDC !important;
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
                            <li class="active"><a class="active" data-toggle="tab" href="#reporte_general">Gerencia NPI</a></li>
                            <li><a data-toggle="tab" href="#reporte_cronologico">Gerencia CHO</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st">
                            <div id="reporte_general" class="tab-pane fade in active">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="add-todo-list notika-shadow ">
                                                <div class="realtime-ctn">
                                                    <div class="realtime-title">
                                                        <h2>Áca encontrara todas las áreas correspondiente a la gerencia NPI</h2>
                                                    </div>
                                                </div>
                                                <div class="card-box">
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Resultado de la búsquedas</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong style="float: right;">Semana Número:</strong>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">                                            
                                                                <h4 align="center">Actividades PM02 VS Actividades PM03</h4>
                                                                <div class="bsc-tbl-st">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="50%" style="text-align: center; background: #48C9A9; color: black;">PM02</th>
                                                                                <th width="50%" style="text-align: center; background: #F7C55F; color: black;">PM03</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="50%" style="text-align: center;">1</td>
                                                                                <td width="50%" style="text-align: center;">Alexandra</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 align="center">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><hr>
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>EWS</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 style="float: right;">Total:</h4>
                                                            </div>
                                                        </div>
                                                        <div class="bsc-tbl-st">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <table class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="2">PM01</th>
                                                                                    <th colspan="2">PM02</th>
                                                                                    <th colspan="2">PM03</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3"></td>
                                                                                    <td colspan="3"></td>                                                        
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h4 style="text-align: center;">Gráfica</h4>
                                                                        <div class="row">
                                                                            <!-- Aqui va la grafica -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: red; color: black;">PM03</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Planta Cero/Desaladora & Acueducto</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 style="float: right;">Total:</h4>
                                                            </div>
                                                        </div>
                                                        <div class="bsc-tbl-st">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <table class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="2">PM01</th>
                                                                                    <th colspan="2">PM02</th>
                                                                                    <th colspan="2">PM03</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3"></td>
                                                                                    <td colspan="3"></td>                                                        
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h4 style="text-align: center;">Gráfica</h4>
                                                                        <div class="row">
                                                                            <!-- Aqui va la grafica -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: red; color: black;">PM03</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Agua y Tranque</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 style="float: right;">Total:</h4>
                                                            </div>
                                                        </div>
                                                        <div class="bsc-tbl-st">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <table class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="2">PM01</th>
                                                                                    <th colspan="2">PM02</th>
                                                                                    <th colspan="2">PM03</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3"></td>
                                                                                    <td colspan="3"></td>                                                        
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h4 style="text-align: center;">Gráfica</h4>
                                                                        <div class="row">
                                                                            <!-- Aqui va la grafica -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: red; color: black;">PM03</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
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
                            <div id="reporte_cronologico" class="tab-pane fade">
                                <div class="tab-ctn">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                <div class="realtime-ctn">
                                                    <div class="realtime-title">
                                                        <h2>Áca encontrara todas las áreas correspondiente a la gerencia CHO</h2>
                                                    </div>
                                                </div>
                                                <div class="card-box">
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Resultado de la búsquedas</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong style="float: right;">Semana Número:</strong>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">                                            
                                                                <h4 align="center">Actividades PM02 VS Actividades PM03</h4>
                                                                <div class="bsc-tbl-st">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th width="50%" style="text-align: center; background: #48C9A9; color: black;">PM02</th>
                                                                                <th width="50%" style="text-align: center; background: #F7C55F; color: black;">PM03</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="50%" style="text-align: center;">1</td>
                                                                                <td width="50%" style="text-align: center;">Alexandra</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 align="center">Gráfica</h4>
                                                                <div class="row">
                                                                    <!-- Aqui va la grafica -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><hr>
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Filtro-Puerto</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 style="float: right;">Total:</h4>
                                                            </div>
                                                        </div>
                                                        <div class="bsc-tbl-st">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <table class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="2">PM01</th>
                                                                                    <th colspan="2">PM02</th>
                                                                                    <th colspan="2">PM03</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3"></td>
                                                                                    <td colspan="3"></td>                                                        
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h4 style="text-align: center;">Gráfica</h4>
                                                                        <div class="row">
                                                                            <!-- Aqui va la grafica -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: red; color: black;">PM03</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>ECT</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 style="float: right;">Total:</h4>
                                                            </div>
                                                        </div>
                                                        <div class="bsc-tbl-st">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <table class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="2">PM01</th>
                                                                                    <th colspan="2">PM02</th>
                                                                                    <th colspan="2">PM03</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3"></td>
                                                                                    <td colspan="3"></td>                                                        
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h4 style="text-align: center;">Gráfica</h4>
                                                                        <div class="row">
                                                                            <!-- Aqui va la grafica -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: red; color: black;">PM03</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="card-box">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4>Los Colorados</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 style="float: right;">Total:</h4>
                                                            </div>
                                                        </div>
                                                        <div class="bsc-tbl-st">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <table class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="2">PM01</th>
                                                                                    <th colspan="2">PM02</th>
                                                                                    <th colspan="2">PM03</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                    <td style="background: #48C9A9; color: black;">R</td>
                                                                                    <td style="background: #F7C55F; color: black;">NR</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                    <td bgcolor="white"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                                                                                    <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="3"></td>
                                                                                    <td colspan="3"></td>                                                        
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h4 style="text-align: center;">Gráfica</h4>
                                                                        <div class="row">
                                                                            <!-- Aqui va la grafica -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <table class="table table-striped table-bordered" border="2px">
                                                                                <tr>
                                                                                    <td rowspan="" style="text-align: center; background: red; color: black;">PM03</td>
                                                                                    <td rowspan="" style="text-align: center;">HH Realizadas</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                                                                                </tr>
                                                                                @for($i=1; $i<=12; $i++)
                                                                                <tr>
                                                                                    <td style="text-align: center;">{{$i}}</td>
                                                                                </tr>
                                                                                @endfor
                                                                            </table>
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