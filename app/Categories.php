<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Categories extends Model
{
    protected $table = "categories";


     public function getAllCategories(){
    	return DB::table($this->table)->rightJoin($this->table.' as cat1','cat1.parent','=',$this->table.'.id')->select('cat1.*',$this->table.'.name as parent_name')->get();

    }

    public function getCategoriesTree($categories){
    	$childs = [];
    	foreach ($categories as &$cat) {
    		$childs[$cat->parent][] = &$cat;
    		unset($cat);
    	}
    	foreach ($categories as &$cat) {
    		if(isset($childs[$cat->id])){
    			$cat->childs = $childs[$cat->id];
    		}

    	}
    	return $childs;
    }
}

