<div class="row">
    <fieldset class="col-sm-4">
        <legend>Algemeen</legend>
        <div class="form-group">
            {!! Form::label('Postcode') !!}
            {!! Form::text('zipcode', null, ['class'=>'form-control']) !!}
            {!! $errors->first('zipcode', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('Naam') !!}
            {!! Form::text('town', null, ['class'=>'form-control']) !!}
            {!! $errors->first('town', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submittext, ['class'=>'btn btn-primary']) !!}
            <a class="btn btn-default btn-xs" href="{{ route('admin.zipcodes.index') }}">annuleren</a>
        </div>
    </fieldset>
</div>