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
        //dd($request->all);
        $usuario = User::find($request->id);
        $usuario->email=$request->email;

        if ($request->cambiar_password=="cambiar_password") {
            $nueva_clave=bcrypt($request->password);
            $usuario->password=$nueva_clave;
        }
        
        $usuario->save();

        $empleado = Empleados::find($request->id);
        $empleado->nombres=$request->nombres;
        $empleado->apellidos=$request->apellidos;
        $empleado->email=$usuario->email;
        $empleado->rut=$request->rut;
        $empleado->edad=$request->edad;
        $empleado->genero=$request->genero;
        $empleado->turno=$request->turno;
        $empleado->status=$request->status;
        $empleado->id_area=$request->id_area;
        $empleado->save();

        flash('<i class="fa fa-check-circle-o"></i> Perfil | Datos de usuario actualizado con éxito!')->success()->important();
        return redirect()->to('usuarios/'.$id.'');
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
