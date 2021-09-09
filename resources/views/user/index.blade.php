@extends('layout.app')

@section('content')
    <h1>Categories</h1>

    <a href="/role/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Role id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Image</th>
            <th>Phone</th>
            <th>Viloyat</th>
            <th>Tuman</th>
            <th>Uy</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->role_id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->image }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->viloyat }}</td>
                <td>{{ $user->tuman }}</td>
                <td>{{ $user->uy }}</td>

                <td>
                    <a href="/user/edit/{{ $user->id }}" class="btn btn-primary">Edit</a>
                    <a href="/user/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
