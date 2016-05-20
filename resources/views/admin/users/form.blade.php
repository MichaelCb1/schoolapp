<div class="row">
    <fieldset class="col-sm-4">
        <legend>Algemeen</legend>
        <div class="form-group">
            {!! Form::label('Naam') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            {!! $errors->first('name', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('Email') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
            {!! $errors->first('email', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('Paswoord') !!}
            {!! Form::text('password', null, ['class'=>'form-control']) !!}
            {!! $errors->first('password', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submittext, ['class'=>'btn btn-primary']) !!}
            <a class="btn btn-default btn-xs" href="{{ route('admin.users.index') }}">annuleren</a>
        </div>
    </fieldset>
</div>