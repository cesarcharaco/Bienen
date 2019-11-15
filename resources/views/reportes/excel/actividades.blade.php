<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>

  </style>
</head>
<body>
<?php $image_path = '/assets/img/bienen.jpg'; ?>
<table border="2" style="font-size: 11px;">
  <thead>
    <tr border="1px">
      <td style="font-size: 16px; width: 75px; height: 30px;" rowspan="3">
      </td>
      <td colspan="10" style="text-align: center;">REPORTE ACTIVIDAD SEMANAL</td>
    </tr>
    @for($i=0; $i<count($planificacion);$i++)
    <tr>
      <td>Área: {{ $areas[$i] }}</td>
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

    <tr style="height: 15px;">
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
  </tbody>
  @endfor
</table>
  
</body>
</html>