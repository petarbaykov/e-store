@extends('layout.app')
@section('content')
    <div class="add-form">
            <form class="" action="add-product" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group">
                  <label for="">Product name</label>
                  <input type="text" class="form-control" name="product_name" value="">
                </div>
                <div class="input-group">
                  <label for="">Product price</label>
                  <input type="text" class="form-control" name="product_price" value="">
                </div>
                <div class="input-group">
                  <label for="">Product description</label>
                  <input type="text" class="form-control" name="product_description" value="">
                </div>
                <div class="input-group">
                  <label for="">Product image</label>
                  <input type="file" class="form-control" name="product_image" value="">
                </div>
                <div class="">
                  <button type="submit" name="button">Save</button>
                </div>
            </form>
    </div>
@endsection
