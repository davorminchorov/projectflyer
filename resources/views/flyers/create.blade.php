@extends('layout')

@section('content')

        <h1>Selling your home?</h1>

        <form method="POST" action="/flyers">
            @include('errors.list')

            @include('flyers.form')
        </form>

@stop