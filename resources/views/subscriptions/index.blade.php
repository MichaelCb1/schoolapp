@extends('layouts.main')

@section('header')
    <h1>Mijn kind voor het eerst naar school</h1>
    <p>Kleutertjes kunnen instappen op vooraf vastgelegde tijdstippen in het schooljaar. U kan hieronder de eerst mogelijke schooldag van uw kind berekenen aan de hand van zijn/haar geboortedatum.</p>
    <p>Omdat kleuterklassen snel vol zitten, is het belangrijk uw kind op tijd in te schrijven. In veel gevallen kan dat al geruime tijd voor de eerste instapdatum. Inschrijvingsperiodes worden per gemeente afgesproken en kunnen dus verschillen van school tot school.</p>
    <p>In het formulier hieronder kunt u uw keuzeschool aanklikken op het logo of het bolletje eronder. Daarna klikt u onderaan het formulier op verzenden. U ontvangt dan spoedig een mail met opgave van de exacte intapdatum voor uw kind in de aangeklikte school. Veel succes!</p>

    <a href="{{ route('login') }}" class="btn btn-primary btn-xs">Admin</a>
@stop


@section('content')

        {!! Form::open(['action'=>'Admin\SubscriptionsController@store']) !!}
        @include('admin.subscriptions.form1', ['submittext'=>'Verzenden'])
        {!! Form::close() !!}

@stop