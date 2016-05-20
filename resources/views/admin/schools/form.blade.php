<div class="row">
    <fieldset class="col-sm-4">
        <legend>Algemeen</legend>
        <div class="form-group">
            {!! Form::label('Naam') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            {!! $errors->first('name', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('Telnr') !!}
            {!! Form::text('phonenumber', null, ['class'=>'form-control']) !!}
            {!! $errors->first('phonenumber', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('Website') !!}
            {!! Form::text('website', null, ['class'=>'form-control']) !!}
            {!! $errors->first('website', '<p class="error">:message</p>') !!}
        </div>
    </fieldset>

    <fieldset class="col-sm-4">
        <legend>Adres</legend>
        <div class="form-group">
            {!! Form::label('Straat - nr') !!}
            {!! Form::text('address', null, ['class'=>'form-control']) !!}
            {!! $errors->first('address', '<p class="error">:message</p>') !!}
        </div>

        <div class="form-group">
            {!! Form::label('Gemeente') !!}
            {!! Form::select('town_id', $zipcodes) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Regio') !!}
            {!! Form::select('region', $regions) !!}
        </div>

        {{--<div class="form-group">--}}
            {{--{!! Form::label('Regio') !!}--}}
            {{--{!! Form::select('region_id', App\Region::lists('name', 'id')) !!}--}}
        {{--</div>--}}

    </fieldset>

</div>

<div class="row">
    <legend>Logo's</legend>
    <fieldset class="col-sm-4">
        <div class="form-group">
            {!! Form::label('URL Logo klein (logos/filename)') !!}
            {!! Form::text('url_small', null, ['class'=>'form-control']) !!}
        </div>
    </fieldset>
    <fieldset class="col-sm-4">
        <div class="form-group">
            {!! Form::label('URL Logo groot (logos/filename)') !!}
            {!! Form::text('url_big', null, ['class'=>'form-control']) !!}
        </div>
    </fieldset>

</div>

<div class="form-group">
    {!! Form::submit($submittext, ['class'=>'btn btn-primary']) !!}
</div>
