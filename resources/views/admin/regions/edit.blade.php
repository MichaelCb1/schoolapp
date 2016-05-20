@extends('layouts.admin')

@section('header')
    <h2>Regio Aanpassen: {{ $regions->name }}</h2>
    <a href="{{ route('admin.regions.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
@stop

@section('content')

    {!! Form::model($regions, ['route'=>['admin.regions.update', $regions->id], 'method'=>'put']) !!}
    @include('admin.regions.form', ['submittext'=>'Regio aanpassen'])
    {!! Form::close() !!}
@stop