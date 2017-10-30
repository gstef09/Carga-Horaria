@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        
        <div class="col-md-10 col-md-offset-1">
       
           
        
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Lista de Periodos</strong></div>
                 <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                                <td>Año</td>
                                <td>Periodo</td>
                                <td>Estado</td>
                                <td>Inicio</td>
                                <td>Fin </td>
                                <td>Acciones</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($periodos as $p)
                            <tr>
                                <td>{{ $p->año }}</td>
                                <td>{{ $p->periodo }}</td>
                                <td>{{ $p->estado  }}</td>
                                <td>{{ $p->fecha_inicio }}</td>
                                <td>{{ $p->fecha_final  }}</td>
                                <td>
                                    <a href="{{ url('periodos/'. $p->id) }}"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                    <a href="{{ url('periodos/'. $p->id . '/edit') }}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if(count($periodos) > 0)
                    {{ $periodos->links() }}
                @endif
            </div>
        </div>
    </div> 
</div>    
@endsection