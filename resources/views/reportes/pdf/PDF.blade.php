<?php
  libxml_use_internal_errors(true);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Reporte de Actividades</title>
  <link rel="stylesheet" href="{{ asset('css/table_excel.css') }}">
  <style>
    #fila {
  background: #F9E79F;
}
  </style>
</head>
<body>
<?php $image_path = '/assets/img/bienen.jpg'; ?>
<table border="1px" width="100%">
  <thead>
    @for($i=0; $i<count($planificacion);$i++)
    <tr>
      <td style="font-size: ; height: 30px;" rowspan="3" id="cell"></td>
      <td colspan="9" style=" text-align: center; background: #D6EAF8;">REPORTE ACTIVIDAD SEMANAL</td>
    </tr>
    <tr>
      <td colspan="3">@if($cant_act[$i]>0)Área: {{ $areas[$i] }} @endif</td>
      <td colspan="3">Elaborado:{{ $planificacion[$i][0] }}</td>
      <td colspan="3">N° de contrato:{{ $planificacion[$i][2] }}</td>      
    </tr>
    <tr>
      <td colspan="3">Fecha:{{ $planificacion[$i][3] }}</td>
      <td colspan="3">Aprobado por:{{ $planificacion[$i][1] }}</td>
      <td colspan="3">Revisión: {{ $planificacion[$i][5] }}</td>
    </tr>
    <tr style="font-size: 11px;" align="center">
        <th style="background: #F9E79F;" height="30">Task</th>
        <th style="background: #F9E79F;">Date</th>
        <th style="background: #F9E79F;">Duración proyectada</th>
        <th style="background: #F9E79F;">Cant. personas</th>
        <th style="background: #F9E79F;">Duración real</th>
        <th style="background: #F9E79F;">Día {{ $cant_mie }}</th>
        <th style="background: #F9E79F;">Type</th>
        <th style="background: #F9E79F;">Realizada SI/NO</th>
        <th style="background: #F9E79F;">Avances del turno y pendiente</th>
        <th style="background: #F9E79F;">Observaciones/Comentarios</th>
    </tr>
  </thead>
  <tbody>
  @if($cant_act[$i]>0)
  @php 
  $x=0; 
  $y=$cant_mie+$cant_jue;
  $z=$y+$cant_vie;
  $aa=$z+$cant_sab;
  $bb=$aa+$cant_dom;
  $cc=$bb+$cant_lun;
  $dd=$cc+$cant_mar;
  @endphp
    @for($j=0;$j<$cant_act[$i];$j++)
    @php $x++; @endphp
      <tr>
          <td>{{ $actividades[$i][$j][0] }}</td>
          <td>{{ $actividades[$i][$j][3] }}</td>
          <td>{{ $actividades[$i][$j][4] }}</td>
          <td>{{ $actividades[$i][$j][5] }}</td>
          <td>{{ $actividades[$i][$j][6] }}</td>
          <td>{{ $actividades[$i][$j][7] }}</td>
          <td>{{ $actividades[$i][$j][8] }}</td>
          <td>{{ $actividades[$i][$j][9] }}</td>
          <td>{{ $actividades[$i][$j][10] }}</td>
          <td>{{ $actividades[$i][$j][11] }}</td>
      </tr>
      {{-- totales dia miercoles --}}
      @if($x==$cant_mie)
      
      <tr style="background: black; color: white;">
        <td colspan="2">Total</td>
        <td>{{ $tdp_mie }}</td>
        <td></td>
        <td>{{ $tdr_mie }}</td>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="3" style="background: yellow;">{{ $actividades[$i][$j][12] }}</td>
        <td colspan="8" style="background: yellow; text-align: center;">{{ $actividades[$i][$j][12] }}</td>
      </tr>
      <tr>
        <td colspan="11"></td>
      </tr>
      @endif
      {{-- totales dia jueves --}}
      @if($y==$x)
      
      <tr style="background: black; color: white;">
        <td colspan="2">Total</td>
        <td>{{ $tdp_jue }}</td>
        <td></td>
        <td>{{ $tdr_jue }}</td>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="3" style="background: yellow;">{{ $actividades[$i][$j][12] }}</td>
        <td colspan="8" style="background: yellow; text-align: center;">{{ $actividades[$i][$j][12] }}</td>
      </tr>
      <tr>
        <td colspan="11"></td>
      </tr>
      @endif
      {{-- totales dia viernes --}}
      @if($z==$x)
      
      <tr style="background: black; color: white;">
        <td colspan="2">Total</td>
        <td>{{ $tdp_vie }}</td>
        <td></td>
        <td>{{ $tdr_vie }}</td>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="3" style="background: yellow;">{{ $actividades[$i][$j][12] }}</td>
        <td colspan="8" style="background: yellow; text-align: center;">{{ $actividades[$i][$j][12] }}</td>
      </tr>
      <tr>
        <td colspan="11"></td>
      </tr>
      @endif
      {{-- totales dia jueves --}}
      @if($aa==$x)
      
      <tr style="background: black; color: white;">
        <td colspan="2">Total</td>
        <td>{{ $tdp_sab }}</td>
        <td></td>
        <td>{{ $tdr_sab }}</td>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="3" style="background: yellow;">{{ $actividades[$i][$j][12] }}</td>
        <td colspan="8" style="background: yellow; text-align: center;">{{ $actividades[$i][$j][12] }}</td>
      </tr>
      <tr>
        <td colspan="11"></td>
      </tr>
      @endif
      {{-- totales dia domingo --}}
      @if($bb==$x)
      
      <tr style="background: black; color: white;">
        <td colspan="2">Total</td>
        <td>{{ $tdp_dom }}</td>
        <td></td>
        <td>{{ $tdr_dom }}</td>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="3" style="background: yellow;">{{ $actividades[$i][$j][12] }}</td>
        <td colspan="8" style="background: yellow; text-align: center;">{{ $actividades[$i][$j][12] }}</td>
      </tr>
      <tr>
        <td colspan="11"></td>
      </tr>
      @endif
      {{-- totales dia lunes --}}
      @if($cc==$x)
      
      <tr style="background: black; color: white;">
        <td colspan="2">Total</td>
        <td>{{ $tdp_lun }}</td>
        <td></td>
        <td>{{ $tdr_lun }}</td>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="3" style="background: yellow;">{{ $actividades[$i][$j][12] }}</td>
        <td colspan="8" style="background: yellow; text-align: center;">{{ $actividades[$i][$j][12] }}</td>
      </tr>
      <tr>
        <td colspan="11"></td>
      </tr>
      @endif
      {{-- totales dia martes --}}
      @if($dd==$x)
      
      <tr style="background: black; color: white;">
        <td colspan="2">Total</td>
        <td>{{ $tdp_mar }}</td>
        <td></td>
        <td>{{ $tdr_mar }}</td>
        <td colspan="5"></td>
      </tr>
      <tr>
        <td colspan="3" style="background: yellow;">{{ $actividades[$i][$j][12] }}</td>
        <td colspan="8" style="background: yellow; text-align: center;">{{ $actividades[$i][$j][12] }}</td>
      </tr>
      <tr>
        <td colspan="11"></td>
      </tr>
      @endif
    @endfor
  @endif
  </tbody>
      <div class="page-break"></div>
  @endfor
</table>
  
</body>
</html>