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
									<i class="notika-icon notika-support"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Gerencias</h2>
									<p>Lista de todos las gerencias registradas en el sistema</p>
								</div>
							</div>
						</div>
                        <div>
                            <strong style="float: right; margin-top: 10px; margin-bottom: 5px;">Año laboral actual: {{-- {{ config('session.fecha_actual') }} --}} 
                                @if(session('fecha_actual'))
                                    @php $anio=session('fecha_actual'); @endphp
                                @else
                                    @php $anio=date('Y');
                                        session('fecha_actual',$anio);
                                     @endphp
                                    
                                @endif
                                {{ $anio }}
                            </strong>
                        </div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							<div class="breadcomb-report">
								<a href="{{ route('gerencias.create') }}" data-toggle="tooltip" data-placement="left" title="Registrar una nueva gerencia" class="btn"><i class="lni-user"></i> Registrar gerencia</a>
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
<!-- Data Table area Start-->
<div class="data-table-area">
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
                    @include('flash::message')
                </div>
                <div class="data-table-list">
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gerencia</th>
                                    <th style="text-align: center;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($gerencias as $item)
                                <tr>
                                    <td>{{ $contador++ }}</td>
                                    <td>{{ $item->gerencia }}</td>
                                    <td align="center">
                                        <a href="{{ route('gerencias.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Editar datos de gerencia">
                                            <i class="fa fa-pencil pr-3" style="font-size:20px"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar gerencia"  onclick="eliminar('{{ $item->id }}')" id="eliminar_gerencia">
                                            <i class="fa fa-trash" style="font-size:20px" data-toggle="modal" data-target="#eliminar_gerencia"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            @include('gerencias.modales.eliminar')  
                            </tbody>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    function ModalTwo(){
        $('#eliminar_gerencia').modal('hide');
        $('#eliminar_gerencia').on('hidden', function () {
            $('#claverrot').modal('show')
        });
    }
</script>
<script>
function eliminar(id_gerencia) {
    $("#id_gerencia_eliminar").val(id_gerencia);
}
</script>
@endsection