<?php

namespace App\Http\Controllers;

use App\Docente;
use Illuminate\Http\Request;
use App\Http\Requests\DocentesRequest;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::paginate(10);
        return view('docentes.index', ['docentes' => $docentes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$docente = new Docente();
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocentesRequest $request)
    {
        $docente = new Docente;
        if($request->has('email_personal'))
        {
            dd($request->email_personal);
            $docente->email_personal = $request->email_personal;
        }
        $docente->abreviatura = $request->abreviatura;
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->identificacion = $request->identificacion;
        $docente->tipo_identificacion = $request->tipo_identificacion;
        $docente->email_institucional = $request->email_institucional;
        $docente->celular = $request->celular;
        $docente->telefono = $request->telefono;
        $docente->nacionalidad = $request->nacionalidad;
        $docente->residencia = $request->residencia;
        $docente->direccion = $request->direccion;
        $docente->tipo_contrato = $request->tipo_contrato;
        $docente->estado = $request->estado;

        if($docente->save())
            return redirect('/docentes');
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
        //
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
        //
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
