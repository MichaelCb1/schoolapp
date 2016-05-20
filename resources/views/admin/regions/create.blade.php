@extends('layouts.admin')

@section('header')
    <h2>Regio Toevoegen</h2>
    <a href="{{ route('admin.regions.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
@stop

@section('content')

    {!! Form::open(['route'=>'admin.regions.store']) !!}
    @include('admin.regions.form', ['submittext'=>'Regio toevoegen'])
    {!! Form::close() !!}
@stop