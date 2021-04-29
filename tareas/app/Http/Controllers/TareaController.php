<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $tarea = Tarea::all();
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
        //$tarea = Tarea::create($request->all());
        //return $tarea;
        $tarea = new Tarea;
        if($request->input('metodo')=="Guardar"){
	        $tarea->fechacreacion = date('Y-m-d');
	        $tarea->descripcion = $request->input('descripcion');
	        $tarea->estado = $request->input('estado');
	        $tarea->fechalimite = $request->input('fechalimite');
	        $tarea->idusuario = $request->input('idusuario');
	        $tarea->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Request $tarea)
    {
    	
    	if($tarea->idusuario){
    		$resultado = Tarea::where('idusuario', '=', $tarea->idusuario)
    							->orderBy('fechalimite', 'asc')
    							->get();
    		if($tarea->estado){
    			$resultado = Tarea::where('estado', '=', $tarea->estado)
    							->where('idusuario', '=', $tarea->idusuario)
    							->orderBy('fechalimite', 'asc')
    							->get();
    		}
    	}elseif($tarea->estado){
    		$resultado = Tarea::where('estado', '=', $tarea->estado)
    							->orderBy('fechalimite', 'asc')
    							->get();
    	}elseif($tarea->id){
    		$resultado = Tarea::where('id', '=', $tarea->id)
    							->get();
    	}else{
    		$resultado = Tarea::all();
    	}
    	
    	return $resultado;
    	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
    	$tarea = Tarea::findOrFail($request->input('id'));
    	$tarea->descripcion = $request->input('descripcion');
    	$tarea->estado = $request->input('estado');
    	$tarea->fechalimite = $request->input('fechalimite');
    	$tarea->update();
    	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tarea $tarea)
    {
    	$tarea = Tarea::findOrFail($request->input('id'));
    	$tarea->delete();
    }
}
