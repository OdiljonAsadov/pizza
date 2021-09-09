@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-11" style="margin-left: 0vw; margin-top: -2vh; height: 78vh">
        <div class="card-header" style="width: 100.5%; margin-left: 0px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form action="{{ url('/store-photo') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="custom-file">
                <input type="file" id="file" name="file" class="custom-file-input">
                <label class="custom-file-label" for="file">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
@endsection
