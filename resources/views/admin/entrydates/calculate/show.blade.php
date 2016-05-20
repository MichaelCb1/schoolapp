@extends('layouts.admin')

@section('header')
    <h2>Instapdatum berekenen</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <a href="{{ route('admin.entrydates.create') }}" class="btn btn-success btn-xs">Instapdatum toevoegen</a>
@stop

@section('content')

    <div class="row">
        <div class="col-sm-4">
            {!! Form::open(['route'=>'admin.entrydates.calculate.post']) !!}
            <div class="form-group">
                {!! Form::label('Geboortedatum') !!}
                {!! Form::input('date', 'entrydate', null, ['class'=>'form-control']) !!}
                {!! $errors->first('entrydate', '<p class="error">:message</p>') !!}
            </div>
            {!! Form::submit('Bereken', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <h3>Berekende instapdatum</h3>
            <p>Geboortedatum: {{ date("d"."-"."m"."-"."Y",strtotime($date)) }}</p>
            <p>Inschrijven vanaf : {{ date("d"."-"."m"."-"."Y",strtotime($entrydate->entrydate)) }}</p>
        </div>
    </div>
@stop