@extends('layouts.app')

@section('content')
<h3 class="text-center"><strong>Editar Periodo</strong></h3>
    <div class="content">
        
        <form action="{!! action('PeriodoController@update', ['id' => $periodo->id]) !!}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            {!! csrf_field() !!}                
            
            @if (count($errors) > 0)
                @include('layouts.errorsModal')
            @endif
            
            

            

                

            
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('año') ? ' has-error' : '' }}">
                        <label for="nombres">Año*:</label>
                        <input type="text" class="form-control" name="año" id="año" value="{{$periodo->año}}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('periodo') ? ' has-error' : '' }}">
                        <label for="periodo">Periodo*:</label>
                        <select class="form-control" name="periodo" id="periodo" value="{{$periodo->periodo}}">
                            <option value="Periodo_1">Periodo 1</option>
                            <option value="Periodo_2">Periodo 2</option>
                            
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
                        <label for="fecha_inicio">Fecha de Inicio*:</label>
                        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{$periodo->fecha_inicio}}"> 
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('fecha_final') ? ' has-error' : '' }}">
                        <label for="fecha_final">Fecha de Finalización*:</label>
                        <input type="date" class="form-control" name="fecha_final" id="fecha_final" value="{{$periodo->fecha_final}}" >
                    </div>
                </div>
            </div>

            

            <div class="row">
             
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                        <label for="estado">Estado*:</label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="Cerrado">Cerrado</option>
                            <option value="Vigente">Vigente</option>
                            
                        </select>
                    </div>
                </div>
                
            </div>
            


            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-success">Guargar</button>
                    <a href="{{ url('periodos') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection