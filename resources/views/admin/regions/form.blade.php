<div class="row">
    <fieldset class="col-sm-4">
        <div class="form-group">
            {!! Form::label('Naam') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            {!! $errors->first('name', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submittext, ['class'=>'btn btn-primary']) !!}
            <a class="btn btn-default" href="{{ route('admin.regions.index') }}">annuleren</a>
        </div>
    </fieldset>
</div>