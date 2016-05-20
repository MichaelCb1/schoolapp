@extends('layouts.admin')

@section('header')
    <h2>Postcode Toevoegen</h2>
    <a href="{{ route('admin.schools.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::open(['route'=>'admin.zipcodes.store']) !!}
    @include('admin.zipcodes.form', ['submittext'=>'Postcode toevoegen'])
    {!! Form::close() !!}
@stop