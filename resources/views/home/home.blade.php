@extends('layout.app')
@section('content')
<div class="container">
<h1>Look at our products</h1>
@foreach($products as $product)
  <div class="card" style="">
  <img class="card-img-top" src='{{asset("product-images/$product->product_image")}}' alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">{{$product->product_name}}</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="#" class="card-link" id="cart{{$product->id}}" onclick="shop.addCart(this,'{{$product->id}}')">Add to Cart</a>
  </div>
</div>
@endforeach
</div>
@endsection
