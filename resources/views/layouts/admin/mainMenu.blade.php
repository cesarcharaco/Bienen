<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="{{ active('home') }} {{ active('estadisticas') }}"><a data-toggle="tab" href="#home"><i class="notika-icon notika-house"></i> Inicio</a></li>
                    @if(buscar_p('Planificación','Buscar')=="Activo" || buscar_p('Planificación','Registrar')=="Activo" || buscar_p('Planificación','Modificar')=="Activo" || buscar_p('Planificación','Eliminar')=="Activo" || buscar_p('Planificación','Aprobar')=="Activo" || buscar_p('Planificación','Reportes')=="Activo" || buscar_p('Planificación','PDF')=="Activo")
                    <li class="{{ active('planificacion') }}"><a data-toggle="tab" href="#planification"><i class="notika-icon notika-calendar"></i> Planificación</a></li>
                    @endif
                    <li class="{{ active('empleados') }}"><a data-toggle="tab" href="#employer"><i class="notika-icon notika-support"></i> Empleados</a></li>
                </ul>

                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="home" class="tab-pane {{ active('home') }} {{ active('estadisticas') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li><a href="{{ route('estadisticas') }}">Estadísticas</a>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <div id="planification" class="tab-pane {{ active('planificacion') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('planificacion.index') }}">Buscar</a>
                            </li>
                            <li><a href="{{ route('planificacion.create') }}">Crear actividad</a>
                            </li>
                            <li><a href="#">Estadísticas</a>
                            </li>
                            <li><a href="#">Reportes</a>
                            </li>
                        </ul>
                    </div>
                    <div id="employer" class="tab-pane {{ active('empleados') }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ route('empleados.index') }}">Ver</a>
                            </li>
                            <li><a href="{{ route('empleados.create') }}">Registrar</a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
