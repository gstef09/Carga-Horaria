@extends('layouts.app')

@section('content')
<h3 class="text-center"><strong>Crear Nuevo Docente</strong></h3>
    <div class="content">
        
        <form action="{{ url('/docentes') }}" method="POST">
            {!! csrf_field() !!}                
            
            @if (count($errors) > 0)
                @include('docentes.errorsModal')
            @endif
            
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                        <label for="nombres">Nombres*:</label>
                        <input type="text" class="form-control" name="nombres" id="nombres" value="{{ old('nombres') }}" placeholder="Nombres">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                        <label for="apellidos">Apellidos*:</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos') }}" placeholder="Apellidos">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('tipo_identificaion') ? ' has-error' : '' }}">
                        <label for="tipo_identificacion">Tipo de Identificación*:</label>
                        <select class="form-control" name="tipo_identificacion" id="tipo_identificacion">
                            <option value="Cedula">Cedula</option>
                            <option value="RUC">RUC</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('identificacion') ? ' has-error' : '' }}">
                        <label for="identificacion">Número de Identificación*:</label>
                        <input type="text" class="form-control" name="identificacion" id="identificacion" value="{{ old('identificacion') }}" placeholder="Numero de Identificación">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-offset-3 ">
                    <div class="form-group{{ $errors->has('email_personal') ? ' has-error' : '' }}">
                        <label for="email_personal">correo Personal:</label>
                        <input type="email" class="form-control" name="email_personal" id="email_personal" value="{{ old('email_personal') }}" placeholder="Correo Personal">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('email_institucional') ? ' has-error' : '' }}">
                        <label for="email_institucional">Correo Institucional*:</label>
                        <input type="email" class="form-control" name="email_institucional" id="email_institucional" value="{{ old('email_institucional') }}" placeholder="Correo Intitucional">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                        <label for="celular">Celular*:</label>
                        <input type="text" class="form-control" name="celular" id="celular" value="{{ old('celular') }}" placeholder="Numero de celular">
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <label for="telefono">Teléfono Convencional*:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}" placeholder="Numero de teléfono">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-3">
                    <div class="form-group{{ $errors->has('abreviatura') ? ' has-error' : '' }}">
                        <label for="abreviatura">Abreviatura*:</label>
                        <input type="text" class="form-control" name="abreviatura" id="abreviatura" value="{{ old('abreviatura') }}" placeholder="Abreviatura">
                    </div>
                </div>

                <div class="col-md-2 ">
                    <div class="form-group{{ $errors->has('tipo_contrato') ? ' has-error' : '' }}">
                        <label for="tipo_contrato">Tipo de Contrato*:</label>
                        <select class="form-control" name="tipo_contrato" id="tipo_contrato">
                            <option value="Tiempo_Completo">Tiempo Completo</option>
                            <option value="Medio_Tiempo">Medio Tiempo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 ">
                    <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                        <label for="estado">Estado*:</label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="Contratado">Contratado</option>
                            <option value="Renovado">Renovado</option>
                            <option value="Culminado">Culminado</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-3">
                    <div class="form-group{{ $errors->has('residencia') ? ' has-error' : '' }}">
                        <label for="residencia">Residencia*:</label>
                        <input type="text" class="form-control" name="residencia" id="residencia" value="{{ old('residencia') }}" placeholder="Residencia">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        <label for="direccion">Dirección*:</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}" placeholder="Dirección">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">
                        <label for="nacionalidad">Nacionalidad*:</label>
                        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" value="{{ old('nacionalidad') }}" placeholder="Nacionalidad">
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