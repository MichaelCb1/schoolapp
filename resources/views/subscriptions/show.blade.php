@extends('layouts.main')

@section('header')
    <h1>Bedankt voor je interesse</h1>
    {{--<h2>De Instapdatum van uw kind is {{ date("d"."-"."m"."-"."Y",strtotime($entrydate->entrydate)) }}</h2>--}}
    <p>Ten gevolge van een zenuwinzinking bij ons webteam kunnen wij u de instapdatum van uw kind hier nog niet meteen meegeven. U zal deze nog per e-mail ontvangen.</p>
    <a href="{{ route('home') }}" class="btn btn-primary btn-xs">Terug naar het formulier</a>
@stop


@section('content')


@stop