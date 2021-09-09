@extends('layout.app')

@section('content')
    <h1>Products</h1>

    <a href="/product/add" class="btn btn-success" style="margin-right: 20px; margin-bottom: 20px;">Create</a>


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('fail'))
        <div class="alert alert-success">{{ session('fail') }}</div>
    @endif

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Category Id</th>
            <th>Category Name</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
            <th>Summernote</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->category->id ?? 'NA' }}</td>
                <td>{{ $product->category->name ?? 'NA' }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td> <img src="{{ $product->image }}" alt="" style="height: 120px; width: 150px;"></td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->summernote }}</td>

                <td>
                    <a href="/product/edit/{{ $product->id }}" class="btn btn-primary">Edit</a>
                    <a href="/product/delete/{{ $product->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
