@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        
        <div class="col-md-10 col-md-offset-1">
        <a href="{{ route('docentes.excel') }}" class="btn btn-success pull-right ">
            Exportar a Excel
        </a>
        
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Lista de Docentes</strong></div>
                 <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                                <td>Nombres</td>
                                <td>Identificación</td>
                                <td>Correo</td>
                                <td>Tipo de Contrato</td>
                                <td>Estado</td>
                                <td>Acciones</td>
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
                                <td>
                                    <a href="{{ url('docentes/'. $d->id) }}"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                    <a href="{{ url('docentes/'. $d->id . '/edit') }}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if(count($docentes) > 0)
                    {{ $docentes->links() }}
                @endif
            </div>
        </div>
    </div> 
</div>    
@endsection