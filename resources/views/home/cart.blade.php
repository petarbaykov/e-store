@extends('layout.app')

@section('content')
    @if(Session::has('cart'))
        <h1>Your Cart</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; $total = 0;?>
                @foreach(Session::get('cart') as $product)
                    <tr>
                        <th scope="row">{{$counter}}</th>
                        <td>{{$product->product_name}}</td>
                        <td>1</td>
                        <td>{{$product->product_price}}</td>
                    </tr>
                    <?php $counter++; $total += $product->product_price; ?>
               @endforeach
               <tr>
                <td colspan="3" class="right"></td>
                <td>Total : {{$total}}</td>
               </tr>
            </tbody>
        </table>
        <a href="{{'/checkout'}}" class="btn btn-success pull-right">Proceed to checkout</a>
    @endif
@endsection