@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">        
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Lista de Usuarios</strong></div>
                 <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                                <td>Nombres</td>
                                <td>Correo</td>
                                <td>Rol</td>
                                <td>Estado</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->rol  }}</td>
                                <td>{{ $user->state  }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>    
@endsection