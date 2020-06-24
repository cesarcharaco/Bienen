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
                                        <h2>Status general</h2>
                                        <p>Gráfica para el status general de las plantas</p>
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
                </div>

                <div class="text-right mt-4">
                    <a class="btn btn-md btn-success" href="{{ route('graficas.index') }}">Regresar</a>
                </div>
                <br>

                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>NPI: PM01</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm01_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm01_no !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>NPI: PM02</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm02_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm02_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>NPI: PM03</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm03_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm03_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>NPI: PM04</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm04_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g1_pm04_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                        <br>   
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>CHO: PM01</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm01_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm01_no !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>CHO: PM02</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm02_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm02_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>CHO: PM03</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm03_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm03_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="email-statis-inner notika-shadow">
                                    <div class="email-ctn-round">
                                        <div class="email-rdn-hd">
                                            <h2>CHO: PM04</h2>
                                        </div>
                                        
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm04_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>Realizadas</p>
                                                </div>
                                            </div>
                                            <div class="email-round-pro">
                                                <div class="email-signle-gp">
                                                    <div style="margin-left: -50px; width:100%;height:100%">
                                                        <canvas width="90" height="200"></canvas>
                                                        <input type="text" class="knob" value="0" data-rel="{!! $g2_pm04_si !!}" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled="" readonly="readonly" style="width: 49px; height: 30px; position: relative; vertical-align: middle; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(0, 194, 146); padding: 0px; -webkit-appearance: none;">
                                                    </div>
                                                </div>
                                                <div class="email-ctn-nock">
                                                    <p>No realizadas</p>
                                                </div>
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
@endsection