@extends('layouts.main')

@section('header')
    <h1>Bewerk de inschrijvingen</h1>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
@stop

@section('content')

    {!! Form::model($subscription, ['route'=>['admin.subscriptions.update', $subscription->id], 'method'=>'put']) !!}
    @include('admin.subscriptions.form', ['submittext'=>'Inschrijving aanpassen'])
    {!! Form::close() !!}

@stop