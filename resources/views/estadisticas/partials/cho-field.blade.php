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
        <div class="col-md-6">                                            
            <h4 align="center">Actividades PM02 VS Actividades PM03</h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="50%" style="text-align: center; background: #48C9A9; color: black;">PM02</th>
                            <th width="50%" style="text-align: center; background: #F7C55F; color: black;">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="50%" style="text-align: center;">1</td>
                            <td width="50%" style="text-align: center;">Alexandra</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <h4 align="center">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
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
                            <th colspan="2">PM01</th>
                            <th colspan="2">PM02</th>
                            <th colspan="2">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
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
        <div class="col-md-4">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
            </div>
        </div>            
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>Filtro-Puerto <span style="float: right;">Total:</span></h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">PM01</th>
                            <th colspan="2">PM02</th>
                            <th colspan="2">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
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
                            <td colspan="3" bgcolor="white"></td>
                            <td colspan="3" bgcolor="white"></td>                                                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
            </div>
        </div>
    </div>
    <div class="row ajl">
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: red; color: black;">PM03</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>            
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>ECT <span style="float: right;">Total:</span></h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">PM01</th>
                            <th colspan="2">PM02</th>
                            <th colspan="2">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
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
        <div class="col-md-4">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
            </div>
        </div>
    </div>
    <div class="row ajl">
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: red; color: black;">PM03</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>            
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <div class="col-md-8">
            <h4>Los Colorados <span style="float: right;">Total:</span></h4>
            <div class="bsc-tbl-st">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">PM01</th>
                            <th colspan="2">PM02</th>
                            <th colspan="2">PM03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
                            <td style="background: #48C9A9; color: black;">R</td>
                            <td style="background: #F7C55F; color: black;">NR</td>
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
        <div class="col-md-4">
            <h4 style="text-align: center;">Gráfica</h4>
            <div class="row">
                <!-- Aqui va la grafica -->
            </div>
        </div>
    </div>
    <div class="row ajl">
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: #48C9A9; color: black;">PM01</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: #F7C55F; color: black;">PM02</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-striped table-bordered" border="2px">
                <tr>
                    <td colspan="2" style="text-align: center; background: red; color: black;">PM03</td>
                    <td style="text-align: center;">HH Realizadas</td>
                </tr>
                <tr>
                    <th rowspan="13" style="text-align: center; padding-top: 80%;">2020</th>
                </tr>
                @for($i=1; $i<=12; $i++)
                <tr>
                    <td style="text-align: center;">{{$i}}</td>
                    <td style="text-align: center;">Datos</td>
                </tr>
                @endfor
            </table>
        </div>            
    </div>
</div>
<hr>