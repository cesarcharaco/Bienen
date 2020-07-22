<div class="card-box">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('estadisticas1.index') }}" class="btn btn-primary"><i class="fa fa-undo"></i> Regresar</a>
        </div>
        <div class="col-md-5">
            <h4>Resultado de la búsquedas</h4>
        </div>
        <div class="col-md-5">
            <strong style="float: right;">Semana Número: {{$planificacion2->semana}} - Fecha:{{$planificacion2->fechas}}</strong>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-6">
            <h4 align="center">Cantidad de Actividades PM02</h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                        </tr>
                        <tr>
                            <td>{!! $pm02_si_g2 !!}</td>
                            <td>{!! $pm02_no_g2 !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_pm02_g2->render() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">                                            
            <h4 align="center">Actividades PM02 VS Actividades PM03</h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="50%" style="background: #48C9A9; color: black;">PM02</th>
                            <th width="50%" style="background: #EF5350; color: black;">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="50%" style="">{!! $pm02_g2 !!}</td>
                            <td width="50%" style="">{!! $pm03_g2 !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_act_pm02_vs_act_pm03_g2->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>Total de Actividades</h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" style="background: #F7C55F">PM01</th>
                            <th colspan="2" style="background: #48C9A9">PM02</th>
                            <th colspan="2" style="background: #EF5350">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                        </tr>
                        <tr>
                            <td bgcolor="white">{!! $pm01_si_g2 !!}</td>
                            <td bgcolor="white">{!! $pm01_no_g2 !!}</td>
                            <td bgcolor="white">{!! $pm02_si_g2 !!}</td>
                            <td bgcolor="white">{!! $pm02_no_g2 !!}</td>
                            <td bgcolor="white">{!! $pm03_si_g2 !!}</td>
                            <td bgcolor="white">{!! $pm03_no_g2 !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_act_g2->render() !!}
            </div>
        </div>           
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>Filtro-Puerto <span style="float: right;">Total: {!! $filtro[1]+$filtro[2]+$filtro[4]+$filtro[5]+$filtro[7]+$filtro[8] !!}</span></h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" style="background: #F7C55F;">PM01</th>
                            <th colspan="2" style="background: #48C9A9;">PM02</th>
                            <th colspan="2" style="background: #EF5350;">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                        </tr>
                        <tr>
                            <td bgcolor="white">{!! $filtro[1] !!}</td>
                            <td bgcolor="white">{!! $filtro[2] !!}</td>
                            <td bgcolor="white">{!! $filtro[4] !!}</td>
                            <td bgcolor="white">{!! $filtro[5] !!}</td>
                            <td bgcolor="white">{!! $filtro[7] !!}</td>
                            <td bgcolor="white">{!! $filtro[8] !!}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! $filtro[3] !!}</td>
                            <td colspan="3">{!! $filtro[6] !!}</td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_filtro->render() !!}
            </div>
        </div>  
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>ECT <span style="float: right;">Total: {!! $ect[1]+$ect[2]+$ect[4]+$ect[5]+$ect[7]+$ect[8] !!}</span></h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" style="background: #F7C55F;">PM01</th>
                            <th colspan="2" style="background: #48C9A9;">PM02</th>
                            <th colspan="2" style="background: #EF5350;">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                        </tr>
                        <tr>
                            <td bgcolor="white">{!! $ect[1] !!}</td>
                            <td bgcolor="white">{!! $ect[2] !!}</td>
                            <td bgcolor="white">{!! $ect[4] !!}</td>
                            <td bgcolor="white">{!! $ect[5] !!}</td>
                            <td bgcolor="white">{!! $ect[7] !!}</td>
                            <td bgcolor="white">{!! $ect[8] !!}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! $ect[3] !!}</td>
                            <td colspan="3">{!! $ect[6] !!}</td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_ect->render() !!}
            </div>
        </div>  
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>Los Colorados <span style="float: right;">Total: {!! $colorados[1]+$colorados[2]+$colorados[4]+$colorados[5]+$colorados[7]+$colorados[8] !!}</span></h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" style="background: #F7C55F;">PM01</th>
                            <th colspan="2" style="background: #48C9A9;">PM02</th>
                            <th colspan="2" style="background: #EF5350;">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                            <th style="background: #D7CCC8; color: black;">R</th>
                            <th style="background: #BDBDBD; color: black;">NR</th>
                        </tr>
                        <tr>
                            <td bgcolor="white">{!! $colorados[1] !!}</td>
                            <td bgcolor="white">{!! $colorados[2] !!}</td>
                            <td bgcolor="white">{!! $colorados[4] !!}</td>
                            <td bgcolor="white">{!! $colorados[5] !!}</td>
                            <td bgcolor="white">{!! $colorados[7] !!}</td>
                            <td bgcolor="white">{!! $colorados[8] !!}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! $colorados[3] !!}</td>
                            <td colspan="3">{!! $colorados[6] !!}</td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_colorados->render() !!}
            </div>
        </div>  
    </div>
</div>
<hr>