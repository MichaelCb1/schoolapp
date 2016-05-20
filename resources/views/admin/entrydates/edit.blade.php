@extends('layouts.admin')

@section('header')
    <h2>Instapdatum Aanpassen: {{ date("d"."-"."m"."-"."Y",strtotime($entrydate->entrydate)) }}</h2>
    <a href="{{ route('admin.entrydates.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::model($entrydate, ['route'=>['admin.entrydates.update', $entrydate->id], 'method'=>'put']) !!}
    @include('admin.entrydates.form', ['submittext'=>'Instapdatum aanpassen'])
    {!! Form::close() !!}
@stop