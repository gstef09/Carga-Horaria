<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::paginate(5);
        return view('periodos.index', ['periodos' => $periodos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periodos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Periodo;
        $p->año = $request->año;
        $p->periodo = $request->periodo;
        $p->estado = $request->estado;
        $p->fecha_inicio = $request->fecha_inicio;
        $p->fecha_final =$request->fecha_final;

        if($p->save())
            return redirect('/periodos');
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
        $periodo = Periodo::findOrFail($id);
        return view('periodos.show',['periodo'=>$periodo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodo = Periodo::findOrFail($id);
        return view('periodos.edit',['periodo'=>$periodo]);
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
        $p = Periodo::findOrFail($id);
        $p->año = $request->año;
        $p->periodo = $request->periodo;
        $p->estado = $request->estado;
        $p->fecha_inicio = $request->fecha_inicio;
        $p->fecha_final =$request->fecha_final;

        if($p->save())
            return redirect('/periodos');
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
        //
    }
}
