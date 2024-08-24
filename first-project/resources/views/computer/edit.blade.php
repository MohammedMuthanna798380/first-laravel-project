@extends('layout')
@section('title', 'Edit Computer')

@section('content')
<div class="body max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="container">
        <h1>Edit a Computer</h1>
        <form action="{{route('computer.update',['computer'=>$computer->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Computer Name</label>
                <input type="text" name="name" value="{{$computer->name}}" id="name">
                @error('name')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="price">Computer Price</label>
                <input type="text" name="price" id="price" value="{{$computer->price}}">
                @error('price')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="description">Computer Description</label>
                <textarea name="description" id="description" value="{{$computer->description}}">{{$computer->description}}</textarea>
                @error('description')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit">Update Computer</button>
        </form>
    </div>
</div>
@endsection

