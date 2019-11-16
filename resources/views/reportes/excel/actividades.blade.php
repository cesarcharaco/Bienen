<?php
  libxml_use_internal_errors(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/table_excel.css') }}">
  <style>
    #fila {
  background: #F9E79F;
}
  </style>
</head>
<body>
<?php $image_path = '/assets/img/bienen.jpg'; ?>
<table border="2px">
  <thead>
    <tr border="1px">
      <td style="font-size: 16px; width: 75px; height: 30px;" rowspan="3" id="cell">--</td>
      <td colspan="9" style=" text-align: center; background: #D6EAF8;">REPORTE ACTIVIDAD SEMANAL</td>
    </tr>
    @for($i=0; $i<count($planificacion);$i++)
    <tr>
      <td colspan="3" width="30">@if($cant_act[$i]>0)Área: {{ $areas[$i] }} @endif</td>
      <td colspan="3">Elaborado:{{ $planificacion[$i][0] }}</td>
      <td colspan="3">N° de contrato:{{ $planificacion[$i][2] }}</td>      
    </tr>
    <tr>
      <td colspan="3">Fecha:{{ $planificacion[$i][3] }}</td>
      <td colspan="3">Aprobado por:{{ $planificacion[$i][1] }}</td>
      <td colspan="3">Revisión: {{ $planificacion[$i][5] }}</td>
      {{--
        <td>Semana: {{ $planificacion[$i][4] }}</td>
        <td">Gerencia:{{ $planificacion[$i][6] }}</td>
      --}}
    </tr>

    <tr style="font-size: 11px;">
        <th style="background: #F9E79F;" height="30" align="center">Task</th>
        <th style="background: #F9E79F;" width="10">Date</th>
        <th style="background: #F9E79F;">Duracion proyectada</th>
        <th style="background: #F9E79F;">Cant. personas</th>
        <th style="background: #F9E79F;">Duración real</th>
        <th style="background: #F9E79F;">Día</th>
        {{--<th style="background: #F9E79F;">Área</th>}--}}
        <th style="background: #F9E79F;">Type</th>
        <th style="background: #F9E79F;">Realizada SI/NO</th>
        <th style="background: #F9E79F;" width="40">Avances del turno y pendiente</th>
        <th style="background: #F9E79F;" width="40">Observaciones/Comentarios</th>
    </tr>
  </thead>
  <tbody>
  @if($cant_act[$i]>0)
    @for($j=0;$j<$cant_act[$i];$j++)
      <tr>
          <td>{{ $actividades[$i][$j][0] }}</td>
          <td>{{ $actividades[$i][$j][3] }}</td>
          <td>{{ $actividades[$i][$j][4] }}</td>
          <td>{{ $actividades[$i][$j][5] }}</td>
          <td>{{ $actividades[$i][$j][6] }}</td>
          <td>{{ $actividades[$i][$j][7] }}</td>
          {{--<td></td>--}}
          <td>{{ $actividades[$i][$j][8] }}</td>
          <td>{{ $actividades[$i][$j][9] }}</td>
          <td>{{ $actividades[$i][$j][10] }}</td>
          <td>{{ $actividades[$i][$j][11] }}</td>
      </tr>
    @endfor
  @endif
      <tr>
        <td colspan="11"></td>
      </tr>
  </tbody>
  @endfor
</table>
  
</body>
</html>