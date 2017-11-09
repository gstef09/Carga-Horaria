<form method="POST" acction="{{ url('facultades/') }}">
{!! csrf_field() !!}                
            
            @if (count($errors) > 0)
                @include('layouts.errorsModal')
            @endif
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                        
                    </button>
                    <h4>Nueva Facultad</h4>
                </div>
                <div class="modal-body">
                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" >
                </div>
                
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"> Guardar</button>
                    
                </div>
            </div>
        </div>
    </div>
</form>