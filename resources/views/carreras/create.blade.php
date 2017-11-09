<form method="POST" v-on:submit.prevent="crearCarrera">
{!! csrf_field() !!}                
            
            @if (count($errors) > 0)
                @include('layouts.errorsModal')
            @endif
    <div class="modal fade" id="crearCarrera">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                        
                    </button>
                    <h4>Nueva Carrera</h4>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" v-model="nombre">
                </div>
                <div class="form-group">
                    <label for="facultad_id">Facultad</label>
                        
                        <select name="facultad_id" id="facultad_id" class="form-control" v-model="facultad_id">
                        @foreach($facultades as $f)
                            <option value="{{$f->id}}">
                                {{$f->nombre}}
                            </option>
                            @endforeach
                        </select>
                       
                </div>
                    <span v-for="error in errors" class="text-danger">@{{ error }} </span>
                </div>
                <div class="modal-footer">
                    <button id="btnGuardar" type="submit" class="btn btn-primary"> Guardar</button>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</form>