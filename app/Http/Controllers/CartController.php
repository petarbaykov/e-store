<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use \App\Mail\OrderShipped;
use DB;
class CartController extends BaseController
{
    protected $orders = null;
    public function __construct(){
        $this->orders = new \App\Orders();
        parent::__construct();
    }
    function addToCart($id){
        $product = $this->products->getProductById($id);
        Session::push('cart',$product);
        return json_encode($product);
    }
    function checkout(){
        Session::put('checkout',true);
        if(!Auth::check()){
            return redirect('login');
        }
        
        return view('home.checkout');
    }

    public function getCart(){
        return view('home.cart');
    }


    public function saveOrder(Request $request){
        $dataOrder = [
            'user_id'=>Auth::user()->id,
            'products'=>json_encode(Session::get('cart')),
            'status'=>'received',
            'ordered_data'=>time()
        ];
        
        $this->orders->insertOrder($dataOrder);
        try{
            \Mail::to(Auth::user()->email)->send(new OrderShipped());
        }catch(\Exception $ex){
            var_dump($ex);
        }
        
    }

    public function postUserPaymentInfo(Request $request){
        $data = $request->except('_token');
        
        $user_payment_info =  DB::table('user-payment-info')->where('user_id',Auth::user()->id)->first();
        if($user_payment_info){
             DB::table('user-payment-info')->where('user_id',Auth::user()->id)->update(['user_info'=>json_encode($data)]);
        }else{
             DB::table('user-payment-info')->insert(['user_id'=>Auth::user()->id,'user_info'=>json_encode($data)]);
        }
       

        return redirect()->back();
    }
}
