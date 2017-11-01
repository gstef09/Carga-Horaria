@extends('layouts.app')

@section('content')
<h3 class="text-center"><strong>Editar Materia</strong></h3>
    <div class="content">
        
    <form action="{!! action('MateriasController@update', ['id' => $materia->id]) !!}" method="POST">
        <input name="_method" type="hidden" value="PUT">
        {!! csrf_field() !!}                
        
        @if (count($errors) > 0)
            @include('layouts.errorsModal')
        @endif
            
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('codigo_materia') ? ' has-error' : '' }}">
                        <label for="codigo_materia">Codigo*:</label>
                        <input type="text" class="form-control" name="codigo_materia" id="codigo_materia" value="{{ $materia->codigo_materia }}" >
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('materia') ? ' has-error' : '' }}">
                        <label for="materia">Materia*:</label>
                        <input type="text" class="form-control" name="materia" id="materia" value="{{ $materia->materia}}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('nivel') ? ' has-error' : '' }}">
                        <label for="nivel">Nivel*:</label>
                        <select class="form-control" name="nivel" id="nivel" value="{{ $materia->nivel }}">
                            <option value="Primero">Primero</option>
                            <option value="Segundo">Segundo</option>
                            <option value="Tercero">Tercero</option>
                            <option value="Cuarto">Cuarto</option>
                            <option value="Quinto">Quinto</option>
                            <option value="Sexto">Sexto</option>
                            <option value="Séptimo">Séptimo</option>
                            <option value="Octavo">Octavo</option>
                            <option value="Noveno">Noveno</option>
                            <option value="Décimo">Décimo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('creditos') ? ' has-error' : '' }}">
                        <label for="creditos">Créditos*:</label>
                        <input type="text" class="form-control" name="creditos" id="creditos" value="{{ $materia->creditos }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-3">
                    <div class="form-group{{ $errors->has('tipo_materia') ? ' has-error' : '' }}">
                        <label for="residencia">Tipo de Materia*:</label>
                        <select name="tipo_materia" id="tipo_materia" value="{{ $materia->tipo_materia }}" >
                            <option value="Formación_Básica">Formación Básica</option>
                            <option value="Formación_Humana">Formación_Humana</option>
                            <option value="Seminarios_Curriculres">Seminarios Curriculres</option>
                            <option value="Formación_Profesional">Formación Profesional</option>
                        </select>
                    </div>
                </div>

                
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Guargar</button>
                </div>
            </div>
        </form>
    </div>
@endsection