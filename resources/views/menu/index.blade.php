@extends('layout.app')

@section('content')
    <h1>Menus</h1>

    <a href="/menu/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
            <th>Summernote</th>
        </tr>
        @foreach ($menus as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->price }}</td>
                <td> <img src="{{ $menu->image }}" alt="" style="height: 120px; width: 150px;"></td>
                <td>{{ $menu->description }}</td>
                <td>{{ $menu->summernote }}</td>

                <td>
                    <a href="/menu/edit/{{ $menu->id }}" class="btn btn-primary">Edit</a>
                    <a href="/menu/delete/{{ $menu->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
