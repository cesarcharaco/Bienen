@extends('layouts.appLayout')
@section('css')
<style>
    .timeline{position:relative;margin:0 0 30px 0;padding:0;list-style:none}.timeline:before{content:'';position:absolute;top:0;bottom:0;width:4px;background:#ddd;left:31px;margin:0;border-radius:2px}.timeline>li{position:relative;margin-right:10px;margin-bottom:15px}.timeline>li:before,.timeline>li:after{content:" ";display:table}.timeline>li:after{clear:both}.timeline>li>.timeline-item{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1);border-radius:3px;margin-top:0;background:#fff;color:#444;margin-left:60px;margin-right:15px;padding:0;position:relative}.timeline>li>.timeline-item>.time{color:#999;float:right;padding:10px;font-size:12px}.timeline>li>.timeline-item>.timeline-header{margin:0;color:#555;border-bottom:1px solid #f4f4f4;padding:10px;font-size:16px;line-height:1.1}.timeline>li>.timeline-item>.timeline-header>a{font-weight:600}.timeline>li>.timeline-item>.timeline-body,.timeline>li>.timeline-item>.timeline-footer{padding:10px}.timeline>li>.fa,.timeline>li>.glyphicon,.timeline>li>.ion{width:30px;height:30px;font-size:15px;line-height:30px;position:absolute;color:#666;background:#d2d6de;border-radius:50%;text-align:center;left:18px;top:0}.timeline>.time-label>span{font-weight:600;padding:5px;display:inline-block;background-color:#fff;border-radius:4px}.timeline-inverse>li>.timeline-item{background:#f0f0f0;border:1px solid #ddd;-webkit-box-shadow:none;box-shadow:none}.timeline-inverse>li>.timeline-item>.timeline-header{border-bottom-color:#ddd}

        .bg-red,.bg-yellow,.bg-aqua,.bg-blue,.bg-light-blue,.bg-green,.bg-navy,.bg-teal,.bg-olive,.bg-lime,.bg-orange,.bg-fuchsia,.bg-purple,.bg-maroon,.bg-black,.bg-red-active,.bg-yellow-active,.bg-aqua-active,.bg-blue-active,.bg-light-blue-active,.bg-green-active,.bg-navy-active,.bg-teal-active,.bg-olive-active,.bg-lime-active,.bg-orange-active,.bg-fuchsia-active,.bg-purple-active,.bg-maroon-active,.bg-black-active,.callout.callout-danger,.callout.callout-warning,.callout.callout-info,.callout.callout-success,.alert-success,.alert-danger,.alert-error,.alert-warning,.alert-info,.label-danger,.label-info,.label-warning,.label-primary,.label-success,.modal-primary .modal-body,.modal-primary .modal-header,.modal-primary .modal-footer,.modal-warning .modal-body,.modal-warning .modal-header,.modal-warning .modal-footer,.modal-info .modal-body,.modal-info .modal-header,.modal-info .modal-footer,.modal-success .modal-body,.modal-success .modal-header,.modal-success .modal-footer,.modal-danger .modal-body,.modal-danger .modal-header,.modal-danger .modal-footer{color:#fff !important}.bg-gray{color:#000;background-color:#d2d6de !important}.bg-gray-light{background-color:#f7f7f7}.bg-black{background-color:#111 !important}.bg-red,.callout.callout-danger,.alert-danger,.alert-error,.label-danger,.modal-danger .modal-body{background-color:#dd4b39 !important}.bg-yellow,.callout.callout-warning,.alert-warning,.label-warning,.modal-warning .modal-body{background-color:#f39c12 !important}.bg-aqua,.callout.callout-info,.alert-info,.label-info,.modal-info .modal-body{background-color:#00c0ef !important}.bg-blue{background-color:#0073b7 !important}.bg-light-blue,.label-primary,.modal-primary .modal-body{background-color:#3c8dbc !important}.bg-green,.callout.callout-success,.alert-success,.label-success,.modal-success .modal-body{background-color:#00a65a !important}.bg-navy{background-color:#001F3F !important}.bg-teal{background-color:#39CCCC !important}.bg-olive{background-color:#3D9970 !important}.bg-lime{background-color:#01FF70 !important}.bg-orange{background-color:#FF851B !important}.bg-fuchsia{background-color:#F012BE !important}.bg-purple{background-color:#605ca8 !important}.bg-maroon{background-color:#D81B60 !important}.bg-gray-active{color:#000;background-color:#b5bbc8 !important}.bg-black-active{background-color:#000 !important}.bg-red-active,.modal-danger .modal-header,.modal-danger .modal-footer{background-color:#d33724 !important}.bg-yellow-active,.modal-warning .modal-header,.modal-warning .modal-footer{background-color:#db8b0b !important}.bg-aqua-active,.modal-info .modal-header,.modal-info .modal-footer{background-color:#00a7d0 !important}.bg-blue-active{background-color:#005384 !important}.bg-light-blue-active,.modal-primary .modal-header,.modal-primary .modal-footer{background-color:#357ca5 !important}.bg-green-active,.modal-success .modal-header,.modal-success .modal-footer{background-color:#008d4c !important}.bg-navy-active{background-color:#001a35 !important}.bg-teal-active{background-color:#30bbbb !important}.bg-olive-active{background-color:#368763 !important}.bg-lime-active{background-color:#00e765 !important}.bg-orange-active{background-color:#ff7701 !important}.bg-fuchsia-active{background-color:#db0ead !important}.bg-purple-active{background-color:#555299 !important}.bg-maroon-active{background-color:#ca195a !important}
    .lista {
        list-style-image: url("../../assets/images/check2.png");
        list-style-position: inside;
        margin-bottom: 5px;
        font-size: 14px;
    }
    .lista li {

    }

    .scrollbar {
height: 500px;
width: 100%;
background: #fff;
overflow-y: scroll;
margin-bottom: 25px;
}
.force-overflow {
min-height: 450px;
}

.scrollbar-primary::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-primary::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #4285F4; }

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
    @if(\Auth::User()->tipo_user!="Empleado")
    <div class="container">
        <!-- Start tabs area-->
        <div class="tabs-info-area">
            <div class="container">
                @include('flash::message')
                <div class="row" style="margin-left: -30px; margin-right:0px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget-tabs-int">
                            <div class="tab-hd">
                                <h2>Dashboard</h2>
                            </div>
                            <div class="widget-tabs-list">
                                <ul class="nav nav-tabs tab-nav-left">
                                    <li class="active"><a class="active" data-toggle="tab" href="#novedades">Novedades</a></li>
                                    <li><a data-toggle="tab" href="#muro">Muro</a></li>
                                    <li><a data-toggle="tab" href="#pizarra">Pizarra</a></li>
                                    <!-- <li><a data-toggle="tab" href="#actividades">Resumen de actividades</a></li> -->
                                </ul>
                                <div class="tab-content tab-custom-st">
                                    <div id="novedades" class="tab-pane fade in active">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="add-todo-list notika-shadow ">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Novedades</h2>

                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            <div class="todoapp" id="todoapp" class="overflow-auto">

                                                                <div class="scrollbar scrollbar-primary">
                                                                    <ul class="timeline">
                                                                            <?php $contador=0;$contador2=0;$contador3=0;$contador4=0; ?>

                                                                        @foreach($novedades as $key)


                                                                        <!-- timeline time label -->
                                                                        <li class="time-label">
                                                                            
                                                                            @foreach($fechaNove as $key2)
                                                                                
                                                                                @if($key->fecha == $key2->fecha && $contador==0)
                                                                                        <span class="bg-blue">{{$key->fecha}}</span>
                                                                                        <?php $contador++; ?>
                                                                                @elseif($key->fecha == $fecha2 && $contador2==0)
                                                                                        <span class="bg-red" style="background-color: #D93A32; color: white;">{{$key->fecha}}</span>
                                                                                        <?php $contador2++; ?>
                                                                                @elseif($key->fecha == $fecha3 && $contador3==0)
                                                                                        <span class="bg-red" style="background-color: #D93A32; color: white;">{{$key->fecha}}</span>
                                                                                        <?php $contador3++; ?>
                                                                                @elseif($key->fecha == $fecha4 && $contador4==0)
                                                                                        <span class="bg-red" style="background-color: #D93A32; color: white;">{{$key->fecha}}</span>
                                                                                        <?php $contador4++; ?>
                                                                                @else
                                                                                    
                                                                                    
                                                                                @endif
                                                                            @endforeach()
                                                                            
                                                                        </li>
                                                                        <!-- /.timeline-label -->

                                                                        <!----------------- TIPO=EICHE ---------------------->
                                                                        @if($key->tipo == 'EICHE')
                                                                            <!-- timeline item -->
                                                                            <li>
                                                                                <!-- timeline icon -->
                                                                                <i class="fa fa-code bg-blue"></i>
                                                                                <div class="timeline-item">
                                                                                    

                                                                                    <h3 class="timeline-header"><a href="#">EICHE</a> {{$key->titulo}}</h3>

                                                                                    <div class="timeline-body">
                                                                                        {{$key->novedad}}
                                                                                    </div>

                                                                                    <div class="timeline-footer">
                                                                                        
                                                                                        @if(\Auth::user()->superUser == 'Eiche')
                                                                                            {!! Form::open(['route' => ['eliminar_novedades'],'method' => 'post']) !!}
                                                                                                <input type="hidden" name="id_novedad" value="{{$key->id}}">
                                                                                                <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                                                            {!! Form::close() !!}
                                                                                            <a href="#" data-toggle="modal" data-target="#myModaltwo"></a>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <!-- END timeline item -->
                                                                        @elseif($key->tipo == 'nuevo_user')

                                                                            <li>
                                                                              <i class="fa fa-bell bg-green"></i>

                                                                              <div class="timeline-item">
                                                                                <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                <h3 class="timeline-header no-border"> El empleado <a href="#">{{$key->usuario->name}}</a> Ha sido registrado como nuevo usuario de forma exitosa! </h3>

                                                                                <div class="timeline-footer">
                                                                                        
                                                                                        @if(\Auth::user()->tipo_user == 'Admin')
                                                                                            {!! Form::open(['route' => ['eliminar_novedades'],'method' => 'post']) !!}
                                                                                                <input type="hidden" name="id_novedad" value="{{$key->id}}">
                                                                                                <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                                                            {!! Form::close() !!}
                                                                                            <a href="#" data-toggle="modal" data-target="#myModaltwo"></a>
                                                                                        @endif
                                                                                    </div>

                                                                              </div>
                                                                            </li>

                                                                        @elseif($key->tipo == 'muro')

                                                                            <li>
                                                                              <i class="fa fa-comments bg-yellow"></i>

                                                                              <div class="timeline-item">
                                                                                <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                <h3 class="timeline-header"><a href="#">{{$key->usuario->name}}</a> Ha comentado en el muro de Bienen</h3>

                                                                                <!-- <div class="timeline-body">
                                                                                    
                                                                                </div> -->
                                                                                 @if(\Auth::user()->tipo_user == 'Admin')
                                                                                    {!! Form::open(['route' => ['eliminar_novedades'],'method' => 'post']) !!}
                                                                                        <input type="hidden" name="id_novedad" value="{{$key->id}}">
                                                                                        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                                                    {!! Form::close() !!}
                                                                                    <a href="#" data-toggle="modal" data-target="#myModaltwo"></a>
                                                                                @endif
                                                                              </div>
                                                                            </li>

                                                                            <!-- timeline item -->
                                                                        @elseif($key->tipo == 'actividad')
                                                                            <li>
                                                                                <!-- timeline icon -->
                                                                                <i class="fa fa-suitcase bg-aqua"></i>
                                                                                <div class="timeline-item">
                                                                                    <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                    <h3 class="timeline-header"><a href="#">Actividades</a> </h3>

                                                                                    <div class="timeline-body">
                                                                                        <h5>El usuario <a href="#">{{$key->usuario->name}}</a> ha completado la actividad <a href="#">{{$key->novedad}}</a> de forma exitosa!</h5>
                                                                                    </div>

                                                                                     @if(\Auth::user()->tipo_user == 'Admin')
                                                                                        {!! Form::open(['route' => ['eliminar_novedades'],'method' => 'post']) !!}
                                                                                            <input type="hidden" name="id_novedad" value="{{$key->id}}">
                                                                                            <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                                                        {!! Form::close() !!}
                                                                                        <a href="#" data-toggle="modal" data-target="#myModaltwo"></a>
                                                                                    @endif
                                                                                </div>
                                                                            </li>
                                                                            <!-- END timeline item -->
                                                                        @else
                                                                            <li>
                                                                              <i class="fa fa-bell bg-green"></i>

                                                                              <div class="timeline-item">
                                                                                <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                <h3 class="timeline-header no-border">{{$key->novedad}}</h3>

                                                                                 @if(\Auth::user()->tipo_user == 'Admin')
                                                                                    {!! Form::open(['route' => ['eliminar_novedades'],'method' => 'post']) !!}
                                                                                        <input type="hidden" name="id_novedad" value="{{$key->id}}">
                                                                                        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                                                    {!! Form::close() !!}
                                                                                    <a href="#" data-toggle="modal" data-target="#myModaltwo"></a>
                                                                                @endif
                                                                              </div>
                                                                            </li>
                                                                        @endif
                                                                        @endforeach()
                                                                        </ul>
                                                                        
                                                                </div>

                                                                @if(\Auth::user()->superUser == 'Eiche')
                                                                    <h3><a href="#">Transcribir nuevo mensaje EICHE</a></h3>
                                                                    <hr>
                                                                    {!! Form::open(['route' => 'novedades.store','method' => 'post']) !!}
                                                                        <div class="form-group">
                                                                            <input type="text" name="titulo" placeholder="Título del mensaje" class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="novedad" placeholder="Nuevo mensaje EICHE"></textarea>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary" style="width: 100%;">Enviar</button>
                                                                    {!! Form::close() !!}
                                                                @endif()

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="muro" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Muro de comentarios</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            <div class="chat-conversation">
                                                                <div class="widgets-chat-scrollbar">
                                                                    <ul class="conversation-list">
                                                                        @foreach($muro as $key)
                                                                        <li class="clearfix">
                                                                            <div class="chat-avatar">
                                                                                <img src="{{ asset('assets/img/post/3.jpg') }}" alt="male">
                                                                                <i>{{$key->hora}}</i>
                                                                            </div>
                                                                            <div class="conversation-text">
                                                                                <div class="ctext-wrap" style="width: 100% !important;">
                                                                                    <i>{{$key->empleado->nombres}} | {{ date('d-m-Y', strtotime($key->fecha)) }} @if($key->id_empleado==\Auth::User()->id)<a class="btn btn-danger btn-icon-notika btn-xs pull-right" title="Eliminar comentario" href="{{ route('muro.destroy', $key->id) }}"><i class="notika-icon notika-close" style="color: white;"></i></a>@endif</i>
                                                                                    <p>
                                                                                        {{$key->comentario}}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                <div class="chat-widget-input">
                                                                    <form action="{{ route('muro.store') }}" method="POST" data-parsley-validate autocomplete="off">
                                                                    @csrf
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">
                                                                                <div class="form-group todoflex">
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text" id="comentario" name="comentario" class="form-control" placeholder="Escriba un comentario..." required="required">
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <button class="btn-primary btn-md btn-block btn notika-add-todo" type="submit" id="">Enviar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pizarra" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="add-todo-list notika-shadow ">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Pizarra - Notas</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            <div class="todoapp">
                                                                <form action="{{ route('notas.eliminar') }}" method="POST">
                                                                    @csrf

                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <h4 id="todo-message"> {{$num_notas}} notas</h4>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="notika-todo-btn">
                                                                                <button type="submit" class="pull-right btn btn-primary btn-sm" id="">Eliminar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="notika-todo-scrollbar">
                                                                        <ul class="list-group no-margn todo-list" id="">
                                                                            @foreach($notas as $item)
                                                                            <li class="list-group-item">
                                                                                <div class="checkbox checkbox-primary">
                                                                                    <input class="todo-done" id="{{$item->id}}" type="checkbox" name="notas[]" value="{{$item->id}}">
                                                                                    <label for="{{$item->id}}">{{$item->notas}}</label>
                                                                                </div>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </form>
                                                                <form action="{{ route('notas.store') }}" method="POST" data-parsley-validate autocomplete="off">
                                                                    @csrf
                                                                    <div id="todo-form">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 todo-inputbar">
                                                                                <div class="form-group todoflex">
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text" id="nota" name="nota" class="form-control" placeholder="Agregar una nota nueva en la pizarra..." required="required">
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <button class="btn-primary btn-md btn-block btn notika-add-todo" type="submit" id="">Agregar nota</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="actividades" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="add-todo-list notika-shadow ">
                                                        <div class="realtime-ctn">
                                                            <div class="realtime-title">
                                                                <h2>Actividades - Resúmen</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-box">
                                                            <div class="todoapp" id="todoapp" class="overflow-auto">
                                                                <div class="scrollbar scrollbar-primary">
                                                                    <?php $i=1; ?>
                                                                    @foreach($actividadesProceso as $key)
                                                                        <p>imprimiendo</p>

                                                                    @endforeach
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
            </div>
        </div>
        <!-- End tabs area-->
    </div>
    @endif

<div class="contact-area">
    @if(\Auth::User()->tipo_user=="Empleado")
        <div class="container">
            <!-- Start tabs area-->
            <div class="tabs-info-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget-tabs-int">
                                <div class="tab-hd">
                                    <h2>Dashboard</h2>
                                </div>
                                <div class="widget-tabs-list">
                                    <ul class="nav nav-tabs tab-nav-left">
                                        <li class="active"><a class="active" data-toggle="tab" href="#novedades">Novedades</a></li>
                                        <li><a data-toggle="tab" href="#muro">Muro</a></li>
                                        <li><a data-toggle="tab" href="#pizarra">Pizarra</a></li>
                                        <!-- <li><a data-toggle="tab" href="#actividades">Resumen de actividades</a></li> -->
                                    </ul>
                                    <div class="tab-content tab-custom-st">
                                        <div id="novedades" class="tab-pane fade in active">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="add-todo-list notika-shadow ">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Novedades</h2>

                                                                </div>
                                                            </div>
                                                            <div class="card-box">
                                                                <div class="todoapp" id="todoapp" class="overflow-auto">

                                                                    <div class="scrollbar scrollbar-primary">
                                                                        <ul class="timeline">
                                                                                <?php $contador=0; ?>
                                                                            @foreach($novedades as $key)


                                                                            <!-- timeline time label -->
                                                                            <li class="time-label">
                                                                                
                                                                                @foreach($fechaNove as $key2)
                                                                                    
                                                                                    @if($key->fecha == $key2->fecha && $contador==0)
                                                                                        @if($key->fecha == date("Y-m-d"))
                                                                                            <span class="bg-blue">{{$key->fecha}}</span>
                                                                                            <?php $contador++; ?>
                                                                                        @endif()
                                                                                    @elseif($key->fecha != $key2->fecha && $contador!=0)
                                                                                            <span class="bg-red" style="background-color: #D93A32; color: white;">{{$key->fecha}}</span>
                                                                                    @else
                                                                                        
                                                                                        
                                                                                    @endif
                                                                                @endforeach()
                                                                                
                                                                            </li>
                                                                            <!-- /.timeline-label -->

                                                                            <!----------------- TIPO=EICHE ---------------------->
                                                                            @if($key->tipo == 'EICHE')
                                                                                <!-- timeline item -->
                                                                                <li>
                                                                                    <!-- timeline icon -->
                                                                                    <i class="fa fa-code bg-blue"></i>
                                                                                    <div class="timeline-item">
                                                                                        <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                        <h3 class="timeline-header"><a href="#">Administradores EICHE</a> {{$key->titulo}}</h3>

                                                                                        <div class="timeline-body">
                                                                                            {{$key->novedad}}
                                                                                        </div>

                                                                                        <div class="timeline-footer">
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- END timeline item -->
                                                                            @elseif($key->tipo == 'nuevo_user')

                                                                                <li>
                                                                                  <i class="fa fa-bell bg-green"></i>

                                                                                  <div class="timeline-item">
                                                                                    <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                    <h3 class="timeline-header no-border"> El usuario terreno <a href="#">{{$key->usuario->name}}</a> Ha sido registrado como nuevo usuario de forma exitosa! </h3>
                                                                                  </div>
                                                                                </li>

                                                                            @elseif($key->tipo == 'muro')

                                                                                <li>
                                                                                  <i class="fa fa-comments bg-yellow"></i>

                                                                                  <div class="timeline-item">
                                                                                    <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                    <h3 class="timeline-header"><a href="#">{{$key->usuario->empleado->nombres}}</a> Ha comentado en el muro de Bienen</h3>

                                                                                    <!-- <div class="timeline-body">
                                                                                        
                                                                                    </div> -->
                                                                                    
                                                                                  </div>
                                                                                </li>

                                                                                <!-- timeline item -->
                                                                            @elseif($key->tipo == 'actividad')
                                                                                <li>
                                                                                    <!-- timeline icon -->
                                                                                    <i class="fa fa-suitcase bg-aqua"></i>
                                                                                    <div class="timeline-item">
                                                                                        <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                        <h3 class="timeline-header"><a href="#">Actividades</a> </h3>

                                                                                        <div class="timeline-body">
                                                                                            <h5>El usuario <a href="#">{{$key->usuario->name}}</a> ha completado la actividad <a href="#">{{$key->novedad}}</a> de forma exitosa!</h5>
                                                                                        </div>

                                                                                        <div class="timeline-footer">
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <!-- END timeline item -->
                                                                            @else
                                                                                <li>
                                                                                  <i class="fa fa-bell bg-green"></i>

                                                                                  <div class="timeline-item">
                                                                                    <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                    <h3 class="timeline-header no-border">{{$key->novedad}}</h3>
                                                                                  </div>
                                                                                </li>
                                                                            @endif
                                                                            @endforeach()
                                                                            </ul>
                                                                            
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="muro" class="tab-pane fade">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Muro de comentarios</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-box">
                                                                <div class="chat-conversation">
                                                                    <div class="widgets-chat-scrollbar">
                                                                        <ul class="conversation-list">
                                                                            @foreach($muro as $key)
                                                                            <li class="clearfix">
                                                                                <div class="chat-avatar">
                                                                                    <img src="{{ asset('assets/img/post/3.jpg') }}" alt="male">
                                                                                    <i>{{$key->hora}}</i>
                                                                                </div>
                                                                                <div class="conversation-text">
                                                                                    <div class="ctext-wrap" style="width: 100% !important;">
                                                                                        <i>{{$key->empleado->nombres}} | {{ date('d-m-Y', strtotime($key->fecha)) }} @if($key->id_empleado==\Auth::User()->id)<a class="btn btn-danger btn-icon-notika btn-xs pull-right" title="Eliminar comentario" href="{{ route('muro.destroy', $key->id) }}"><i class="notika-icon notika-close" style="color: white;"></i></a>@endif</i>
                                                                                        <p>
                                                                                            {{$key->comentario}}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    <div class="chat-widget-input">
                                                                        <form action="{{ route('muro.store') }}" method="POST" data-parsley-validate autocomplete="off">
                                                                        @csrf
                                                                            <div class="row">
                                                                                <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">
                                                                                    <div class="form-group todoflex">
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" id="comentario" name="comentario" class="form-control" placeholder="Escriba un comentario..." required="required">
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <button class="btn-primary btn-md btn-block btn notika-add-todo" type="submit" id="">Enviar</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pizarra" class="tab-pane fade">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="add-todo-list notika-shadow ">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Pizarra - Notas</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-box">
                                                                <div class="todoapp">
                                                                    <form action="{{ route('notas.eliminar') }}" method="POST">
                                                                        @csrf

                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <h4 id="todo-message"> {{$num_notas}} notas</h4>
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="notika-todo-btn">
                                                                                    <button type="submit" class="pull-right btn btn-primary btn-sm" id="">Eliminar</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="notika-todo-scrollbar">
                                                                            <ul class="list-group no-margn todo-list" id="">
                                                                                @foreach($notas as $item)
                                                                                <li class="list-group-item">
                                                                                    <div class="checkbox checkbox-primary">
                                                                                        <input class="todo-done" id="{{$item->id}}" type="checkbox" name="notas[]" value="{{$item->id}}">
                                                                                        <label for="{{$item->id}}">{{$item->notas}}</label>
                                                                                    </div>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </form>
                                                                    <form action="{{ route('notas.store') }}" method="POST" data-parsley-validate autocomplete="off">
                                                                        @csrf
                                                                        <div id="todo-form">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 todo-inputbar">
                                                                                    <div class="form-group todoflex">
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" id="nota" name="nota" class="form-control" placeholder="Agregar una nota nueva en la pizarra..." required="required">
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <button class="btn-primary btn-md btn-block btn notika-add-todo" type="submit" id="">Agregar nota</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="actividades" class="tab-pane fade">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="add-todo-list notika-shadow ">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Actividades - Resúmen</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-box">
                                                                <div class="todoapp" id="todoapp" class="overflow-auto">
                                                                    <div class="scrollbar scrollbar-primary">
                                                                        <?php $i=1; ?>
                                                                        @foreach($actividadesProceso as $key)
                                                                            <p>imprimiendo</p>

                                                                        @endforeach
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
                </div>
            </div>
            <!-- End tabs area-->
        </div>
    @endif  
    @if(\Auth::User()->tipo_user=="Admin de Empleado")
        <div class="container">
            <!-- Start tabs area-->
            <div class="tabs-info-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget-tabs-int">
                                <div class="tab-hd">
                                    <h2>Dashboard</h2>
                                </div>
                                <div class="widget-tabs-list">
                                    <ul class="nav nav-tabs tab-nav-left">
                                        <li class="active"><a class="active" data-toggle="tab" href="#novedades">Novedades</a></li>
                                        <li><a data-toggle="tab" href="#muro">Muro</a></li>
                                        <li><a data-toggle="tab" href="#pizarra">Pizarra</a></li>
                                        <!-- <li><a data-toggle="tab" href="#actividades">Resumen de actividades</a></li> -->
                                    </ul>
                                    <div class="tab-content tab-custom-st">
                                        <div id="novedades" class="tab-pane fade in active">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="add-todo-list notika-shadow ">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Novedades</h2>

                                                                </div>
                                                            </div>
                                                                <div class="card-box">
                                                                <div class="todoapp" id="todoapp" class="overflow-auto">

                                                                <div class="scrollbar scrollbar-primary">
                                                                    <ul class="timeline">
                                                                            <?php $contador=0; ?>
                                                                        @foreach($novedades as $key)


                                                                        <!-- timeline time label -->
                                                                        <li class="time-label">
                                                                            
                                                                            @foreach($fechaNove as $key2)
                                                                                
                                                                                @if($key->fecha == $key2->fecha && $contador==0)
                                                                                    @if($key->fecha == date("Y-m-d"))
                                                                                        <span class="bg-blue">{{$key->fecha}}</span>
                                                                                        <?php $contador++; ?>
                                                                                    @endif()
                                                                                @elseif($key->fecha != $key2->fecha && $contador!=0)
                                                                                        <span class="bg-red" style="background-color: #D93A32; color: white;">{{$key->fecha}}</span>
                                                                                @else
                                                                                    
                                                                                    
                                                                                @endif
                                                                            @endforeach()
                                                                            
                                                                        </li>
                                                                        <!-- /.timeline-label -->

                                                                        <!----------------- TIPO=EICHE ---------------------->
                                                                        @if($key->tipo == 'EICHE')
                                                                            <!-- timeline item -->
                                                                            <li>
                                                                                <!-- timeline icon -->
                                                                                <i class="fa fa-code bg-blue"></i>
                                                                                <div class="timeline-item">
                                                                                    <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                    <h3 class="timeline-header"><a href="#">Administradores EICHE</a> {{$key->titulo}}</h3>

                                                                                    <div class="timeline-body">
                                                                                        {{$key->novedad}}
                                                                                    </div>

                                                                                    <div class="timeline-footer">
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <!-- END timeline item -->
                                                                        @elseif($key->tipo == 'nuevo_user')

                                                                            <li>
                                                                              <i class="fa fa-bell bg-green"></i>

                                                                              <div class="timeline-item">
                                                                                <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                <h3 class="timeline-header no-border"> El empleado <a href="#">{{$key->usuario->name}}</a> Ha sido registrado como nuevo usuario de forma exitosa! </h3>
                                                                              </div>
                                                                            </li>

                                                                        @elseif($key->tipo == 'muro')

                                                                            <li>
                                                                              <i class="fa fa-comments bg-yellow"></i>

                                                                              <div class="timeline-item">
                                                                                <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                <h3 class="timeline-header"><a href="#">{{$key->usuario->empleado->nombres}}</a> Ha comentado en el muro de Bienen</h3>

                                                                                <!-- <div class="timeline-body">
                                                                                    
                                                                                </div> -->
                                                                                
                                                                              </div>
                                                                            </li>

                                                                            <!-- timeline item -->
                                                                        @elseif($key->tipo == 'actividad')
                                                                            <li>
                                                                                <!-- timeline icon -->
                                                                                <i class="fa fa-suitcase bg-aqua"></i>
                                                                                <div class="timeline-item">
                                                                                    <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                    <h3 class="timeline-header"><a href="#">Actividades</a> </h3>

                                                                                    <div class="timeline-body">
                                                                                        <h5>El usuario <a href="#">{{$key->usuario->name}}</a> ha completado la actividad <a href="#">{{$key->novedad}}</a> de forma exitosa!</h5>
                                                                                    </div>

                                                                                    <div class="timeline-footer">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <!-- END timeline item -->
                                                                        @else
                                                                            <li>
                                                                              <i class="fa fa-bell bg-green"></i>

                                                                              <div class="timeline-item">
                                                                                <span class="time"><i class="fa fa-clock-o"></i> {{$key->hora}}</span>

                                                                                <h3 class="timeline-header no-border">{{$key->novedad}}</h3>
                                                                              </div>
                                                                            </li>
                                                                        @endif
                                                                        @endforeach()
                                                                        </ul>
                                                                        
                                                                </div>

                                                                @if(\Auth::user()->superUser == 'Eiche')
                                                                    <h3><a href="#">Transcribir nuevo mensaje EICHE</a></h3>
                                                                    <hr>
                                                                    {!! Form::open(['route' => 'novedades.store','method' => 'post']) !!}
                                                                        <div class="form-group">
                                                                            <input type="text" name="titulo" placeholder="Título del mensaje" class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="novedad" placeholder="Nuevo mensaje EICHE"></textarea>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary" style="width: 100%;">Enviar</button>
                                                                    {!! Form::close() !!}
                                                                @endif()

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="muro" class="tab-pane fade">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="notika-chat-list notika-shadow tb-res-ds-n dk-res-ds">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Muro de comentarios</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-box">
                                                                <div class="chat-conversation">
                                                                    <div class="widgets-chat-scrollbar">
                                                                        <ul class="conversation-list">
                                                                            @foreach($muro as $key)
                                                                            <li class="clearfix">
                                                                                <div class="chat-avatar">
                                                                                    <img src="{{ asset('assets/img/post/3.jpg') }}" alt="male">
                                                                                    <i>{{$key->hora}}</i>
                                                                                </div>
                                                                                <div class="conversation-text">
                                                                                    <div class="ctext-wrap" style="width: 100% !important;">
                                                                                        <i>{{$key->empleado->nombres}} | {{ date('d-m-Y', strtotime($key->fecha)) }} @if($key->id_empleado==\Auth::User()->id)<a class="btn btn-danger btn-icon-notika btn-xs pull-right" title="Eliminar comentario" href="{{ route('muro.destroy', $key->id) }}"><i class="notika-icon notika-close" style="color: white;"></i></a>@endif</i>
                                                                                        <p>
                                                                                            {{$key->comentario}}
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    <div class="chat-widget-input">
                                                                        <form action="{{ route('muro.store') }}" method="POST" data-parsley-validate autocomplete="off">
                                                                        @csrf
                                                                            <div class="row">
                                                                                <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">
                                                                                    <div class="form-group todoflex">
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" id="comentario" name="comentario" class="form-control" placeholder="Escriba un comentario..." required="required">
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <button class="btn-primary btn-md btn-block btn notika-add-todo" type="submit" id="">Enviar</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pizarra" class="tab-pane fade">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="add-todo-list notika-shadow ">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Pizarra - Notas</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-box">
                                                                <div class="todoapp">
                                                                    <form action="{{ route('notas.eliminar') }}" method="POST">
                                                                        @csrf

                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <h4 id="todo-message"> {{$num_notas}} notas</h4>
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="notika-todo-btn">
                                                                                    <button type="submit" class="pull-right btn btn-primary btn-sm" id="">Eliminar</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="notika-todo-scrollbar">
                                                                            <ul class="list-group no-margn todo-list" id="">
                                                                                @foreach($notas as $item)
                                                                                <li class="list-group-item">
                                                                                    <div class="checkbox checkbox-primary">
                                                                                        <input class="todo-done" id="{{$item->id}}" type="checkbox" name="notas[]" value="{{$item->id}}">
                                                                                        <label for="{{$item->id}}">{{$item->notas}}</label>
                                                                                    </div>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </form>
                                                                    <form action="{{ route('notas.store') }}" method="POST" data-parsley-validate autocomplete="off">
                                                                        @csrf
                                                                        <div id="todo-form">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 todo-inputbar">
                                                                                    <div class="form-group todoflex">
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" id="nota" name="nota" class="form-control" placeholder="Agregar una nota nueva en la pizarra..." required="required">
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <button class="btn-primary btn-md btn-block btn notika-add-todo" type="submit" id="">Agregar nota</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="actividades" class="tab-pane fade">
                                            <div class="tab-ctn">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="add-todo-list notika-shadow ">
                                                            <div class="realtime-ctn">
                                                                <div class="realtime-title">
                                                                    <h2>Actividades - Resúmen</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-box">
                                                                <div class="todoapp" id="todoapp" class="overflow-auto">
                                                                    <div class="scrollbar scrollbar-primary">
                                                                        <?php $i=1; ?>
                                                                        @foreach($actividadesProceso as $key)
                                                                            <p>imprimiendo</p>

                                                                        @endforeach
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
                </div>
            </div>
            <!-- End tabs area-->
        </div>
    @endif
</div>


@if(\Auth::User()->tipo_user=="Admin" || \Auth::User()->tipo_user=="Empleado")
    @include('partials.modalActividades')
@endif


<!-- Start Modales -->
<div class="modal animated bounce" id="agregar_actividad" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            {!! Form::open(['route' => 'actividades.asignar','method' => 'post','enctype' => 'Multipart/form-data']) !!}
            <div class="modal-body">
                <h1>Agregar actividad</h1>
                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10 mt-4">
                    <h2>Seleccione la actividad para agregar</h2>
                </div>
                <div class="form-group">
                    <select name="id_actividad_asig" id="actividad_asignar" class="form-control">
                        
                    </select>
                </div>
            </div>
            <input type="hidden" name="id_empleado" id="id_empleado_asignar">
            <div class="modal-footer mt-4">
                <button type="submit" class="btn btn-default">Registrar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="modal fade" id="ModalMensaje" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Registro eliminado con éxito!</h2>

            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
@include('planificacion.modales.eliminar_asignacion')
<!-- End modales -->
@endsection
@section('scripts')
<script>
    function eliminar_asignacion(contenido) {

                var id_actividad=   $('#id_actividad_eliminar').val();
                var id_empleado=    $('#id_empleado_act_eliminar').val();
                var contenido =     $('#contenido').val();
                console.log(id_actividad, id_empleado, contenido);



                $.get('asignaciones/'+id_actividad+'/'+id_empleado+'/eliminar_asignacion',function(data){
                    // console.log(data.length);
                    
                        $("#"+contenido).empty();
                        $('#myModaltre').modal('hide');
                        $('#ModalMensaje').modal();
                    
                });
            }
    function eliminar(id_actividad, id_empleado, contenido) {
        $("#id_actividad_eliminar").val(id_actividad);
        $('#id_empleado_act_eliminar').val(id_empleado);
        $('#contenido').val(contenido);
    }
$( function() {
$("#tipo_busqueda").change( function() {
    if ($(this).val() === "empleado") {
        empleado.value="";
        area.value="";
        $("#mostrar_empleado").removeAttr('style');
        $("#mostrar_area").css('display','none');
        $("#empleado").prop("disabled", false);
        $("#empleado").prop('required', true);
    } else if ($(this).val() === "area"){
        empleado.value="";
        area.value="";
        $("#mostrar_area").removeAttr('style');
        $("#mostrar_empleado").css('display','none');
        $("#empleado").prop("disabled", true);
        $("#area").prop("disabled", false);
        $("#area").prop('required', true);
    } else if ($(this).val() === ""){
        empleado.value="";
        area.value="";
        $("#mostrar_empleado").css('display','none');
        $("#mostrar_area").css('display','none');
    }
});
});
</script>
<script type="text/javascript">

    function modal_actividad(id_actividad,task,fecha_vencimiento,nombres,apellidos,descripcion,duracion_pro,cant_personas,duracion_real,dia,tipo,realizada,elaborado,aprobado,num_contrato,fechas,semana,revision,gerencia,id_area,area1,descripcion_area,ubicacion,observacion1,observacion2,id_empleado,status) {
        
        $("#task").text(task);
        $("#nombres").text(nombres);
        $("#apellidos").text(apellidos);
        $("#fecha_vencimiento").text(fecha_vencimiento);
        $("#descripcion").text(descripcion);
        $("#duracion_pro").text(duracion_pro);
        $("#cant_personas").text(cant_personas);
        $("#duracion_real").text(duracion_real);
        $("#dia").text(dia);
        $("#tipo").text(tipo);
        $("#realizada").text(realizada);
        $("#elaborado").text(elaborado);
        $("#aprobado").text(aprobado);
        $("#num_contrato").text(num_contrato);
        $("#fechas").text(fechas);
        $("#semana").text(semana);
        $("#revision").text(revision);
        $("#gerencia").text(gerencia);
        $("#id_area").text(id_area);
        $("#area1").text(area1);
        $("#descripcion_area").text(descripcion_area);
        $("#ubicacion").text(ubicacion);
        $("#observacion1").text(observacion1);
        $("#observacion2").text(observacion2);
        $("#status").text(status);
        //boton mover al admin
        $("#mover").on('click',function(event){
            $.get("actividades/"+id_actividad+"/mover_admin",function(data){
                $('.row').load('.row');
            });
        });
        //---- fin boton mover al admin
        //para el boton de finalizar
        if (realizada=="Si") {
            console.log(id_empleado);
            $("#duracion_real1").empty();
            $("#boton").empty();
            $("#vacio").empty();
            $("#boton").append('<button type="button" onclick="finalizar(1,'+id_actividad+')" class="btn btn-info">CAMBIAR A NO FINALIZADA</button>');
            $("#duracion_real2").val("");
            $("#duracion_real").empty();
            $("#duracion_real2").css('display','none');
            $("#duracion_real").val("Si");
            if (id_empleado!=1) {
                
            $("#mover").css('display','block');
            $("#mover_emp").css('display','none');

            }else{
                console.log("entro");
                $("#mover").css('display','none');
                $("#mover_emp").css('display','block');
                $("#mover_emp1").css('display','block');
            }
                
        } else {
            $("#vacio").empty();
            $("#duracion_real2").val("");
            $("#duracion_real2").css('display','block');
            
            $("#boton").empty();
            $("#boton").append('<button type="button" onclick="finalizar(0,'+id_actividad+')" class="btn btn-info">FINALIZAR </button>');
            $("#duracion_real").empty();
            $("#duracion_real").val("No");
            $("#mover").css('display','none');
            $("#mover_emp").css('display','none');
        }

        /*if(status=="Finalizada") {
            console.log("status--Fin");
            $("#mover").css('display','none');
        } 
        if(status=="Iniciada") {
            console.log("status--Ini");
            $("#mover_emp").css('display','none');
        }*/

        //-------fin para el boton de finalizar
        
        $.get("/empleados/"+id_area+"/buscar",function (datos) {
            console.log(datos.length);
            if (datos.length>0) {
            $("#id_actividad_mover").val(id_actividad);
                $("#mover_emp1").empty();
                for (var i = 0; i < datos.length; i++) {
                    $("#mover_emp1").append('<option value="'+datos[i].id+'">'+datos[i].apellidos+', '+datos[i].nombres+' RUT: '+datos[i].rut+'</option>');
                }
            }

        });

        //$("#comentarios").text(comentario);
          var fecha = new Date(); //Fecha actual
          var mes = fecha.getMonth()+1; //obteniendo mes
          var dia = fecha.getDate(); //obteniendo dia
          var ano = fecha.getFullYear(); //obteniendo año
          if(dia<10)
            dia='0'+dia; //agrega cero si el menor de 10
          if(mes<10)
            mes='0'+mes //agrega cero si el menor de 10
        var hoy=ano+"-"+mes+"-"+dia;
        if (fecha_vencimiento==hoy) {
            $("#vencimiento").empty();
            $("#vencimiento").append('<span class="label label-warning p-1" data-toggle="tooltip"'+ 
                'data-placement="bottom"'+
                'title="Feha de vencimiento"><i class="lni-alarm-clock"></i>'+
                '<b>'+fecha_vencimiento+'</b></span>');
        } else {
            if (fecha_vencimiento<hoy) {
                $("#vencimiento").empty();
            $("#vencimiento").append('<span class="label label-danger p-1" data-toggle="tooltip"'+ 
                'data-placement="bottom"'+
                'title="Feha de vencimiento"><i class="lni-alarm-clock"></i>'+
                '<b>'+fecha_vencimiento+'</b></span>');
            }
        }
        if (realizada=="Si") {
            $("#boton").empty();
            $("#boton").append('<button type="button" onclick="finalizar(1,'+id_actividad+')" class="btn btn-info">CAMBIAR A NO FINALIZADA</button>');
        } else {
            $("#boton").empty();
            $("#boton").append('<button type="button" onclick="finalizar(0,'+id_actividad+')" class="btn btn-info">FINALIZAR </button>');
        }
        
        if (descripcion=="") {
            $("#descripcion1").empty();
        }
        $("#id_empleado").val(id_empleado);
        //buscando mensajes registrados
        $.get("/actividades/"+id_actividad+"/comentarios",function(data){
            //console.log(data.length);

            if (data.length>0) {
                $("#comentarios").empty();
                for(i=0;i<data.length;i++){
                    $("#comentarios").append('<tr style="border: 0px;">'+
                                            '<td>'+                                    
                                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px; height: 15px;">'+
                                            '<td>'+
                                                '<span id="comentario">'+data[i].comentario+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px;">'+
                                            '<td>'+
                                                '<button class="btn btn-danger btn-xs" '+
                                                ' onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                                            '</td>'+
                                        '</tr>');
                }
            }
        });
    $("#enviar_comentario").on('click',function(e){
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });

        e.preventDefault();
          var comentario = $('textarea#comentario').val();
          var id_usuario = $('#id_usuario').val();
          
          if (comentario=="") {
            $("#error").text("El comentario no puede estar vacio");
          } else {
          $.ajax({
            type: "post",
            url: "actividades/registrar_comentario",
            data: {
                comentario: comentario,
                id_actividad: id_actividad,
                id_usuario: id_usuario,
                id_empleado: id_empleado
            }, success: function (data) {
                    if (data.length>0) {
                $("#comentarios").empty();
                for(i=0;i<data.length;i++){
                    $('textarea#comentario').val("");
                    $("#comentarios").append('<tr style="border: 0px;">'+
                                            '<td>'+                                    
                                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px; height: 15px;">'+
                                            '<td>'+
                                                '<span id="comentario">'+data[i].comentario+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px;">'+
                                            '<td>'+
                                                '<button class="btn btn-danger btn-xs"'+
                                                ' onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                                            '</td>'+
                                        '</tr>');
                }
            }         
            }
          });
        }
    });
    
    //archivos guardados al registrar una actividad
    $.get('actividades/'+id_actividad+'/buscar_archivos',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_archivos").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_archivos").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> <button class="btn btn-danger btn-xs" '+
                    ' onclick="eliminar_archivo('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
            }
        }else{
            $("#mis_archivos").empty();
        }
    });
    //-------------------------------------------------
    //archivos guardados desde el modal
    $.get('actividades_proceso/'+id_actividad+'/buscar_archivos_adjuntos',function(data){
        
        if (data.length>0) {
            $("#mis_archivos_cargados").empty();
            for(var k = 0; k < data.length; k++){
                if(data[k].tipo=="file"){
                $("#mis_archivos_cargados").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_archivos_adjuntos('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }
        }else{
            $("#mis_archivos_cargados").empty();
        }
    });
    //-------------------------------------------------
    //imagenes guardadas al registrar una actividad
    $.get('actividades/'+id_actividad+'/buscar_imagenes',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_imagenes").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_imagenes").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs"'+
                    ' onclick="eliminar_imagen('+data[k].id+')" ><i class="fa fa-trash"></i></button></li></li>');
            }
        }else{
            $("#mis_imagenes").empty();
        }
    });
    //---------------------------------------------
    //imagenes guardadas desde el modal
    $.get('actividades_proceso/'+id_actividad+'/buscar_imagenes_adjuntas',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_imagenes_cargadas").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> <button class="btn btn-danger btn-xs"'+
                    ' onclick="eliminar_imagenes_adjuntas('+data[k].id+')" ><i class="fa fa-trash"></i></button></li></li>');
            }
        }else{
            $("#mis_imagenes_cargadas").empty();
            }
    });
    //---------------------------------------------

    $("#enviar_archivo").on('click',function(e){

        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        e.preventDefault();
          var archivos= $("#archivos").val();
          var id_usuario = $('#id_usuario').val();
          var formulario = new FormData($("#frmB")[0]);
          
          formulario.append('id_empleado', id_empleado);
          formulario.append('id_actividad', id_actividad);
          formulario.append('id_usuario',id_usuario);
          
          //console.log(formulario);
          if (archivos=="") {
            $("#error2").text("El comentario no puede estar vacio");
          } else {
            
          $.ajax({
            type: "post",
            url: "actividades/registrar_archivos",
            data:formulario,
            dataType: 'json',
            processData: false,
            contentType: false ,
            success: function (datos) {
                
            if (datos.length>0) {
                $("#mis_archivos_cargados").empty();
                for(i=0;i<datos.length;i++){
                    $('file#archivos').val("");
                    if(datos[i].tipo=="file"){
                    $("#mis_archivos_cargados").append('<li><a href="{!! asset('"+ datos[i].url +"') !!}">'+datos[i].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_archivos_adjuntos('+datos[i].id+')"><i class="fa fa-trash"></i></button></li>');
                    }
                }
            }else{
                $("#error2").text("No se pudo traer nada");  
            }         
            }
          });
        }
    });
    $("#enviar_imagen").on('click',function(e){

        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        e.preventDefault();
          var imagenes= $("#imagenes").val();
          var id_usuario = $('#id_usuario').val();
          var formulario = new FormData($("#frmC")[0]);
          
          formulario.append('id_empleado', id_empleado);
          formulario.append('id_actividad', id_actividad);
          formulario.append('id_usuario',id_usuario);
          
          
          if (imagenes=="") {
            $("#error3").text("El comentario no puede estar vacio");
          } else {
            
          $.ajax({
            type: "post",
            url: "actividades/registrar_imagenes",
            data:formulario,
            dataType: 'json',
            processData: false,
            contentType: false ,
            success: function (datos) {
                
            if (datos.length>0) {
                $("#mis_imagenes_cargadas").empty();
                for(i=0;i<datos.length;i++){
                    $('file#imagenes').val("");
                    if(datos[i].tipo=="img"){
                    $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ datos[i].url +"') !!}">'+datos[i].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_imagenes_adjuntas('+datos[i].id+')"><i class="fa fa-trash"></i></button></li>');
                    }
                }
            }else{
                $("#error3").text("No se pudo traer nada");  
            }         
            }
          });
        }
    });
    }

    function eliminar_comentario(id_comentario,id_actv_proceso) {
        

        $.get('actividades/'+id_actv_proceso+'/'+id_comentario+'/eliminar_comentario',function(data){
            if (data.length>0) {
                $("#comentarios").empty();
                for(i=0;i<data.length;i++){
                    $("#comentarios").append('<tr style="border: 0px;">'+
                            '<td>'+                                    
                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                            '</td>'+
                        '</tr>'+
                        '<tr style="border: 0px; height: 15px;">'+
                            '<td>'+
                                '<span id="comentario">'+data[i].comentario+'</span>'+
                            '</td>'+
                        '</tr>'+
                        '<tr style="border: 0px;">'+
                            '<td>'+
                                '<button class="btn btn-danger btn-xs" '+
                                'onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                            '</td>'+
                        '</tr>');
                }
            }else{
                $("#comentarios").empty();
            }
        });
    }
    function eliminar_archivo(id_archivo) {
        $.get('actividades/'+id_archivo+'/eliminar_archivos',function(data){
            
            if (data.length>0) {
            $("#mis_archivos").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_archivos").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_archivo('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_archivos").empty();
            }
        });
    }

    function eliminar_imagen(id_archivo) {
        $.get('actividades/'+id_archivo+'/eliminar_archivos',function(data){
            
            if (data.length>0) {
            $("#mis_imagenes").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_imagenes").append('<li><a href="{!! asset('"+ data[k].url +"') !!}" >'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_imagen('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_imagenes").empty();
            }
        });
    }
    function eliminar_archivos_adjuntos(id_archivo) {
        $.get('actividades_proceso/'+id_archivo+'/eliminar_archivos_adjuntos',function(data){
            
            if (data.length>0) {
            $("#mis_archivos_cargados").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_archivos_cargados").append('<li><a'+
                    ' href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+
                    ' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_archivos_adjuntos('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_archivos_cargados").empty();
            }
        });
    }

    function eliminar_imagenes_adjuntas(id_archivo) {
        $.get('actividades_proceso/'+id_archivo+'/eliminar_archivos_adjuntos',function(data){
            
            if (data.length>0) {
            $("#mis_imagenes_cargadas").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_imagenes_adjuntas('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_imagenes_cargadas").empty();
            }
        });
    }
    function finalizar(opcion,id_actividad) {

        if (opcion==0) {
            $("#vacio").empty();
            if ($("#duracion_real2").val()=="") {
                
                $("#vacio").append('<small style="color:red;">Debe ingresar la duración real</small>');
            } else {
                console.log($("#duracion_real2").val());
                var duracion_real=$("#duracion_real2").val();
                $.get('actividades_proceso/'+opcion+'/'+id_actividad+'/'+duracion_real+'/finalizar',function(data){
                    $("#duracion_real1").empty();
                    $("#boton").empty();
                    $("#vacio").empty();
                    $("#boton").append('<button type="button" onclick="finalizar(1,'+id_actividad+')" class="btn btn-info">CAMBIAR A NO FINALIZADA</button>');
                    $("#duracion_real2").val("");
                    $("#duracion_real").empty();
                    $("#duracion_real2").css('display','none');
                    $("#duracion_real").val("Si");
                    $("#mover").css('display','block');
                
            });   
            }
        } else {
            $("#vacio").empty();
            $("#duracion_real2").val("");
            $("#duracion_real2").css('display','block');
            $.get('actividades_proceso/'+opcion+'/'+id_actividad+'/'+duracion_real+'/finalizar',function(data){
            $("#boton").empty();
                    $("#boton").append('<button type="button" onclick="finalizar(0,'+id_actividad+')" class="btn btn-info">FINALIZAR </button>');
            });
            $("#duracion_real").empty();
            $("#duracion_real").val("No");
            $("#mover").css('display','none');
        }
        
    }
    function mostrar_actividades(id_empleado){
        $("#id_empleado_asignar").val(id_empleado);
        $.get('actividades/'+id_empleado+'/sin_realizar',function(data){
            console.log(data.length);
            if (data.length>0) {
                $("#actividad_asignar").empty();
                for (var i = 0; i < data.length; i++) {
                    $("#actividad_asignar").append("<option value='"+data[i].id+"'>"+data[i].task+" - DÍA: "+data[i].dia+" - FECHA: "+data[i].fecha_vencimiento+" - realizada: "+data[i].realizada+"</option>");
                }
            }
        });
    }
</script>


<script>
    $("#tipo1").on('change',function (event) { 
    console.log("entro");
        var tipo1=event.target.value;        
        if (tipo1=="PM02") {
            $("#pm02").removeAttr('style');
            $("#departamentos").css('display','none');
            $("#departamentos option").val(1).attr('selected',true);
                
        }else{
            if (tipo1=="PM03") {
                $("#departamentos").css('display','block');
                $("#departamentos option").val(1).attr('selected',true);
            } else{
                $("#departamentos").css('display','none');
                $("#departamentos option").val(1).attr('selected',true);
            }
            $("#pm02").css('display','none');
            $("#des_actividad").removeAttr('style');

            $("#areas").css('display','block');
            $("#tab2").removeAttr('style');           
              
        }

    });

    $("#id_actividad").on('change',function (event) {
        console.log("act");     
        var id_actividad=event.target.value;
        
        if (id_actividad!=="0") {
            $("#areas").css('display','none');
            //$("#des_actividad").css('display','none');
            $("#des_actividad").empty();
            $("#tab2").css('display','none');
            $("#task1").removeAttr('required');
            $("#cant_personas1").removeAttr('required');
        }else{
            console.log("entra");
            $("#areas").css('display','block');
            $("#tab2").removeAttr('style');
            $("#des_actividad").removeAttr('style');
        }
    });
    function editar_act(id_actividad,dia) {
        
        $("#accion").text('Actualizar');
        
        $("#id_actividad_act").val(id_actividad);
        $.get("/actividades/"+id_actividad+"/edit",function (data) {
                
                //console.log(data[0].tipo);
                //agregando tipo en select
                $("#tipo1").empty();
                switch(data[0].tipo){
                    case 'PM01':
                        $("#tipo1").append('<option value="PM01" selected="selected">PM01</option>');
                        $("#tipo1").append('<option value="PM02">PM02</option>');
                        $("#tipo1").append('<option value="PM03">PM03</option>');
                        $("#tipo1").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM02':
                        $("#tipo1").append('<option value="PM01">PM01</option>');
                        $("#tipo1").append('<option value="PM02" selected="selected">PM02</option>');
                        $("#tipo1").append('<option value="PM03">PM03</option>');
                        $("#tipo1").append('<option value="PM04">PM04</option>');
                    break;
                    case 'PM03':
                        $("#tipo1").append('<option value="PM03" selected="selected">PM03</option>');
                    break;
                    case 'PM04':
                        $("#tipo1").append('<option value="PM01">PM01</option>');
                        $("#tipo1").append('<option value="PM02">PM02</option>');
                        $("#tipo1").append('<option value="PM03">PM03</option>');
                        $("#tipo1").append('<option value="PM04" selected="selected">PM04</option>');
                    break;

                }

                //seleccionando opcion de actividades
            $("#id_actividad option").each(function(){

                if ($(this).text()==data[0].task) {
                
                    $(this).attr("selected",true);
               }
            });
            
                
            $("#observacion1").val(data[0].observacion1);
            $("#observacion2").val(data[0].observacion2);
            $("#id_planificacion").attr('multiple',false);
            $('#id_planificacion').replaceWith($('#id_planificacion').clone().attr('name', 'id_planificacion'));
            
            $("#id_planificacion option").each(function(){

                if ($(this).val()==data[0].id_planificacion) {
                
                    $(this).attr("selected",true);
                }
            });
            $("#id_area option").each(function(){

                if ($(this).val()==data[0].id_area) {
                
                    $(this).attr("selected",true);
                }
            });
            var id_departamento=1;
            $.get("/actividades/"+id_departamento+"/buscar_departamentos",function (data) {
                
                if (data.length>0) {
                    $("#id_departamento").empty();
                    for (var i = 0; i < data.length; i++) {
                        $("#id_departamento").append("<option value='"+data[i].id+"'>"+data[i].departamento+"</option>");
                    }
                }
            });
            $("#id_departamento option").each(function(){

                if ($(this).val()==data[0].id_departamento) {
                
                    $(this).attr("selected",true);
                }
            });
            //campos en caracteristicas
            $("#task1").val(data[0].task);
            $("#descripcion").val(data[0].descripcion);
            $("#duracion_pro").val(data[0].duracion_pro);
            $("#duracion_real").val(data[0].duracion_real);
            $("#cant_personas1").val(data[0].cant_personas);
            

            
            /*$('input:radio[name=dia]').each(function() { 
                
                
                if($('input:radio[name=dia]').is(':checked')) {  
                    $('input:radio[name=dia]').attr('checked', false);
                } else {  
                    $('input:radio[name=dia]').attr('checked', false);
                }
            });*/
//------------------------------------------------------------------DISPLAY RADIO AND NONE CHECK
            $("#area_radio").css('display','block');
                $("#miercoles_r").prop('disabled',false);
                $("#jueves_r").prop('disabled',false);
                $("#viernes_r").prop('disabled',false);
                $("#sabado_r").prop('disabled',false);
                $("#domingo_r").prop('disabled',false);
                $("#lunes_r").prop('disabled',false);
                $("#martes_r").prop('disabled',false);
            $("#area_check").css('display','none');
                $("#mie").prop('disabled',true);
                $("#jue").prop('disabled',true);
                $("#vie").prop('disabled',true);
                $("#sab").prop('disabled',true);
                $("#dom").prop('disabled',true);
                $("#lun").prop('disabled',true);
                $("#mar").prop('disabled',true);
//------FINISH
            if (dia == "Mié") {
                $("#miercoles_r").prop('checked',true);
            }
            if (dia == "Jue") {
                $("#jueves_r").prop('checked',true);
            }
            if (dia == "Vie") {
                $("#viernes_r").prop('checked',true);
            }
            if (dia == "Sáb") {
                $("#sabado_r").prop('checked',true);
            }
            if (dia == "Dom") {
                $("#domingo_r").prop('checked',true);
            }
            if (dia == "Lun") {
                $("#lunes_r").prop('checked',true);
            }
            if (dia == "Mar") {
                $("#martes_r").prop('checked',true);
            }





            if($("#mie").val()==data[0].dia){
                
                $("#mie").prop('checked',true);
            }
            if($("#jue").val()==data[0].dia){
                
                $("#jue").prop('checked',true);
            }
            if($("#vie").val()==data[0].dia){
                
                $("#vie").prop('checked',true);
            }
            if($("#sab").val()==data[0].dia){
                
                $("#sab").prop('checked',true);
            }
            if($("#dom").val()==data[0].dia){
                
                $("#dom").prop('checked',true);
            }
            if($("#lun").val()==data[0].dia){
                
                $("#lun").prop('checked',true);
            }
            if($("#mar").val()==data[0].dia){
                
                $("#mar").prop('checked',true);
            }
            
            //console.log(data[0].dia);

            
            });
            //mostrando archivos cargadas a la actividad
            $.get("/actividades/"+id_actividad+"/mis_archivos",function (data) {
                //console.log(data.length);
                if (data.length!=0) {
                    $("#archivos_cargados").css('display','block');
                    $("#mis_archivos").empty();
                    for (var i = 0; i < data.length; i++) {
                        $("#mis_archivos").append("<li id='archivo'><div class='alert alert-info' role='alert'>"+data[i].nombre+" <a class='btn btn-danger pull-right' onclick='eliminar_archivo("+data[i].id+",1)'><i class='fa fa-trash' style='color:;'></i> Eliminar</a></div></li>");
                    }
                }
            }); 
            //mostrando imágenes cargadas a la actividad
            $.get("/actividades/"+id_actividad+"/mis_imagenes",function (data) {
                //console.log(data.length);
                if (data.length!=0) {
                    $("#imagenes_cargadas").css('display','block');
                    $("#mis_imagenes").empty();
                    for (var i = 0; i < data.length; i++) {
                        //console.log(data[i].url);

                        $("#mis_imagenes").append("<li id='imagen_eliminar'><div class='alert alert-info' role='alert'><img src='{!! asset('"+ data[i].url +"') !!}' height='100px' width='100px'><a class='btn btn-danger pull-right' onclick='eliminar_archivo("+data[i].id+",2)'><i class='fa fa-trash' style='color:;'></i> Eliminar</a></div></li>");
                        //$("#mis_imagenes").append("<li>"+data[i].url+"</li>");
                    }
                }
            });


            
        function cerrar() {
        $('#ModalMensaje').hide();
    } 
}
</script>
@endsection