@extends('layouts.app')

@section('content')
    <div class="content">
        
            <form action="{{ url('/docentes') }}" method="POST"></form>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <label for="abreviatura">Abreviatura:</label>
                            <input type="text" class="form-control" name="abreviatura" id="abreviatura" placeholder="Abreviatura">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="nacionalidad">Nacionalidad:</label>
                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <label for="tipo_identificacion">Tipo de Identificación:</label>
                            <select class="form-control" name="tipo_identificacion" id="tipo_identificacion">
                                <option value="Cedula">Cedula</option>
                                <option value="RUC">RUC</option>
                                <option value="Pasaporte">Pasaporte</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="identificacion">Número de Identificación:</label>
                            <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="Numero de Identificación">
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <label for="correo_personal">correo Personal:</label>
                            <input type="email" class="form-control" name="correo_personal" id="correo_personal" placeholder="Correo Personal">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="correo_insttucional">Correo Institucional:</label>
                            <input type="email" class="form-control" name="correo_insttucional" id="correo_insttucional" placeholder="Correo Intitucional">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input type="text" class="form-control" name="celular" id="celular" placeholder="Numero de celular">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="telefono">Teléfono Convencional:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Numero de teléfono">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <label for="tipo_contrato">Tipo de Contrato:</label>
                            <select class="form-control" name="tipo_contrato" id="tipo_contrato">
                                <option value="Tiempo_Completo">Tiempo Completo</option>
                                <option value="Medio_Tiempo">Medio Tiempo</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <select class="form-control" name="estado" id="estado">
                                <option value="Contratado">Contratado</option>
                                <option value="Renovado">Renovado</option>
                                <option value="Culminado">Culminado</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                            <label for="residencia">Residencia:</label>
                            <input type="text" class="form-control" name="residencia" id="residencia" placeholder="Residencia">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <button type="submit" class="btn btn-primary">Guargar</button>
                    </div>
                </div>
            </form>
    </div>
@endsection