<div align="right">
<button type="submit" class="btn btn-primary"> <strong style="font-size: 30px; ">Enviar</strong></button>
    
</div>
<br>
<table id="data-table-basic" class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Empleado</th>
            <th>Rut</th>
            <th>Tipo de empleado</th>
            <th>Permisos</th>
            <?php $cprivilegios=$cprivilegios-1; ?>
            @for($i=0; $i< $cprivilegios; $i++)
                <th></th>
            @endfor
        </tr>
    </thead>

    <tbody>
    @php $contador=1; @endphp
    @foreach($empleados as $item )
        <tr>
            <input type="hidden" name="id_empleado[]" value="{{$item->usuario->id}}">
            <td>{{ $contador++ }}</td>
            <td>{{ $item->nombres }}, {{ $item->apellidos }}</td>
            <td>{{ $item->rut }}</td>
            <td>{{ $item->usuario->tipo_user}}</td>
            @foreach($privilegios as $item3)
                @foreach($UserPrivilegios as $item2)
                    @if($item->usuario->id == $item2->id_usuario && $item3->id == $item2->id_privilegio)
                        @if($item2->status == "Si")
                            <td style="color:green;">
                                <div style="color: green;">{{$item2->privilegio->modulo}} - {{$item2->privilegio->privilegio}}
                                    <br>
                                    
                                    <input type="checkbox" name="id_privilegio[]" id="id_actividad_multi" value="{{$item2->id}}" class="i-checks" align="center" checked="">
                                </div>
                            </td>
                        @else
                            <td style="color:red;">
                                <div style="color: red;">{{$item2->privilegio->modulo}} - {{$item2->privilegio->privilegio}}
                                    <br>
                                    <input type="checkbox" name="id_privilegio[]" id="id_actividad_multi" value="{{$item2->id}}" class="i-checks" align="center">
                                </div>
                            </td>
                        @endif
                    @endif()
                @endforeach()
            @endforeach()
        </tr>
    @endforeach
    </tbody>
</table>