<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
class AdminController extends BaseController
{
    public function __construct(){
      parent::__construct();
      $this->middleware('auth');
    }

    function getAddProduct(){
      return view('admin.add-product');
    }
    function postProduct(Request $request){
        $product = new Product();
        $last_id = Product::orderby('id', 'desc')->first();
        if($last_id != ""){
          $id = $last_id->id + 1;
        }else{
          $id = 1;
        }
        $product->product_name = $request['product_name'];
        $product->product_price = $request['product_price'];
        $product->product_description = $request['product_description'];
        $file = Input::file('product_image');
        $image =$file->getClientOriginalName();
        $filename;
        if(Input::hasFile('product_image')){
          $extension  = $file->getClientOriginalExtension();
          $filename = "product" .$id. ".".$extension;
          $path = public_path('product-images/',$filename);
           if(Input::file('product_image')->move(base_path() . '/public/product-images/', $filename)){

           }
        }
        $product->product_image = $filename;
        $product->save();

    }
}
