<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('animal') }}
            {{ Form::text('animal', $jaula->animal, ['class' => 'form-control' . ($errors->has('animal') ? ' is-invalid' : ''), 'placeholder' => 'Animal']) }}
            {!! $errors->first('animal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tamaño') }}
            {{ Form::text('tamaño', $jaula->tamaño, ['class' => 'form-control' . ($errors->has('tamaño') ? ' is-invalid' : ''), 'placeholder' => 'Tamaño']) }}
            {!! $errors->first('tamaño', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hábitat') }}
            {{ Form::text('hábitat', $jaula->hábitat, ['class' => 'form-control' . ($errors->has('hábitat') ? ' is-invalid' : ''), 'placeholder' => 'Hábitat']) }}
            {!! $errors->first('hábitat', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>