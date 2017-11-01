@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
    <button class="btn btn-primary"  data-toggle="modal" data-target="#create">Nuevo Curso</button>
        <div class="col-md-6 col-md-offset-3">
        
           
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Cursos</strong></div>
                 <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-striped">
                        <thead>
                            <tr class="info cabeceras">
                                <td>Descripción</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($cursos as $c)
                            <tr>
                                <td>{{ $c->descripcion }}</td>
                                
                                <td>
                                    <a href="#"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                                    <a href="{{ url('cursos/'. $c->id . '/edit') }}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('cursos.create') 
                

            </div>
            
        </div>
        
            
        
    </div> 
</div>    
@endsection