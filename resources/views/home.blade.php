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
                                    <i class="notika-icon notika-house"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Dashboard</h2>
                                    <p>Bienvenido a Bienen System</p>
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

<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-list sm-res-mg-t-30">
                    <div class="contact-win">
                        <div class="contact-img">
                            <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" />
                        </div>
                        <div class="conct-sc-ic">
                            <a class="btn" href="#"><i class="notika-icon notika-support"></i></a>
                            <a class="btn" href="#"><i class="notika-icon notika-calendar"></i></a>
                            <a class="btn" href="#"><i class="notika-icon notika-app"></i></a>
                        </div>
                    </div>
                    <div class="contact-ctn">
                        <div class="contact-ad-hd">
                            <h2>Smith</h2>
                            <p class="ctn-ads">Área adminstración</p>
                        </div>
                        <h2>Actividades:</h2>
                    </div>
                    <div class="social-st-list">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="accordion-stn">
                                    <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                        role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionGreen"
                                                        href="#accordionGreen-one" aria-expanded="true">
                                                        Limpiar los baños
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-one" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Limpiar los baños del piso 2</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGreen" href="#accordionGreen-two"
                                                        aria-expanded="false">
                                                        Podar el jardín
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Podar todas las matas del jardín principal.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGreen" href="#accordionGreen-three"
                                                        aria-expanded="false">
                                                        Cambiar farolas
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Cambiar todas las farolas</p>
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

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-list sm-res-mg-t-30">
                    <div class="contact-win">
                        <div class="contact-img">
                            <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" />
                        </div>
                        <div class="conct-sc-ic">
                            <a class="btn" href="#"><i class="notika-icon notika-support"></i></a>
                            <a class="btn" href="#"><i class="notika-icon notika-calendar"></i></a>
                            <a class="btn" href="#"><i class="notika-icon notika-app"></i></a>
                        </div>
                    </div>
                    <div class="contact-ctn">
                        <div class="contact-ad-hd">
                            <h2>John Deo</h2>
                            <p class="ctn-ads">Área contaduria</p>
                        </div>
                        <h2>Actividades:</h2>
                    </div>
                    <div class="social-st-list">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="accordion-stn">
                                    <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                        role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionGreen"
                                                        href="#accordionGreen-one" aria-expanded="true">
                                                        Limpiar los baños
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-one" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Limpiar los baños del piso 2</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGreen" href="#accordionGreen-two"
                                                        aria-expanded="false">
                                                        Podar el jardín
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Podar todas las matas del jardín principal.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGreen" href="#accordionGreen-three"
                                                        aria-expanded="false">
                                                        Cambiar farolas
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Cambiar todas las farolas</p>
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

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-list sm-res-mg-t-30">
                    <div class="contact-win">
                        <div class="contact-img">
                            <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" />
                        </div>
                        <div class="conct-sc-ic">
                            <a class="btn" href="#"><i class="notika-icon notika-support"></i></a>
                            <a class="btn" href="#"><i class="notika-icon notika-calendar"></i></a>
                            <a class="btn" href="#"><i class="notika-icon notika-app"></i></a>
                        </div>
                    </div>
                    <div class="contact-ctn">
                        <div class="contact-ad-hd">
                            <h2>Marissa Meyer</h2>
                            <p class="ctn-ads">Área mantenimiento</p>
                        </div>
                        <h2>Actividades:</h2>
                    </div>
                    <div class="social-st-list">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="accordion-stn">
                                    <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                        role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionGreen"
                                                        href="#accordionGreen-one" aria-expanded="true">
                                                        Limpiar los baños
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-one" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Limpiar los baños del piso 2</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGreen" href="#accordionGreen-two"
                                                        aria-expanded="false">
                                                        Podar el jardín
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Podar todas las matas del jardín principal.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionGreen" href="#accordionGreen-three"
                                                        aria-expanded="false">
                                                        Cambiar farolas
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Cambiar todas las farolas</p>
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
    </div>
</div>

@endsection
