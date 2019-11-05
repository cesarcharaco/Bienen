<?php

namespace App\Http\Controllers;

use App\Actividades;
use App\ActividadesProceso;
use App\Comentarios;
use App\Planificacion;
use App\Areas;
use App\Gerencias;
use App\ArchivosPlan;
use App\ActividadesAdjuntos;
use App\Http\Requests\FilesRequest;
use Illuminate\Http\Request;
use App\Empleados;
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
        //dd($request->id_actividad_act);
        if ($request->id_actividad_act=="") {
            //dd("sasas");
            
        //dd($request->all());
        //validando entrada de archivos e imagenes para la actividad
         /*$this->validate($request, [
            'archivos.*' => 'nullable|mimes:doc,pdf,docx,zip',
            'imagenes.*' => 'nullable|mimes:png,jpg,jpeg',
        ]);*/
        $planificacion=Planificacion::find($request->id_planificacion);
        $fecha_vencimiento=$this->calcular_fecha($request->dia,$planificacion->semana);
        $area=Areas::find($request->id_area);
        //dd($request->id_actividad."-".$request->tipo);
        //primero verificar si se elegió una PM01 ya registrada
        if ($request->id_actividad!=0 && $request->tipo=="PM01") {
            # se eligió una actividad PM01 ya registrada
            $actividad=Actividades::find($request->id_actividad);
            //dd($actividad);
            //buscando si ya existe esa actividad registrada a esa planificacion para ese dia
            $buscar=Actividades::where('id_planificacion',$request->id_planificacion)->where('dia',$request->dia)->where('id_area',$actividad->id_area)->where('id',$request->id_actividad)->get();
            //dd(count($buscar));
            if (count($buscar)==0) {
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
                $actividad2->save();
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
                $archivos->id_actividad=$actividad2->id;
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
                    $archivos->id_actividad=$actividad2->id;
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
        }else{
            #en caso de que sea una actualización de la actividad
            //dd("actualización");
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
        //dd($request->id_actividad_act);
        if ($request->id_actividad!=0 && $request->tipo=="PM01") {
            # se eligió una actividad PM01 ya registrada
            $actividad=Actividades::find($request->id_actividad);
            //dd($actividad);
            //buscando si ya existe esa actividad registrada a esa planificacion para ese dia
            $buscar=Actividades::where('id_planificacion',$request->id_planificacion)->where('dia',$request->dia)->where('id_area',$actividad->id_area)->where('id','<>',$request->id_actividad_act)->get();
            //dd($buscar);
            if (count($buscar)==0) {
                $actividad2= Actividades::find($request->id_actividad_act);
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
                $actividad2->save();
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
                $archivos->id_actividad=$actividad2->id;
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
                    $archivos->id_actividad=$actividad2->id;
                    $archivos->nombre=$names_imgs[$i];
                    $archivos->url=$urls_imgs[$i];
                    $archivos->tipo="img";
                    $archivos->save();
                }
               }
               
               flash('<i class="icon-circle-check"></i> La Actividad fue actualizada para el área '.$area->area.' en la Semana '.$planificacion->semana.', de manera exitosa!')->success()->important();
                    return redirect()->to('planificacion');
            } else {
                
                    $planificacion=Planificacion::find($request->id_planificacion);
                    flash('<i class="icon-circle-check"></i> La Actividad ya existe registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.'!')->warning()->important();
                    return redirect()->to('planificacion');
            }
            

        } else {
            if ($request->id_actividad==0 && $request->tipo=="PM01") {
                # se elegió registrar una nueva actividad tipo PM01
                $buscar=Actividades::where('task',$request->task)->where('id_planificacion',$request->id_planificacion)->where('dia',$request->dia)->where('id_area',$request->id_area)->where('id','<>',$request->id_actividad_act)->first();
                if(empty($buscar)){
                    //registrando una nueva actividad PM01 en la planificación
                $actividad=Actividades::find($request->id_actividad_act);
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
               
               flash('<i class="icon-circle-check"></i> La Actividad fue actualizada para el área '.$area->area.' en la Semana '.$planificacion->semana.', de manera exitosa!')->success()->important();
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
                $buscar=Actividades::where('task',$request->task)->where('id_planificacion',$request->id_planificacion)->where('dia',$request->dia)->where('id_area',$request->id_area)->where('id','<>',$request->id_actividad_act)->first();
                if (empty($buscar)) {
                                    
                $actividad=Actividades::find($request->id_actividad_act);
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
            
               flash('<i class="icon-circle-check"></i> La Actividad fue actualizada para el área '.$area->area.' en la Semana '.$planificacion->semana.', de manera exitosa!')->success()->important();
                    return redirect()->to('planificacion');
                } else {
                 
                    $planificacion=Planificacion::find($request->id_planificacion);
                    flash('<i class="icon-circle-check"></i> La Actividad ya existe registrada para el área '.$area->area.' en la Semana '.$planificacion->semana.'!')->warning()->important();
                    return redirect()->to('planificacion');   
                }
            }
            
        }//fin de else de PM01 registrada
        }
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

    public function mis_archivos($id_actividad)
    {
        return $archivos=ArchivosPlan::where('id_actividad',$id_actividad)->where('tipo','file')->get();
    }

    public function mis_imagenes($id_actividad)
    {
        return $imagenes=ArchivosPlan::where('id_actividad',$id_actividad)->where('tipo','img')->get();
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

    public function eliminar_archivos($id_archivo)
    {
        $archivo=ArchivosPlan::find($id_archivo);
        $tipo=$archivo->tipo;
        $id_actividad=$archivo->id_actividad;
        unlink(public_path().'/'.$archivo->url);
        $archivo->delete();
        

            if ($tipo=="img") {
                return $actividad=ArchivosPlan::where('id_actividad',$id_actividad)->where('tipo',$tipo)->get();
            } else {
                return $actividad=ArchivosPlan::where('id_actividad',$id_actividad)->where('tipo',$tipo)->get();
            }
         

    }
    public function buscar_empleados($id_area)
    {
        return $empleados=Empleados::where('status','Activo')->where('id_area',$id_area)->get();
    }

    public function asignar_actividad(Request $request)
    {
        //dd($request->all());

        $empleado=Empleados::find($request->id_empleado);
        $actividad=Actividades::find($request->id_actividad_asig);

        $hallado=0;
        $asignados=0;
        foreach ($actividad->empleados as $key) {
            if ($key->pivot->id_empleado==$request->id_empleado) {
                $hallado++;
            }        
            $asignados++;     
        }
        
        if ($hallado==0 and $asignados<$actividad->cant_personas) {
        
        \DB::table('actividades_proceso')->insert([
            'id_actividad' => $request->id_actividad_asig,
            'id_empleado' => $request->id_empleado,
            'hora_inicio' => "'".date('Y-m-d')." ".date('H:i:s')."'"
        ]);

        flash('<i class="icon-circle-check"></i> La Actividad: '.$actividad->task.' <br> Fue Asignada al empleado:'.$empleado->apellidos.', '.$empleado->nombres.', RUT: '.$empleado->rut.'!')->success()->important();
                    return redirect()->to('planificacion/create');   
            
        } else {
            if ($hallado>0) {
            flash('<i class="icon-circle-check"></i> La Actividad: '.$actividad->task.' <br>ya ha sido Asignada al empleado:'.$empleado->apellidos.', '.$empleado->nombres.', RUT: '.$empleado->rut.'!')->warning()->important();
                    return redirect()->to('planificacion/create'); 
            } else {
                if ($asignados==$actividad->cant_personas) {
                    
                flash('<i class="icon-circle-check"></i> La Actividad: '.$actividad->task.'  ya alcanzó el límite de empleados ha asignarse!')->warning()->important();
                    return redirect()->to('planificacion/create'); 
                }
            }
            
        }
    }

    public function buscar_comentarios($id_actividad,$id_empleado)
    {
        $actividad=ActividadesProceso::where('id_actividad',$id_actividad)->where('id_empleado',$id_empleado)->first();
        return $comentarios=\DB::table('actividades_comentarios')->join('users','users.id','=','actividades_comentarios.id_usuario')->select('actividades_comentarios.*','users.name','users.email')->where('actividades_comentarios.id_actv_proceso',$actividad->id)->get();

    }

    public function registrar_comentario(Request $request)
    {
        if ($request->isMethod('post')){
        $actividad=ActividadesProceso::where('id_actividad',$request->id_actividad)->where('id_empleado',$request->id_empleado)->first();
        $comentar= new Comentarios();   
        $comentar->id_actv_proceso=$actividad->id;
        $comentar->id_usuario=$request->id_usuario;
        $comentar->comentario=$request->comentario;
        $comentar->save();
            
        return $comentarios=\DB::table('actividades_comentarios')->join('users','users.id','=','actividades_comentarios.id_usuario')->select('actividades_comentarios.*','users.name','users.email')->where('actividades_comentarios.id_actv_proceso',$actividad->id)->get();
        }
    }

    public function eliminar_comentario($id_actv_proceso,$id_comentario)
    {
        $comentar=Comentarios::find($id_comentario);
        $comentar->delete();

        $actividad=ActividadesProceso::find($id_actv_proceso);
        return $comentarios=\DB::table('actividades_comentarios')->join('users','users.id','=','actividades_comentarios.id_usuario')->select('actividades_comentarios.*','users.name','users.email')->where('actividades_comentarios.id_actv_proceso',$actividad->id)->get();
    }

    public function buscar_archivos($id_actividad)
    {
        return $actividad=ArchivosPlan::where('id_actividad',$id_actividad)->where('tipo','file')->get();
    }

    public function buscar_imagenes($id_actividad)
    {
        return $actividad=ArchivosPlan::where('id_actividad',$id_actividad)->where('tipo','img')->get();
    }

    public function registrar_archivos(Request $request)
    {
        //dd($request->all());
        if ($request->isMethod('post')){
        $actividad=ActividadesProceso::where('id_actividad',$request->id_actividad)->where('id_empleado',$request->id_empleado)->first();
           foreach($request->archivos as $file){
                $codigo=$this->generarCodigo();
                $name=$codigo."_".$file->getClientOriginalName();
                $file->move(public_path().'/files_actividades/',$name);  
                $names_files[] = $name;
                $urls_files[] ='files_actividades/'.$name;

            }
            for ($i=0; $i < count($names_files); $i++) { 
                $archivos=new ActividadesAdjuntos();
                $archivos->id_actv_proceso=$actividad->id;
                $archivos->id_usuario=$request->id_usuario;
                $archivos->nombre=$names_files[$i];
                $archivos->url=$urls_files[$i];
                $archivos->tipo="file";
                $archivos->save();
            }
            
        return $archivos=\DB::table('actividades_adjuntos')->join('users','users.id','=','actividades_adjuntos.id_usuario')->join('actividades_proceso','actividades_proceso.id','=','actividades_adjuntos.id_actv_proceso')->join('actividades','actividades.id','=','actividades_proceso.id_actividad')->select('actividades_adjuntos.*','users.name','users.email')->where('actividades.id',$request->id_actividad)->get();
        }
    }
    public function registrar_imagenes(Request $request)
    {
        //dd($request->all());
        if ($request->isMethod('post')){
        $actividad=ActividadesProceso::where('id_actividad',$request->id_actividad)->where('id_empleado',$request->id_empleado)->first();
           foreach($request->imagenes as $file){
                $codigo=$this->generarCodigo();
                $name=$codigo."_".$file->getClientOriginalName();
                $file->move(public_path().'/imgs_actividades/',$name);  
                $names_files[] = $name;
                $urls_files[] ='imgs_actividades/'.$name;

            }
            for ($i=0; $i < count($names_files); $i++) { 
                $archivos=new ActividadesAdjuntos();
                $archivos->id_actv_proceso=$actividad->id;
                $archivos->id_usuario=$request->id_usuario;
                $archivos->nombre=$names_files[$i];
                $archivos->url=$urls_files[$i];
                $archivos->tipo="img";
                $archivos->save();
            }
            
        return $archivos=\DB::table('actividades_adjuntos')->join('users','users.id','=','actividades_adjuntos.id_usuario')->join('actividades_proceso','actividades_proceso.id','=','actividades_adjuntos.id_actv_proceso')->join('actividades','actividades.id','=','actividades_proceso.id_actividad')->select('actividades_adjuntos.*','users.name','users.email')->where('actividades.id',$request->id_actividad)->get();
        }
    }
    public function buscar_archivos_adjuntos($id_actividad)
    {
        return $archivos=\DB::table('actividades_adjuntos')->join('users','users.id','=','actividades_adjuntos.id_usuario')->join('actividades_proceso','actividades_proceso.id','=','actividades_adjuntos.id_actv_proceso')->join('actividades','actividades.id','=','actividades_proceso.id_actividad')->select('actividades_adjuntos.*','users.name','users.email')->where('actividades.id',$id_actividad)->where('actividades_adjuntos.tipo','file')->get();
    }
    public function buscar_imagenes_adjuntas($id_actividad)
    {
        return $archivos=\DB::table('actividades_adjuntos')->join('users','users.id','=','actividades_adjuntos.id_usuario')->join('actividades_proceso','actividades_proceso.id','=','actividades_adjuntos.id_actv_proceso')->join('actividades','actividades.id','=','actividades_proceso.id_actividad')->select('actividades_adjuntos.*','users.name','users.email')->where('actividades.id',$id_actividad)->where('actividades_adjuntos.tipo','img')->get();
    }

    public function eliminar_archivos_adjuntos($id_archivo)
    {
        $archivo=ActividadesAdjuntos::find($id_archivo);
        $tipo=$archivo->tipo;
        $id_actividad=$archivo->id_actividad;
        unlink(public_path().'/'.$archivo->url);
        $archivo->delete();
        

            if ($tipo=="img") {
                return $archivos=\DB::table('actividades_adjuntos')->join('users','users.id','=','actividades_adjuntos.id_usuario')->join('actividades_proceso','actividades_proceso.id','=','actividades_adjuntos.id_actv_proceso')->join('actividades','actividades.id','=','actividades_proceso.id_actividad')->select('actividades_adjuntos.*','users.name','users.email')->where('actividades.id',$id_actividad)->where('actividades_adjuntos.tipo',$tipo)->get();
            } else {
                return $archivos=\DB::table('actividades_adjuntos')->join('users','users.id','=','actividades_adjuntos.id_usuario')->join('actividades_proceso','actividades_proceso.id','=','actividades_adjuntos.id_actv_proceso')->join('actividades','actividades.id','=','actividades_proceso.id_actividad')->select('actividades_adjuntos.*','users.name','users.email')->where('actividades.id',$id_actividad)->where('actividades_adjuntos.tipo',$tipo)->get();
            }
         

    }

    public function finalizar($opcion,$id_actividad)
    {
        if ($opcion==1) {
            # finalizar
            $actividad=ActividadesProceso::where('id_actividad',$id_actividad)->first();
            $actividad->status="Iniciada";
            $actividad->hora_finalizada="";
            $actividad->save();

            $act=Actividades::find($id_actividad);
            $act->realizada="No";
            $act->save();
        } else {
            # no finalizada
            $actividad=ActividadesProceso::where('id_actividad',$id_actividad)->first();
            $actividad->status="Finalizada";
            $actividad->hora_finalizada="".date('Y-m-d H:i:s')."";
            $actividad->save();

            $act=Actividades::find($id_actividad);
            $act->realizada="Si";
            $act->save();
        }
         return $opcion;
    }
}
