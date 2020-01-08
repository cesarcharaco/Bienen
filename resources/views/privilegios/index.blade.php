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
									<h2>Privilegios</h2>
									<p>Permisos del sistema de cada empleado</p>
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
                                    <th>Empleado</th>
                                    <th>Rut</th>
                                    <th>Tipo de empleado</th>
                                    <th style="text-align: center;">Permisos</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($empleados as $item )
                                <tr>
                                    <td>{{ $contador++ }}</td>
                                    <td>{{ $item->nombres }}, {{ $item->apellidos }}</td>
                                    <td>{{ $item->rut }}</td>
                                    <td>{{ $item->usuario->tipo_user}}</td>
                                    @foreach($privilegios as $item3)
                                        @foreach($UserPrivilegios as $item2)
                                            @if($item->usuario->id == $item2->id_usuario && $item3->id == $item2->id_privilegio)
                                                @if($item2->status == "Si")
                                                    <td style="color:green;">
                                                        <a href="{{ route('editP', ['id_empleado' => $item->usuario->id, 'id_privilegio' => $item3->id]) }}" style="color: green;">{{$item2->privilegio->modulo}} - {{$item2->privilegio->privilegio}}</a>
                                                    </td>
                                                @else
                                                    <td style="color:red;">
                                                        <a href="{{ route('editP', ['id_empleado' => $item->usuario->id, 'id_privilegio' => $item3->id]) }}" style="color: red;">{{$item2->privilegio->modulo}} - {{$item2->privilegio->privilegio}}</a>
                                                    </td>
                                                @endif
                                            @endif()
                                        @endforeach()
                                    @endforeach()
                                </tr>
                            @endforeach
                            @include('areas.modales.eliminar')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->
@endsection


@section('scripts')
<script type="text/javascript">
    function ModalTwo(){
        $('#eliminar_area').modal('hide');
        $('#eliminar_area').on('hidden', function () {
            $('#claverrot').modal('show')
        });
    }
</script>
<script>
function eliminar(id_area) {
    $("#id_area_eliminar").val(id_area);
}
</script>
@endsection