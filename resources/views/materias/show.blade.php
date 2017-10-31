@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-justify">
                    <p class="text-center"><strong> {{ $materia->materia }} </strong></p>
                    <p><strong>Código:</strong> {{ $materia->codigo_materia }}</p>
                    <p><strong>Nivel :</strong> {{ $materia->nivel }}</p>
                    <p><strong>Créditos :</strong> {{ $materia->creditos }}</p>
                    <p><strong>Tipo Materia :</strong> {{ $materia->tipo_materia }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection