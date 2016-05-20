@extends('layouts.admin')

@section('header')

@stop

@section('content')
    <div class="container-fluid">
        <div class="container-fluid adminindex">
            <div class="row">

                <a href="{{ route('admin.subscriptions.index') }}">
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <i class="fa fa-file-text fa-4x"></i>
                        </div>
                        <h4>Beheer inschrijvingen</h4>
                        <p>
                        Met deze pagina kan je alle inschrijvingen beheren. Het is mogelijk om deze gegevens per school te bekijken. Men kan ook aanpassingen maken aan individuele inschrijvingen voor bv. uitschrijven van nieuwsbrief of email wijzigingen.
                        </p>
                    </div>
                </a>

                <a href="{{ route('admin.schools.index') }}">
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <i class="fa fa-building fa-4x"></i>
                        </div>
                        <h4>Beheer scholen</h4>
                        <p>
                            Voeg een nieuwe school toe aan het formulier. Het is ook mogelijk om logo's toe te voegen of om scholen te verwijderen.
                        </p>
                    </div>
                </a>

                <a href="{{ route('admin.regions.index') }}">
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <i class="fa fa-location-arrow fa-4x"></i>
                        </div>
                        <h4>Beheer regio's</h4>
                        <p>
                            Hier kan men de regio's aanpassen waar de scholen zich in bevinden. Men kan nieuwe regio's toevoegen of men kan bestaande
                            regio's aanpassen.
                        </p>
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="{{ route('admin.zipcodes.index') }}">
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <i class="fa fa-dot-circle-o fa-4x"></i>
                        </div>
                        <h4>Beheer postcodes</h4>
                        <p>
                            Hier kan u de verschillende postcodes en gemeentes beheren. Dit keuze menu verschijnt als men een school gaat toevoegen of
                            aanpassen.
                        </p>
                    </div>
                </a>
                <a href="{{ route('admin.entrydates.index') }}">
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <i class="fa fa-plus-square fa-4x"></i>
                        </div>
                        <h4>Beheer instapdatums</h4>
                        <p>
                            Via deze pagina is het mogelijk om nieuwe combinaties van geboortedatums en instapdatums toe te voegen, aan te passen of te
                            verwijderen.
                        </p>
                    </div>
                </a>
                <a href="{{ route('admin.entrydates.calculate') }}">
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <i class="fa fa-check-square fa-4x"></i>
                        </div>
                        <h4>Bereken instapdatum</h4>
                        <p>
                            Een klein formulier waarmee manueel een instapdatum berekend kan worden. Men kan gewoon een geboortedatum ingeven en het formulier zal automatisch de bijhorende instapdatum tonen.
                        </p>
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="{{ route('admin.users.index') }}">
                    <div class="col-sm-4">
                        <div class="col-sm-3">
                            <i class="fa fa-user-plus fa-4x"></i>
                        </div>
                        <h4>Beheer logins</h4>
                        <p>
                            Voeg nieuwe gebruikers toe. Het is ook mogelijk om wachtwoorden en usernames van bestaande gebruikers te wijzigen.
                        </p>
                    </div>
                </a>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>
@stop