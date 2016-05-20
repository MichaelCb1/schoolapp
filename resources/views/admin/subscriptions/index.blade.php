@extends('layouts.admin')

@section('header')
    <h2>Overzicht inschrijvingen</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
@stop

@section('content')
    @if($subscriptions->isEmpty())
        <p>There are no subscriptions</p>
    @else
        <div class="container-fluid">
            <div class="col-sm-11">
                <table class="table table-striped table-responsive">
                    <thead>
                        <td>Ouder</td>
                        <td>Kind</td>
                        <td>Handelingen</td>
                    </thead>
                    @foreach($subscriptions as $subscription)
                    <tbody>
                        <tr>
                            <td>
                                {{ $subscription->parent_firstname }} {{ $subscription->parent_lastname }}<br/>
                                <small>{{ $subscription->email }}</small>
                            </td>
                            <td>
                                {{ $subscription->child_firstname }} {{ $subscription->child_lastname }}<br/>
                                <small>
                                    Geboortedatum: {{ date("d"."-"."m"."-"."Y",strtotime($subscription->birthday)) }}<br/>
                                    Inschrijvingsdatum: {{ date("d"."-"."m"."-"."Y",strtotime($subscription->entrydate->entrydate)) }} <br/>
                                    School: {{ $subscription->school->name }}
                                </small>
                            </td>
                            <td>
                                <a class="btn btn-xs" href="{{ route('admin.subscriptions.show', $subscription->id) }}">tonen</a>
                                <a class="btn btn-warning btn-xs" href="{{ route('admin.subscriptions.edit', $subscription->id) }}"><i class="glyphicon glyphicon-pencil"></i>edit</a>
                                {!! Form::open(['route'=>['admin.subscriptions.destroy', $subscription->id], 'method'=>'delete',
                                'style'=>'display:inline-block;']) !!}
                                {!! Form::submit('Verwijderen', ['class'=>'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                                <!--<a class="btn btn-danger btn-xs" href="{{ route('admin.subscriptions.destroy', $subscription->id) }}"><i class="glyphicon glyphicon-pencil"></i>delete</a>-->
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    @endif

@stop