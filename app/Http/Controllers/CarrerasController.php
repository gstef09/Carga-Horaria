<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Facultad;
class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = Facultad::all();
        return view('carreras.index', ['facultades' => $facultades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrera = new Carrera;
        $carrera->nombre = $request->nombre;
        $carrera->facultad_id = $request->facultad_id;
        $carrera->save();
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera = Carrera::findOrFail($id);
        return $carrera;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.edit',['carrera' => $carrera]);
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
        $carrera->nombre = $request->nombre;
        $carrera->facultad_id = $request->facultad_id;
        $carrera->update();
        return;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrera = Carrera::findOrFail($id);
        $carrera->delete();
    }
    public function obtenerCarreras(){
        $carreras = Carrera::all();
        $data = [];
        foreach($carreras as $c){
            $ca=array();
            $ca["id"] = $c->id;
            $ca["nombre"] = $c->nombre;
            $ca["facultad"] = $c->facultad;
           
            
            array_push($data,$ca);
        }
        return $data;
    }
}
