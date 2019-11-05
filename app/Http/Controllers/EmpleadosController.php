<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use App\Areas;
use App\Departamentos;
use App\User;
use App\Privilegios;

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

        return view('empleados.create',compact('areas'));
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
        $empleado->id_area=$request->id_area;
        $empleado->save();

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
        return view('empleados.edit',compact('empleado','areas','user','privilegios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleados)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleados)
    {
        //
    }
}
