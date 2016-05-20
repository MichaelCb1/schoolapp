@extends('layouts.admin')

@section('header')
    <h2>Overzicht Postcodes</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <a href="{{ route('admin.zipcodes.create') }}" class="btn btn-success btn-xs">Postcode toevoegen</a>
@stop

@section('content')
    @if($zipcodes->isEmpty())
        <p>Er zijn geen postcodes</p>
    @else
        <div class="container-fluid">
            <div class="col-sm-11">
                <table class="table table-striped table-responsive">
                    <thead>
                    <td>Postcode</td>
                    <td>Naam</td>
                    <td>Handelingen</td>
                    </thead>
                    @foreach($zipcodes as $zipcode)
                        <tbody>
                        <tr>
                            <td>
                                {{ $zipcode->zipcode }}
                            </td>
                            <td>
                                {{ $zipcode->town }}
                            </td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="{{ route('admin.zipcodes.edit', $zipcode->id) }}"><i class="glyphicon glyphicon-pencil"></i>Aanpassen</a>
                                {!! Form::open(['route'=>['admin.zipcodes.destroy', $zipcode->id], 'method'=>'delete', 'style'=>'display:inline-block;']) !!}
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