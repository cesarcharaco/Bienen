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
    <tr>
      <td>Área:</td>
      <td colspan="3"></td>
      <td colspan="4">Preparado:</td>
      <td style="width: 30px;"></td>
      <td style="width: 30px;">N° de contrato:</td>      
    </tr>
    <tr>
      <td>Fecha:</td>
      <td colspan="3"></td>
      <td colspan="4">Aprobado por:</td>
      <td></td>
      <td>Revisión</td>
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
    @foreach($actividades as $key)
      <tr>
          <td>{{ $key->task }}</td>
          <td>{{ $key->fecha_vencimiento }}</td>
          <td>{{ $key->duracion_pro }}</td>
          <td>{{ $key->cant_personas }}</td>
          <td>{{ $key->duracion_real }}</td>
          <td>{{ $key->dia }}</td>
          <td></td>
          <td>{{ $key->tipo }}</td>
          <td>{{ $key->realizada }}</td>
          <td>{{ $key->observacion1 }}</td>
          <td>{{ $key->observacion2 }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
  
</body>
</html>