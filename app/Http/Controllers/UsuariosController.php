<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Areas;
use App\Empleados;
use App\User;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('hola33');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('hola22');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('hola11');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $areas=Areas::all();
        $empleado=Empleados::find($id);
        //$empleado = Empleados::where('empleados.email',\Auth::User()->email)->first();
        return view('usuarios.perfil', compact('areas','empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('hola1');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $usuario = User::find($request->id);
        $usuario->name=$request->nombres;
        $usuario->email=$request->email;
        if ($request->cambiar_password=="cambiar_password") {
            $nueva_clave=bcrypt($request->password);
            $usuario->password=$nueva_clave;
        }
        if (\Auth::User()->tipo_user=="Admin") {
            $usuario->tipo_user="Admin";
        } else {
            $usuario->tipo_user="Empleado";
        }      
        $usuario->save();

        $empleado = Empleados::find($request->id);
        $empleado->id_usuario=$usuario->id;
        $empleado->nombres=$request->nombres;
        $empleado->apellidos=$request->apellidos;
        $empleado->email=$usuario->email;
        $empleado->rut=$request->rut;
        $empleado->edad=$request->edad;
        $empleado->genero=$request->genero;
        if (\Auth::User()->tipo_user=="Admin") {
            # code...
            $empleado->turno=$request->turno;
            $empleado->status=$request->status;
            $empleado->id_area=$request->id_area;
            $empleado->save();
        }

        flash('<i class="fa fa-check-circle-o"></i> Perfil | Datos de usuario actualizado con éxito!')->success()->important();
        return redirect()->to('usuarios/'.$id.'');
    }

    public function update_privilegios(Request $request, $id)
    {
        //dd($request->id_privilegio);
        $datos = $request['id_privilegio'];

        $usuario=User::find($id);
        
        foreach ($usuario->privilegios as $key) {
            $hallado=0;
            for ($i=0; $i < count($request->id_privilegio) ; $i++) { 
                if ($key->pivot->id_privilegio==$request->id_privilegio[$i]) {
                    $hallado=1;
                }
            }
            if ($hallado==1) {
                DB::table('usuarios_has_privilegios')
                    ->where('id_usuario',$key->pivot->id_usuario)
                    ->where('id_privilegio', $key->pivot->id_privilegio)
                    ->update(['status' => "Si"]);
            } else {
               $query=DB::table('usuarios_has_privilegios')
                    ->where('id_usuario',$key->pivot->id_usuario)
                    ->where('id_privilegio', $key->pivot->id_privilegio)
                    ->update(['status' => "No"]);
            }
        }

        flash('<i class="fa fa-check-circle-o"></i> privilegios actualizado con éxito!')->success()->important();
            return redirect()->to('empleados/'.$id.'edit');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('hola115');
    }
}
