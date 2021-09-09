@extends('layout.app')
@section('content')

<div><a class="btn btn-primary" style="width: 150px" href="/product">Back</a></div>
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
        @foreach ($products as $product)
            <form action="/product/edit/{{ $product->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Id</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="category_id" value="{{ $product->category_id }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="category_name" value="{{ $product->category_name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ $product->price }}">
                            </div>
                            <label>Image</label>
                            <div></div>
                            <input type="file" name="image" value="{{ $product->image }}">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="4">{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Summernote</label>
                                <textarea class="form-control" name="summernote" cols="30" rows="4">{{ $product->summernote }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
            </form>
        @endforeach
    </div>
@endsection