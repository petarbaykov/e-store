@extends('layout.profile')


@section('profile-content')
<div class="col-md-6">
	<div class="card">
		<div class="card-content">
	        <form method="post" action="{{asset('admin/save-category')}}">
	        	{{csrf_field()}}
	        	Име
	           	<input type="text" name="name">
	           	Родите
	           	<select name="parent">
	           		<option value="null">none</option>
	           		<option value="1">Optiom 1</option>
	           	</select>
	           	<textarea name="description">Описание</textarea>

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