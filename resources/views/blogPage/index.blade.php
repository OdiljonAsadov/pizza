@extends('layout.app')

@section('content')
    <h1>Blogs</h1>

    <a href="/blog/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>BlogCategpry id</th>
            <th>Name</th>
            <th>Date</th>
            <th>Image</th>
            <th>Description</th>
            <th>Summernote</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->category->name ?? 'NA' }}</td>
                <td>{{ $blog->name }}</td>
                <td>{{ $blog->date }}</td>
                <td> <img src="{{ $blog->image }}" alt="" style="height: 120px; width: 150px;"></td>
                <td>{{ $blog->description }}</td>
                <td>{{ $blog->summernote }}</td>

                <td>
                    {{-- <a href="/blog/show/{{ $blog->id }}" class="btn btn-primary">Show</a> --}}
                    <a href="/blog/edit/{{ $blog->id }}" class="btn btn-primary">Edit</a>
                    <a href="/blog/delete/{{ $blog->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
