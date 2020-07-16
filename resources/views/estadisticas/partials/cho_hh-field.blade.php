<div class="card-box">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('estadisticasHH') }}" class="btn btn-primary"><i class="fa fa-undo"></i> Regresar</a>
        </div>
        <div class="col-md-10">
            <h4>Resultado de la búsquedas</h4>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <h4>Filtro-Puerto </h4>
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
            {{--
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_filtro_3->render() !!}
                </div>
            </div>
            --}}
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_filtro_1->render() !!}
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_filtro_2->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <h4>ECT </h4>
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
            {{--
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_ect_3->render() !!}
                </div>
            </div>
            --}}
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_ect_1->render() !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_ect_2->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <h4>Los Colorados </h4>
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
            {{--
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_colorados_3->render() !!}
                </div>
            </div>
            --}}
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_colorados_1->render() !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_colorados_2->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>