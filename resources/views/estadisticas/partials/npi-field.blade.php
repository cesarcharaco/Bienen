<div class="card-box">
    <div class="row">
        <div class="col-md-6">
            <h4>Resultado de la búsquedas</h4>
        </div>
        <div class="col-md-6">
            <strong style="float: right;">Semana Número:</strong>
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
                            <td width="50%" style="">1</td>
                            <td width="50%" style="">Alexandra</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $prueba->render() !!}
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
                            <td bgcolor="white">0</td>
                            <td bgcolor="white">0</td>
                            <td bgcolor="white">0</td>
                            <td bgcolor="white">0</td>
                            <td bgcolor="white">0</td>
                            <td bgcolor="white">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $prueba1->render() !!}
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
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="3"></td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $prueba2->render() !!}
            </div>
        </div>  
    </div>
    <div class="row ajl">
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px" style="height: 40px;">
                <tr>
                    <td colspan="2" style=" background: #F7C55F; color: black;">PM01</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style=" background: #48C9A9; color: black;">PM02</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style=" background: #EF5350; color: black;">PM03</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>            
    </div>
    <div class="row ajl">
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $chartjs->render() !!}
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $prueba5->render() !!}
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $prueba6->render() !!}
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
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="3"></td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $prueba3->render() !!}
            </div>
        </div>  
    </div>
    <div class="row ajl">
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px" style="height: 40px;">
                <tr>
                    <td colspan="2" style=" background: #F7C55F; color: black;">PM01</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style=" background: #48C9A9; color: black;">PM02</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style=" background: #EF5350; color: black;">PM03</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="row ajl">
            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $chartjs1->render() !!}
                </div>
            </div>
            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $prueba7->render() !!}
                </div>
            </div>
            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $prueba8->render() !!}
                </div>
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
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                            <td bgcolor="white"></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM02</b></td>
                            <td colspan="3" style="color: black; text-align: center;"><b>Total PM03</b></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="3"></td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
                {!! $prueba4->render() !!}
            </div>
        </div>  
    </div>
    <div class="row ajl">
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px" style="height: 40px;">
                <tr>
                    <td colspan="2" style=" background: #F7C55F; color: black;">PM01</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style=" background: #48C9A9; color: black;">PM02</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style=" background: #EF5350; color: black;">PM03</td>
                    <td>HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style=" padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="row ajl">
            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $chartjs2->render() !!}
                </div>
            </div>
            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $prueba9->render() !!}
                </div>
            </div>
            <div class="col-md-4" style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $prueba10->render() !!}
                </div>
            </div>
        </div> 
    </div>
</div>
<hr>