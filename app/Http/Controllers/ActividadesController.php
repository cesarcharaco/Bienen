<?php

namespace App\Http\Controllers;

use App\Actividades;
use App\Planificacion;
use App\Areas;
use App\Gerencias;
use App\ArchivosPlan;
use App\Http\Requests\FilesRequest;
use Illuminate\Http\Request;
date_default_timezone_set('UTC');
class ActividadesController extends Controller
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

    public function buscar()
    {
        return $actividades=Actividades::where('tipo','PM01')->get();
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
    protected function generarCodigo() {
     $key = '';
     $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $max = strlen($pattern)-1;
     for($i=0;$i < 4;$i++) $key .= $pattern{mt_rand(0,$max)};
     return $key;
    }
    public function store(Request $request)
    {
        //dd($request->all());
        //validando entrada de archivos e imagenes para la actividad
         /*$this->validate($request, [
            'archivos.*' => 'nullable|mimes:doc,pdf,docx,zip',
            'imagenes.*' => 'nullable|mimes:png,jpg,jpeg',
        ]);*/
        $planificacion=Planificacion::find($request->id_planificacion);
        $fecha_vencimiento=$this->calcular_fecha($request->dia,$planificacion->semana);
        $area=Areas::find($request->id_area);
        //primero verificar si se elegió una PM01 ya registrada
        if ($request->id_actividad!=0 && $request->tipo=="PM01") {
            # se eligió una actividad PM01 ya registrada
            $actividad=Actividades::find($request->id_actividad);
            //dd($actividad);
            //buscando si ya existe esa actividad registrada a esa planificacion para ese dia
            $buscar=Actividades::where('id_planificacion',$request->id_planificacion)->where('dia',$request->dia)->where('id_area',$actividad->id_area)->where('id_actividad',$request->id_actividad)->get();
            //dd($buscar);
            if (empty($buscar)) {
                $actividad2=new Actividades();
                $actividad2->task=$actividad->task;
                $actividad2->descripcion=$actividad->descripcion;
                $actividad2->turno=$request->turno;
                $actividad2->fecha_vencimiento=$fecha_vencimiento;
                $actividad2->duracion_pro=$actividad->duracion_pro;
                $actividad2->cant_personas=$actividad->cant_personas;
                $actividad2->duracion_real=$actividad->duracion_real;
                $actividad2->dia=$request->dia;
                $actividad2->tipo=$actividad->tipo;
                $actividad2->realizada=$request->realizada;
                $actividad2->observacion1=$request->observacion1;
                $actividad2->observacion2=$request->observacion2;
                $actividad2->id_planificacion=$request->id_planificacion;
                $actividad2->id_area=$actividad->id_area;
                $actividad->save();
                //en  caso de agregar archivos o imagenes
        //dd($request->file('archivos'));
        if ($request->archivos!==null) {
               foreach($request->file('archivos') as $file){
                $codigo=$this->generarCodigo();
                $name=$codigo."_".$file->getClientOriginalName();
                $file->move(public_path().'/files_actividades/',$name);  
                $names_files[] = $name;
                $urls_files[] ='files_actividades/'.$name;

            }
            for ($i=0; $i < count($names_files); $i++) { 
                $archivos=new ArchivosPlan();
                $archivos->id_actividad=$actividad->id;
                $archivos->nombre=$names_files[$i];
                $archivos->url=$urls_files[$i];
                $archivos->tipo="file";
                $archivos->save();
            }
           }
            if($request->imagenes!==null) {
                foreach($request->file('imagenes') as $file){

                $name=$codigo."_".$file->getClientOriginalName();
                $file->move(public_path().'/imgs_actividades/', $name);  
                $names_imgs[] = $name;
                $urls_imgs[] ='imgs_actividades/'.$name;

                }
                for ($i=0; $i < count($names_files); $i++) { 
                    $archivos=new ArchivosPlan();
                    $archivos->id_actividad=$actividad->id;
                    $archivos->nombre=$names_imgs[$i];
                    $archivos->url=$urls_imgs[$i];
                    $archivos->tipo="img";
                    $archivos->save();
                }
               }
               
               flash('<i class="icon-circle-check"></i> La Actividad fue registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.', de manera exitosa!')->success()->important();
                    return redirect()->to('planificacion');
            } else {
                
                    $planificacion=Planificacion::find($request->id_planificacion);
                    flash('<i class="icon-circle-check"></i> La Actividad ya existe registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.'!')->warning()->important();
                    return redirect()->to('planificacion');
            }
            

        } else {
            if ($request->id_actividad==0 && $request->tipo=="PM01") {
                # se elegió registrar una nueva actividad tipo PM01
                $buscar=Actividades::where('task',$request->task)->where('id_planificacion',$request->id_planificacion)->where('dia',$request->dia)->where('id_area',$request->id_area)->first();
                if(empty($buscar)){
                    //registrando una nueva actividad PM01 en la planificación
                $actividad=new Actividades();
                $actividad->task=$request->task;
                $actividad->descripcion=$request->descripcion;
                $actividad->turno=$request->turno;
                $actividad->fecha_vencimiento=$fecha_vencimiento;
                $actividad->duracion_pro=$request->duracion_pro;
                $actividad->cant_personas=$request->cant_personas;
                $actividad->duracion_real=$request->duracion_real;
                $actividad->dia=$request->dia;
                $actividad->tipo=$request->tipo;
                $actividad->realizada=$request->realizada;
                $actividad->observacion1=$request->observacion1;
                $actividad->observacion2=$request->observacion2;
                $actividad->id_planificacion=$request->id_planificacion;
                $actividad->id_area=$request->id_area;
                $actividad->save();

                //en  caso de agregar archivos o imagenes
        //dd($request->file('archivos'));
        if ($request->archivos!==null) {
               foreach($request->file('archivos') as $file){
                $codigo=$this->generarCodigo();
                $name=$codigo."_".$file->getClientOriginalName();
                $file->move(public_path().'/files_actividades/',$name);  
                $names_files[] = $name;
                $urls_files[] ='files_actividades/'.$name;

            }
            for ($i=0; $i < count($names_files); $i++) { 
                $archivos=new ArchivosPlan();
                $archivos->id_actividad=$actividad->id;
                $archivos->nombre=$names_files[$i];
                $archivos->url=$urls_files[$i];
                $archivos->tipo="file";
                $archivos->save();
            }
           }
            if($request->imagenes!==null) {
                foreach($request->file('imagenes') as $file){

                $name=$codigo."_".$file->getClientOriginalName();
                $file->move(public_path().'/imgs_actividades/', $name);  
                $names_imgs[] = $name;
                $urls_imgs[] ='imgs_actividades/'.$name;

                }
                for ($i=0; $i < count($names_files); $i++) { 
                    $archivos=new ArchivosPlan();
                    $archivos->id_actividad=$actividad->id;
                    $archivos->nombre=$names_imgs[$i];
                    $archivos->url=$urls_imgs[$i];
                    $archivos->tipo="img";
                    $archivos->save();
                }
               }
               
               flash('<i class="icon-circle-check"></i> La Actividad fue registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.', de manera exitosa!')->success()->important();
                    return redirect()->to('planificacion');
                }else{
                    
                    $planificacion=Planificacion::find($request->id_planificacion);
                    flash('<i class="icon-circle-check"></i> La Actividad ya existe registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.'!')->warning()->important();
                    return redirect()->to('planificacion');
                }
            } else {
                # se eligió registrar una actividad distinta de PM01
                //dd($request->all());
                //primero calculando la fecha de vencimiento de una actividad
                $planificacion=Planificacion::find($request->id_planificacion);
                $fecha_vencimiento=$this->calcular_fecha($request->dia,$planificacion->semana);
                //dd($fecha_vencimiento);
                $buscar=Actividades::where('task',$request->task)->where('id_planificacion',$request->id_planificacion)->where('dia',$request->dia)->where('id_area',$request->id_area)->first();
                if (empty($buscar)) {
                                    
                $actividad=new Actividades();
                $actividad->task=$request->task;
                $actividad->descripcion=$request->descripcion;
                $actividad->turno=$request->turno;
                $actividad->fecha_vencimiento=$fecha_vencimiento;
                $actividad->duracion_pro=$request->duracion_pro;
                $actividad->cant_personas=$request->cant_personas;
                $actividad->duracion_real=$request->duracion_real;
                $actividad->dia=$request->dia;
                $actividad->tipo=$request->tipo;
                $actividad->realizada=$request->realizada;
                $actividad->observacion1=$request->observacion1;
                $actividad->observacion2=$request->observacion2;
                $actividad->id_planificacion=$request->id_planificacion;
                $actividad->id_area=$request->id_area;
                $actividad->save();

                //en  caso de agregar archivos o imagenes
        //dd($request->file('archivos'));
        if ($request->archivos!==null) {
               foreach($request->file('archivos') as $file){
                $codigo=$this->generarCodigo();
                $name=$codigo."_".$file->getClientOriginalName();
                $file->move(public_path().'/files_actividades/',$name);  
                $names_files[] = $name;
                $urls_files[] ='files_actividades/'.$name;

            }
            for ($i=0; $i < count($names_files); $i++) { 
                $archivos=new ArchivosPlan();
                $archivos->id_actividad=$actividad->id;
                $archivos->nombre=$names_files[$i];
                $archivos->url=$urls_files[$i];
                $archivos->tipo="file";
                $archivos->save();
            }
           }
        if($request->imagenes!==null) {
            foreach($request->file('imagenes') as $file){

            $name=$codigo."_".$file->getClientOriginalName();
            $file->move(public_path().'/imgs_actividades/', $name);  
            $names_imgs[] = $name;
            $urls_imgs[] ='imgs_actividades/'.$name;

            }
            for ($i=0; $i < count($names_files); $i++) { 
                $archivos=new ArchivosPlan();
                $archivos->id_actividad=$actividad->id;
                $archivos->nombre=$names_imgs[$i];
                $archivos->url=$urls_imgs[$i];
                $archivos->tipo="img";
                $archivos->save();
            }
           }
            
               flash('<i class="icon-circle-check"></i> La Actividad fue registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.', de manera exitosa!')->success()->important();
                    return redirect()->to('planificacion');
                } else {
                 
                    $planificacion=Planificacion::find($request->id_planificacion);
                    flash('<i class="icon-circle-check"></i> La Actividad ya existe registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.'!')->warning()->important();
                    return redirect()->to('planificacion');   
                }
            }
            
        }//fin de else de PM01 registrada
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(Actividades $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit($id_actividad)
    {
        return $actividad=Actividades::where('id',$id_actividad)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividades $actividades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividades $actividades)
    {
        //
    }

    protected function calcular_fecha($dia,$semana)
    {
        //funcion par calcular la fecha de vencimiento de una actividad
        $num=0;
        switch ($dia) {
            case 'Mié':
                $num=3;
                break;
            case 'Jue':
                $num=4;
                break;
            case 'Vie':
                $num=5;
                break;
            case 'Sáb':
                $num=6;
                break;
            case 'Dom':
                $num=7;
                break;
            case 'Lun':
                $num=1;
                $semana+=1;
                break;
            case 'Mar':
                $num=2;
                $semana+=1;
                break;
        }
        $anio=date('Y');
        $fecha=date("Y-m-d",strtotime($anio."-W".$semana."-".$num));

        return $fecha;

    }
}
