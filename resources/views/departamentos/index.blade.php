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
										<h2>Departamentos</h2>
										<p>Lista de todos los departamentos registrados en el sistema</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="{{ route('departamentos.create') }}" data-toggle="tooltip" data-placement="left" title="Registrar un nuevo departamento" class="btn"><i class="lni-user"></i> Registrar departamentos</a>
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
                                        <th>Departamento</th>
                                        <th style="text-align: center;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $contador=1; @endphp
                                @foreach($departamentos as $item )
                                    <tr>
                                        <td>{{ $contador++ }}</td>
                                        <td>{{ $item->departamento }}</td>
                                        <td align="center">
                                            <a href="{{ route('departamentos.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Editar datos de departamento">
                                                <i class="lni-pencil-alt pr-3" style="font-size:20px"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar departamento"  onclick="eliminar('{{ $item->id }}')" id="eliminar_departamento">
                                                <i class="lni-trash" style="font-size:20px" data-toggle="modal" data-target="#eliminar_departamento"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach    
                                    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection
@include('departamentos.modales.eliminar')
@section('scripts')
<script type="text/javascript">
    function ModalTwo(){
        $('#eliminar_departamento').modal('hide');
        $('#eliminar_departamento').on('hidden', function () {
            $('#claverrot').modal('show')
        });
    }
</script>
<script>
function eliminar(id_departamento) {
    $("#id_departamento_eliminar").val(id_departamento);
}
</script>
@endsection