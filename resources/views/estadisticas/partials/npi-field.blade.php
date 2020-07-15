<div class="card-box">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('estadisticas1.index') }}" class="btn btn-primary"><i class="fa fa-undo"></i> Regresar</a>
        </div>
        <div class="col-md-5">
            <h4>Resultado de la búsquedas</h4>
        </div>
        <div class="col-md-5">
            <strong style="float: right;">Semana Número: {{$planificacion->semana}} - Fecha:{{$planificacion->fechas}}</strong>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">                                            
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
                            <td width="50%" style="">{!! $pm02_g1 !!}</td>
                            <td width="50%" style="">{!! $pm03_g1 !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_act_pm02_vs_act_pm03_g1->render() !!}
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
                            <td bgcolor="white">{!! $pm01_si_g1 !!}</td>
                            <td bgcolor="white">{!! $pm01_no_g1 !!}</td>
                            <td bgcolor="white">{!! $pm02_si_g1 !!}</td>
                            <td bgcolor="white">{!! $pm02_no_g1 !!}</td>
                            <td bgcolor="white">{!! $pm03_si_g1 !!}</td>
                            <td bgcolor="white">{!! $pm03_no_g1 !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_act_g1->render() !!}
            </div>
        </div>           
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>EWS <span style="float: right;">Total:</span></h4>
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
                            <td bgcolor="white">{!! $ews[1] !!}</td>
                            <td bgcolor="white">{!! $ews[2] !!}</td>
                            <td bgcolor="white">{!! $ews[4] !!}</td>
                            <td bgcolor="white">{!! $ews[5] !!}</td>
                            <td bgcolor="white">{!! $ews[7] !!}</td>
                            <td bgcolor="white">{!! $ews[8] !!}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! $ews[3] !!}</td>
                            <td colspan="3">{!! $ews[6] !!}</td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_ews->render() !!}
            </div>
        </div>  
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>Planta Cero/Desaladora & Acueducto <span style="float: right;">Total:</span></h4>
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
                            <td bgcolor="white">{!! $pcda[1] !!}</td>
                            <td bgcolor="white">{!! $pcda[2] !!}</td>
                            <td bgcolor="white">{!! $pcda[4] !!}</td>
                            <td bgcolor="white">{!! $pcda[5] !!}</td>
                            <td bgcolor="white">{!! $pcda[7] !!}</td>
                            <td bgcolor="white">{!! $pcda[8] !!}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! $pcda[3] !!}</td>
                            <td colspan="3">{!! $pcda[6] !!}</td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_planta->render() !!}
            </div>
        </div>  
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>Agua y Tranque <span style="float: right;">Total:</span></h4>
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
                            <td bgcolor="white">{!! $agua[1] !!}</td>
                            <td bgcolor="white">{!! $agua[2] !!}</td>
                            <td bgcolor="white">{!! $agua[4] !!}</td>
                            <td bgcolor="white">{!! $agua[5] !!}</td>
                            <td bgcolor="white">{!! $agua[7] !!}</td>
                            <td bgcolor="white">{!! $agua[8] !!}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! $agua[3] !!}</td>
                            <td colspan="3">{!! $agua[6] !!}</td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $graf_total_agua->render() !!}
            </div>
        </div>  
    </div>
</div>
<hr>