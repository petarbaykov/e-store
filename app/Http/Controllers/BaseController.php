<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use \App\Categories;
use View;
class BaseController extends Controller
{
    protected $products = null;
    protected $categories = null;
    public function __construct(){

        $this->products = new Products();
        $this->categories = new Categories();
        $this->categories = $this->categories->getAllCategories()->all();
        View::share('categories',$this->categories);
    }
}
