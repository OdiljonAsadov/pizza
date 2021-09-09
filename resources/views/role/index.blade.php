@extends('layout.app')

@section('content')
    <h1>Categories</h1>

    <a href="/role/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>

                <td>
                    <a href="/role/edit/{{ $role->id }}" class="btn btn-primary">Edit</a>
                    <a href="/role/delete/{{ $role->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
