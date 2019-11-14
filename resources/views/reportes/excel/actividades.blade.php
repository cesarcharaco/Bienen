@extends('reportes.excel.partials.layout')

@section('content')
	<h3 align="center">Reporte general de inscripcion</h3>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Task</th>
      <th>Date</th>
      <th>Duración proyecta</th>
      <th>Cant. Personas</th>
      <th>Duracion Real</th>
    </tr>
    
    @foreach($actividades as $key)
      <tr>
        <td>{{$num++}}</td>
        <td>{{$key->task}}</td>
        <td>{{$key->fecha_vencimiento}}</td>
        <td>{{$key->apellido}}</td>
        <td>{{$key->categoria->categoria}}</td>
        <td>{{$key->inscripcion->status}}</td>
      </tr>

    @endforeach
  </table>
@endsection