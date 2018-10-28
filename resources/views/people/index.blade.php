{{-- <!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container"> --}}
@extends('layouts.app')

@section('content')
{{-- 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('people') }}">Data table</a>
        </div>
        <ul class="navbar-nav">
            <li class="navbar-brand"><a href="{{ URL::to('people') }} " style="color: white">View All </a></li>
        </ul>
        <ul class="navbar-nav">
            <li class="navbar-brand"><a href="{{ URL::to('people/create') }}" style="color: white">Create </a>
        </ul>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </nav>
    </nav>
 --}}
    <h1>All the Nerds</h1>


    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Last Name</td>
            <td>sex</td>
            <td>Email</td>
            <td>adress</td>
            <td>Date of Birth</td>
            <td>Role</td>
        </tr>
        </thead>
        <tbody>
        @foreach($people as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->lastname }}</td>
            <td>{{ $value->sex }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->date_of_birth }}</td>
            <td>{{ $value->user }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'people/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('people/' . $value->id) }}">Show this Nerd</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('people/' . $value->id . '/edit') }}">Edit this
                    Nerd</a>

            </td>
        </tr>
        @endforeach


        </tbody>
    </table>
    @endsection

{{-- </div>
</body>
</html> --}}