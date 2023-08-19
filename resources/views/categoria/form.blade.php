<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categorias') }}
            {{ Form::text('categorias', $categoria->categorias, ['class' => 'form-control' . ($errors->has('categorias') ? ' is-invalid' : ''), 'placeholder' => 'Categorias']) }}
            {!! $errors->first('categorias', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>