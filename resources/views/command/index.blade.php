@extends('layout.app')

@section('content')
    <h1>Categories</h1>

    <a href="/command/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>User id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        @foreach ($commands as $command)
            <tr>
                <td>{{ $command->id }}</td>
                <td>{{ $command->user->id ?? 'NA' }}</td>
                <td>{{ $command->first_name }}</td>
                <td>{{ $command->last_name }}</td>
                <td>{{ $command->subject }}</td>
                <td>{{ $command->message }}</td>
                <td>
                    <a href="/command/edit/{{ $command->id }}" class="btn btn-primary">Edit</a>
                    <a href="/command/delete/{{ $command->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
