@extends('layout')
@section('title', 'Contact')

@section('content')
    <div class="body max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <h1>Contact Me</h1>
            <form class="form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Write your name...">
                    @error('name')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                        placeholder="Write your phone number as 012-34-5678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}">
                    @error('phone')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        placeholder="write your email..">
                    @error('email')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message-contact" name="message-contact">{{ old('message') }}</textarea>
                    @error('message-contact')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
