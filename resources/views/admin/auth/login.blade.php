@extends('layouts.admin')

@section('content')
    <h1>Please login</h1>

    <div class="col-sm-4">
        {!! Form::open(['route'=>'login.post']) !!}
            <div class="form-group">
                {!! Form::label('email') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
                {!! $errors->first('email', '<p class="error">:message</p>') !!}
            </div>
            <div class="form-group">
                {!! Form::label('password') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
                {!! $errors->first('password', '<p class="error">:message</p>') !!}
            </div>
                {!! Form::submit('Login', ['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}
    </div>
@stop