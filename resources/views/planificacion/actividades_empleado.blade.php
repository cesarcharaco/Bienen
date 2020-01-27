
<!-- Data Table area Start-->
<div class="data-table-area">
<div class="container">
            <div class="row" >
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="busqueda">Seleccione el día</label><br>
                <div class="form-group">
                   <select name="dia" id="dia_b" class="form-control" title="Seleccione el dia a buscar">
                       <option value="3">Miércoles</option>
                       <option value="4">Jueves</option>
                       <option value="5">Viernes</option>
                       <option value="6">Sábado</option>
                       <option value="0">Domingo</option>
                       <option value="1">Lunes</option>
                       <option value="2">Martes</option>
                   </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="busqueda">Seleccione el área</label><br>
                <div class="form-group">
                   <select class="form-control" name="id_planificacion_b" id="id_planificacion_b">
                    <option value="0">Seleccione una planificación</option>
                    @foreach($planificaciones as $item)
                        <option value="{{$item->id}}">Semana: {{$item->semana}} | {{$item->fechas}} | {{$item->gerencias->gerencia}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="busqueda">Seleccione el área</label><br>
                <div class="form-group">
                   <select name="id_area_b" id="id_area_b" class="form-control" title="Seleccione el área a buscar">
                        
                   </select>
                </div>
            </div>
            
        </div>
    </div>
</div>
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
                                    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

<div class="modal fade" id="myModaltwo" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            {!! Form::open(['route' => ['empleados.cambiar_status'], 'method' => 'POST', 'name' => 'cambiar_status', 'id' => 'cambiar_status', 'data-parsley-validate']) !!}
            @csrf
            <div class="modal-body">
                <h2>Cambiar de status a empleado</h2>
                <p>¿Estas seguro que desea cambiar de status a este empleado?.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="status"><b>Status</b> <b style="color: red;">*</b></label>
                            <input type="hidden" id="id_empleado" name="id_usuario">
                            <select name="status" id="status" class="form-control" required="required">
                                <option value="">Seleccione status...</option>
                                <option value="Activo">Activo</option>
                                <option value="Reposo">Reposo</option>
                                <option value="Retirado">Retirado</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Cambiar status</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@section('scripts')

<script type="text/javascript">
    function status(id_usuario) {
        //console.log(id_usuario+"----");
        $("#id_empleado").val(id_usuario);
    }


    $("#id_planificacion_b").on("change",function (event) {

        var id_planificacion=event.target.value;
        $.get("/asignaciones/"+id_planificacion+"/buscar",function (data) {
            
            $("#id_area_b").empty();
            $("#id_area_b").append('<option value="">Seleccione un área</option>');
        
        if(data.length > 0){

            for (var i = 0; i < data.length ; i++) 
            {  
                    
                
                $("#id_area_b").append('<option value="'+ data[i].id + '">' + data[i].area +'</option>');
            }

        }else{
            $("#id_area_b").attr('disabled', false);

        }

        });
    });

    $("#id_area_b").on("change",function (event) {

        var dia=$("#dia_b").val();
        var id_planificacion=$("#id_planificacion_b").val();
        var id_area=event.target.value;
        console.log(dia+"--"+id_planificacion+"--"+id_area);

        $.get("/mis_actividades/"+dia+"/"+id_planificacion+"/"+id_area+"/buscar",function (data) {
            console.log(data.length);
            $("#data-table-basic").empty();
            
        
        if(data.length > 0){
            $("#data-table-basic").append('<thead><tr><th>#</th><th>Task</th><th>Fecha</th><th>Día</th><th>Área</th><th>Departamento</th><th>Tipo</th><th>Realizada</th><th>Acciones</th></tr></thead><tbody>');
            for (var i = 0; i < data.length ; i++) 
            {  
                    j=i+1;
                
                $("#data-table-basic").append('<tr><td>'+j+'</td><td>' + data[i].task +'</td><td>' + data[i].fecha_vencimiento +'</td><td>' + data[i].dia +'</td><td>' + data[i].area +'</td><td>' + data[i].departamento +'</td><td>' + data[i].tipo +'</td><td>' + data[i].realizada +'</td>');
            }
            $("#data-table-basic").append('</tbody>');
        }

        });
    });

</script>
@endsection