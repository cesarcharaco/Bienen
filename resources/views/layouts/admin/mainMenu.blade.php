<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="{{ active('home') }} {{ active('estadisticas') }}"><a data-toggle="tab" href="#home"><i class="notika-icon notika-house"></i> Inicio</a></li>
                    
                    <li class="{{ active('planificacion') }}"><a data-toggle="tab" href="#planification"><i class="notika-icon notika-calendar"></i> Planificación</a></li>                    
                    @if(buscar_p('Usuarios','Listado')=="Si")
                    <li class="{{ active('empleados') }}"><a data-toggle="tab" href="#employer"><i class="notika-icon notika-support"></i> Empleados</a></li>
                    @endif
                    @if(buscar_p('Graficas','Ver')=="Si")
                    <li class="{{ active('graficas') }}"><a href="{{ route('graficas.index') }}" ><i class="notika-icon notika-star"></i> Gráficas</a></li>
                    @endif
                    @if(buscar_p('Reportes','Excel')=="Si" || buscar_p('Reportes','PDF')=="Si")
                    <li class="{{ active('reportes') }}"><a href="{{ route('reportes.index') }}" ><i class="fa fa-file-archive-o"></i> Reportes </a></li>
                    @endif
                </ul>

                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="home" class="tab-pane {{ active('home') }} {{ active('estadisticas') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            @if(\Auth::User()->tipo_user=="Admin")
                            <li><a href="{{ route('estadisticas') }}">Estadísticas</a></li>
                            @endif
                        </ul>
                    </div>
                    <div id="planification" class="tab-pane {{ active('planificacion') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            @if(buscar_p('Planificación','Buscar')=="Si")
                            <li><a href="{{ route('planificacion.index') }}">Buscar</a></li>
                            @endif
                            @if(buscar_p('Actividades','Ver')=="Si")
                            <li><a href="{{ route('planificacion.create') }}">Actividades</a></li>
                            @endif
                        </ul>
                    </div>
                    <div id="employer" class="tab-pane {{ active('empleados') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('empleados.index') }}">Ver</a></li>
                            <li><a href="{{ route('empleados.create') }}">Registrar</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
