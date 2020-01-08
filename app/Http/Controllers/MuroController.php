<?php

namespace App\Http\Controllers;

use App\Muro;
use Illuminate\Http\Request;

class MuroController extends Controller
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
        $muro= new Muro();
        $muro->id_empleado=\Auth::User()->id;
        $muro->comentario=$request->comentario;
        $muro->fecha=date('Y-m-d');
        $muro->hora=date('H:m');
        $muro->save();

        return redirect()->to('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Muro  $muro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $muro = Muro::find($id)->delete();
        return redirect()->to('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Muro  $muro
     * @return \Illuminate\Http\Response
     */
    public function edit(Muro $muro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Muro  $muro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muro $muro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Muro  $muro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('all');
    }
}
