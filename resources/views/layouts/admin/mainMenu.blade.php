<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="{{ active('home') }} {{ active('estadisticas') }}"><a data-toggle="tab" href="#home"><i class="notika-icon notika-house"></i> Inicio</a></li>
                    @if(buscar_p('Planificacion','Buscar')=="Si" || buscar_p('Actividades','Ver')=="Si")
                    <li class="{{ active('planificacion') }}"><a data-toggle="tab" href="#planification"><i class="notika-icon notika-calendar"></i> Actividades</a></li>
                    @endif
                    @if(buscar_p('Usuarios','Listado')=="Si")
                    <li class="{{ active('empleados') }}"><a data-toggle="tab" href="#empleados"><i class="notika-icon notika-support"></i> Empleados</a></li>
                    @endif
                    @if(buscar_p('Graficas','Ver')=="Si")
                    <li class="{{ active('graficas') }}"><a href="{{ route('graficas.index') }}" ><i class="notika-icon notika-star"></i> Gráficas</a></li>
                    @endif
                    @if(buscar_p('Reportes','Excel')=="Si" || buscar_p('Reportes','PDF')=="Si")
                    <li class="{{ active('reportes') }}"><a href="{{ route('reportes.index') }}" ><i class="fa fa-file-archive-o"></i> Reportes </a></li>
                    @endif
                    @if(buscar_p('Areas','Listado')=="Si" || buscar_p('Gerencias','Listado')=="Si" || buscar_p('Departamentos','Listado')=="Si")
                    <li class="{{ active('') }}"><a data-toggle="tab" href="#configuraciones"><i class="fa fa-cogs"></i> Configuraciones </a></li>
                    @endif
                </ul>

                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="home" class="tab-pane {{ active('home') }} {{ active('estadisticas') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            @if(buscar_p('Graficas','Ver')=="Si")
                            <li><a href="{{ route('estadisticas') }}">Estadísticas</a></li>
                            @endif
                        </ul>
                    </div>
                    <div id="planification" class="tab-pane {{ active('planificacion') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <!-- @if(buscar_p('Planificación','Buscar')=="Si")
                            <li><a href="{{ route('planificacion.index') }}">Planificación</a></li>
                            @endif -->
                            @if(buscar_p('Actividades','Ver')=="Si")
                            <li><a href="{{ route('planificacion.create') }}">Actividades</a></li>
                            @endif
                            <li><a href="{{ route('asignaciones.index') }}">Asignación</a></li>
                            <li><a href="{{ route('asignaciones.create') }}">Actividades asignadas</a></li>
                        </ul>
                    </div>
                    <div id="empleados" class="tab-pane {{ active('empleados') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('empleados.index') }}">Ver</a></li>
                            <li><a href="{{ route('empleados.create') }}">Registrar</a></li> 
                        </ul>
                    </div>
                    <div id="configuraciones" class="tab-pane {{ active('configuraciones') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            @if(buscar_p('Gerencias','listado')=="Si")
                            <li><a href="{{ route('gerencias.index') }}">Gerencias</a></li>
                            @endif
                            @if(buscar_p('Areas','listado')=="Si")
                            <li><a href="{{ route('areas.index') }}">Áreas</a></li>
                            @endif
                            @if(buscar_p('Departamentos','listado')=="Si")
                            <li><a href="{{ route('departamentos.index') }}">Departamentos</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
