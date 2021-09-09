@extends('layout.app')
@section('content')

<div><a class="btn btn-primary" style="width: 150px" href="/messages"> Back</a></div>
    <div class="card card-primary col-md-8" style="margin-left: 15vw; margin-top: -6vh; height: 82vh">
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
        @foreach ($messages as $message)
            <form action="/messages/edit/{{ $message->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-4">user_id</label>
                        <input type="text" class="col-8 form-control" id="user_id" name="user_id"
                        value="{{ $message->user_id }}">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-4">Fisrt Name</label>
                        <input type="text" class="col-8 form-control" id="first_name" name="first_name"
                        value="{{ $message->first_name }}">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-4">Last Name</label>
                        <input type="text" class="col-8 form-control" id="last_name" name="last_name"
                        value="{{ $message->last_name }}">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-4">Email</label>
                        <input type="text" class="col-8 form-control" id="email" name="email"
                        value="{{ $message->email }}">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-4">Subject</label>
                        <input type="text" class="col-8 form-control" id="subject" name="subject"
                        value="{{ $message->subject }}">
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-4">Message</label>
                        <textarea class="form-control" name="message" cols="25" rows="3">{{ $message->message }}</textarea>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary" style="margin: 0px 10px 15px 20px">Edit</button>
            </form>
        @endforeach
    </div>
@endsection