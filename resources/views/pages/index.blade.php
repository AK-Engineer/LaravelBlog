@extends('layouts.app')

@section('content')     
    <div class="jumbotron text-center margTop">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg loginbuttons" role="button">Login</a>
            <a href="/register" class="btn btn-success btn-lg loginbuttons" role="button">Register</a>
        </p>
    </div>
@endsection
