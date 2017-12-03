<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Products extends Model
{
    protected $table = 'products';

    public function getAllProducts(){
       return DB::table($this->table)->get();
    }

    public function getProductById($id){
        return DB::table($this->table)->where('id',$id)->first();
    }
}
