@extends('layout.app')

@section('content')
    <h1>Chefs</h1>

    <a href="/chefs/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Name of profession</th>
            <th>Description</th>
        </tr>
        @foreach ($chefs as $chef)
            <tr>
                <td>{{ $chef->id }}</td>
                <td> <img src="{{ $chef->image }}" alt="" style="height: 120px; width: 150px;"></td>
                <td>{{ $chef->name }}</td>
                <td>{{ $chef->name_profession }}</td>
                <td>{{ $chef->description }}</td>

                <td>
                    <a href="/chefs/edit/{{ $chef->id }}" class="btn btn-primary">Edit</a>
                    <a href="/chefs/delete/{{ $chef->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
