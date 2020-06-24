@extends('layouts.appLayout')

<style type="text/css">
    .estilos_graficos2{
        margin-right: -25px;
        margin-left: -25px;
    }
    .estilos_graficos1{
        margin-right: -25px;
        margin-left: -25px;
        @media only screen and (max-width: 700px) {
        }
</style>
@section('breadcomb')
    <!-- Breadcomb area Start-->
        <div class="breadcomb-area">
            <div class="container">
                <div style="margin-right: -25px;">
                    <div style="margin-left: -25px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-list">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="breadcomb-wp">
                                                <div class="breadcomb-icon">
                                                    <a href="{{ route('graficas.index') }}" data-toggle="tooltip"
                                                        data-placement="bottom" title="Volver" class="btn">
                                                        <i class="notika-icon notika-star"></i>
                                                    </a>
                                                </div>
                                                <div class="breadcomb-ctn">
                                                    <h2>Status general</h2>
                                                    <p>Semana actual número: <strong>{!! $num_semana_actual !!}</strong></p>
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
        </div>
    <!-- Breadcomb area End-->

@endsection

@section('content')
    <!-- Form Element area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="basic-tb-hd text-center">
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
                <div class="text-right mt-4">
                    <a class="btn btn-md btn-success" href="{{ route('graficas.index') }}">Regresar</a>
                </div>
                </div>

                <div style="

                    ">
                    
                
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="estilos_graficos1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                    <center>
                                                        <h3>NPI: PM01</h3>
                                                        <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                            <input type="text" value="{!! $p1_pm01 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                            <i class="knob-center-icon icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                                
                                                        <ul class="list-inline clearfix mt-2">
                                                            <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                                <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm01_si !!}</h1>
                                                                <span class="success"><i class="icon-male"></i> Realizado</span>
                                                            </li>
                                                            <li class="pl-2" style="color: gray">
                                                                <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm01_no !!}</h1>
                                                                <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                            </li>
                                                        </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                        <center>
                                                    <h3>NPI: PM02</h3>
                                                    <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                        <input type="text" value="{!! $p1_pm02 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                        <i class="knob-center-icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                            
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm02_si !!}</h1>
                                                            <span class="success"><i class="icon-male"></i> Realizado</span>
                                                        </li>
                                                        <li class="pl-2" style="color: gray">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm02_no !!}</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                        </li>
                                                    </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                        <center>
                                                    <h3>NPI: PM03</h3>
                                                    <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                        <input type="text" value="{!! $p1_pm03 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                        <i class="knob-center-icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                            
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm03_si !!}</h1>
                                                            <span class="success"><i class="icon-male"></i> Realizado</span>
                                                        </li>
                                                        <li class="pl-2" style="color: gray">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm03_no !!}</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                        </li>
                                                    </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                        <center>
                                                    <h3>NPI: PM04</h3>
                                                    <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                        <input type="text" value="{!! $p1_pm04 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                        <i class="knob-center-icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                            
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm04_si !!}</h1>
                                                            <span class="success"><i class="icon-male"></i> Realizado</span>
                                                        </li>
                                                        <li class="pl-2" style="color: gray">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g1_pm04_no !!}</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                        </li>
                                                    </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                
                            
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <center><h3>PLANTA NPI</h3></center>
                                      <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <center>
                                                    <h5>Ejecución de Actividades en EWS</h5>
                                                    <div style="width:100%; height: 100%;">
                                                        {!! $chartjs_a1->render() !!}
                                                    </div>
                                                </center>
                                            </div>
                                            <div class="carousel-item">
                                                <center>
                                                    <h5>Ejecución de Actividades en Planta Cero/Desaladora</h5>
                                                    <div style="width:100%; height: 100%;">
                                                        {!! $chartjs_a2->render() !!}
                                                    </div>
                                                </center>
                                            </div>
                                            <div class="carousel-item">
                                              <center>
                                                    <h5>Ejecución de Actividades en Agua y Tranque</h5>
                                                    <div style="width:100%; height: 100%;">
                                                        {!! $chartjs_a3->render() !!}
                                                    </div>
                                                </center>
                                            </div>
                                          </div>
                                          <a class="carousel-control-prev" href="#carouselExampleControls1" style="background-color: grey;" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                          </a>
                                          <a class="carousel-control-next" href="#carouselExampleControls1" style="background-color: grey;" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                          </a>
                                        </div>  
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <center><h3>PLANTA CHO</h3></center>
                                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                              <center>
                                                    <h5>Ejecución de Filtro-Puerto</h5>
                                                    <div style="width: 100%; height: 100%;">
                                                        {!! $chartjs_a4->render() !!}
                                                    </div>
                                                </center>
                                            </div>
                                            <div class="carousel-item">
                                              <center>
                                                    <h5>Ejecución de Actividades en ETC</h5>
                                                    <div style="width: 100%; height: 100%;">
                                                        {!! $chartjs_a5->render() !!}
                                                    </div>
                                                </center>
                                            </div>
                                            <div class="carousel-item">
                                              <center>
                                                    <h5>Ejecución de Actividades en los Colorados</h5>
                                                    <div style="width: 100%; height: 100%;">
                                                        {!! $chartjs_a6->render() !!}
                                                    </div>
                                                </center>
                                            </div>
                                          </div>
                                          <a class="carousel-control-prev" href="#carouselExampleControls" style="background-color: grey;" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                          </a>
                                          <a class="carousel-control-next" href="#carouselExampleControls" style="background-color: grey;" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                          </a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                                <br>   
                        </div>
                        <div class="col-md-3">
                            <div class="estilos_graficos2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                        <center>
                                                    <h3>CHO: PM01</h3>
                                                    <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                        <input type="text" value="{!! $p2_pm01 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                        <i class="knob-center-icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                            
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm01_si !!}</h1>
                                                            <span class="success"><i class="icon-male"></i> Realizado</span>
                                                        </li>
                                                        <li class="pl-2" style="color: gray">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm01_no !!}</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                        </li>
                                                    </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                        <center>
                                                    <h3>CHO: PM02</h3>
                                                    <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                        <input type="text" value="{!! $p2_pm02 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                        <i class="knob-center-icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                            
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm02_si !!}</h1>
                                                            <span class="success"><i class="icon-male"></i> Realizado</span>
                                                        </li>
                                                        <li class="pl-2" style="color: gray">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm02_no !!}</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                        </li>
                                                    </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                        <center>
                                                    <h3>CHO: PM03</h3>
                                                    <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                        <input type="text" value="{!! $p2_pm03 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                        <i class="knob-center-icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                            
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm03_si !!}</h1>
                                                            <span class="success"><i class="icon-male"></i> Realizado</span>
                                                        </li>
                                                        <li class="pl-2" style="color: gray">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm03_no !!}</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                        </li>
                                                    </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                <div class="card-body">
                                                        <center>
                                                    <h3>CHO: PM04</h3>
                                                    <div style="display:inline;width:150px;height:150px; margin-top: 100px !important;">
                                                        <input type="text" value="{!! $p2_pm04 !!}" class="knob hide-value responsive angle-offset" data-thickness=".15" data-linecap="round" data-width="150" data-height="150" data-inputcolor="#00c292" data-readonly="true" data-fgcolor="#00c292" data-knob-icon="icon-users" readonly="readonly">
                                                        <i class="knob-center-icon icon-users" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; border: 0px; background: none; font: normal 30px Arial; text-align: center; color: rgb(225, 225, 225); padding: 0px; -webkit-appearance: none; margin-left: -114px;font-size: 50px;"></i></div>
                                                            
                                                    <ul class="list-inline clearfix mt-2">
                                                        <li class="border-right-blue-grey border-right-lighten-2 pr-2" style="color: #00c292">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm04_si !!}</h1>
                                                            <span class="success"><i class="icon-male"></i> Realizado</span>
                                                        </li>
                                                        <li class="pl-2" style="color: gray">
                                                            <h1 class="blue-grey darken-1 text-bold-400">{!! $g2_pm04_no !!}</h1>
                                                            <span class="warning darken-2"><i class="icon-female"></i> No Realizado</span>
                                                        </li>
                                                    </ul>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection