@extends('layout.app')

@section('content')
    <h1>Reply Command</h1>

    <a href="/reply-command/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>User id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        @foreach ($replyCommands as $replyCommand)
            <tr>
                <td>{{ $replyCommand->id }}</td>
                <td>{{ $replyCommand->user_id }}</td>
                <td>{{ $replyCommand->first_name }}</td>
                <td>{{ $replyCommand->last_name }}</td>
                <td>{{ $replyCommand->subject }}</td>
                <td>{{ $replyCommand->message }}</td>
                <td>
                    <a href="/reply-command/edit/{{ $replyCommand->id }}" class="btn btn-primary">Edit</a>
                    <a href="/reply-command/delete/{{ $replyCommand->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
