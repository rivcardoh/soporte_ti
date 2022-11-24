<!-- Modal Edit -->
<div class="modal fade" id="editModal{{ $tmantenimiento->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar subárea</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!!Form::model($tmantenimiento,['route'=>['tipo_mantenimiento.update',$tmantenimiento],
                'method'=>'put'])!!}
                <div class="form-group">
                    {!!Form::label('nombre', 'Nombre')!!}
                    {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                    @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                {!!Form::submit('Actualizar', ['class'=>'btn btn-info'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>