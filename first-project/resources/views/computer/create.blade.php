@extends('layout')
@section('title', 'Create Computer')

@section('content')
<div class="body max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="container">
        <h1>Create a New Computer</h1>
        <form action="{{route('computer.store')}}" method="POST">
            @csrf
            <div>
                <label for="name">Computer Name</label>
                <input type="text" name="name" value="{{old('name')}}" id="name">
                @error('name')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="price">Computer Price</label>
                <input type="text" name="price" id="price" value="{{old('price')}}">
                @error('price')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="description">Computer Description</label>
                <textarea name="description" id="description" value="{{old('description')}}">{{old('description')}}</textarea>
                @error('description')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit">Create Computer</button>
        </form>
    </div>
</div>
@endsection

