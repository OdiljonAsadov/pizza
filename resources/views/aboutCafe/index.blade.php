@extends('layout.app')

@section('content')
    <h1>Description of cafe</h1>

    <a href="/aboutCafe/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
        @foreach ($aboutCafes as $aboutCafe)
            <tr>
                <td>{{ $aboutCafe->id }}</td>
                <td>{{ $aboutCafe->title }}</td>
                <td> <img src="{{ $aboutCafe->image }}" alt="" style="height: 120px; width: 150px;"></td>
                <td>{{ $aboutCafe->description }}</td>

                <td>
                    <a href="/aboutCafe/edit/{{ $aboutCafe->id }}" class="btn btn-primary">Edit</a>
                    <a href="/aboutCafe/delete/{{ $aboutCafe->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
