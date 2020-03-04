<?php
  libxml_use_internal_errors(true);
  
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>Reporte cronológico de Actividades</title>
	  <link rel="stylesheet" href="{{ asset('css/table_excel.css') }}">
	  <style>
	    #fila {
	  		background: #F9E79F;
		}
	  
	  </style>
	</head>
	<body style="width: 100%;">
		<?php $image_path = '/assets/img/bienen.jpg'; ?>
		<h1 style="background-color: yellow;">{{$areas}}</h1>
		<hr>
		<h4>Total de actividades: {{$resultado}}</h4>
		<table border="1px" width="100%">
			<thead>
				<tr>
					<th width="25%"></th>
					<th width="25%" style="background-color: #f5b7b1">Total de actividades realizadas</th>
					<th width="25%" style="background-color: #f5b7b1">Total de actividades NO realizadas</th>
					<th width="25%" style="background-color: #f5b7b1">Total de actividades planificadas</th>
				</tr>
			</thead>
			<tbody align="center">
				<tr>
					<td>PM01</td>
					<td><strong>{{$acti_realizadas_PM01}}</strong></td>
					<td><strong>{{$acti_Nrealizadas_PM01}}</strong></td>
					<td><strong>{{$total_pm01}}</strong></td>
				</tr>
				<tr>
					<td>PM02</td>
					<td><strong>{{$acti_realizadas_PM02}}</strong></td>
					<td><strong>{{$acti_Nrealizadas_PM02}}</strong></td>
					<td><strong>{{$total_pm02}}</strong></td>
				</tr>
				<tr>
					<td>PM03</td>
					<td><strong>{{$acti_realizadas_PM03}}</strong></td>
					<td style="background-color: #B2BABB;"><strong>---</strong></td>
					<td style="background-color: #B2BABB;"><strong>---</strong></td>
				</tr>
				<tr>
					<td>PM04</td>
					<td><strong>{{$acti_realizadas_PM04}}</strong></td>
					<td><strong>{{$acti_Nrealizadas_PM04}}</strong></td>
					<td><strong>{{$total_pm04}}</strong></td>
				</tr>
			</tbody>
		</table>
		<br>
		<hr>
		<br>
		<table border="1px" width="100%">
			<thead>
				<tr>
					<th width="25%" border="0"></th>
					<th width="25%" style="background-color: #abebc6">Total de minutos realizados</th>
					<th width="25%" style="background-color: #abebc6">Total de minutos proyectados</th>
				</tr>
			</thead>
			<tbody align="center">
				<tr>
					<td>PM01</td>
					<td>{{duracion_real_pm01}}</td>
					<td style="background-color: #B2BABB;"><strong>---</strong></td>
				</tr>
				<tr>
					<td>PM02</td>
					<td>{{duracion_real_pm02}}</td>
					<td>{{duracion_pro_pm02}}</td>
				</tr>
				<tr>
					<td>PM03</td>
					<td>{{duracion_real_pm03}}</td>
					<td style="background-color: #B2BABB;"><strong>---</strong></td>
				</tr>
				<tr>
					<td>PM04</td>
					<td>{{duracion_real_pm04}}</td>
					<td style="background-color: #B2BABB;"><strong>---</strong></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>