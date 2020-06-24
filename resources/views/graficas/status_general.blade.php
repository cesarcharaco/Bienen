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
                <div class="form-element-list">
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
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <h3>Ejecución de Actividades en EWS</h3>
                                <div style="width:50%; height: 50%;">
                                    {!! $chartjs_a1->render() !!}
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <h3>Ejecución de Actividades en Planta Cero/Desaladora</h3>
                                <div style="width:50%; height: 50%;">
                                    {!! $chartjs_a2->render() !!}
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a class="btn btn-md btn-success" href="{{ route('graficas.index') }}">Regresar</a>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection