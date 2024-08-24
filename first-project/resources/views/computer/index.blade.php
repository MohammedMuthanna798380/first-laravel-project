@extends('layout')
@section('title', 'Coputers')

@section('content')
<div class="body max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computers</h1>
        @if(count($computers) === 0)
            <p>There are no computers</p>
        @else
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>SHOW</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach($computers as $computer)
            <tr>
                <td>{{$computer['id']}}</td>
                <td>{{$computer['name']}}</td>
                <td>{{$computer['price']}}</td>
                <td>{{$computer['description']}}</td>
                <td>
                    <button class="button">
                        <a href="{{route('computer.show', ['computer'=>$computer['id']])}}">Show</a>
                    </button>
                </td>
                <td>
                    <button class="button" style="background-color:blue">
                        <a href="{{route('computer.edit', ['computer'=>$computer['id']])}}">Edit</a>
                    </button>
                </td>
                <td>
                    <form action="{{route('computer.destroy', ['computer'=>$computer['id']])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button" style="background-color:red">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
        <a href="{{route('computer.create')}}" class="button" style="background-color:blue;">+ Create new Computer</a>
    </div>
</div>
@endsection

