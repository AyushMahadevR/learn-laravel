@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is a study of laravel making and coding with php.</p>
        <p><a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">Login</a>&nbsp;<a class="btn btn-success btn-lg" role="button" href="/lsapp/public/register">Register</a></p>
    </div>
@endsection 