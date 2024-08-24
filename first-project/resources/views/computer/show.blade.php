@extends('layout')
@section('title', 'Show')

@section('content')
<div class="body max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="mt-8">
        <h1>{{$computer['name']}}
        {{$computer['price']}}</h1>
        {{$computer['description']}}
    </div>
</div>
@endsection

