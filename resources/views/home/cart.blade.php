@extends('layout.app')

@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
            </div>
    @if(Session::has('cart'))
        
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description"></td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Session::get('cart') as $product)
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img style="width:100px;" src="{{asset('product-images/'.$product->product_image)}}" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">{{$product->product_name}}</a></h4>
                                       
                                    </td>
                                    <td class="cart_price">
                                        <p>${{$product->product_price}}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up" href=""> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                            <a class="cart_quantity_down" href=""> - </a>
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">${{$product->product_price}}</p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                    </table>
                </div>
            
 
            
            
      
    @else
        <p>Your cart is empty!</p>

    @endif

        </div>
    </section>
                   
@endsection