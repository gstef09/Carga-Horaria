@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Lista de Docentes</strong></div>
        
                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <td>Nombres</td>
                            <td>Identificación</td>
                            <td>Correo</td>
                            <td>Tipo de Contrato</td>
                            <td>Estado</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($docentes as $d)
                        <tr>
                            <td>{{ $d->nombreCompleto() }}</td>
                            <td>{{ $d->identificacion }}</td>
                            <td>{{ $d->email_institucional  }}</td>
                            <td>{{ $d->tipo_contrato  }}</td>
                            <td>{{ $d->estado  }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>    
@endsection