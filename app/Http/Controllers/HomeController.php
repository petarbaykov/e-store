<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Products;
class HomeController extends BaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
        $products = $this->products->getAllProducts();
      
        return view('home.home')->with(['products'=>$products]);
    }
}
