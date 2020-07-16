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
        <h4>EWS </h4>
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
            {{--
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_ews_2->render() !!}
                </div>
            </div>--}}
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
                    {!! $graf_hh_ews_3->render() !!}
                </div>
            </div> --}}
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_ews_1->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <h4>Planta Cero/Desaladora & Acueducto </h4>
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
            {{--
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_planta_2->render() !!}
                </div>
            </div>
            --}}
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
                    {!! $graf_hh_planta_3->render() !!}
                </div>
            </div>
            --}}
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_planta_1->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card-box">
    <div class="row ajl">
        <h4>Agua y Tranque </h4>
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
            {{--
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_agua_2->render() !!}
                </div>
            </div>
            --}}
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
                    {!! $graf_hh_agua_3->render() !!}
                </div>
            </div>
            --}}
        </div>
        <div class="col-md-12">
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h4 style="text-align: center;">Gráfica</h4>
                <div class="row">
                    <!-- Aqui va la grafica -->
                    {!! $graf_hh_agua_1->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>