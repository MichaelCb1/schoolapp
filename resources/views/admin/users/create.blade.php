@extends('layouts.admin')

@section('header')
    <h2>Login Toevoegen</h2>
    <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::open(['route'=>'admin.users.store']) !!}
    @include('admin.users.form', ['submittext'=>'Login toevoegen'])
    {!! Form::close() !!}
@stop