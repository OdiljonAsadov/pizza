@extends('layout.app')

@section('content')
    <h1>Description of cafe</h1>

    <a href="/blogCategory/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($blogCategories as $blogCategory)
            <tr>
                <td>{{ $blogCategory->id }}</td>
                <td>{{ $blogCategory->name }}</td>
                {{-- <td>{{ $count }}</td> --}}
                <td>{{ $bizningOvqatlar }}</td>

                <td>
                    <a href="/blogCategory/edit/{{ $blogCategory->id }}" class="btn btn-primary">Edit</a>
                    <a href="/blogCategory/delete/{{ $blogCategory->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
