@extends('layout.profile')


@section('profile-content')
<div class="col-md-6">
	<div class="card">
		<div class="card-content">
			 @if(Session::has('msg'))
                <div class="alert alert-success">
                   {{Session::get('msg')}}
                </div>
              @endif
	        <form method="post" action="{{asset('admin/save-category')}}">
	        	{{csrf_field()}}
	        	<div class="form-group label-floating">
                    <label class="control-label">Имеe</label>
                    <input type="text" class="form-control" name="name" value="" >
                </div>
	        	
	           	<div class="form-group label-floating">
                    <label class="control-label">Родител</label>
                    <select class="form-control" name="parent" >
                    	<option value="0">Без родител</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Описаниеn</label>
                    <textarea name="description" class="form-control"></textarea>
                   
             
                </div>
	           

	           	<button type="submit" class="btn btn-primary">Запази</button>
	        </form>
	    </div>
	</div>
</div>
<div class="col-md-6">
	<div class="card">
		<div class="card-content">
	      Категории
	    </div>
	</div>
</div>
@endsection