@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-11" style="margin-left: 0vw; margin-top: -2vh; height: 78vh">
        <div class="card-header" style="width: 100.5%; margin-left: 0px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/product/add" method="post" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cars">Category Id:</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->id }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="cars">Category Id:</label>
                                <select class="form-control" name="category_name" id="category_name">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                        </div>
                        
                        <label>Image</label>
                        <div></div>
                        <input type="file" name="image">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="price">
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description" cols="30" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Summernote</label>
                            <textarea class="form-control" name="summernote" cols="30" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
@endsection
