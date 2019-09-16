<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Areas;
class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=Areas::all();

        return view('areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buscar=Areas::where('area',$request->area)->count();
        if ($buscar->count>0) {
            flash('<i class="icon-circle-check"></i> Área ya registrada verifique!')->warning()->important();
            return redirect()->back();
        } else {
            $area=new Areas();
            $area->area=$request->area;
            $area->save();

            flash('<i class="icon-circle-check"></i> Área registrada exitosamente!')->success()->important();
            return redirect()->to('areas');
        }
        
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
        $area=Areas::find($id);

        return view('areas.edit',compact('area'));
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
        $buscar=Areas::where('area',$request->area)->where('id','<>',$id)->count();
        if ($buscar->count>0) {
            flash('<i class="icon-circle-check"></i> Área ya registrada verifique!')->warning()->important();
            return redirect()->back();
        } else {
            $area= Areas::find($id);
            $area->area=$request->area;
            $area->save();

            flash('<i class="icon-circle-check"></i> Área actualizada exitosamente!')->success()->important();
            return redirect()->to('areas');
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
