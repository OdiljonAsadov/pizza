@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-8" style="margin-left: 15vw; margin-top: -2vh; height: 82vh">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/chefs/add" method="post" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <div class="card-body">
                <label>Image</label>
                <div></div>
                <input type="file" name="image">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name of profession</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name_profession">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="4"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: -20px 10px 15px 20px">Добавить</button>
        </form>
    </div>
@endsection
