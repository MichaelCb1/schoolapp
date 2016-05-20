@extends('layouts.admin')

@section('header')
    <h2>Overzicht regio's</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <a href="{{ route('admin.regions.create') }}" class="btn btn-success btn-xs">Regio toevoegen</a>
@stop

@section('content')
    @if($regions->isEmpty())
        <p>There are no regions</p>
    @else
        <div class="container-fluid">
            <div class="col-sm-11">
                <table class="table table-striped table-responsive">
                    <thead>
                    <td>Regio</td>
                    <td>Aanpassingen</td>
                    </thead>
                    @foreach($regions as $region)
                        <tbody>
                        <tr>
                            <td>
                                {{ $region->name }}
                            </td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="{{ route('admin.regions.edit', $region->id) }}"><i class="glyphicon glyphicon-pencil"></i>aanpassen</a>
                                {!! Form::open(['route'=>['admin.regions.destroy', $region->id], 'method'=>'delete',
                                'style'=>'display:inline-block;']) !!}
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