<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use App\Areas;
use App\Departamentos;
use App\User;
use App\Privilegios;
use Validator;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados=Empleados::all();
        $contador = 1;
        return view('empleados.index',compact('empleados', 'contador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas=Areas::all();
        $departamentos=Departamentos::all();

        return view('empleados.create',compact('areas','departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $empleado->genero=$request->genero;
        $empleado->turno=$request->turno;
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
        for($i=1; $i<=12; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        for($i=13; $i<=13; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'Si'
            ]);
        }
        for($i=14; $i<=14; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'No'
            ]);
        }
        for($i=15; $i<=17; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'Si'
            ]);
        }
        for($i=18; $i<=20; $i++){
            \DB::table('usuarios_has_privilegios')->insert([
                'id_usuario' => $usuario->id,
                'id_privilegio' => $i,
                'status' => 'No'
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
    public function show(Empleados $empleados)
    {
        //
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
        return view('empleados.edit',compact('empleado','areas','user','privilegios','departamentos'));
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
                $empleado->genero=$request->genero;
                if (\Auth::User()->tipo_user=="Admin") {
                    $empleado->turno=$request->turno;
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
