<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('home') }}">Dashboard</a></li>
                            <!-- <li><a data-toggle="collapse" data-target="#demolibra" href="#">Inicio</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                                    @if(\Auth::User()->tipo_user=="Admin")
                                    <li><a href="{{ route('estadisticas') }}">Estadísticas</a></li>
                                    @endif
                                </ul>
                            </li> -->
                            @if(buscar_p('Planificacion','Buscar')=="Si" || buscar_p('Actividades','Ver')=="Si")
                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Actividades</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    @if(buscar_p('Planificación','Buscar')=="Si")
                                    <li><a href="{{ route('planificacion.index') }}">Planificación</a></li>
                                    @endif

                                    @if(buscar_p('Actividades','Asignar')=="Si")
                                    <li><a href="{{ route('asignaciones.index') }}">Asignación</a></li>
                                    @endif
                                    <!-- <li><a href="{{ route('asignaciones.create') }}">Actividades asignadas</a></li> -->
                                </ul>
                            </li>
                            @endif
                            @if(buscar_p('Usuarios','Listado')=="Si")
                            <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('empleados.index') }}">Empleados</a></li>
                            @endif
                            @if(buscar_p('Graficas','Ver')=="Si")
                            <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('graficas.index') }}">Gráficas</a></li>
                            @endif
                            @if(buscar_p('Reportes','Excel')=="Si" || buscar_p('Reportes','PDF')=="Si")
                            <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('reportes.index') }}">Reportes</a></li>
                            @endif

                            @if(\Auth::user()->tipo_user == 'Admin')
                            <li>
                                <a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Configuraciones</a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('cursos.index') }}">Cursos</a></li>

                                    <li><a href="{{ route('examenes.index') }}">Exámenes</a></li>

                                    <li><a href="{{ route('licencias.index') }}">Licencias</a></li>
                                    
                                    @if(buscar_p('Gerencias','listado')=="Si")
                                    <li><a href="{{ route('gerencias.index') }}">Gerencias</a></li>
                                    @endif

                                    @if(buscar_p('Areas','listado')=="Si")
                                    <li><a href="{{ route('areas.index') }}">Áreas</a></li>
                                    @endif

                                    @if(buscar_p('Departamentos','listado')=="Si")
                                    <li><a href="{{ route('departamentos.index') }}">Departamentos</a></li> 
                                    @endif

                                    @if(\Auth::user()->tipo_user == 'Admin' && \Auth::user()->email != 'adminlicancabur@eiche.cl')
                                        <li><a href="{{ route('privilegios.index') }}">Permisos</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
