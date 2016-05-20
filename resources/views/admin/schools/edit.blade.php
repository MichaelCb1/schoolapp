@extends('layouts.admin')

@section('header')
    <h2>School Aanpassen: {{ $school->name }}</h2>
    <a href="{{ route('admin.schools.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::model($school, ['route'=>['admin.schools.update', $school->id], 'method'=>'put']) !!}
    @include('admin.schools.form', ['submittext'=>'School aanpassen'])
    {!! Form::close() !!}
@stop