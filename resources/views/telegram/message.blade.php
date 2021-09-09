@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-11" style="margin-left: 0vw; margin-top: -2vh; height: 78vh">
        <div class="card-header" style="width: 100.5%; margin-left: 0px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form action="{{ url('/send-message') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter your query" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
@endsection
