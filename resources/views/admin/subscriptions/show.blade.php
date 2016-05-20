@extends('layouts.admin')

@section('header')
    <a href="{{ route('admin.subscriptions.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht inschrijvingen</a>
@stop

@section('content')

<div class="row">
    <div class="col-sm-6">
        <h3>Jouw gegevens</h3>
        <ul>
            <li>Naam: {{ $subscriptions->parent_firstname }} {{ $subscriptions->parent_lastname }}</li>
            <li>E-mail: {{ $subscriptions->email }}</li>
        </ul>
    </div>
    <div class="col-sm-6">
        <h3>Gegevens van het kind</h3>
        <ul>
            <li>Naam: {{ $subscriptions->child_firstname }} {{ $subscriptions->child_lastname }}</li>
            <li>Geboortedatum: {{ date("d"."-"."m"."-"."Y",strtotime($subscriptions->birthday)) }}</li>
        </ul>
    </div>
</div>
<div class="row">
    <h2>De instapdatum voor het kind is: {{ date("d"."-"."m"."-"."Y",strtotime($subscriptions->entrydate->entrydate)) }}</h2>
</div>


@stop