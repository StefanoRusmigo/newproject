@extends('layouts.app')

@section('content')

    <h1>Edit {{ $people->name }}</h1>


    {{ Form::model($people, array('route' => array('people.update', $people->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('lastname', 'Last Name') }}
        {{ Form::text('lastname', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('sex', 'Same') }}
        {{ Form::text('sex', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('date_of_birth', 'Date of Birth') }}
        {{ Form::text('date_of_birth', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('user', 'Role') }}
        {{ Form::text('user', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

    @endsection
