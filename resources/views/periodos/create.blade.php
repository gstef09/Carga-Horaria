@extends('layouts.app')

@section('content')
<h3 class="text-center"><strong>Crear Nuevo Periodo</strong></h3>
    <div class="content">
        
        <form action="{{ url('/periodos') }}" method="POST">
            {!! csrf_field() !!}                
            
            @if (count($errors) > 0)
                @include('layouts.errorsModal')
            @endif
            
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('año') ? ' has-error' : '' }}">
                        <label for="nombres">Año*:</label>
                        <input type="text" class="form-control" name="año" id="año" value="{{ old('año') }}" placeholder="yyyy">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('periodo') ? ' has-error' : '' }}">
                        <label for="periodo">Periodo*:</label>
                        <select class="form-control" name="periodo" id="periodo">
                            <option value="Periodo_1">Periodo 1</option>
                            <option value="Periodo_1">Periodo 2</option>
                            
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
                        <label for="fecha_inicio">Fecha de Inicio*:</label>
                        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('fecha_final') ? ' has-error' : '' }}">
                        <label for="fecha_final">Fecha de Finalización*:</label>
                        <input type="date" class="form-control" name="fecha_final" id="fecha_final" >
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
                    <button type="submit" class="btn btn-primary">Guargar</button>
                </div>
            </div>
        </form>
    </div>
@endsection