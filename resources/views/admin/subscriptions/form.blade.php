<div class="row">
    <fieldset class="col-sm-4">
        <legend>Gegevens ouder</legend>
        <div class="form-group">
            {!! Form::label('parent_firstname', 'Ouder Voornaam') !!}
            {!! Form::text('parent_firstname', null, ['class'=>'form-control']) !!}
            {!! $errors->first('parent_firstname', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('parent_lastname', 'Ouder Achternaam') !!}
            {!! Form::text('parent_lastname', null, ['class'=>'form-control']) !!}
            {!! $errors->first('parent_lastname', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Ouder Email') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
            {!! $errors->first('email', '<p class="error">:message</p>') !!}
        </div>
    </fieldset>

    <fieldset class="col-sm-4">
        <legend>Gegevens kind</legend>
        <div class="form-group">
            {!! Form::label('child_firstname', 'Kind Voornaam') !!}
            {!! Form::text('child_firstname', null, ['class'=>'form-control']) !!}
            {!! $errors->first('child_firstname', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('child_lastname', 'Kind Achternaam') !!}
            {!! Form::text('child_lastname', null, ['class'=>'form-control']) !!}
            {!! $errors->first('child_lastname', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('birthday', 'Kind Geboortedatum') !!}
            {!! Form::input('date', 'birthday', null, ['class'=>'form-control']) !!}
            {!! $errors->first('birthday', '<p class="error">:message</p>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('Instapdatum') !!}
            {!! Form::select('entrydate_id', $entrydates) !!}
        </div>
    </fieldset>
</div>

<div class="row">
    <fieldset class="col-sm-9">
        <legend>School keuze</legend>
        <ul class="inline">
            @foreach($schools as $school)
                <div class="col-sm-6">
                    <label for="{{ $school->id }}">
                        <table class="school-table">
                            <tr>
                                <td>
                                    <img src="{{ asset($school->url_small) }}" alt=""/>
                                </td>
                                <td>
                                    <h3>{{ $school->name }}</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        {{ $school->address }}<br/>
                                        {{ $school->zipcode->zipcode }}
                                        {{ $school->zipcode->town }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="school_id" value="{{ $school->id }}" />
                                </td>
                                <td>
                                    <p>
                                        <strong>tel.</strong> : {{ $school->phonenumber }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="" target="_blank"></a>
                                </td>
                            </tr>
                        </table>
                    </label>
                </div>
            @endforeach
        </ul>
    </fieldset>
</div>

{!! Form::submit($submittext, ['class'=>'btn btn-primary']) !!}