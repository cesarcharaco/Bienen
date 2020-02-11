<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use App\Areas;
use App\Departamentos;
use App\User;
use App\Privilegios;
use Validator;
use App\Http\Requests\EmpleadosRequest;
use App\Examenes;
use App\CursNoDanio;
use App\Novedades;
use App\Afp;
use App\Cursos;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afp=Afp::all();
        $examenes=Examenes::all();
        $areas=Areas::all();
        $departamentos=Departamentos::all();
        $cursos=Cursos::all();
        $empleados=Empleados::all();
        $contador = 1;
        
        return view('empleados.index',compact('empleados', 'contador','areas','departamentos','examenes','afp','cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $afp=Afp::all();
        $examenes=Examenes::all();
        $areas=Areas::all();
        $departamentos=Departamentos::all();
        $cursos=Cursos::all();

        return view('empleados.create',compact('areas','departamentos','examenes','afp','cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadosRequest $request)
    {
        //dd($request->all());

        $usuario = new User();
        $usuario->name=$request->nombres;
        $usuario->email=$request->email;
        $nueva_clave=bcrypt($request->rut);
        $usuario->password=$nueva_clave;
        $usuario->tipo_user="Empleado";
        $usuario->save();

        $empleado = new Empleados();
        $empleado->id_usuario=$usuario->id;
        $empleado->nombres=$request->nombres;
        $empleado->apellidos=$request->apellidos;
        $empleado->email=$usuario->email;
        $empleado->rut=$request->rut;
        $empleado->edad=$request->edad;
        $empleado->cargo=$request->cargo;
        $empleado->genero=$request->genero;
        $empleado->status=$request->status;
        $empleado->save();
        //registrando a los empleados en multiples areas
        for($i=0; $i<count($request->id_area); $i++){
            \DB::table('empleados_has_areas')->insert([
                'id_empleado' => $empleado->id,
                'id_area' => $request->id_area[$i]
            ]);
        }
        //registrando a los empleados en multiples departamentos
        for($i=0; $i<count($request->id_departamento); $i++){
            \DB::table('empleados_has_departamentos')->insert([
                'id_empleado' => $empleado->id,
                'id_departamento' => $request->id_departamento[$i]
            ]);
        }
        //registrando empleado
        for($i=1; $i<=4; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => 5,
                'status' => 'Si'
            ]);
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => 6,
                'status' => 'No'
            ]);
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => 7,
                'status' => 'Si'
            ]);
        
        for($i=8; $i<=34; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => 35,
                'status' => 'Si'
            ]);
        /*for($i=18; $i<=20; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }*/
        //---areas empresa---
            for ($i=0; $i < count($request->id_area_a) ; $i++) { 
                $afp=\DB::table('empleados_has_areas_empresa')->insert([
                    'id_empleado' => $empleado->id,
                    'id_faena' => $request->id_area_a[$i]
                ]);
            }
        //----fin area empresa
        //--- faenas---
            for ($i=0; $i < count($request->id_faenas) ; $i++) { 
                $afp=\DB::table('empleados_has_faenas')->insert([
                    'id_empleado' => $empleado->id,
                    'id_faena' => $request->id_faena[$i]
                ]);
            }
        //---fin faenas-----
        //----afp-----
            for ($i=0; $i < count($request->afp) ; $i++) { 
                $afp=\DB::table('empleados_has_afp')->insert([
                    'id_empleado' => $empleado->id,
                    'id_afp' => $request->afp[$i]
                ]);
            }
        //---fin afp
        //---cursos------
            for ($i=0; $i < count($request->id_curso); $i++) { 
                $curso=\DB::table('empleados_has_cursos')->insert([
                    'id_empleado' => $empleado->id,
                    'id_curso' => $request->id_curso[$i],
                    'fecha' => $request->fecha_realizado_c[$i],
                    'fecha_vence' => $request->fecha_vencimiento_c[$i]
                ]);
            }
        //---fin de cursos----
        //---examenes------
            for ($i=0; $i < count($request->id_examen); $i++) { 
                $curso=\DB::table('empleados_has_examenes')->insert([
                    'id_empleado' => $empleado->id,
                    'id_examen' => $request->id_examen[$i],
                    'fecha' => $request->fecha_realizado[$i],
                    'fecha_vence' => $request->fecha_vencimiento[$i]
                ]);
            }
        //---fin de examenes----


        if($request->novedades == 'Si'){

            $novedades=Novedades::create([
                'titulo' => '',
                'novedad' => '',
                'tipo' => 'nuevo_user',
                'fecha' => date('Y-m-d'),
                'hora' => date('H:m:s'),
                'id_usuario_n' => $usuario->id,
                'id_empleado' => \Auth::User()->id
            ]);
        }

        flash('<i class="fa fa-check-circle-o"></i> Usuario creado con éxito!')->success()->important();
        return redirect()->to('empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('show');
        $user=User::find($id);
        $privilegios=Privilegios::all();

        $areas=Areas::all();
        $examenes=Examenes::all();
        $empleado=Empleados::find($id);
        $departamentos=Departamentos::all();
        return view('empleados.show', compact('empleado','areas','user','privilegios','departamentos','examenes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        $privilegios=Privilegios::all();

        $areas=Areas::all();
        $empleado=Empleados::find($id);
        $departamentos=Departamentos::all();
        

        return view('empleados.edit',compact('empleado','areas','user','privilegios','departamentos','buscar_areas'));
    }
    
    protected function validator_edit_empleados(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255',
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'rut' => 'required|max:255',
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validator_edit_empleados($request->all())->validate();
        
        $email=User::where('email',$request->email)->where('id','<>',$id)->get();
        $rut=Empleados::where('rut',$request->rut)->where('id','<>',$id)->get();

        if (!empty($email) && !empty($rut)) {
            if (count($email)>0) {
                flash('<i class="icon-circle-check"></i> El correo ya esta en uso!')->warning()->important();
                return redirect()->to('empleados/'.$id.'/edit');
            }elseif (count($rut)>0) {
                flash('<i class="icon-circle-check"></i> El RUT ya esta en uso!')->warning()->important();
                return redirect()->to('empleados/'.$id.'/edit');
            } else {
                $empleado = Empleados::find($id);
                $empleado->nombres=$request->nombres;
                $empleado->apellidos=$request->apellidos;
                $empleado->email=$request->email;
                $empleado->rut=$request->rut;
                $empleado->edad=$request->edad;
                $empleado->cargo=$request->cargo;
                $empleado->genero=$request->genero;
                if (\Auth::User()->tipo_user=="Admin") {
                    $empleado->status=$request->status;
                }
                $empleado->save();
                
                $usuario = User::find($id);
                $usuario->name=$request->nombres;
                $usuario->email=$request->email;
                if ($request->cambiar_password=="cambiar_password") {
                    $nueva_clave=bcrypt($request->password);
                    $usuario->password=$nueva_clave;
                }
                $usuario->save();
                //eliminando las areas asignadas a un empleado
                $eliminar=\DB::table('empleados_has_areas')->where('id_empleado',$empleado->id)->delete();
                 //registrando a los empleados en multiples areas
                for($i=0; $i<count($request->id_area); $i++){
                    \DB::table('empleados_has_areas')->insert([
                        'id_empleado' => $empleado->id,
                        'id_area' => $request->id_area[$i]
                    ]);
                }
                //eliminando las areas asignadas a un empleado
            //---areas empresa---
                $eliminar=\DB::table('empleados_has_areas_empresa')->where('id_empleado',$empleado->id)->delete();
            for ($i=0; $i < count($request->id_area_a) ; $i++) { 
                $afp=\DB::table('empleados_has_areas_empresa')->insert([
                    'id_empleado' => $empleado->id,
                    'id_faena' => $request->id_area_a[$i]
                ]);
            }
        //----fin area empresa
        //--- faenas---
            $eliminar=\DB::table('empleados_has_faenas')->where('id_empleado',$empleado->id)->delete();
            for ($i=0; $i < count($request->id_faenas) ; $i++) { 
                $afp=\DB::table('empleados_has_faenas')->insert([
                    'id_empleado' => $empleado->id,
                    'id_faena' => $request->id_faena[$i]
                ]);
            }
        //---fin faenas-----
                //----afp-----
                $eliminar=\DB::table('empleados_has_afp')->where('id_empleado',$empleado->id)->delete();
            for ($i=0; $i < count($request->afp) ; $i++) { 
                $afp=\DB::table('empleados_has_afp')->insert(['id_empleado' => $empleado->id,'id_afp' => $request->afp[$i]]);
            }
        //---fin afp
        //---cursos------
            $eliminar=\DB::table('empleados_has_cursos')->where('id_empleado',$empleado->id)->delete();
            for ($i=0; $i < count($request->id_curso); $i++) { 
                $curso=\DB::table('empleados_has_cursos')->insert([
                    'id_empleado' => $empleado->id,
                    'id_curso' => $request->id_curso[$i],
                    'fecha' => $request->fecha_realizado_c[$i],
                    'fecha_vence' => $request->fecha_vencimiento_c[$i]
                ]);
            }
        //---fin de cursos----
        //---examenes------
            $eliminar=\DB::table('empleados_has_examenes')->where('id_empleado',$empleado->id)->delete();
            for ($i=0; $i < count($request->id_examen); $i++) { 
                $curso=\DB::table('empleados_has_examenes')->insert([
                    'id_empleado' => $empleado->id,
                    'id_examen' => $request->id_examen[$i],
                    'fecha' => $request->fecha_realizado[$i],
                    'fecha_vence' => $request->fecha_vencimiento[$i]
                ]);
            }
        //---fin de examenes----
                $eliminar=\DB::table('empleados_has_departamentos')->where('id_empleado',$empleado->id)->delete();
                //registrando a los empleados en multiples departamentos
                for($i=0; $i<count($request->id_departamento); $i++){
                    \DB::table('empleados_has_departamentos')->insert([
                        'id_empleado' => $empleado->id,
                        'id_departamento' => $request->id_departamento[$i]
                    ]);
                }

                flash('<i class="fa fa-check-circle-o"></i> Datos de usuario actualizado con éxito!')->success()->important();
                return redirect()->to('empleados/'.$id.'/edit');
            }
        }
    }

    public function cambiar_status(Request $request)
    {
        //dd($request->all());
        $usuario = Empleados::find($request->id_usuario);
        //dd($usuario);
        $usuario->status=$request->status;
        $usuario->save();

        flash('<i class="fa fa-check-circle"></i> Status del empleado '.$usuario->nombres.' cambiado exitosamente a '.$usuario->status.'!')->success()->important();
        return redirect()->to('empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->id_empleado!=1) {
            
        $empleado=Empleados::find($request->id_empleado);
        if ($empleado->delete()) {
            flash('<i class="fa fa-check-circle"></i> El Empleado fue eliminado exitosamente!')->success()->important();
        return redirect()->back();
        } else {
            flash('<i class="fa fa-check-circle"></i> El Empleado no pudo ser eliminado!')->warning()->important();
        return redirect()->back();
        }
        
        }
    }
}
