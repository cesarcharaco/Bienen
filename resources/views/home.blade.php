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

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-list sm-res-mg-t-30">
                    <div class="contact-win">
                        <div class="contact-img ml-auto">
                            <!-- <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" /> -->
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="contact-ctn" style="margin-top: -40px">
                        <div class="contact-ad-hd">
                            <h2>John Deo</h2>
                            <p class="ctn-ads">Área contaduria</p>
                        </div>
                        <h2>Actividades:</h2>
                    </div>



                    <div class="accordion-stn">
                        <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist"
                            aria-multiselectable="true">
                            <div class="panel panel-collapse notika-accrodion-cus">
                                <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-one" aria-expanded="true">
                                            Limpiar los baños
                                        </a>
                                        
                                    </h4>
                                </div>
                                <div id="accordionGreen-one" class="collapse mb-3" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Limpiar los baños del piso 2</p>
                                        <div class="text-right mt-2">
                                        <a href="#">
                                            <i class="lni-comment-alt"></i>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-collapse notika-accrodion-cus">
                                <div class="panel-heading" style="background: #F6F8FA"  role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-two" aria-expanded="false">
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
                                <div class="panel-heading" style="background: #F6F8FA"  role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-three" aria-expanded="false">
                                            Cambiar farolas
                                        </a>
                                        
                                    </h4>
                                </div>
                                <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Cambiar todas las farolas</p>

                                        <div class="text-right mt-2">
                                            <a href="#">
                                                <i class="lni-image"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-list sm-res-mg-t-30">
                    <div class="contact-win">
                        <div class="contact-img ml-auto">
                            <!-- <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" /> -->
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="contact-ctn" style="margin-top: -40px">
                        <div class="contact-ad-hd">
                            <h2>John Deo</h2>
                            <p class="ctn-ads">Área contaduria</p>
                        </div>
                        <h2>Actividades:</h2>
                    </div>

                    <div class="accordion-stn">
                        <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist"
                            aria-multiselectable="true">
                            <div class="panel panel-collapse notika-accrodion-cus">
                                <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-nine" aria-expanded="true">
                                            Limpiar los baños
                                        </a>
                                        
                                    </h4>
                                </div>
                                <div id="accordionGreen-nine" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Limpiar los baños del piso 2</p>
                                        
                                        <div class="text-right mt-2">
                                            <a href="#">
                                            <i class="lni-files"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-collapse notika-accrodion-cus">
                                <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-eight" aria-expanded="false">
                                            Podar el jardín
                                        </a>
                                        
                                    </h4>
                                </div>
                                <div id="accordionGreen-eight" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Podar todas las matas del jardín principal.</p>

                                        <div class="text-right mt-2">
                                            <a href="#">
                                            <i class="lni-image"></i>
                                            <i class="lni-comment-alt"></i>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-collapse notika-accrodion-cus">
                                <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-seven" aria-expanded="false">
                                            Cambiar farolas
                                        </a>
                                        
                                    </h4>
                                </div>
                                <div id="accordionGreen-seven" class="collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p>Cambiar todas las farolas</p>

                                        <div class="text-right mt-2">
                                            <a href="#">
                                            <i class="lni-comment-reply"></i>
                                            </a>
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
