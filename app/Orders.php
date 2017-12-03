<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Orders extends Model
{
    protected $table = 'orders';


    public function insertOrder($data){
        DB::table('orders')->insert($data);
    }
}
