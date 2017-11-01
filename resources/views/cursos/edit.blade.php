@extends('layouts.app')

@section('content') 
<h3 class="text-center"><strong>Editar Curso</strong></h3>
    <div class="content">
    <form method="POST" acction="{!! action('CursosController@update', ['id' => $curso->id]) !!}">
        <input name="_method" type="hidden" value="PUT">
        {!! csrf_field() !!}                
                
                @if (count($errors) > 0)
                    @include('layouts.errorsModal')
                @endif
        
                        
                    
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                    <label for="keep">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control"  >
                </div>
            </div>    
            <div class="row">
                <div class="col-md-6 col-md-offset-3">        
                    <button type="submit" class="btn btn-primary"> Guardar</button>
                </div>
            </div>            
                    

    </form>
</div>
@endsection