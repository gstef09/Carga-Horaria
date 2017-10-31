<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::paginate(10);
        return view('matrias.index',['materias'=>$materias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $materia = new Materia;
        $materia->codigo_materia = $request->codigo_materia;
        $materia->materia = $request->materia;
        $materia->nivel = $request->nivel;
        $materia->creditos = $request->creditos;
        $materia->tipo_materia = $request->tipo_materia;

        if($materia->save())
            return redirect('/materias');
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
        $materia =  Materia::findOrFail($id);
        return view('materias.show',['materia'=>$materia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia =  Materia::findOrFail($id);
        return view('materias.edit',['materia'=>$materia]);
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
        $materia = Materia::findOrFail($id);
        $materia->codigo_materia = $request->codigo_materia;
        $materia->materia = $request->materia;
        $materia->nivel = $request->nivel;
        $materia->creditos = $request->creditos;
        $materia->tipo_materia = $request->tipo_materia;

        if($materia->save())
            return redirect('/materias');
        else
            return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia = Materia::findOrFail($id);
        $materia->delete();
    }
}
