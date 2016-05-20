<div class="row">
    <fieldset class="col-sm-4">
        <legend>Algemeen</legend>
        <div class="form-group">
            {!! Form::label('Geboortedatum') !!}
            {!! Form::input('date', 'birthday', null, ['class'=>'form-control']) !!}
            {!! $errors->first('birthday', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('Instapdatum') !!}
            {!! Form::input('date', 'entrydate', null, ['class'=>'form-control']) !!}
            {!! $errors->first('entrydate', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submittext, ['class'=>'btn btn-primary']) !!}
            <a class="btn btn-default btn-xs" href="{{ route('admin.entrydates.index') }}">annuleren</a>
        </div>
    </fieldset>
</div>