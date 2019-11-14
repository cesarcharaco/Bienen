<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#">
                        <!-- logo -->
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><span><i
                                        class="notika-icon notika-search"></i></span></a>
                            <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                <div class="search-input">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" />
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><span><i
                                        class="notika-icon notika-mail"></i></span></a>
                                @php $comentarios=mensajes(); @endphp
                                @if(count($comentarios)>0)
                            <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Comentarios</h2>
                                </div>
                                @for($i=0;$i<count($comentarios);$i++)
                                <div class="hd-message-info">
                                    <a href="{{ route('home') }}" onclick="marcar_comentario_visto('{{ $comentarios[$i][2] }}')">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="{{ asset('assets/img/post/3.jpg') }}" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>{{ $comentarios[$i][0] }}</h3>
                                                <p>{{ $comentarios[$i][1] }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endfor
                                {{-- <div class="hd-mg-va">
                                    <a href="#">Ver Todos</a>
                                </div> --}}
                            </div>
                                    @endif
                        </li>
                        <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button"
                                aria-expanded="false" class="nav-link dropdown-toggle"><span><i
                                        class="notika-icon notika-alarm"></i></span>
                                <div class="spinner4 spinner-4"></div>
                                @if(total_mensajes()>0)
                                <div class="ntd-ctn"><span>{{ total_mensajes() }}</span></div>
                                @endif
                            </a>
                            @php $actividades=tarea_terminada(); @endphp
                            @if(count($actividades)>0)
                            <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Actividades Realizadas</h2>
                                </div>
                                <div class="hd-message-info">
                                @for($i=0;$i<count($actividades);$i++)
                                    <a href="{{ route('home') }}" onclick="marcar_actividad_vista('{{ $actividades[$i][2] }}')">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="{{ asset('assets/img/post/3.jpg') }}" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>{{ $actividades[$i][0] }}</h3>
                                                <p>{{ $actividades[$i][1] }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endfor
                                   
                                <div class="hd-mg-va">
                                    <a href="{{ route('planificacion.create') }}">Ver todas</a>
                                </div>
                            </div>
                            @endif
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span>
                                <div class="spinner4 spinner-4"></div>
                                @if(total_tarea_terminada()>0)
                                <div class="ntd-ctn"><span>{{ total_tarea_terminada() }}</span></div>
                                @endif
                            </a>
                            <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Tareas</h2>
                                </div>
                                <div class="hd-message-info hd-task-info">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>EWS</p>
                                            </div>
                                            @php $total=tareas(1); @endphp
                                            <div class="progress-bar wow fadeInLeft" data-progress="{{ $total }}%"
                                                style="width: {{ $total }}%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span>{{ $total }}%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>Planta Cero/Desaladora & Acueducto</p>
                                            </div>
                                            @php $total=tareas(2); @endphp
                                            <div class="progress-bar wow fadeInLeft" data-progress="{{ $total }}%"
                                                style="width: {{ $total }}%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span>{{ $total }}%</span> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>Agua y Tranque</p>
                                            </div>
                                            @php $total=tareas(3); @endphp
                                            <div class="progress-bar wow fadeInLeft" data-progress="{{ $total }}%"
                                                style="width: {{ $total }}%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span>{{ $total }}%</span> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>Filtro-Puerto</p>
                                            </div>
                                            @php $total=tareas(4); @endphp
                                            <div class="progress-bar wow fadeInLeft" data-progress="{{ $total }}%"
                                                style="width: {{ $total }}%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span>{{ $total }} %</span> </div>
                                        </div>
                                        <div class="progress progress-bt">
                                            <div class="lead-content">
                                                <p>ECT</p>
                                            </div>
                                            @php $total=tareas(5); @endphp
                                            <div class="progress-bar wow fadeInLeft" data-progress="{{ $total }}%"
                                                style="width: {{ $total }}%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span>{{ $total }}%</span> </div>
                                        </div>
                                        <div class="progress progress-bt">
                                            <div class="lead-content">
                                                <p>Los Colorados</p>
                                            </div>
                                            @php $total=tareas(6); @endphp
                                            <div class="progress-bar wow fadeInLeft" data-progress="{{ $total }}%"
                                                style="width: {{ $total }}%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                <span>{{ $total }}%</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="{{ route('planificacion.create') }}">Ver Todas</a>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><span><i
                                        class="notika-icon notika-chat"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Chat</h2>
                                </div>
                                <div class="search-people">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" placeholder="Search People" />
                                </div>
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="{{ asset('assets/img/post/1.jpg') }}" alt="" />
                                                <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Available</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Jonathan Morris</h3>
                                                <p>Last seen 3 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="{{ asset('assets/img/post/4.jpg') }}" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Fredric Mitchell</h3>
                                                <p>Last seen 2 minutes ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="{{ asset('assets/img/post/1.jpg') }}" alt="" />
                                                <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Available</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="{{ asset('assets/img/post/2.jpg') }}" alt="" />
                                                <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Glenn Jecobs</h3>
                                                <p>Available</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li> --}}

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><span><i
                                        class="notika-icon notika-next"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">

                                <div class="hd-message-info">

                                    <a href="{{ route('usuarios.show',\Auth::User()->id) }}">
                                        <div class="hd-message-sn">
                                            <div class="hd-mg-ctn">
                                                <p>Configurar perfil</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <div class="hd-message-sn">

                                            <div class="hd-mg-ctn">
                                                <p>Cerrar sesión</p>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function marcar_actividad_vista(id_actividad) {
        $.get('actividades/'+id_actividad+'/vistas',function (data) {
            
        })
    }

    function marcar_comentario_visto(id_comentario) {
        $.get('actividades/'+id_comentario+'/vistos',function (data) {
            
        })
    }
</script>
