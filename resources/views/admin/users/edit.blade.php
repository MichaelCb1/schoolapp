@extends('layouts.admin')

@section('header')
    <h2>Login Aanpassen: {{ $user->name }}</h2>
    <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::model($user, ['route'=>['admin.users.update', $user->id], 'method'=>'put']) !!}
    @include('admin.users.form', ['submittext'=>'Login aanpassen'])
    {!! Form::close() !!}
@stop