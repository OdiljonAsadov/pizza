@extends('layout.app')

@section('content')
    <h1>Messages</h1>

    {{-- <a href="/messages/add" class="btn btn-success" style="margin-right: 20px">Create</a> --}}


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        @foreach ($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->user_id }}</td>
                <td>{{ $message->first_name }}</td>
                <td>{{ $message->last_name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->subject }}</td>
                <td>{{ $message->message }}</td>

                <td>
                    @if ($message->status == '0')
                       <a href="/messages/{{ $message->id }}" class="btn btn-success">read</a>
                    @endif
                    {{-- <a href="/messages/edit/{{ $message->id }}" class="btn btn-success">Read</a> --}}
                    <a href="/messages/delete/{{ $message->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
