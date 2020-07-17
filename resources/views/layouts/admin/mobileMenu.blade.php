<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li class="{{ active('home') }}"><a href="{{ route('home') }}" ><i class="notika-icon notika-house"></i> Dashboard </a></li>
                            <!-- <li><a data-toggle="collapse" data-target="#demolibra" href="#">Inicio</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                                    @if(\Auth::User()->tipo_user=="Admin")
                                    <li><a href="{{ route('estadisticas') }}">Estadísticas</a></li>
                                    @endif
                                </ul>
                            </li> -->
                            @if((buscar_p('Planificacion','Buscar')=="Si" || buscar_p('Actividades','Ver')=="Si")  && \Auth::User()->email!="ViewMel@licancabur.cl")
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
                           @if(buscar_p('Usuarios','Listado')=="Si" && \Auth::User()->email!="ViewMel@licancabur.cl")
                            <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('empleados.index') }}">Empleados</a></li>
                            @endif
                            @if(buscar_p('Graficas','Ver')=="Si" && \Auth::User()->email!="ViewMel@licancabur.cl")
                            <li><a data-toggle="collapse" data-target="#Charts" href="{{ route('graficas.index') }}">Gráficas</a></li>
                            @endif
                            @if(buscar_p('Reportes','Excel')=="Si" || buscar_p('Reportes','PDF')=="Si")
                            <li class="{{ active('reportes') }}"><a href="{{ route('reportes.index') }}" ><i class="fa fa-file-archive-o"></i> Reportes </a></li>
                            @endif

                            @if((buscar_p('Areas','Listado')=="Si" || buscar_p('Gerencias','Listado')=="Si" || buscar_p('Departamentos','Listado')=="Si") && \Auth::User()->email!="ViewMel@licancabur.cl")
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
                                    @if(\Auth::user()->tipo_user == 'Admin' && \Auth::user()->email != 'adminlicancabur@eiche.cl')
                                        <li><a href="{{ route('respaldos.index') }}">Respaldo</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                            @if(\Auth::user()->tipo_user == 'Admin')
                                <li class="{{ active('estadisticas1*') }}"><a href="{{ route('estadisticas1.index') }}" ><i class="fa fa-th-list"></i> Estadísticas </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
