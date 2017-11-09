@extends('layouts.app')

@section('content')
<div class="content" id="carreras">
    <div class="row">
    <button class="btn btn-primary"  data-toggle="modal" data-target="#crearCarrera">Nueva Carrera</button>
        <div class="col-md-6 col-md-offset-3">


            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Carreras</strong></div>
                 <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-striped">
                        <thead>
                            <tr class="info cabeceras">

                                <td>Nombre</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>

                        <tbody>

                            <tr v-for="carrera in carreras">

                                <td>@{{ carrera.nombre }}</td>

                                <td>
                                    <a href="#" v-on:click.prevent="editarCarrera(carrera)" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="#" v-on:click.prevent="eliminarCarrera(carrera.id)"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                @include('carreras.create')
                @include('carreras.edit')


            </div>

        </div>




    </div>
</div>
@endsection
