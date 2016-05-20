@extends('layouts.admin')

@section('header')
    <h2>School Toevoegen</h2>
    <a href="{{ route('admin.schools.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::open(['route'=>'admin.schools.store']) !!}
    @include('admin.schools.form', ['submittext'=>'School toevoegen'])
    {!! Form::close() !!}
@stop