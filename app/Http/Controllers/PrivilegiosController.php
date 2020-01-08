<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privilegios;
use App\User;
use App\Empleados;
use App\UsuariosHasPrivilegios;

class PrivilegiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UserPrivilegios=UsuariosHasPrivilegios::where('id','<>',0)->groupBy()->get();
        $privilegios=Privilegios::all();
        $empleados=Empleados::all();
        $user=User::all();

        return View('privilegios.index', compact('privilegios','user','UserPrivilegios','empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function buscar_privilegios($id_empleado)
    {
        return $empleados=\DB::table('usuarios_has_privilegios')->select('usuarios_has_privilegios.*')->where('usuarios_has_privilegios.id_empleado',$id_empleado)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    public function editarPrivilegio(Request $request)
    {
        // dd($request->all());

        $user=User::find($request->id_empleado);

        if(\Auth::user()->tipo_user == 'Admin'){
            if($user->superUser === 'Eiche'){
                flash('<i class="icon-circle-check"></i> No se pueden editar los permisos de este usuario! Incidente reportado!')->warning()->important();
                return redirect()->back();
            }else{

                if($user->tipo_user != 'Admin' || \Auth::user()->superUser === 'Eiche'){
                    $UserPrivilegios=UsuariosHasPrivilegios::where('id_usuario',$request->id_empleado)->where('id_privilegio', $request->id_privilegio)->first();

                    if ($UserPrivilegios->status== 'Si') {
                        $UserPrivilegios->status = 'No';
                        $UserPrivilegios->save();
                    }else{
                        $UserPrivilegios->status = 'Si';
                        $UserPrivilegios->save();
                    }


                    flash('<i class="icon-circle-check"></i> Permisos del empleado modificado con éxito!')->success()->important();
                    return redirect()->back();
                }else{
                    flash('<i class="icon-circle-check"></i> No se puede modificar los permisos de un Admin!')->warning()->important();
                    return redirect()->back();
                }
            }
        }else{
            flash('<i class="icon-circle-check"></i> No está autorizado para usar esta funcionalidad!')->danger()->important();
                return redirect()->back();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
