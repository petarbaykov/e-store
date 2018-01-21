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
}
