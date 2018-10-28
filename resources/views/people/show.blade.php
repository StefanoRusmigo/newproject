@extends('layouts.app')

@section('content')


    <h1>Showing {{ $people->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $people->name }}</h2>
        <p>
            <strong>id:</strong> {{ $people->id }}<br>
            <strong>name:</strong> {{ $people->name }}<br>
            <strong>lastname:</strong> {{ $people->lastname }}<br>
            <strong>sex:</strong> {{ $people->sex }}<br>
            <strong>Email:</strong> {{ $people->email }}<br>
            <strong>address:</strong> {{ $people->address }}<br>
            <strong>date_of_birth:</strong> {{ $people->date_of_birth }}<br>
            <strong>user:</strong> {{ $people->user }}
        </p>
    </div>
    @endsection
