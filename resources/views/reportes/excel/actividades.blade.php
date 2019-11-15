<?php
  libxml_use_internal_errors(true);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/table_excel.css') }}">
</head>
<body>
<?php $image_path = '/assets/img/bienen.jpg'; ?>
<table border="2">
  <thead>
    <tr border="1px">
      <td style="font-size: 16px; width: 75px; height: 30px;" rowspan="3" id="cell"></td>
      <td colspan="10" style=" text-align: center; background: #D6EAF8;" class="rep">REPORTE ACTIVIDAD SEMANAL</td>
    </tr>
    @for($i=0; $i<count($planificacion);$i++)
    <tr>
      <td>@if($cant_act[$i]>0)Área: {{ $areas[$i] }} @endif</td>
      <td colspan="3"></td>
      <td colspan="4">Elaborado:{{ $planificacion[$i][0] }}</td>
      <td style="width: 30px;"></td>
      <td style="width: 30px;">N° de contrato:{{ $planificacion[$i][2] }}</td>      
    </tr>
    <tr>
      <td>Fecha:{{ $planificacion[$i][3] }}</td>
      <td>Semana: {{ $planificacion[$i][4] }}</td>
      <td>Gerencia:{{ $planificacion[$i][6] }}</td>
      <td></td>
      <td colspan="4">Aprobado por:{{ $planificacion[$i][1] }}</td>
      <td></td>
      <td>{{ $cant_act[$i] }}Revisión: {{ $planificacion[$i][5] }}</td>
    </tr>

    <tr style="background: #FEEFAF !important;">
        <th>Task</th>
        <th>Date</th>
        <th>Duracion proyectada</th>
        <th>Cant. personas</th>
        <th>Duración real</th>
        <th>Día</th>
        <th>Área</th>
        <th>Type</th>
        <th>Realizada SI/NO</th>
        <th>Avances del turno y pendiente</th>
        <th>Observaciones/Comentarios</th>
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
          <td></td>
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