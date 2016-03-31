@extends('layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Project Flyer</h1>
            <p>
                This is a template for a simple marketing or informational website.
                It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
            </p>
            @if($signedIn)
                <a href="/flyers/create" class="btn btn-primary">Create a flyer</a>
            @else
                <a href="/auth/register" class="btn btn-primary">Sign Up</a>
            @endif


        </div>
    </div>
@stop