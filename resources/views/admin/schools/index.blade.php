@extends('layouts.admin')

@section('header')
    <h2>Overzicht scholen</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <a href="{{ route('admin.schools.create') }}" class="btn btn-success btn-xs">School toevoegen</a>
@stop

@section('content')
    @if($schools->isEmpty())
        <p>Er zijn geen scholen</p>
    @else
        <div class="container-fluid">
            <div class="col-sm-11">
                <table class="table table-striped table-responsive">
                    <thead>
                    <td>School</td>
                    <td>Logo</td>
                    <td>Handelingen</td>
                    </thead>
                    @foreach($schools as $school)
                        <tbody>
                        <tr>
                            <td>
                                {{ $school->name }}
                            </td>
                            <td>
                                <img src="{{ asset($school->url_big) }}" alt=""/>
                            </td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="{{ route('admin.schools.edit', $school->id) }}"><i class="glyphicon glyphicon-pencil"></i>Aanpassen</a>
                                {!! Form::open(['route'=>['admin.schools.destroy', $school->id], 'method'=>'delete',
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