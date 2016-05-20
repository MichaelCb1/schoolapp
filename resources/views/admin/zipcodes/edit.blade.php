@extends('layouts.admin')

@section('header')
    <h2>Postcode Aanpassen: {{ $zipcode->town }}</h2>
    <a href="{{ route('admin.zipcodes.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <hr/>
@stop

@section('content')
    {!! Form::model($zipcode, ['route'=>['admin.zipcodes.update', $zipcode->id], 'method'=>'put']) !!}
    @include('admin.zipcodes.form', ['submittext'=>'Postcode aanpassen'])
    {!! Form::close() !!}
@stop