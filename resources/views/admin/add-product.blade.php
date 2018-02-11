@extends('layout.profile')


@section('profile-content')

<div class="card">
    <div class="card-content">
              @if(Session::has('msg'))
                <div class="alert alert-success">
                   {{Session::get('msg')}}
                </div>
              @endif
              <form class="" action="add-product" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                    
                   
                    <div class="form-group label-floating">
                        <label class="control-label">Product name</label>
                        <input type="text" class="form-control" name="product_name" value="" >
                    </div>
                 
                    <div class="form-group label-floating">
                        <label class="control-label">Product price</label>
                        <input type="text" class="form-control" name="product_price" value="" >
                 
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Product description</label>
                        <input type="text" class="form-control" name="product_description" value="" >
                 
                    </div>
                     <div class="form-group label-floating">
                        <label class="control-label">Product category</label>
                        <select class="form-control" name="category_id" >
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class=" label-floating">
                      <label class="control-label">Product image</label>
                       <input type="file" class="" name="product_image" value="">
                    </div>
                  <div class="">
                    <button type="submit" class="btn btn-primary" name="button">Save</button>
                  </div>
                  <div class="clearfix"></div>
              </form>

  </div>

</div>
@endsection
