@extends('layout.app')
@section('content')

<div><a class="btn btn-primary" style="width: 150px" href="/orders"> Back</a></div>
    <div class="card card-primary col-md-6" style="margin-left: 15vw; margin-top: -6vh; height: 73vh">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Edit Order</h3>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($orders as $order)
            <form action="/orders/edit/{{ $order->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="phone" class="col-4">User Id</label>
                        <input type="number" class="col-8 form-control" id="user_id" name="user_id"
                        value="{{ $order->user_id }}">
                    </div>
                    <div class="form-group row">
                        <label for="product_id" class="col-4">Product Id</label>
                        <input type="number" class="col-8 form-control" id="product_id" name="product_id"
                        value="{{ $order->product_id }}">
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-4">Product name</label>
                        <input type="text" class="col-8 form-control" id="product_name" name="product_name"
                        value="{{ $order->product_name }}">
                    </div>
                    <div class="form-group row">
                        <label for="count" class="col-4">Count</label>
                        <input type="number" class="col-8 form-control" id="count" name="count"
                        value="{{ $order->count }}">
                    </div>
                    <div class="form-group row">
                        <label for="all_price" class="col-4">All price</label>
                        <input type="number" class="col-8 form-control" id="all_price" name="all_price"
                        value="{{ $order->all_price }}">
                    </div>
                    {{-- <div class="form-group row">
                        <label for="lang" class="col-4">Lang</label>
                        <input type="text" class="col-8 form-control" id="lang" name="lang">
                    </div> --}}
                </div>
                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Edit</button>
            </form>
        @endforeach
    </div>
@endsection