<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $nota= new Notas();
        $nota->id_empleado=\Auth::User()->id;
        $nota->notas=$request->nota;
        $nota->fecha=date('Y-m-d');
        $nota->save();

        return redirect()->to('home');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $datos = $request['notas'];
        foreach($datos as $selected){
            dd($selected);
            $notas = Notas::find($selected);
            $notas->delete();
        }
    }
    public function eliminar(Request $request)
    {
        $datos = $request['notas'];
        foreach($datos as $selected){
            //dd($selected);
            $notas = Notas::where('notas',$selected)->delete();
            //$notas->delete();
        }
        return redirect()->to('home');
    }
}
