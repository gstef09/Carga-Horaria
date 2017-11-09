<form method="POST" v-on:submit.prevent="actualizarFacultad(fillFacultad.id)">
{!! csrf_field() !!}                
            
            @if (count($errors) > 0)
                @include('layouts.errorsModal')
            @endif
    <div class="modal fade" id="editarCarrera">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                        
                    </button>
                    <h4>Editar Carrera</h4>
                </div>
                <div class="modal-body">
                
                    <label for="nombre">Nombre</label>
                    <input type="text"  class="form-control" v-model="fillCarrera.nombre">
               
                    <label for="facultad_id">Nombre</label>
                        @foreach($facultades as $f)
                        <select  id="facultad_id" class="form-control">
                        
                            <option value="{{$f->id}}">
                                {{$f->nombre}}
                            </option>
                        </select>
                        @endforeach
                
                    <span v-for="error in errors" class="text-danger">@{{ error }} </span>
                </div>
                
                
                
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"> Actualizar</button>
                    
                </div>
            </div>
        </div>
    </div>
</form>