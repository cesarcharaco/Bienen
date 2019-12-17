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
                                        <i class="notika-icon notika-left-arrow"></i>
                                    </a>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Registrar empleados</h2>
                                    <p>Registra nuevos empleados en el sistema</p>
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
<!-- Invoice area Start-->
    <div class="invoice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="invoice-wrap">
                        <div class="invoice-img">
                            <h3 style="color: #fff;">{{$empleado->nombres}} {{$empleado->apellidos}}</h3>
                            <h4>{{$empleado->email}}</h4>
                        </div>
                        <div class="invoice-hds-pro" style="font-size: 16px;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <div class="comp-tl">
                                        <h2>Datos personales:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <span><b>RUT:</b> {{$empleado->rut}}</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <span><b>Género:</b> {{$empleado->genero}}</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <span><b>Edad:</b> {{$empleado->edad}}</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <span><b>Status:</b> <b class="label label-success">{{$empleado->status}}</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 mt-3">
                                    <div class="comp-tl">
                                        <h2>Datos laborales:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                            <span><b>Licencia de conducir</b></span>
                                            <div class="row">
                                                
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3 mt-3">
                                                <span><b>Fecha de Expedición:</b> {{$empleado->datoslaborales->fechae_licn}}</span>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3 mt-3">
                                                <span><b>Fecha de vencimiento:</b> {{$empleado->datoslaborales->fechav_licn}}</span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <span><b>Áreas:</b></span>
                                            <select name="id_area[]" multiple placeholder="Seleccione..." data-allow-clear="1" disabled="">
                                                @foreach($areas as $key)
                                                    @php $hallado=0; $areas=areas_empleado($empleado->id); @endphp
                                                    @foreach($areas as $k)
                                                        @if($k->id==$key->id)
                                                            @php $hallado++; @endphp
                                                        @endif
                                                    @endforeach
                                                    <option value="{{ $key->id }}" @if($hallado>0) selected="selected" @endif >{{ $key->area }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <span><b>Departamento:</b></span>
                                            <select name="id_departamento[]" id="" class="form-control" multiple placeholder="Seleccione..." data-allow-clear="1" disabled="" ">                  
                                            @foreach($departamentos as $key)
                                                @php $hallado2=0; $departamentos=departamentos_empleado($empleado->id); @endphp
                                                @foreach($areas as $k)
                                                    @if($k->id==$key->id)
                                                        @php $hallado2++; @endphp
                                                    @endif
                                                @endforeach
                                                <option value="{{ $key->id }}"  @if($hallado2>0) selected="selected" @endif >{{ $key->departamento }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 mt-3">
                                    <div class="comp-tl">
                                        <h2>Datos medicos:</h2>
                                    </div>
                                    <span><b>Examenes:</b></span>
                                    <select name="" multiple placeholder="Seleccione..." data-allow-clear="1" disabled="">
                                        @foreach($examenes as $key)
                                            @php $hallado3=0; $examenes=examenes_empleado($empleado->id); @endphp
                                            @foreach($examenes as $k)
                                                @if($k->id==$key->id)
                                                    @php $hallado3++; @endphp
                                                @endif
                                            @endforeach
                                            <option value="{{ $key->id }}" @if($hallado3>0) selected="selected" @endif >{{ $key->area }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                <div class="comp-tl">
                                    <h2>Datos de vacaciones del empleado:</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                                        <div class="row">                                            
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3 mt-3">
                                                <span><b>Fecha de inicio:</b> {{$empleado->datoslaborales->fechai_vac}}</span>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3 mt-3">
                                                <span><b>Fecha final:</b> {{$empleado->datoslaborales->fechaf_vac}}</span>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3 mt-3">
                                                <span><b>Status de vaciones:</b> {{$empleado->datoslaborales->status_vac}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="invoice-sp">
                                    <h3>Curno no daño del año 2019</h3>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Fecha de presentación</th>
                                                <th>Mes</th>
                                                <th>Observación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $contador=1; @endphp
                                            @foreach($empleado->cursonodanio as $key)
                                            <tr>
                                                <td>{{$contador++}}</td>
                                                <td>{{$key->status}}</td>
                                                <td>{{$key->fecha_presentación}}</td>
                                                <td>{{$key->mes}}</td>
                                                <td>{{$key->observacion}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice area End-->
@endsection
@section('scripts')
<script>
    $(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});
</script>
@endsection