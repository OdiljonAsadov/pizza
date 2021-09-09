@extends('layout.app')

@section('content')
    <h1>Заявки</h1>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>User id</th>
            <th>Product id</th>
            <th>Product name</th>
            <th>Count</th>
            <th>All price</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->count }}</td>
                <td>{{ $order->all_price }}</td>
                <td>
                    <a href="/orders/edit/{{ $order->id }}" class="btn btn-primary">Edit</a>
                    <a href="/orders/delete/{{ $order->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
