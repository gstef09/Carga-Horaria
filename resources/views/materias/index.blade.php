@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        
        <div class="col-md-10 col-md-offset-1">

        
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Lista de Materias</strong></div>
                 <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-striped">
                        <thead>
                            <tr class="info cabeceras">
                                <td>Código</td>
                                <td>Materia</td>
                                 <td>Nivel</td>
                                <td>Créditos</td>
                                <td>Tipo Materia</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($materias as $m)
                            <tr>
                                <td>{{ $m->codigo_materia }}</td>
                                <td>{{ $m->materia }}</td>
                                <td>{{ $m->nivel  }}</td>
                                <td>{{ $m->creditos  }}</td>
                                <td>{{ $m->tipoMateria()  }}</td>
                                <td>
                                    <a href="{{ url('materias/'. $m->id) }}"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                    <a href="{{ url('materias/'. $m->id . '/edit') }}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if(count($materias) > 0)
                    {{ $materias->links() }}
                @endif
            </div>
        </div>
    </div> 
</div>    
@endsection