<!DOCTYPE html>
<html>
<head>
    <title>Reporte HH por área</title>
    <style type="text/css">
        td {
            text-align: center !important;
        }
    </style>
</head>
<body>
    <table width="80%" align="center" border="1">
        <tr>
            <td colspan="3"><h2 align="center">Reporte HH por área</h2></td>
        </tr>
        <tr>
            <td align="center">
                <table class="table table-striped table-bordered" border="2px" style="height: 40px;" width="100%">
                    <tr>
                        <td colspan="2" style=" background: #F7C55F; color: black;">PM01</td>
                        <td>HH Realizadas</td>
                    </tr>
                    <tr>
                        <th rowspan="13" style=" padding-top:;">2020</th>
                    </tr>
                    <tr>
                        <td>Enero</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Febrero</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Marzo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Abril</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mayo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Junio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Julio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Agosto</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Septiembre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Octubre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Noviembre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Diciembre</td>
                        <td></td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="table table-striped table-bordered" border="2px" style="height: 40px;" width="100%">
                    <tr>
                        <td colspan="2" style=" background: #F7C55F; color: black;">PM02</td>
                        <td>HH Realizadas</td>
                    </tr>
                    <tr>
                        <th rowspan="13" style=" padding-top: ;">2020</th>
                    </tr>
                    <tr>
                        <td>Enero</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Febrero</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Marzo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Abril</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mayo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Junio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Julio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Agosto</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Septiembre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Octubre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Noviembre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Diciembre</td>
                        <td></td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="table table-striped table-bordered" border="2px" style="height: 40px;" width="100%">
                    <tr>
                        <td colspan="2" style=" background: #F7C55F; color: black;">PM03</td>
                        <td>HH Realizadas</td>
                    </tr>
                    <tr>
                        <th rowspan="13" style=" padding-top: ;">2020</th>
                    </tr>
                    <tr>
                        <td>Enero</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Febrero</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Marzo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Abril</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mayo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Junio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Julio</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Agosto</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Septiembre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Octubre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Noviembre</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Diciembre</td>
                        <td>{{$pru}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">grafica</td>
        </tr>
        <tr>
            <td colspan="3" style="background: gray;">
                <div style="background: white; padding: 20px; border-radius: 30px;">
                    <h4 style="text-align: center;">Gráfica</h4>
                    <div class="row">
                        <!-- Aqui va la grafica -->
                        {!! $prueba->render() !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <a href="#" onclick="window.print('imprimir');">Imprimir</a>
            </td>
        </tr>
    </table>
</body>
</html>
