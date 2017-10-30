@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-justify">
                    <p class="text-center"><strong>{{ $docente->nombreCompleto() }}</strong></p>
                    <p><strong>{{ $docente->tipo_identificacion}}:</strong> {{ $docente->identificacion }}</p>
                    <p><strong>Abreviatura:</strong> {{ $docente->abreviatura }}</p>
                    <p><strong>Correo Institucional</strong> {{ $docente->email_institucional }}</p>
                    <p><strong>Correo Personal </strong> {{ $docente->email_personal }}</p>
                    <p><strong>Celular:</strong> {{ $docente->celular }}</p>
                    <p><strong>Convensional:</strong> {{ $docente->telefono }}</p>
                    <p><strong>Residencia:</strong> {{ $docente->residencia }}</p>
                    <p><strong>Direccion:</strong> {{ $docente->direccion }}</p>
                    <p><strong>Nacionalidad:</strong> {{ $docente->nacionalidad }}</p>
                    <p><strong>Tipo de Contrato:</strong> {{ $docente->tipo_contrato }}</p>
                    <p><strong>Estado de Contato:</strong> {{ $docente->estado }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection