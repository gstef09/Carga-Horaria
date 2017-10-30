@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-justify">
                    <p class="text-center"><strong> {{ $periodo->año }} ({{$periodo->periodo}})</strong></p>
                    <p><strong>Fecha de incio :</strong> {{ $periodo->fecha_inicio }}</p>
                    <p><strong>Fecha de finalización</strong> {{ $periodo->fecha_final }}</p>
                    <p><strong>Estado :</strong> {{ $periodo->estado }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection