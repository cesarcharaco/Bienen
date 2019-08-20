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
                                    <div class="mt-2">
                                        <span class="label label-danger p-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Fecha de vencimiento"><i
                                                class="lni-alarm-clock"></i> 8
                                            Agos.</span>
                                        <!-- TOOLTIPS CON ICONOS START -->
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Comentarios"
                                            class="ml-2">
                                            2 <i class="lni-bubble"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Archivos adjuntos" class="ml-2">
                                            4 <i class="lni-paperclip"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Completado"
                                            class="ml-2">
                                            1 <i class="lni-check-mark-circle"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Visto"
                                            class="ml-2">
                                            9 <i class="lni-eye"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Alinear?"
                                            class="ml-2">
                                            3 <i class="lni-text-align-justify"></i>
                                        </a>
                                        <!-- TOOLTIPS CON ICONOS END -->

                                    </div>
                                </div>

                            </div>
                            <div class="panel panel-collapse notika-accrodion-cus">
                                <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-two" aria-expanded="false">
                                            Podar el jardín
                                        </a>

                                    </h4>
                                    <div class="mt-2">
                                        <span class="label label-success p-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Feha de vencimiento"><i
                                                class="lni-alarm-clock"></i> 4
                                            Sep.</span>

                                        <a href="#" class="ml-2">
                                            1 <i class="lni-paperclip"></i>
                                        </a>

                                    </div>
                                </div>

                            </div>
                            <div class="panel panel-collapse notika-accrodion-cus">
                                <div class="panel-heading" style="background: #F6F8FA" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen"
                                            href="#accordionGreen-three" aria-expanded="false">
                                            Cambiar farolas
                                        </a>

                                    </h4>
                                    <div class="mt-2">
                                        <span class="label label-warning p-1" data-toggle="tooltip"
                                            data-placement="bottom" title="Feha de vencimiento"><i
                                                class="lni-alarm-clock"></i> 19
                                            Agos.</span>

                                        <a href="#" class="ml-2" data-toggle="tooltip" data-placement="bottom"
                                            title="Te veo">
                                            5 <i class="lni-eye"></i>
                                        </a>
                                        <a href="#" class="ml-2" data-toggle="tooltip" data-placement="bottom"
                                            title="Listo papá">
                                            1 <i class="lni-check-mark-circle"></i>
                                        </a>

                                    </div>

                                </div>

                            </div>


                            <div class="panel panel-collapse notika-accrodion-cus text-center">
                                <div class="panel-heading" role="tab">

                                    <span id="agregarActividad" style="cursor:pointer">Agregar otra actividad <i class="lni-plus"></i></span>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>





<div class="modal animated bounce" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h1>Agregar actividad</h1>
                                                
                                                
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10 mt-4">
                                    <h2>Seleccione la actividad para agregar</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="actividad" class="selectpicker" data-live-search="true">
											<option>Limpiar los baños - 28/08/2019 - Área administrativa - Departamento General</option>
											<option>Reparar iluminación - 25/08/2019 - Área contaduria - Departamento Ténico</option>
											
										</select>
                                </div>
                           

                                            </div>
                                            <div class="modal-footer mt-4">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Registrar</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

@endsection
