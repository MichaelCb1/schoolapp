@extends('layouts.admin')

@section('header')
    <h2>Overzicht logins</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-primary btn-xs">Terug naar overzicht</a>
    <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-xs">Login toevoegen</a>
@stop

@section('content')

    @if($users->isEmpty())
        <p>Er zijn geen logins</p>
    @else
        <div class="container-fluid">
            <div class="col-sm-11">
                <table class="table table-striped table-responsive">
                    <thead>
                    <td>Naam</td>
                    <td>Handelingen</td>
                    </thead>
                    @foreach($users as $user)
                        <tbody>
                        <tr>
                            <td>
                                {{ $user->name }}<br/>
                                {{ $user->email }}
                            </td>
                            <td>
                                <a class="btn btn-warning btn-xs" href="{{ route('admin.users.edit', $user->id) }}"><i class="glyphicon glyphicon-pencil"></i>Aanpassen</a>
                                {!! Form::open(['route'=>['admin.users.destroy', $user->id], 'method'=>'delete', 'style'=>'display:inline-block;']) !!}
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