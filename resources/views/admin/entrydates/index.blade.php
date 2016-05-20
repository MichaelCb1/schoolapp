@extends('layouts.admin')

@section('header')
    <h2>Overzicht Instapdata</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <a href="{{ route('admin.entrydates.create') }}" class="btn btn-success btn-xs">Instapdatum toevoegen</a>
@stop

@section('content')


    @if($entrydates->isEmpty())
        <p>Er zijn geen instapdate</p>
    @else
        <div class="container-fluid">
            <div class="col-sm-11">
                <table class="table table-striped table-responsive">
                    <thead>
                    <td>Geboortedatum</td>
                    <td>Instapdatum</td>
                    <td>Handelingen</td>
                    </thead>
                    @foreach($entrydates as $entrydate)
                        <tbody>
                        <tr>
                            <td>
                                {{ date("d"."-"."m"."-"."Y",strtotime($entrydate->birthday)) }}
                            </td>
                            <td>
                                {{ date("d"."-"."m"."-"."Y",strtotime($entrydate->entrydate)) }}
                            </td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="{{ route('admin.entrydates.edit', $entrydate->id) }}"><i class="glyphicon glyphicon-pencil"></i>Aanpassen</a>
                                {!! Form::open(['route'=>['admin.entrydates.destroy', $entrydate->id], 'method'=>'delete', 'style'=>'display:inline-block;']) !!}
                                {!! Form::submit('Verwijderen', ['class'=>'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    @endif

@stop
