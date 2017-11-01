<form method="POST" acction="{{ url('cursos/') }}">
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
                    <h4>Nuevo Curso</h4>
                </div>
                <div class="modal-body">
                <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                <label for="keep">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" >
                </div>
                <!-- <span v-for="error in errors" class="text-danger">@{{ error }} </span> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"> Guardar</button>
                    
                </div>
            </div>
        </div>
    </div>
</form>