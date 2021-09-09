@extends('layout.app')

@section('content')
    <h1>Categories</h1>

    <a href="/category/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>

                <td>
                    <a href="/category/edit/{{ $category->id }}" class="btn btn-primary">Edit</a>
                    <a href="/category/delete/{{ $category->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
