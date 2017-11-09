<?php

namespace App\Http\Controllers;
use App\Facultad;

use Illuminate\Http\Request;

class FacultadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('facultades.index');
    }
    public function obtenerFacultades()
    {
        $facultades = Facultad::all();
        $data = [];
        foreach($facultades as $f){
            $ca=array();
            $ca["id"] = $f->id;
            $ca["nombre"] = $f->nombre;
            $ca["carreras"] = $f->carreras;
           
            
            array_push($data,$ca);
        }
        return $data;
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
        $facultad = new Facultad;
        $facultad->nombre = $request->nombre;
        if($facultad->save())
            return redirect('/facultades');
        else
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultad = Facultad::findOrFail($id);  
        return($facultad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facultad = Facultad::findOrFail($id);   
        return view('facultades.edit',['facultad' => $facultad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $this->validate($request, ['nombre' => 'required',]);
        Facultad::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
    }
}
