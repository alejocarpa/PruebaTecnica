<?php

namespace App\Http\Controllers;

use App\Auntenticacion;
use Illuminate\Http\Request;

class AuntenticacionController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auntenticacion  $auntenticacion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $auntenticacion)
    {
    	$usuario = $auntenticacion->usuario;
    	$clave = $auntenticacion->clave;
    	
    	if($auntenticacion->usuario){
    		$resultado = Auntenticacion::where('clave', '=', $auntenticacion->clave)
    						->where('usuario', '=', $auntenticacion->usuario)
				    		->get();
    	}else{
    		$resultado = 0;
    	}
    	 
    	return $resultado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auntenticacion  $auntenticacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Auntenticacion $auntenticacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auntenticacion  $auntenticacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auntenticacion $auntenticacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auntenticacion  $auntenticacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auntenticacion $auntenticacion)
    {
        //
    }
}
