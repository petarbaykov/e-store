<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
class BaseController extends Controller
{
    protected $products = null;
    public function __construct(){

        $this->products = new Products();
        
    }
}
