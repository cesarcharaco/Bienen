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
                    <div class="row">
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span><select class="form-control select2" name="id_gerencia_search" id="id_gerencia_search">
                                    <option value="0">Seleccione el usuario</option>
                                    @foreach($empleados as $item)
                                        <option value="{{$item->usuario->id}}">{{$item->nombres}} {{$item->apellidos}} .- {{$item->rut}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="normal-table-list mg-t-30">
                                            <div class="basic-tb-hd">
                                                <h2>Permisos - Módulos</h2>
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Ver todos los módulos</button>
                                            </div>
                                            <hr>

                                            <!-- DESPLIEGUE PLANIFICACIONES -->
                                            <p>
                                                <a class="btn btn-primary" style="width: 100%;" data-toggle="collapse" href="#permisosPlanificacion" role="button" aria-expanded="false" aria-controls="permisosPlanificacion">Planificación</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosPlanificacion">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: green;">Buscar </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks" checked></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Registrar </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: green;">Modificar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks" checked></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Eliminar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- DESPLIEGUE ACTIVIDADES -->
                                            <p>
                                                <a class="btn btn-success" style="width: 100%;" data-toggle="collapse" href="#permisosActividades" role="button" aria-expanded="false" aria-controls="permisosActividades">Actividades</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosActividades">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Ver </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Registrar </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Registro de PM03</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Modificar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Asignar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Eliminar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- DESPLIEGUE USUARIOS -->
                                            <p>
                                                <a class="btn btn-info" style="width: 100%;" data-toggle="collapse" href="#permisosUsuarios" role="button" aria-expanded="false" aria-controls="permisosUsuarios">Usuarios</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosUsuarios">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Listado </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Registrar </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Modificar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Eliminar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Ver datos laborales</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Ver exámenes</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Ver curso cero daño</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- DESPLIEGUE GRÁFICAS -->
                                            <p>
                                                <a class="btn btn-danger" style="width: 100%;" data-toggle="collapse" href="#permisosGraficas" role="button" aria-expanded="false" aria-controls="permisosGraficas">Gráficas</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosGraficas">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Listado </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                             <!-- DESPLIEGUE REPORTES -->
                                            <p>
                                                <a class="btn btn-warning" style="width: 100%;" data-toggle="collapse" href="#permisosReportes" role="button" aria-expanded="false" aria-controls="permisosReportes">Reportes</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosReportes">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Excel </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">PDF </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                             <!-- DESPLIEGUE AREAS -->
                                            <p>
                                                <a class="btn btn-primary" style="width: 100%;" data-toggle="collapse" href="#permisosAreas" role="button" aria-expanded="false" aria-controls="permisosAreas">Áreas</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosAreas">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Listado </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Registrar </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Editar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Eliminar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                             <!-- DESPLIEGUE GERENCIAS -->
                                            <p>
                                                <a class="btn btn-success" style="width: 100%;" data-toggle="collapse" href="#permisosGerencias" role="button" aria-expanded="false" aria-controls="permisosGerencias">Gerencias</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosGerencias">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Listado </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Registrar </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Editar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Eliminar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- DESPLIEGUE DEPARTAMENTOS -->
                                            <p>
                                                <a class="btn btn-info" style="width: 100%;" data-toggle="collapse" href="#permisosDepartamentos" role="button" aria-expanded="false" aria-controls="permisosDepartamentos">Departamentos</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosDepartamentos">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Listado </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Registrar </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Editar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Eliminar</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- DESPLIEGUE ACTIVIDADES GENERAL -->
                                            <p>
                                                <a class="btn btn-danger" style="width: 100%;" data-toggle="collapse" href="#permisosActividadesG" role="button" aria-expanded="false" aria-controls="permisosActividadesG">Actividades General</a>
                                              
                                            </p>
                                            <div class="row">
                                              <div class="col">
                                                <div class="collapse multi-collapse" id="permisosActividadesG">
                                                  <div class="card" style="width: 100%; left: 6000px;">
                                                      <ul class="list-group list-group-flush">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Actividades - PM01 General </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color:red;">Actividades - PM02 General </label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <li class="list-group-item"><div class="row"><div class="col-md-11"><label style="color: red;">Actividades - PM04 General</label></div><div class="col-md-1"><input type="checkbox" name="id_permisos[]" id="id_permisos_multi" value="" class="i-checks"></div></div> </li>
                                                            </div>
                                                        </div>
                                                      </ul>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>



                <!-- SECCIÓN DE PERMISOS --> 
            </div>
        </div>
    </div>
</div>

@include('areas.modales.eliminar')
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