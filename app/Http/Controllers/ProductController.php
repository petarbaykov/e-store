<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use DB;
class ProductController extends BaseController
{
    //
    public function __construct()
    {
        parent::__construct();
    }

    public function get($id){
    	$product = DB::table('products')->where('id',$id)->first();

    	return view('home.product')->with(['product'=>$product]);
    }

    public function getCategory($name){

    	$products_in_category = DB::table('products')
    	->leftJoin('categories','categories.id','=','products.category_id')
    	->where('categories.name',$name)
        ->select('products.*','categories.name')
    	->get();
    	return view('home.products')->with(['products'=>$products_in_category]);
    }
}
