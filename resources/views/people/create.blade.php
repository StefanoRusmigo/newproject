@extends('layouts.app')

@section('content')

    <h1>Create a Nerd</h1>

    <!-- if there are creation errors, they will show here -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {!! Form::open(['url' => '/people']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lastname', 'Last Name') }}
        {{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('sex', 'sex') }}
        {{ Form::text('sex', Input::old('sex'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('date_of_birth', 'Date of Birth') }}
        {{ Form::text('date_of_birth', Input::old('date_of_birth'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('user', 'Role') }}
        {{ Form::select('user', array('0' => 'admin', '1' => 'user'), Input::old('user'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

    @endsection
