@extends('layouts.admin')

@section('header')
    <h2>Instapdatum Toevoegen</h2>
    <a href="{{ route('admin.entrydates.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::open(['route'=>'admin.entrydates.store']) !!}
    @include('admin.entrydates.form', ['submittext'=>'Instapdatum toevoegen'])
    {!! Form::close() !!}
@stop