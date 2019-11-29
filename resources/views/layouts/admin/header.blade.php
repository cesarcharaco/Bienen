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
                                    <a onclick="marcar_actividad_vista('{{ $actividades[$i][2] }}','{{ $actividades[$i][3] }}')">
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
                                   </div>
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
@include('partials.modalActividades2')
<script type="text/javascript">
    function marcar_actividad_vista(id_actividad,id_empleado) {
        $.get('actividades/'+id_actividad+'/vistas',function (data) {
            //console.log(data.length+"----");
        if (data.length>0) {
        $("#task2").text(data[0].task);
        $("#fecha_vencimiento2").text(data[0].fecha_vencimiento);
        $("#descripcion2").text(data[0].descripcion2);
        $("#turno2").text(data[0].turno);
        $("#duracion_pro2").text(data[0].duracion_pro);
        $("#cant_personas2").text(data[0].cant_personas);
        $("#duracion_real2").text(data[0].duracion_real);
        $("#dia2").text(data[0].dia);
        $("#tipo2").text(data[0].tipo);
        $("#realizada2").text(data[0].realizada);
        $("#elaborado2").text(data[0].elaborado);
        $("#aprobado2").text(data[0].aprobado);
        $("#num_contrato2").text(data[0].num_contrato);
        $("#fechas2").text(data[0].fechas);
        $("#semana2").text(data[0].semana);
        $("#revision2").text(data[0].revision);
        $("#gerencia2").text(data[0].gerencia);
        $("#area12").text(data[0].area);
        $("#descripcion_area2").text(data[0].descripcion1);
        $("#ubicacion2").text(data[0].ubicacion);
        $("#observacion12").text(data[0].observacion1);
        $("#observacion22").text(data[0].observacion2);
        //$("#comentarios").text(comentario);
          var fecha = new Date(); //Fecha actual
          var mes = fecha.getMonth()+1; //obteniendo mes
          var dia = fecha.getDate(); //obteniendo dia
          var ano = fecha.getFullYear(); //obteniendo año
          if(dia<10)
            dia='0'+dia; //agrega cero si el menor de 10
          if(mes<10)
            mes='0'+mes //agrega cero si el menor de 10
        var hoy=ano+"-"+mes+"-"+dia;
        if (data[0].fecha_vencimiento==hoy) {
            $("#vencimiento2").empty();
            $("#vencimiento2").append('<span class="label label-warning p-1" data-toggle="tooltip"'+ 
                'data-placement="bottom"'+
                'title="Feha de vencimiento"><i class="lni-alarm-clock"></i>'+
                '<b>'+data[0].fecha_vencimiento+'</b></span>');
        } else {
            if (data[0].fecha_vencimiento<hoy) {
                $("#vencimiento2").empty();
            $("#vencimiento2").append('<span class="label label-danger p-1" data-toggle="tooltip"'+ 
                'data-placement="bottom"'+
                'title="Feha de vencimiento"><i class="lni-alarm-clock"></i>'+
                '<b>'+data[0].fecha_vencimiento+'</b></span>');
            }
        }
        if (data[0].realizada=="Si") {
            $("#boton").empty();
            $("#boton").append('<button type="button" onclick="finalizar(1,'+id_actividad+')" class="btn btn-info">CAMBIAR A NO FINALIZADA</button>');
        } else {
            $("#boton").empty();
            $("#boton").append('<button type="button" onclick="finalizar(0,'+id_actividad+')" class="btn btn-info">FINALIZAR </button>');
        }
        
        if (data[0].descripcion2=="") {
            $("#descripcion11").empty();
        }
        $("#id_empleado").val(id_empleado);
        //buscando mensajes registrados
        $.get("/actividades/"+id_actividad+"/comentarios",function(data){
            //console.log(data.length);

            if (data.length>0) {
                $("#comentarios2").empty();
                for(i=0;i<data.length;i++){
                    $("#comentarios2").append('<tr style="border: 0px;">'+
                                            '<td>'+                                    
                                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px; height: 15px;">'+
                                            '<td>'+
                                                '<span id="comentario">'+data[i].comentario+'</span>'+
                                            '</td>'+
                                        '</tr>');
                }
            }
        });
    $("#enviar_comentario").on('click',function(e){
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });

        e.preventDefault();
          var comentario = $('textarea#comentario').val();
          var id_usuario = $('#id_usuario').val();
          
          if (comentario=="") {
            $("#error").text("El comentario no puede estar vacio");
          } else {
          $.ajax({
            type: "post",
            url: "actividades/registrar_comentario",
            data: {
                comentario: comentario,
                id_actividad: id_actividad,
                id_usuario: id_usuario,
                id_empleado: id_empleado
            }, success: function (data) {
                    if (data.length>0) {
                $("#comentarios2").empty();
                for(i=0;i<data.length;i++){
                    $('textarea#comentario').val("");
                    $("#comentarios2").append('<tr style="border: 0px;">'+
                                            '<td>'+                                    
                                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px; height: 15px;">'+
                                            '<td>'+
                                                '<span id="comentario">'+data[i].comentario+'</span>'+
                                            '</td>'+
                                        '</tr>'+
                                        '<tr style="border: 0px;">'+
                                            '<td>'+
                                                '<button class="btn btn-danger btn-xs"'+
                                                ' onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                                            '</td>'+
                                        '</tr>');
                }
            }         
            }
          });
        }
    });
    
    //archivos guardados al registrar una actividad
    $.get('actividades/'+id_actividad+'/buscar_archivos',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_archivos").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_archivos").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> <button class="btn btn-danger btn-xs" '+
                    ' onclick="eliminar_archivo('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
            }
        }else{
            $("#mis_archivos").empty();
        }
    });
    //-------------------------------------------------
    //archivos guardados desde el modal
    $.get('actividades_proceso/'+id_actividad+'/buscar_archivos_adjuntos',function(data){
        
        if (data.length>0) {
            $("#mis_archivos_cargados2").empty();
            for(var k = 0; k < data.length; k++){
                if(data[k].tipo=="file"){
                $("#mis_archivos_cargados2").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a></li>');
                }
            }
        }else{
            $("#mis_archivos_cargados2").empty();
        }
    });
    //-------------------------------------------------
    //imagenes guardadas al registrar una actividad
    $.get('actividades/'+id_actividad+'/buscar_imagenes',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_imagenes").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_imagenes").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs"'+
                    ' onclick="eliminar_imagen('+data[k].id+')" ><i class="fa fa-trash"></i></button></li></li>');
            }
        }else{
            $("#mis_imagenes").empty();
        }
    });
    //---------------------------------------------
    //imagenes guardadas desde el modal
    $.get('actividades_proceso/'+id_actividad+'/buscar_imagenes_adjuntas',function(data){
        //console.log(data.length);
        if (data.length>0) {
            $("#mis_imagenes_cargadas2").empty();
            for(var k = 0; k < data.length; k++){
                $("#mis_imagenes_cargadas2").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+'</a> </li>');
            }
        }else{
            $("#mis_imagenes_cargadas2").empty();
            }
    });
    //---------------------------------------------

    $("#enviar_archivo").on('click',function(e){

        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        e.preventDefault();
          var archivos= $("#archivos").val();
          var id_usuario = $('#id_usuario').val();
          var formulario = new FormData($("#frmB")[0]);
          
          formulario.append('id_empleado', id_empleado);
          formulario.append('id_actividad', id_actividad);
          formulario.append('id_usuario',id_usuario);
          
          //console.log(formulario);
          if (archivos=="") {
            $("#error2").text("El comentario no puede estar vacio");
          } else {
            
          $.ajax({
            type: "post",
            url: "actividades/registrar_archivos",
            data:formulario,
            dataType: 'json',
            processData: false,
            contentType: false ,
            success: function (datos) {
                
            if (datos.length>0) {
                $("#mis_archivos_cargados").empty();
                for(i=0;i<datos.length;i++){
                    $('file#archivos').val("");
                    if(datos[i].tipo=="file"){
                    $("#mis_archivos_cargados").append('<li><a href="{!! asset('"+ datos[i].url +"') !!}">'+datos[i].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_archivos_adjuntos('+datos[i].id+')"><i class="fa fa-trash"></i></button></li>');
                    }
                }
            }else{
                $("#error2").text("No se pudo traer nada");  
            }         
            }
          });
        }
    });
    $("#enviar_imagen").on('click',function(e){

        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
        e.preventDefault();
          var imagenes= $("#imagenes").val();
          var id_usuario = $('#id_usuario').val();
          var formulario = new FormData($("#frmC")[0]);
          
          formulario.append('id_empleado', id_empleado);
          formulario.append('id_actividad', id_actividad);
          formulario.append('id_usuario',id_usuario);
          
          
          if (imagenes=="") {
            $("#error3").text("El comentario no puede estar vacio");
          } else {
            
          $.ajax({
            type: "post",
            url: "actividades/registrar_imagenes",
            data:formulario,
            dataType: 'json',
            processData: false,
            contentType: false ,
            success: function (datos) {
                
            if (datos.length>0) {
                $("#mis_imagenes_cargadas").empty();
                for(i=0;i<datos.length;i++){
                    $('file#imagenes').val("");
                    if(datos[i].tipo=="img"){
                    $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ datos[i].url +"') !!}">'+datos[i].nombre+'</a> <button class="btn btn-danger btn-xs" onclick="eliminar_imagenes_adjuntas('+datos[i].id+')"><i class="fa fa-trash"></i></button></li>');
                    }
                }
            }else{
                $("#error3").text("No se pudo traer nada");  
            }         
            }
          });
        }
    });
            }
        });
    $("#modalActividades2").modal("show");
    }
    function eliminar_comentario(id_comentario,id_actv_proceso) {
        

        $.get('actividades/'+id_actv_proceso+'/'+id_comentario+'/eliminar_comentario',function(data){
            if (data.length>0) {
                $("#comentarios").empty();
                for(i=0;i<data.length;i++){
                    $("#comentarios").append('<tr style="border: 0px;">'+
                            '<td>'+                                    
                                '<span id="usuario"><a href="#">'+data[i].name+' '+data[i].email+'</a> el '+data[i].created_at+'</span>'+
                            '</td>'+
                        '</tr>'+
                        '<tr style="border: 0px; height: 15px;">'+
                            '<td>'+
                                '<span id="comentario">'+data[i].comentario+'</span>'+
                            '</td>'+
                        '</tr>'+
                        '<tr style="border: 0px;">'+
                            '<td>'+
                                '<button class="btn btn-danger btn-xs" '+
                                'onclick="eliminar_comentario('+data[i].id+','+data[i].id_actv_proceso+')"><i class="fa fa-trash"></i></button>'+
                            '</td>'+
                        '</tr>');
                }
            }else{
                $("#comentarios").empty();
            }
        });
    }
    function eliminar_archivo(id_archivo) {
        $.get('actividades/'+id_archivo+'/eliminar_archivos',function(data){
            
            if (data.length>0) {
            $("#mis_archivos").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_archivos").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_archivo('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_archivos").empty();
            }
        });
    }

    function eliminar_imagen(id_archivo) {
        $.get('actividades/'+id_archivo+'/eliminar_archivos',function(data){
            
            if (data.length>0) {
            $("#mis_imagenes").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_imagenes").append('<li><a href="{!! asset('"+ data[k].url +"') !!}" >'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_imagen('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_imagenes").empty();
            }
        });
    }
    function eliminar_archivos_adjuntos(id_archivo) {
        $.get('actividades_proceso/'+id_archivo+'/eliminar_archivos_adjuntos',function(data){
            
            if (data.length>0) {
            $("#mis_archivos_cargados").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_archivos_cargados").append('<li><a'+
                    ' href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+
                    ' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_archivos_adjuntos('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_archivos_cargados").empty();
            }
        });
    }

    function eliminar_imagenes_adjuntas(id_archivo) {
        $.get('actividades_proceso/'+id_archivo+'/eliminar_archivos_adjuntos',function(data){
            
            if (data.length>0) {
            $("#mis_imagenes_cargadas").empty();
                for(var k = 0; k < data.length; k++){
                $("#mis_imagenes_cargadas").append('<li><a href="{!! asset('"+ data[k].url +"') !!}">'+data[k].nombre+' </a><button class="btn btn-danger btn-xs" '+
                        ' onclick="eliminar_imagenes_adjuntas('+data[k].id+')"><i class="fa fa-trash"></i></button></li>');
                }
            }else{
                $("#mis_imagenes_cargadas").empty();
            }
        });
    }
    function finalizar(opcion,id_actividad) {

        if (opcion==0) {
            $("#vacio").empty();
            if ($("#duracion_real2").val()=="") {
                
                $("#vacio").append('<small style="color:red;">Debe ingresar la duración real</small>');
            } else {
                console.log($("#duracion_real2").val());
                var duracion_real=$("#duracion_real2").val();
                $.get('actividades_proceso/'+opcion+'/'+id_actividad+'/'+duracion_real+'/finalizar',function(data){
                    $("#duracion_real1").empty();
                    $("#boton").empty();
                    $("#vacio").empty();
                    $("#boton").append('<button type="button" onclick="finalizar(1,'+id_actividad+')" class="btn btn-info">CAMBIAR A NO FINALIZADA</button>');
                    $("#duracion_real2").val("");
                    $("#duracion_real").empty();
                    $("#duracion_real2").css('display','none');
                    $("#duracion_real").val("Si");
                
            });   
            }
        } else {
            $("#vacio").empty();
            $("#duracion_real2").val("");
            $("#duracion_real2").css('display','block');
            $.get('actividades_proceso/'+opcion+'/'+id_actividad+'/'+duracion_real+'/finalizar',function(data){
            $("#boton").empty();
                    $("#boton").append('<button type="button" onclick="finalizar(0,'+id_actividad+')" class="btn btn-info">FINALIZAR </button>');
            });
            $("#duracion_real").empty();
            $("#duracion_real").val("No");
        }
        
    }
    function marcar_comentario_visto(id_comentario) {
        $.get('actividades/'+id_comentario+'/vistos',function (data) {
            
        })
    }
</script>
